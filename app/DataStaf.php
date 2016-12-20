<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataStaf extends Model
{
    //
    protected $fillable = ['nip','nama','status','user_id','prodi_id'];

    public function prodis(){
    	return $this->belongsTo('Prodi');
    }

    public function users(){
    	return $this->belongsTo('User');
    }
}
