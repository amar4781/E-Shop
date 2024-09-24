<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::all();
        if (count($user)>0)
        {
            return ApiResponse::sendResponse(200,'All Users Visited Us',UserResource::collection($user));
        }
        return ApiResponse::sendResponse(200,'No Users Now',[]);
    }
}
