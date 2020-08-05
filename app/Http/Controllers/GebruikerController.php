<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gebruiker;
use DB;

class GebruikerController extends Controller
{
    public function index(){
      return Gebruiker::all();
    }

    public function store(Request $request){
       $gebruiker = new Gebruiker();
       $gebruiker->naam = $request->naam;
       $gebruiker->email = $request->email;
       $gebruiker->wachtwoord = $request->wachtwoord;
       $gebruiker->save();
   }
}
