<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Shop;

class ProductController extends Controller
{
   public function __invoke(Shop $shop){
      dd($shop);
      // return view('product', compact('shop'));
    }
}
