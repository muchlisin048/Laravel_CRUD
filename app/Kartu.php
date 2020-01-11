<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kartu extends Model
{
    protected $table = 'kartu';
    protected $fillable = ['nama', 'no_kk', 'nik', 'alamat', 'agame', 'nomer', 'jenis_kelamin'];
}