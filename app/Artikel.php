<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul','thumbnail','deskripsi','kategori_id','active'
    ];

    public function kategoriArtikel()
    {
        return $this->belongsTo('App\KategoriArtikel', 'kategori_id');
    }
}
