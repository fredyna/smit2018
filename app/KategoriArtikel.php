<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $fillable = [
        'nama_kategori'
    ];

    public function artikels()
    {
        return $this->hasMany('App\Artikel', 'kategori_id');
    }
}
