<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['nis','nama','jk','tanggal_lahir','alamat','kelas_id'];
    	public $timestamps = true;
}
	public function kelas(){
	return $this->belongsTo('App\kelas','kelas_id');
	}