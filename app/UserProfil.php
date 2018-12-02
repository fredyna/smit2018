<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfil extends Model
{
    protected $fillable = [
        'user_id', 'nim', 'no_hp','jenis_kelamin','prodi','semester','alamat'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}


