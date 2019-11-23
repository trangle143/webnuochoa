<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donhang;
use App\Sanpham;
use App\Khachhang;
use App\Chitietdonhang;

class PageController extends Controller
{
	public function donhang()
    {
    	$khach = Khachhang::with('donhang')->orderBy('id','desc')->get();
    	$chitiet = Chitietdonhang::all();
    	// dd($khach->toArray());
        return view('frontend.quanli.donhang',compact('khach','chitiet'));
    }

    public function chitiet($id)
    {
    	// id của khách và có id đơn hàng
    	$donhang = Donhang::findOrFail($id);
    	// dd($donhang->toArray());
    	$sanpham = Chitietdonhang::with('sanpham')->get();
    	// dd($sanpham->toArray());
    	return view('frontend.quanli.chitiet',compact('sanpham','donhang'));
    }
}
