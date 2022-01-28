<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function view($slug_url){
        $product = Product::where('slug',$slug_url)->first();
        if($product==NULL){abort(404);}
        Inertia::setRootView('layouts.public');
        return Inertia::render('Product/View',[
            'product' => $product
        ]);
    }

    public function showAllProducts(){
        $data = Product::where('status',1)->get();
        Inertia::setRootView('layouts.public');
        return Inertia::render('Product/All',[
            'data' => $data,
            'mi_nombre' => 'Angela',
        ]);
    }

    public function adminProducts(){
        return 'Estas en admin';
    }

    public function showAdminProduct(){
        Inertia::setRootView('layouts.public');
        return Inertia::render('Admin/Products/View');
    }

    public function getData(Request $request){
        $data = Product::where('status',1)->get();
        return $data;
    }

    public function create(){
        Inertia::setRootView('layouts.public');
        return Inertia::render('Admin/Products/Create');
    }

    public function createDb(Request $request){
        $producto = $request['product'];
    }
}
