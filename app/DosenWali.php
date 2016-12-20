<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenWali extends Model
{
    //
	protected $fillable = ['dosen_id','mahasiswa_id'];

    public function data_dosens(){
    	return $this->belongsTo('DataDosen');
    }

     public function data_mahasiswas(){
    	return $this->belongsTo('DataMahasiswa');
    }

}
