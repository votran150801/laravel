<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Planes;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function viewSanPham( Request $request,$id){
        $plane = Planes::find($id);
        // $plane = Planes::where("brands_id", "=", "$id")->paginate(6);
        $brand = Brands::all();

        $planes = Planes::all();
        $spmoinhat = Planes::latest()->take(4)->get();

         $pagesize = config('commom.default_page_sizee');
         $productQuery = Planes::where("brands_id", "=", "$id")->where('name' , 'like' , "%".$request->keyword."%");
        $plane = $productQuery->paginate(6);

        return view('website.sanpham.sanPham', compact('plane','brand','spmoinhat' , 'planes'));
    }
    public function detailSanPham($id){
       
        $brands = $_GET['brand'];
       
        $plane = Planes::where("id", "=", "$id")->get();
        $brand = Brands::all();
        $splienquan = Planes::where("brands_id", "=", "$brands")->where("id", "!=", "$id")->get();
        return view('website.sanpham.detailSanPham' , compact('plane','brand','splienquan'));
    }
}
