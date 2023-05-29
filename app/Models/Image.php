<?php

namespace App\Models;

use App\Models\Add;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;


    protected $fillable =['path'];

    public function add(){

        return $this->belongsTo(Add::class);


    }


}
