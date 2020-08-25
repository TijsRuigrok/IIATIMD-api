<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductInList;
use App\Product;
use DB;

class ProductInListController extends Controller
{
    public function index(){
        return ProductInList::all();
    }

    public function showUserId($userId){
        return ProductInList::where('android_user_id','=',$userId)->get();
    }

    public function showEmail($email){
        return DB::table('products_in_list')
            ->join('products','products.id','=','products_in_list.product_id')
            ->join('android_users','android_users.id','=','products_in_list.android_user_id')
            ->select('products.*','products_in_list.expiration_date','products_in_list.note')
            ->where('email','=',$email)
            ->get();
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
