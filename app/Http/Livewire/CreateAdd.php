<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\Add;
use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;


class CreateAdd extends Component
{
    use WithFileUploads;
    
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
        'category'=>'required|different:Placeholder', 
        
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
        $this->validate();
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
