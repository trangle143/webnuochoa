<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Sanpham;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
class CartController extends Controller
{
    public function add(Request $Request){
    	$sanpham = Sanpham::find($Request->id);
    	Cart::add($sanpham->id, $sanpham->ten, $sanpham->price, 1, $sanpham['hinhanh'], $sanpham->giakhuyenmai, array());
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

    public function checkout($amount){
        return view('frontend.giohang.checkout',compact('amount'));
    }

    public function charge(Request $Request){
        // dd($Request->stripeToken);
        $charge = Stripe::charges()->create([
            'currency'=>'VND',
            'source' => $Request->stripeToken,
            'amount' => $Request->amount,
            'description'=>'Test from Laravel new app'
        ]);

        $chargeId = $charge['id'];

        if($chargeId){
            // save order in orders key
            // clearn cart
            Cart::clear();
            return redirect('thanhcong');
        }else{
            return redirect()->back();
        }
    }

    public function plus($id){
        Cart::update($id, array(
          'quantity' => 1, // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
        ));
        return back();
    }
    public function minus($id){
        Cart::update($id, array(
          'quantity' => -1, // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
        ));
        return back();
    }
}
