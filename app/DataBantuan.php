<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBantuan extends Model
{
    protected $guarded = [];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'panduduk_id');
    }
}
