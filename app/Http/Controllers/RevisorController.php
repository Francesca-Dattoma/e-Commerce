<?php

namespace App\Http\Controllers;

use App\Models\Add;

use Exception;
use App\Models\User;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Mail\RevisorConfirmed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function __construct(){
        $this->middleware('verified');
    }
    public function index(){

        $add_to_check = Add::where('is_accepted', null)->orderby('updated_at','DESC')->first();
        
        return view('revisor.index', compact('add_to_check'));
    }

    public function acceptAdd(Add $add){
        $add->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato con successo');
    }

    public function addBack(){
        $addToGo = Add::whereNotNull('is_accepted')->orderBy('id', 'DESC')->first();
        if ($addToGo){
            $addToGo->setAccepted(null);
            return redirect()->back()->with('message', 'Ultima revisione annullata con successo');
        }else{
            return redirect()->back()->with('warning', 'Non sono presenti annunci già revisionati');  
        }
    }

    public function refuseAdd(Add $add){
        $add->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato con successo');
    }
    public function becomeRevisor(){
        
        try{
            Mail::to('admin@yoes.it')->send(new BecomeRevisor(Auth::user()));
        }catch(Exception $error){
            return redirect()->back()->with('errorMail',"Ci spiace, qualcosa non è andato a buon fine, riprova tra qualche minuto!");
        }
        
        return redirect()->back()->with('message','La tua candidatura è stata inviata');
    }
    public function makeRevisor(User $user){     
        try{
            // dd($user->email);
            Mail::to($user->email)->send(new RevisorConfirmed($user));
        }catch(Exception $error){
            return redirect('/')->with('errorMail',"Ci spiace, qualcosa non è andato a buon fine, riprova tra qualche minuto!");
        }
        Artisan::call('yoes:makeUserRevisor',["email"=>$user->email]);
        return redirect('/')->with('message',"$user->name" . " è diventato un revisore");
        
    }
}
