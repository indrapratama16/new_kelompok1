<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    //
	protected $fillable = ['nim','nama','semester','user_id','prodi_id'];

    public function prodis(){
    	return $this->belongsTo('Prodi');
    }

    public function users(){
    	return $this->belongsTo('User');
    }
}
