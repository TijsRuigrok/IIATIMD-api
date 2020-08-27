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
            ->join('products','products.barcode','=','products_in_list.product_barcode')
            ->join('android_users','android_users.email','=','products_in_list.android_user_email')
            ->select('products.*','products_in_list.expiration_date','products_in_list.note')
            ->get();
    }

    public function store(Request $request){
        $productInList = new ProductInList();
        $productInList->product_barcode = $request->product_barcode;
        $productInList->android_user_email = $request->android_user_email;
        $productInList->expiration_date = $request->expiration_date;
        $productInList->note = $request->note;
        $productInList->save();
    }

}
