<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $products = DB::table('t_product')->get();

        return view('pages/admin/product/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('pages/admin/product/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $filename = '';
        $validated = $request->validate([
            'product_name'  => 'required',
            'product_code'  => 'required',
            'product_type' => 'required',
            'product_desc' => 'required',
            'product_photo' => 'required|file|mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('product_photo')) {
            $file = $request->file('product_photo');
            $filename = time().'_'.$file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');
        }

        // // Save to database
        $product = Product::create([
            'product_name' => $validated['product_name'],
            'product_code' => $validated['product_code'],
            'product_type' => $validated['product_type'],
            'product_desc' => $validated['product_desc'],
            'product_photo' => $filename,
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product){
        $products = DB::table('t_product')->where('product_id', '=', $product->product_id)->get()[0];

        return view('pages/admin/product/edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product){
        $product = DB::table('t_product')->where('product_id', '=', $product->product_id)->get()[0];
        $filename = $product->product_photo;

        $validated = $request->validate([
            'product_name'  => 'required',
            'product_code'  => 'required',
            'product_type' => 'required',
            'product_desc' => 'required'
        ]);

        if ($request->hasFile('product_photo')) {
            $file = $request->file('product_photo');
            $filename = time().'_'.$file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');
        }

        // Save to database
        $product = Product::where('product_id', $product->product_id)->update([
            'product_name' => $validated['product_name'],
            'product_code' => $validated['product_code'],
            'product_type' => $validated['product_type'],
            'product_desc' => $validated['product_desc'],
            'product_photo' => $filename,
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product){
        $product = Product::findOrFail($product->product_id);
        $product->delete();
    }
}
