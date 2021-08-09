<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request\PlaneFormRequest;
use App\Models\Brands;
use App\Models\Planes;
use Illuminate\Http\Request;

class PlaneController extends Controller
{
    public function viewPlane(Request $request){
        $pagesize = config('commom.default_page_size');
        $productQuery = Planes::where('name' , 'like' , "%".$request->keyword."%");

        
        if($request->has('order_by') && $request->order_by > 0){
            if($request->order_by == 1){
                $productQuery->orderBy('name');
            }else if($request->order_by == 2){
                $productQuery->orderByDesc('name');
            }else  if($request->order_by == 3){
                $productQuery->orderBy('id');
            }else if($request->order_by == 4){
                $productQuery->orderByDesc('id');
            }else if($request->order_by == 5){
                $productQuery->orderBy('quantity');
            }else{
                $productQuery->orderByDesc('quantity');
            }
        };

        $plane = $productQuery->paginate($pagesize);

        // $product = $productQuery->paginate($pagesize);
        // $plane->appends($request->except('page'));
        
        // $plane->load('brand');

        $brands = Brands::all();
       
        return view('admin.planes.viewPlane' , compact('plane' , 'brands' ));
    }
    public function formAddPlane(){
        $brands = Brands::all();
        return view('admin.planes.addPlane' , compact('brands'));
    }
    public function saveAddPlane(PlaneFormRequest $request){
        $plane = new Planes;
        $plane->fill($request->all());

        if($request-> hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/planes' , $newFileName);
            $plane->image = str_replace('public/' , '' , $path);
        }

        $plane->save();

        return redirect(route('plane.index'));

    }
    public function formEditPlane($id){
        $brands = Brands::all();
        $planes = Planes::find($id);
        return view('admin.planes.editPlane' , compact('brands', 'planes'));
    }
    public function saveEditPlane($id , PlaneFormRequest $request){
        $planes = Planes::find($id);
        $planes->fill($request->all());
        if(!$planes){
            return redirect()->back();
        }
        if($request-> hasFile('file_upload')){
            $newFileName = uniqid(). '-' . $request->file_upload->getClientOriginalName();
            $path = $request->file_upload->storeAs('public/uploads/planes' , $newFileName);
            $planes->image = str_replace('public/' , '' , $path);
        }
        
        $planes->save();

        return redirect(route('plane.index'));
    }
    public function removePlane($id){
        Planes::destroy($id);

        return redirect()->back();
    }
}
