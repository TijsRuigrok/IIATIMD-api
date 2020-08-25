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

    public function showBarcode($barcode){
      return Product::where('barcode','=',$barcode)->first();
    }

    public function create(){
      return view('product.create');
    }
    
}
