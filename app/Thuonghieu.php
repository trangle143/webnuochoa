<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thuonghieu extends Model
{
    protected $table="thuonghieu";
    public $timestamps = false;

    public function loaisanpham(){
    	return $this->belongsTo('App\Loaisanpham','loai_id');
    }

    public function sanpham(){
    	return $this->hasMany('App\Sanpham', 'thuonghieu_id', 'id');
    }
}
