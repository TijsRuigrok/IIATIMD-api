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

    public function showSoort($soort){
      return Product::where('soort','=',$soort)->get();
    }

    public function store(Request $request){
       //return response()->json([$request->all()]);

       $product = new Product();
       $product->naam = $request->naam;
       $product->barcode = $request->barcode;
       $product->soort = $request->soort;
       $product->houdbaarheidsdatum = $request->houdbaarheidsdatum;
       $product->notitie = $request->notitie;
       $product->gebruiker_id = $request->gebruiker_id;
       $product->save();

     }
}
