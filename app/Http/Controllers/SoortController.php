<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soort;
use DB;

class SoortController extends Controller
{
    public function index(){
      return Soort::all();
    }
}
