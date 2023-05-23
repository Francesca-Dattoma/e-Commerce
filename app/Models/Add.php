<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Add extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'place',
        'price',
        'description',
        'user_id',
        'category_id',
        'mainPhoto',
        'photo2',
        'photo3',
        'photo4',
        'photo5',
        'photo6'

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}

