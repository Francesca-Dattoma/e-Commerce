<?php

namespace App\Http\Livewire;

use App\Models\Add;
use Auth;
use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;

class CreateAdd extends Component
{
    public $title;
    public $place;
    public $price;
    public $description;
    public $sortedCategories;

    public $category;
    protected $rules =[
        'title'=>'required|min:3',
        'place'=>'required|min:3',
        'price'=>'required|numeric',
        'description'=>'required|min:10',
        'category'=>'required'
    ];

    protected $messages =[
        'required'=>'Il campo :attribute è obbligatorio',
        'min'=>'Il campo :attribute è troppo corto',
        'numeric'=>'Il campo :attribute richiede un numero',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    public function store(){
        $category= Category::find($this->category);
        $add=$category->adds()->create([

            'title'=>$this->title,
            'place'=>$this->place,
            'price'=>$this->price,
            'description'=>$this->description,

        ]);
        Auth::user()->adds()->save($add);
        session()->flash('message', 'Annuncio correttamente inserito.');
        $this->cleanForm();

    }

    public function cleanForm(){
        $this->title=''; 
        $this->place='';
        $this->price='';
        $this->description='';
        $this->category='';
    }

    public function render()
    {
        return view('livewire.create-add');
    }
}
