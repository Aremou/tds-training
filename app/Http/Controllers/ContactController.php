<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('site-public.contact');
    }

    public function send_message(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'objet' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        Mail::to('sidriz@technodatasolutions.bj')->send(new SendMessage($request->nom, $request->objet, $request->email, $request->message));

        flashy()->success('Message envoyé avec succès');

        return redirect()->route('root_contact');
    }
}
