<?php

namespace App\Http\Controllers;

use App\Models\Add;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage(){
      $adds=Add::orderBy('created_at', 'DESC')->paginate(6);
      
      return view('welcome',compact('adds'));
   }
   
}
