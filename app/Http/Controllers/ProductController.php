<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('images')->get();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $product = Product::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'description'=>$request->description,
            'brand'=>$request->brand,
            'movement'=>$request->movement,
            'price'=>$request->price,
            'gender'=>$request->gender,
            'size'=>$request->size,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');

                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->to('products');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $products = Product::with('images')->onlyTrashed()->get();
        return view('products.softdelete', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::with('images')->findorFail($id);
        return view('products.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findorFail($id);

        $product->update([
            'name' => $request->name,
            'details' => $request->details,
            'description' => $request->description,
            'brand' => $request->brand,
            'movement' => $request->movement,
            'price' => $request->price,
            'gender' => $request->gender,
            'size' => $request->size,
        ]);

        if ($request->hasFile('images')) {
            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }

            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->to('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->to('products');
    }
    public function view($id)
    {
        $product = Product::findorFail($id);
        return view('products.view',compact('product'));
    }

    public function deleteAll()
    {
        $products = Product::all();
        foreach ($products as $product) {
            // حذف الصور المرتبطة بالمنتج من التخزين
            foreach ($product->images as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }

            // حذف المنتج
            $product->delete();
        }
        return redirect()->back();
    }
}
