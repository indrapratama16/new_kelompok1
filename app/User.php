<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function fasilitas_prodis(){
        return $this->hasMany('FasilitasProdi');
    }

    public function data_stafs(){
        return $this->hasMany('DataStaf');
    }

    public function prodis(){
        return $this->hasMany('Prodi');
    }

    public function data_mahasiswas(){
        return $this->hasMany('DataMahasiswa');
    }

    public function matakuliahs(){
        return $this->hasMany('Matakuliah');
    }

    public function data_dosens(){
        return $this->hasMany('DataDosen');
    }

    public function jadwal_matakuliahs(){
        return $this->hasMany('JadwalMatakuliah');
    }


}
