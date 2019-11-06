<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function getDangnhapAdmin()
    {
    	return view('frontend.admin.dangnhap');
    }
    public function postDangnhapAdmin(Request $request)
    {
    	$this->validate($request,[
    		'email'=>'required',
    		'password'=>'required|min:3|max:32'],[
    		'email.required'=>'Ban chua nhap Email',
    		'password.min'=>'Password khong duong nho hon 3 ky tu',
    		'Password.max'=>'Password khong duoc lon hon 32 ky tu'
    		]);
    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    	{
    		return redirect('frontend.giohang');
    	}
    	else
    	{
    		return redirect('frontend.admin.dangnhap')->with('thongbao','dang nhap thanh cong');
    	}
    }
}
