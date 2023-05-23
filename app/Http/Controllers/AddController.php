<?php

namespace App\Http\Controllers;

use App\Models\Add;
use App\Models\Category;
use Illuminate\Http\Request;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $adds=Add::all();
        $sortedCategories = Category::orderBy('name')->get();
        return view('add.index', compact('adds','sortedCategories')); 
    }

    public function categoryIndex(Category $sortedCategory){
        
        $adds=Add::where('category_id',$sortedCategory->id)->orderBy('created_at', 'DESC')->get();
        // $count=$adds->count();
        // if($count)

        return view('add.categoryindex', compact('adds','sortedCategory'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
        
    {   $sortedCategories = Category::orderBy('name')->get();
        
        return view('addAnnounce', compact('sortedCategories'));
           
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Add $add)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Add $add)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Add $add)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Add $add)
    {
        //
    }
}
