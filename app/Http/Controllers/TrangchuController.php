<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaisanpham;
use App\Thuonghieu;	
use App\Sothich;
use App\sanpham;
use Illuminate\Support\Facades\Auth;

class TrangchuController extends Controller
{
    public function index(){
    	$loai = Loaisanpham::with('thuonghieu')->get();
    	$thuonghieu = Thuonghieu::with('sanpham')->get();
    	$thuonghieu1 = Thuonghieu::all();

    	$sanpham = Sanpham::with('sothich')->get();
    	// dd($sanpham->toArray());
    	if(isset(Auth::user()->name)){
	    	$sothich = Sothich::where('user_id',Auth::user()->id)->get();
	    	return view('index', compact('loai','thuonghieu','thuonghieu1','sothich'));
	    	// dd($sothich->toArray());
    	}
    	
    	return view('index', compact('loai','thuonghieu','thuonghieu1'));
    	
    }
}
