<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
   protected $table="donhang";
   public $timestamps = false;


   public function chitietdonhang()
   {
   	return $this->hasMany('App\Chitietdonhang', 'donhang_id', 'id');
   }
   
   public function khachhang()
   {
   	return $this->belongsTo('App\Khachhang');
   }
}
