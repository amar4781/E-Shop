<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\PhotoResource;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class photoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    
    // public function __invoke(Request $request, $id)
    // {
    //     $photo = ProductImage::where('id',$id)->get();
    //     if (count($photo)>0){
    //         return ApiResponse::sendResponse(200,'Product Image Retrieved',PhotoResource::collection($photo));
    //     }
    //     return ApiResponse::sendResponse(200,'No Image For This Product',[]);

    // }

    public function __invoke(Request $request)
    {
        $photo = ProductImage::where('id',$request->input('id'))->get();
        if (count($photo)>0){
            return ApiResponse::sendResponse(200,'Product Image Retrieved',PhotoResource::collection($photo));
        }
        return ApiResponse::sendResponse(200,'No Image For This Product',[]);

    }
}
