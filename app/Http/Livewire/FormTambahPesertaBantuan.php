<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Penduduk;
use App\DataBantuan;
use App\Bantuan;

class FormTambahPesertaBantuan extends Component
{
    public $penduduk;
    public $no_peserta;
    public $keterangan;
    public $bantuan;

    public $rules = [
      'penduduk' => 'required',
      'no_peserta' => 'required',
      'keterangan' => 'required'
    ];

    public function mount(Bantuan $bantuan)
    {
        $this->bantuan = $bantuan;
    }

    public function submit()
    {
        $data = $this->validate();

        DataBantuan::create([
            'bantuan_id' => $this->bantuan->id,
            'panduduk_id' => $this->penduduk,
            'no_peserta' => $this->no_peserta,
            'keterangan' => $this->keterangan
        ]);

        return redirect()->route('bantuan.show', $this->bantuan);
    }
    public function render()
    {
        $warga = Penduduk::orderBy('nama')->get();
        return view('livewire.form-tambah-peserta-bantuan', compact('warga'));
    }
}
