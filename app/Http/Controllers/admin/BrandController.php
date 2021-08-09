<?php

namespace App\Http\Controllers\admin;

use App\Models\Brands;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function viewBrands(){
        $brands = Brands::orderBy('id')->paginate(20);
        return view('admin.brands.viewBrand' , compact('brands'));
    }
    public function formAddBrand(){
       
        return view('admin.brands.addBrand');
    }
    public function saveAddBrand(Request $request){
        $model = new Brands();
        
        $model->fill($request->all());
      
        if($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/brands', $newFileName);
            $model->image = str_replace('public/', '', $path);
        }
        $model->save();
        return redirect('admin/viewbrand');
    }
    public function formEditBrand($id){
        $brand = Brands::find($id);
        return view('admin.brands.editBrand' , compact('brand'));
    }
    public function saveEditBrand($id , Request $request){
        $brand = Brands::find($id);
        $brand->fill($request->all());
        if(!$brand){
            return redirect()->back();
        }
        
        if($request->hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/brands', $newFileName);
            $brand->image = str_replace('public/', '', $path);
        }

        $brand->save();

        return redirect(route('brand.index') );
    }
    public function removeBrand($id){
        Brands::destroy($id);

        return redirect()->back();
    }
}
