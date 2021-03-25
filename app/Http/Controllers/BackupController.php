<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BackupController extends Controller
{
    public function index()
    {
        return view('backup.index');
    }

    public function download()
    {
        return response()->download(config('database.connections.sqlite.database'));
    }

    public function restore(Request $request)
    {
        if ($request->hasFile('db')) {
            $request->file('db')->move(database_path(), 'database.sqlite');

            return redirect()->back();
        }
    }


}
