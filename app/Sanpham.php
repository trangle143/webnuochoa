<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table="sanpham";
    public $timestamps = false;
    public function thuonghieu()
    {
    	return $this->belongsTo('App\Thuonghieu', 'thuonghieu_id', 'id');
    }

    public function chitietdonhang()
    {
    	return $this->hasMany('App\Chitietdonhang', 'sanpham_id', 'id');
    }
    public function binhluan()
    {
        return $this->hasMany('App\Binhluan','sanpham_id','id');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function sothich()
    {
        return $this->belongsTo('App\Sothich');
    }

    public function hinh()
    {
        return $this->hasMany('App\Hinh', 'sp_id', 'id');
    }
}
