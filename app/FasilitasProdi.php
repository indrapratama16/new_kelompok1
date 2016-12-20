<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasProdi extends Model
{
    //
    protected $fillable = ['nama','jumlah','user_id','prodi_id'];

     public function prodis(){
    	return $this->belongsTo('Prodi');
    }

     public function users(){
    	return $this->belongsTo('User');
    }


}
