<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class newProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(NewProductRequest $request)
    {
        $data = $request->validated();
        $product = Product::create($data);
        if ($product)
        {
            return ApiResponse::sendResponse(201,'Product Added Successfully',$product);
        }
    }

    // public function __invoke(Request $request)
    // {
    //     // $data = $request->validated();
    //     $product = Product::create([
    //         'name'=>$request->name,
    //         'details'=>$request->details,
    //         'description'=>$request->description,
    //         'brand'=>$request->brand,
    //         'movement'=>$request->movement,
    //         'price'=>$request->price,
    //         'gender'=>$request->gender,
    //         'size'=>$request->size,
    //     ]);
    //     if ($product)
    //     {
    //         return ApiResponse::sendResponse(201,'Product Added Successfully',[]);
    //     }
    // }
}
