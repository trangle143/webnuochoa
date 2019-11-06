<?php

namespace App\Http\Controllers;
use App\Thuonghieu;
use Illuminate\Http\Request;

class ThuonghieuController extends Controller
{
    public function index()
    {
        $thuonghieu = Thuonghieu::all();
        return view('frontend.thuonghieu.index', compact('thuonghieu'));
    }
    public function sanpham($id)
    {
    	$thuonghieu = Thuonghieu::find($id);
    	return view('frontend.thuonghieu.sanpham', compact('thuonghieu'));
    }
    public function getThem()
    {
    	return view('frontend.thuonghieu.them');
    }
    public function postThem(Request $Request)
    {
    	$thuonghieu = new Thuonghieu;
    	$thuonghieu->ten = $Request->ten;
    	$thuonghieu->loai_id = $Request->loai_id;
        if($Request->hasfile('hinhanh'))
        {
            $file = $Request->file('hinhanh');
            $name = $file->getClientOriginalName();
            $hinhanh = Str::random(4)."_".$name;
            while(file_exists("image/nuochoa_nu".$hinhanh)){
                $hinh = Str::random(4)."_".$name;
            }
            $file->move("image/nuochoa_nu",$hinhanh);
            $thuonghieu->hinhanh = $hinhanh;
        }
        else
        {
            $thuonghieu->hinhanh = "";
        }
    	$thuonghieu->save();

    	return back();
    }

    public function getSua($id)
    {
        $thuonghieu = Thuonghieu::find($id);
        return view('frontend.thuonghieu.sua', compact('thuonghieu'));
    }
    public function postSua(Request $Request, $id)
    {
        $thuonghieu = Thuonghieu::find($id);
        $thuonghieu->ten = $Request->ten;
        $thuonghieu->loai_id = $Request->loai_id;
        if($Request->hasfile('hinhanh'))
        {
            $file = $Request->file('hinhanh');
            $name = $file->getClientOriginalName();
            $hinhanh = Str::random(4)."_".$name;
            while(file_exists("image/nuochoa_nu".$hinhanh)){
                $hinh = Str::random(4)."_".$name;
            }
            $file->move("image/nuochoa_nu",$hinhanh);
            $thuonghieu->hinhanh = $hinhanh;
        }
        
        $thuonghieu->save();
        return back();
    }

    public function getXoa($id)
    {
        $thuonghieu = Thuonghieu::find($id);
        $thuonghieu->delete();
        return back();
    }
}
