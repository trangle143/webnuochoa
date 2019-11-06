<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaisanpham;
use App\Thuonghieu;	

class TrangchuController extends Controller
{
    public function index(){
    	$loai = Loaisanpham::with('thuonghieu')->get();
    	$thuonghieu = Thuonghieu::with('sanpham')->get();
    	$thuonghieu1 = Thuonghieu::all();
    	return view('index', ['loai'=>$loai,'thuonghieu'=>$thuonghieu,'thuonghieu1'=>$thuonghieu1]);
    }
}
