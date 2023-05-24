<?php

namespace App\Http\Controllers;

use App\Models\Add;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){

        $add_to_check = Add::where('is_accepted', null)->first();
        return view('revisor.index', compact('add_to_check'));
    }

    public function acceptAdd(Add $add){
        $add->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato con successo');
    }

    public function refuseAdd(Add $add){
        $add->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato con successo');
    }
}
