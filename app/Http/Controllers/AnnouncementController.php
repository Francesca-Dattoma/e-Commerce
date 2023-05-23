<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function announcement_create(){

       return view('addAnnounce'); 

    }
}
