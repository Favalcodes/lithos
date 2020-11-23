<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productImage = ProductImage::all();
        return view('website.backend.productImage.index', compact('productImage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        return view('website.backend.productImage.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug=Str::slug($request->img_title,'-');

        $image = time().'.'.$request->img->extension();

        $request->img->move(public_path('images'), $image);

         ProductImage::create([
             'product_id'=>$request->product_id,
             'img_title'=>$request->img_title,
             'img'=>$image,
             'slug'=>$slug,

         ]);
         return redirect()->route('productImage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductImage $productImage)
    {
        $product = Product::all();
        return view('website.backend.productImage.update', compact('productImage','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductImage $productImage)
    {
        $slug=Str::slug($request->img_title,'-');
        if($request->has('img')){
            $image = time().'.'.$request->img->extension();

            $request->img->move(public_path('images'), $image);
        }
        else{
            $image = $productImage->img;
        }

         $productImage->update([
             'product_id'=>$request->product_id,
             'img_title'=>$request->img_title,
             'img'=>$image,
             'slug'=>$slug,

         ]);
         return redirect()->route('productImage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductImage $productImage)
    {
        $productImage->delete();
        return redirect()->route('productImage.index');
    }
}
