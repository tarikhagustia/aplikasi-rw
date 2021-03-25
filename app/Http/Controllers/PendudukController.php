<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\PendudukDataTable;
use App\Penduduk;

class PendudukController extends Controller
{
    public function index(PendudukDataTable $dataTable)
    {
        return $dataTable->render('penduduk.index');
    }

    public function create()
    {
        return view('penduduk.create');
    }

    public function show(Penduduk $penduduk)
    {
        return view('penduduk.show', compact('penduduk'));
    }

    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit', compact('penduduk'));
    }

    public function destroy(Penduduk $penduduk) {
        $penduduk->delete();
        return redirect()->route('penduduk.index');
    }
}
