<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductInList;
use DB;

class ProductInListController extends Controller
{
    public function index(){
        return ProductInList::all();
    }

    public function showUserId($userId){
        return ProductInList::where('android_user_id','=',$userId)->get();
    }

    public function store(Request $request){
        $productInList = new ProductInList();
        $productInList->product_id = $request->product_id;
        $productInList->android_user_id = $request->android_user_id;
        $productInList->expiration_date = $request->expiration_date;
        $productInList->note = $request->note;
        $productInList->save();
    }
  
}
