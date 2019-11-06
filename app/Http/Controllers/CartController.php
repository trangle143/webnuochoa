<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Sanpham;

class CartController extends Controller
{
    public function add(Request $Request){
    	$sanpham = Sanpham::find($Request->id);
    	Cart::add($sanpham->id, $sanpham->ten, $sanpham->price, 1, $sanpham['hinhanh'], array());
    		// dd($cart= Cart::getContent());

    	return back()->with('success',"$sanpham->ten Đã được thêm vào giỏ hàng");

    }

    public function clear(){
    	Cart::clear();

    	return back();
    }

    public function remove(Request $Request){
        $id = $Request->id;
        Cart::remove($id); 
        return back();
    }
}
