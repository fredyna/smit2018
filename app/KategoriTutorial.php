<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriTutorial extends Model
{
    protected $fillable = [
        'nama_kategori'
    ];

    public function tutorials()
    {
        return $this->hasMany('App\Tutorial', 'kategori_id');
    }
}
