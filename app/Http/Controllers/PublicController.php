<?php

namespace App\Http\Controllers;

use App\Models\Add;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage(){
      $adds=Add::where('is_accepted', true)->orderBy('created_at', 'DESC')->paginate(6);
      
      return view('welcome',compact('adds'));
   }

   public function searchAdds(Request $request){

      $adds=Add::search($request->input('query'))->where('is_accepted', true)->paginate(1);
      
      $sortedCategories = Category::orderBy('name')->get();

      return view('add.searched', compact('adds', 'sortedCategories'));

   }
   public function setLanguage($lang){
      session()->put('locale',$lang);
      return redirect()->back();
   }

   public function staff(){
      return view('staff');
   }
   
}
