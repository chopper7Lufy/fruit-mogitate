<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_Season;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products',['products' => $products]);
    }

    public function register()
    {
        return view('register');
    }

    public function store(ProductRequest $request)
    {
        $products = $request->all();
        Product::create($products);
        return redirect('/products');
    }


    public function state()
    {
        $products = Product::with('product_season')->paginate(6);
        $product_season = Product_Season::all();
        return view('products', compact('products', 'product_season'));
    }
    public function syosai(Request $request)
    {
        $products = Product::all();
        return view('product-syosai',compact('products'));
    }

    public function search(Request $request)
    {
    $products = Product::with('product')->CategorySearch($request->product_id)->KeywordSearch($request->keyword)->get();
    $product_season = Product_Season::all();

    return view('products', compact('products', 'product_season'));
    }

}
