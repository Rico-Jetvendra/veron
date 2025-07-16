<?php

namespace App\Http\Controllers;

use App\Models\ProductList;
use Illuminate\Http\Request;

class ProductListController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductList  $productList
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $tbr = ProductList::where('product_brand', '=', $id)->where('product_type', '=', '1')->get();
        $pcr = ProductList::where('product_brand', '=', $id)->where('product_type', '=', '2')->get();
        $otr = ProductList::where('product_brand', '=', $id)->where('product_type', '=', '3')->get();
        $oth = ProductList::where('product_brand', '=', $id)->where('product_type', '=', '4')->get();

        return view('pages/productlist/index', compact('tbr', 'pcr', 'otr', 'oth'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductList  $productList
     * @return \Illuminate\Http\Response
     */
    public function submenu($brand, $id){
        $products = ProductList::where('product_brand', '=', $brand)->where('product_type', '=', $id)->get();

        return view('pages/productlist/submenu', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductList  $productList
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductList $productList){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductList  $productList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductList $productList){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductList  $productList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductList $productList)    {
        //
    }
}
