<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chitietdonhang extends Model
{
    protected $table="chitietdonhang";
    public $timestamps = false;


    public function sanpham()
    {
    	return $this->belongsto('App\Sanpham');
    }
    
    public function donhang()
    {
    	return $this->belongsto('App\Donhang');
    }
}

