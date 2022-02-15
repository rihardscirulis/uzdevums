<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Product_attributes;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::create([
            'name' => 'Lemon',
            'description' => 'Color is yellow, but taste is terrible sour'
        ]);
        Product_attributes::create([
            'product_id' => $product->id,
            'weight' => '1 kg',
            'value' => '1,60 EUR'
        ]);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $product->load('attributes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->attributes()->delete();
        $product->delete();
        return redirect('home');
    }
}
