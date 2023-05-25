<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Add extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'place',
        'price',
        'description',
        'user_id',
        'category_id',

    ];

    @return array

    public function toSearchableArray(){

        $category = $this->category;
        $array = [

            'id' => $this->id,
            'title' => $this->title,
            'place' => $this->place,
            'price' => $this->price,
            'description' => $this->description,
            'category' => $category,            

        ];

        return $array;

    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public static function toBeRevisionedCount(){
        return Add::where('is_accepted', null)->count();
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true; 
    }
   
}

