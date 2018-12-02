<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = [
        'acara_id','nim','email','nama','prodi','semester',
        'jenis_kelamin','no_hp','alamat','kategori','active'
    ];

    public function acara()
    {
        return $this->belongsTo('App\Acara');
    }
}
