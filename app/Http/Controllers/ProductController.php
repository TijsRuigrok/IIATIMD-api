<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function index(){
      return Product::all();
    }

    public function show($barcode){
      return Product::where('barcode','=',$barcode)->get();
    }

    // public function showSoort($soort){
    //   return Product::where('soort','=',$soort)->get();
    // }
}
