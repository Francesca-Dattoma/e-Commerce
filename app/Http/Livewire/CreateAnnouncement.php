<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title;
    public $place;
    public $price;
    public $description;

    public function store(){

        Announcement::create([

            'title'=>$this->title,
            'place'=>$this->place,
            'price'=>$this->price,
            'description'=>$this->description,

        ]);

    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
