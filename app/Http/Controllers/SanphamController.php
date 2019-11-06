<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Sanpham;
use App\Loaisanpham;
use App\Thuonghieu;

class SanphamController extends Controller
{
    public function index(){
    	$sanpham = Sanpham::all();
    	return view('sanpham', ['sanpham'=>$sanpham]);
    }


    public function show($id){
    	$loai = Loaisanpham::find($id);
    	return view('frontend.loai.loaisanpham', ['loai'=>$loai]);
    }

    

    public function sanpham($id)
    {
    	$sanpham = Sanpham::find($id);
    	return view('frontend.trangcon.chitietsanpham', compact('sanpham'));
    }

    public function quanli(){
        $sanpham = Sanpham::with('thuonghieu')->get();
        return view('frontend.quanli.sanpham', ['sanpham'=>$sanpham]);
    }

    public function getThem()
    {
        $thuonghieu = Thuonghieu::all();
        return view('frontend.quanli.them', compact('thuonghieu'));
    }

    public function postThem(Request $Request)
    {
        $sanpham = new Sanpham;
        $sanpham->ten =$Request->ten;
        $sanpham->thuonghieu_id =$Request->thuonghieu_id;
        $sanpham->mota =$Request->mota;
        $sanpham->tongtien =$Request->tongtien;
        $sanpham->giakhuyenmai =$Request->giakhuyenmai;
        $sanpham->soluong =$Request->soluong;
        if($Request->hasfile('hinhanh'))
        {
            $file = $Request->file('hinhanh');
            $name = $file->getClientOriginalName();
            $hinhanh = Str::random(4)."_".$name;
            while(file_exists("image/nuochoa_nu".$hinhanh)){
                $hinh = Str::random(4)."_".$name;
            }
            $file->move("image/nuochoa_nu",$hinhanh);
            $sanpham->hinhanh = $hinhanh;
        }
        else
        {
            $sanpham->hinhanh = "";
        }

        $sanpham->save();
        return back();
    }

    public function getSua($id)
    {
        $thuonghieu = Thuonghieu::all();
        $sanpham = Sanpham::find($id);
        return view('frontend.quanli.sua', compact('sanpham','thuonghieu'));
    }

    public function postSua(Request $Request,$id)
    {
        $sanpham = Sanpham::find($id);
        $sanpham->ten =$Request->ten;
        $sanpham->thuonghieu_id =$Request->thuonghieu_id;
        $sanpham->mota =$Request->mota;
        $sanpham->tongtien =$Request->tongtien;
        $sanpham->giakhuyenmai =$Request->giakhuyenmai;
        $sanpham->soluong =$Request->soluong;
        if($Request->hasfile('hinhanh'))
        {
            $file = $Request->file('hinhanh');
            $name = $file->getClientOriginalName();
            $hinhanh = Str::random(4)."_".$name;
            while(file_exists("image/nuochoa_nu".$hinhanh)){
                $hinh = Str::random(4)."_".$name;
            }
            $file->move("image/nuochoa_nu",$hinhanh);
            $sanpham->hinhanh = $hinhanh;
        }

        $sanpham->save();
        return back();
    }

    public function getXoa($id){
        $sanpham = Sanpham::find($id);
        $sanpham->delete();
        return back();
    }

   //public function giohang ()
    //{
        //$giohang = Giohang::find();
        //return view('frontend.loai.giohang', compact('giohang'));
    //}
   
}
