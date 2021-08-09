<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Planes;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $brand = Brands::all();
        $cate_duoi= Brands::orderBy("id", 'desc')->limit(3)->get();
        $plane = Planes::all();
        // echo "<pre>";
        // var_dump($pro);
        // die;
        $spmoinhat = Planes::latest()->take(4)->get();
        return view('website.home', compact('brand', 'plane', 'cate_duoi','spmoinhat'));
    }
}
