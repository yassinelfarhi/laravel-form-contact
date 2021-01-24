<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\contactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
      return view("form_contact");
    }

    public function create(Request $request) {

      $request->validate([
        'sujet' => 'required',
        'email' => 'required|email',
        'description' => 'required|max:200'
      ]);

     
      $post = new contactModel();

      $post->sujet = $request->input('sujet');
      $post->email = $request->input('email');
      $post->description = $request->input('description');
    
      if($post->save()) {
        Mail::raw('Vous avez un nouveau enregistrement dans votre base de données', function ($message){
          $message->to("olivia.declerck@dkgroup.fr")
                  ->subject("Test Pratique Laravel");
         });
      } else {
        App::abort(500, 'Error');
      }

    

      return back()->with('success','message envoyé!');
    }
}
