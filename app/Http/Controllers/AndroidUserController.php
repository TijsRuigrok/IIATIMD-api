<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AndroidUser;
use DB;

class AndroidUserController extends Controller
{
    public function index(){
      return AndroidUser::all();
    }

    public function show($email){
      return AndroidUser::where('email','=',$email)->first();
    }

    public function store(Request $request){
       $user = new AndroidUser();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->save();
   }
}
