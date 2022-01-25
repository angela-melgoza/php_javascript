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
}
