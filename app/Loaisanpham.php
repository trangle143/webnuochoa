<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaisanpham extends Model
{
    protected $table="loaisanpham";
    
    public function thuonghieu(){
    	return $this->hasMany('App\Thuonghieu', 'loai_id', 'id');
    }

    public function sanpham(){
    	return $this->hasManyThrough('App\Sanpham', 'App\Thuonghieu', 'loai_id', 'thuonghieu_id', 'id');
    }
}
