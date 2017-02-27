<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
	protected $table = "siswa";
	protected $fillable = ['nis','nama', 'alamat'];
	public $timestamps = false;
}

