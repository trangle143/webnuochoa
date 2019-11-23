<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sothich extends Model
{
    protected $table="sothich";
    public $timestamps = false;
    
    public function users(){
    	return $this->belongsTo('App\User');
    }
    public function sanpham(){
    	return $this->belongsTo('App\Sanpham');
    }
}
