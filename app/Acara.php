<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    protected $fillable = [
        'nama_acara','kategori','active','tanggal_acara'
    ];

    public function pesertas()
    {
        return $this->hasMany('App\Peserta');
    }
}
