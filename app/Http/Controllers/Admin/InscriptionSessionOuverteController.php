<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SessionOuverteController;
use App\Mail\SendMailFormateurSessionOuverte;
use App\Mail\SendMailParticipantSessionOuverte;
use App\Models\InscriptionSessionOuverte;
use App\Models\SessionOuverte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InscriptionSessionOuverteController extends Controller
{
    public function store_inscription(Request $request, $id, $formation)
    {
        // Form validation
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:inscription_session_ouvertes,email,except,id',
            'telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8|integer',
            'pays' => 'required',
            'ville' => 'required',
            'code_postal' => 'required',
            'profession' => 'required',
            'civilite' => 'required',
        ]);

        $session = SessionOuverte::findOrfail($id);

        if ($session->statut == "terminer") {

            flashy()->error('Impossible de s\'inscire à la session #' . $id );

        }else{

            $data = InscriptionSessionOuverte::create([
                'nom' => request('nom'),
                'prenom' => request('prenom'),
                'email' => request('email'),
                'telephone' => request('telephone'),
                'pays' => request('pays'),
                'ville' => request('ville'),
                'code_postal' => request('code_postal'),
                'profession' => request('profession'),
                'civilite' => request('civilite'),
                'session_ouverte_id' => $id,
            ]);

            Mail::to($data->email)->send(new SendMailParticipantSessionOuverte($data, $id, $formation));

            Mail::to('sidriz@technodatasolutions.bj')->send(new SendMailFormateurSessionOuverte($data, $id, $formation));

            flashy()->success('Inscription  la session #'.$id.' envoyée avec succès');
        }

        return redirect()->route('root_show_session_ouverte', [$id, $formation]);
    }

    public function inscrit_session($id)
    {
        $inscriptions = InscriptionSessionOuverte::where('session_ouverte_id', $id)->get();
        $session_ouverte = SessionOuverte::findOrfail($id);

        return view('dashboard.sessions-ouvertes.inscrits', compact('inscriptions', 'session_ouverte'));
    }

    public function cloturer_session(Request $request)
    {
        $session = SessionOuverte::findOrfail($request->id_session);

        $session->update([
            'statut' => 'terminer',
        ]);

        flashy()->success('Session #'.$request->id_session.' clôturée avec succès');

        return redirect()->back();
    }
}
