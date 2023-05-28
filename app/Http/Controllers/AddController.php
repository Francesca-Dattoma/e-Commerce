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

    public function __construct(){
        $this->middleware('verified')->only('create');
    }
    public function index()
    {   
        $adds=Add::where('is_accepted', true)->paginate(12); 
        $sortedCategories = Category::orderBy('name')->get();
        return view('add.index', compact('adds','sortedCategories')); 
    }

    public function categoryIndex(Category $sortedCategory){
        
        $adds=Add::where('is_accepted', true)->where('category_id',$sortedCategory->id)->orderBy('created_at', 'DESC')->paginate(9);

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
        $relatedAdds=Add::where('is_accepted', true)->where('category_id',$add->category_id)->where('id','!=',$add->id)->orderBy('created_at', 'DESC')->paginate(5);
        return view('add.show', compact('add','relatedAdds'));
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
