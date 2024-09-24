<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $products = Product::findOrFail(1);
        // // return $products;
        // return new ProductResource($products);

        // $products = Product::all();
        // return ProductResource::collection($products);

        $products = Product::all();
        if (count($products)>0) {
        return ApiResponse::sendResponse(200,'Products Retrieved Successfully',$products);
    }
    return ApiResponse::sendResponse(200,'Products Not Found',[]);



    }
}
