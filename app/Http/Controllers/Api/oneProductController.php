<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class oneProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product){
            return ApiResponse::sendResponse(200,'Product Retrieved',$product);
        }
        return ApiResponse::sendResponse(200,'Product Not Found',[]);

    }

    // public function __invoke(Request $request)
    // {
    //     $photo = Product::where('id',$request->input('id'))->get();
    //     if (count($photo)>0){
    //         return ApiResponse::sendResponse(200,'Product Image Retrieved',PhotoResource::collection($photo));
    //     }
    //     return ApiResponse::sendResponse(200,'No Image For This Product',[]);

    // }
}
