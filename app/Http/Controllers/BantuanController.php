<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\PendudukDataTable;
use App\Penduduk;
use App\DataTables\BantuanDataTable;
use App\Bantuan;
use App\DataBantuan;

class BantuanController extends Controller
{
    public function index(BantuanDataTable $dataTable)
    {
        return $dataTable->render('bantuan.index');
    }

    public function create()
    {
        return view('bantuan.create');
    }

    public function show(Bantuan $bantuan)
    {
        $bantuan->withCount('items');
        return view('bantuan.show', compact('bantuan'));
    }

    public function edit(Bantuan $bantuan)
    {
        return view('bantuan.edit', compact('bantuan'));
    }

    public function destroy(Bantuan $bantuan) {
        $bantuan->delete();
        return redirect()->route('bantuan.index');
    }

    public function tambahPeserta(Bantuan $bantuan)
    {
        return view('bantuan.tambah_peserta', compact('bantuan'));
    }

    public function hapusDataBantuan(DataBantuan $data)
    {
        $data->delete();
        return redirect()->back();
    }

}
