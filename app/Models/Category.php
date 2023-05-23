<?php

namespace App\Models;

use App\Models\Add;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        

    ];

    public function adds(){
        return $this->hasMany(Add::class);
    }
}
