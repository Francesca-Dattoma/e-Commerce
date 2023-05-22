<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'place',
        'price',
        'description',
        'user_id',
    ];

    public function user(){
        return $this->balongsTo(User::class);
    }
}

