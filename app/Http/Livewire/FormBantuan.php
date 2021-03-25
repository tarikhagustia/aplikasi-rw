<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Bantuan;
use App\Penduduk;

class FormBantuan extends Component
{
    public $nama;
    public $keterangan;
    public $asal_dana;
    public $tanggal_mulai;
    public $tanggal_selesai;
    public $status;
    public $bantuan;

    public $rules = [
      'nama' => 'required',
      'keterangan' => 'required',
      'asal_dana' => 'required',
      'tanggal_mulai' => 'required',
      'tanggal_selesai' => 'required',
      'status' => 'required'
    ];

    public function mount($bantuan = null)
    {
        if($bantuan instanceof Bantuan) {
            foreach($bantuan->getAttributes() as $key => $value) {
                $this->{$key} = $value;
            }
        }

        // use $attribute

    }

    public function submit()
    {
        $data = $this->validate();
        if ($this->bantuan instanceof Bantuan) {
            Bantuan::find($this->bantuan->id)->update($data);
        }else{
            Bantuan::create($data);
        }

        return redirect()->route('bantuan.index');
    }

    public function render()
    {
        return view('livewire.form-bantuan');
    }
}
