<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    protected $guarded = [];
    protected $dates = [
      'tanggal_mulai', 'tanggal_selesai'
    ];

    public function items()
    {
        return $this->hasMany(DataBantuan::class, 'bantuan_id');
    }
}
