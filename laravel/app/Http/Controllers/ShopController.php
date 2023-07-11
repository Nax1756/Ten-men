<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Shop;

class ShopController extends Controller
{

  public function main()
  {
    $shops = Shop::all();
    return view('index', compact('shops'));
  }

  public function shop()
  {
    $shops = Shop::paginate(12);
    return view('shop', compact('shops'));
  }

  public function product(Shop $shop)
  {
    return view('product', compact('shop'));
  }

  public function cart()
{
  return view('cart');
}




}
