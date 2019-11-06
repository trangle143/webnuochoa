<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table="sanpham";
    public $timestamps = false;
    public function thuonghieu(){
    	return $this->belongsTo('App\Thuonghieu', 'thuonghieu_id', 'id');
    }
    public function chitietdonhang(){
    	return $this->hasMany('App\Chitietdonhang', 'sanpham_id', 'id');
    }
}
