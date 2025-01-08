<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        if($products){
            return ProductResource::collection($products);
        }
        else
        {
            return response()->json(['message'=>'No record here'], 200);
        }
    }

    public function store(){

    }

    public function show(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
