<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataDosen extends Model
{
    //
    protected $fillable = ['nip','nama','status','user_id','prodi_id'];

    public function jadwal_matakuliahs(){
    	return $this->hasMany('JadwalMatakuliah');
    }

    public function dosen_walis(){
    	return $this->hasMany('DosenWali');
    }

    public function prodis(){
    	return $this->belongsTo('Prodi');
    }

    public function users(){
    	return $this->belongsTo('User');
    }
}
 