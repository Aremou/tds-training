<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionOuverte;

class SessionOuverteController extends Controller
{
    public function index()
    {
        $session_ouvertes_en_cours = SessionOuverte::where('statut', 'en cours')->paginate(8);
        $session_ouvertes_termine = SessionOuverte::where('statut', 'terminer')->paginate(8);
        return view('site-public.sessions-ouvertes.session-ouverte', compact('session_ouvertes_en_cours', 'session_ouvertes_termine'));
    }

    public function show($id, $formation){
        $session_ouverte = SessionOuverte::findOrfail($id);

        return view('site-public.sessions-ouvertes.show-session-ouverte', compact('session_ouverte'));
    }

    public function create_inscription($id, $formation){
        $session_ouverte = SessionOuverte::findOrfail($id);

        return view('site-public.sessions-ouvertes.create-inscription-session-ouverte', compact('session_ouverte'));
    }
}
