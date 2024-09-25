<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,$id)
    {
        $cat = [
            '1' => 'Men',
            '2' => 'Women',
            '3' => 'Casio',
        ];
    
        return view('products.category',[
            'the_id' => $cat[$id] ?? "This Id Is Not Found"
        ]);
    }
}
