<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Penduduk;

class FormPenduduk extends Component
{
    public $no_kk;
    public $nik;
    public $nama_lengkap;
    public $jenis_kelamin;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $agama;
    public $pendidikan;
    public $pekerjaan;
    public $gol_darah;
    public $status_kawin;
    public $kewarganegaraan = "WNI";
    public $nik_ayah;
    public $nama_ayah;
    public $nik_ibu;
    public $nama_ibu;
    public $alamat;
    public $rt;
    public $rw;
    public $desa;
    public $kecamatan;
    public $provinsi;
    public $kabupaten;
    public $status;
    public $penduduk;

    public $rules = [
        'no_kk' => 'required|numeric',
        'nik' => 'required|numeric',
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'agama' => 'required',
        'pendidikan' => 'required',
        'pekerjaan' => 'required',
        'gol_darah' => 'nullable',
        'status_kawin' => 'required',
        'kewarganegaraan' => 'required',
        'nik_ayah' => 'required',
        'nama_ayah' => 'required',
        'nik_ibu' => 'required',
        'nama_ibu' => 'required',
        'alamat' => 'required',
        'rt' => 'required',
        'rw' => 'required',
        'desa' => 'required',
        'kecamatan' => 'required',
        'kabupaten' => 'required',
        'provinsi' => 'required',
        'status' => 'required'
    ];

    public function mount($penduduk = null)
    {
        if($penduduk instanceof Penduduk) {
            foreach($penduduk->getAttributes() as $key => $value) {
                $this->{$key} = $value;
            }
        }

        // use $attribute

    }

    public function submit()
    {
        $data = $this->validate();
        if ($this->penduduk instanceof Penduduk) {
            $this->penduduk->update($data);
        }else{
            Penduduk::create($data);
        }

        session()->flash("success", "Berhasil Menyimpan Data");
        return redirect()->route('penduduk.index');
    }

    public function render()
    {
        return view('livewire.form-penduduk');
    }
}
