<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductsModel;

class ProductsController extends Controller
{
    //

    public function index(){
        return response()->json([
            'message' => "index"
        ], 200);
    }

    public function create(Request $request){
        ProductsModel::create($request->all());

        return response()->json([
            'message' => "product created"
        ], 200);
    }

    public function update(){
        return response()->json([
            'message' => "updated"
        ], 200);
    }

    public function delete(){
        return response()->json([
            'message' => "deleted"
        ], 200);
    }
}
