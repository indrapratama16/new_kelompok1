<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    //
	protected $fillable = ['kode_prodi','nama_prodi','user_id'];

    public function data_dosens(){
    	return $this->hasMany('DataDosens');
    }

    public function data_mahasiswa(){
    	return $this->hasMany('DataMahasiswa');
    }

    public function data_stafs(){
    	return $this->hasMany('DataStaf');
    }

    public function fasilitas_prodis(){
    	return $this->hasMany('FasilitasProdi');
    }

     public function users(){
        return $this->belongsTo('User');
    }
}
