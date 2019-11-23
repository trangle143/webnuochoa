<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binhluan extends Model
{
    protected $table="binhluan";
    public $timestamps = true;


    public function sanpham()
    {
    	return $this->belongsto('App\Sanpham');
    }
    
    public function users()
    {
    	return $this->belongsto('App\User','user_id');
    }
}
