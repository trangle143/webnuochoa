<?php

namespace App\Http\Controllers;
use App\Khachhang;
use Illuminate\Http\Request;
use Cart;
use App\Chitietdonhang;
use App\Donhang;

class CustomerController extends Controller
{
    public function add(Request $Request)
    {
    	$khachhang = Khachhang::create($Request->all());
    	$id = $khachhang->id;
    	$ten = $Request->ten;
    	$gioitinh = $Request->gioitinh;
    	$sdt = $Request->sdt;
    	$diachi = $Request->diachi;
    	$ghichu = $Request->ghichu;
    	return view('frontend.giohang.xacnhan', compact('id','ten','gioitinh','sdt','diachi','ghichu'));
    }

    public function bill(Request $Request){
    		$donhang = new Donhang;
    		$donhang->khachhang_id = $Request->id;
    		$donhang->ngaydathang = date('Y-m-d');
    		$donhang->tongtien = Cart::getSubTotal();
    		$donhang->ghichu = $Request->ghichu;
    		$donhang->save();

    		$cart= Cart::getContent();
    		foreach($cart as $c)
    		{
    			$chitiet = new Chitietdonhang;
    			$chitiet->donhang_id = $donhang->id;
    			$chitiet->sanpham_id = $c->id;
    			$chitiet->quantily = $c->quantity;
    			$chitiet->dongia = $c->price;
    			$totalmoney = $c->price*$c->quantity;
    			$chitiet->tongtien = $totalmoney;
    			$chitiet->save();
    		}
    		Cart::clear();

    		return redirect('thanhcong');
    }
}
