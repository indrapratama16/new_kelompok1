<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalMatakuliah extends Model
{
    //

    protected $fillable = ['hari','dosen_id','matakuliah_id'];

    public function data_dosens(){
    	return $this->belongsTo('DataDosen');
    }

    public function matakuliahs(){
    	return $this->belongsTo('Matakuliah');
    }

     public function users(){
    	return $this->belongsTo('User');
    }
}
