<?php

namespace App\Http\Controllers;

use App\Models\Add;

use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

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
    public function becomeRevisor(){
        Mail::to('admin@yoes.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message','La tua candidatura è stata inviata');
    }
    public function makeRevisor(User $user){    
        Artisan::call('yoes:makeUserRevisor',['email'=>$user->email]);
        return redirect('/')->with('message',"L'utente ".$user->name." è diventato revisore");
        
    }
}
