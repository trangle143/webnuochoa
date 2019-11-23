<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    protected $table="khachhang";
    public $timestamps = false;
    protected $fillable=[
    	'id',
    	'ten',
    	'gioitinh',
    	'diachi',
    	'sdt',
    	'ghichu',
        'thanhtoan'
    ];

    public function donhang(){
    	return $this->hasMany('App\Donhang', 'khachhang_id', 'id');
    }
}
