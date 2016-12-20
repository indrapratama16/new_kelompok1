<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    //
    protected $fillable = ['kode_mk','nama_mk','user_id'];

     public function jadwal_kuliahs(){
    	return $this->hasMany('JadwalMatakulliah');
    }

     public function users(){
    	return $this->belongsTo('User');
    }
}
