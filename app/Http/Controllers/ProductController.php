<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
  
    public function index()
    {
        try{
            $products = Product::all();
            return response()->json(['status'=>'ok','data'=> ProductResource::collection($products)]);
        }catch(Exception $e){
            return response()->json(['status'=>'err','msg'=>$e->getMessage()]);
        }

    }


    public function store(Request $request)
    {
        try{
            $products = $request->all();
            $rules = [
                    'sku'       =>   'required | unique:products',
                    'name'      =>   'required',
                    'img_link'  =>   'required',
                    'desc'       =>   'required',
                    'price'     =>   'required | numeric',
                    'size'      =>   'required',
                    'weight'    =>   'required | numeric'
                ];
            foreach($products as $pd){
                $validator = Validator::make($pd, $rules);
                if ($validator->fails()) {
                    return response()->json(['status'=>'err','msg'=>'Invalid data']);
                }
            }

            if(Product::insert($products)){
                return response()->json(['status'=>'ok','msg'=>'Data is created success fully.']);
            }else{
                return response()->json(['status'=>'ok','msg'=>'Error saving data.']);
            }
        }catch(Exception $e){
            return response()->json(['status'=>'err','msg'=>$e->getMessage()]);
        }
    }


    public function show(product $product)
    {
        try{
            return response()->json(['status'=>'ok','data'=> $product]);
        }catch(Exception $e){
            return response()->json(['status'=>'err','msg'=>$e->getMessage()]);
        }
    }


    public function update(Request $request, product $product)
    {
        //
    }


    public function destroy(product $product)
    {
        //
    }
}
