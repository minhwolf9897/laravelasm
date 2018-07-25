<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product/list')
        ->with('products_in_view', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product();
        $products -> name = Input::get('name');
        $products -> price = Input::get('price');
        $products -> image = Input::get('image');
        $products -> description = Input::get('description');
        $products ->save();
        return redirect('product');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        if ($product == null){
            return view('404');
        }
        return view('product.edit') ->with('product_in_view' , $product);

    }
    public function update($id)
    {
        $products = Product::find($id);
        if ($products == null){
            return view('404 NOT FOUND');
        }
        $products -> name = Input::get('name');
        $products -> price = Input::get('price');
        $products -> image = Input::get('image');
        $products -> description = Input::get('description');
        $products -> save();
        return redirect('product');
    }

    public function destroy($id)
    {

    }
}
