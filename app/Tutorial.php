<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $fillable = [
        'judul', 'thumbnail', 'link','deskripsi','kategori_id','active'
    ];

    public function kategoriTutorial()
    {
        return $this->belongsTo('App\KategoriTutorial', 'kategori_id');
    }
}
