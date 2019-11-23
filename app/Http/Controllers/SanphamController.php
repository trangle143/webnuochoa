<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Sanpham;
use App\Loaisanpham;
use App\Thuonghieu;
use App\Binhluan;


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

    // 

    public function sanpham($id)
    {
    	$sanpham = Sanpham::find($id);
        $binhluan = Binhluan::with('sanpham')->where('sanpham_id',$id)->get();
    	return view('frontend.trangcon.chitietsanpham', compact('sanpham','binhluan'));
    }

    // 
    public function quanli(){
        $sanpham = Sanpham::with('thuonghieu')->orderBy('id','desc')->get();
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
        $sanpham->price =$Request->price;
        $sanpham->soluong =$Request->soluong;
        $sanpham->xuatxu =$Request->xuatxu;
        $sanpham->dungtich =$Request->dungtich;
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
// dd($Request->all());
        $sanpham->save();
        return back()->with('success','Thêm thành công!');
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
        $sanpham->price =$Request->price;
        // $sanpham->giakhuyenmai =$Request->giakhuyenmai;
        $sanpham->xuatxu= $Request->xuatxu;
        $sanpham->dungtich= $Request->dungtich;
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
        return back()->with('success','Sửa thành công!');
    }

    public function getXoa($id){
        $sanpham = Sanpham::find($id);
        $sanpham->delete();
        return back()->with('success','Xóa thành công!');;
    }

    public function binhluan(Request $Request)
    {
        $binhluan = new Binhluan;
        $binhluan->sanpham_id = $Request->id;
        $binhluan->user_id = Auth::user()->id;
        $binhluan->noidung = $Request->noidung;
        $binhluan->save();
        return back()->with('message','Thêm bình luận thành công');
    }
   
}
