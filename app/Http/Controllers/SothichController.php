<?php

namespace App\Http\Controllers;
use App\Sothich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SothichController extends Controller
{
    public function index($id)
    {
    	$like = new Sothich;
    	$like->sanpham_id = $id;
    	$like->user_id = Auth::user()->id;
    	// dd($like->toArray());
    	$like->save();
    	return back();
    }
}
