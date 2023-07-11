<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Shop;

class IndexController extends Controller
{
   public function __invoke(){
      $shops = Shop::all();
      return view('index', compact('shops'));
    }
}
