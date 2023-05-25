<?php

namespace App\Http\Controllers;

use App\Models\Add;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage(){
      $adds=Add::orderBy('created_at', 'DESC')->paginate(6);
      
      return view('welcome',compact('adds'));
   }

   public function searchAdds(Request $request){

      $adds=Add::search($request->searched)->where('is_accepted', true)->paginate(9);

      $sortedCategories = Category::orderBy('name')->get();

      return view('add.index', compact('adds', 'sortedCategories'));

   }
   
}
