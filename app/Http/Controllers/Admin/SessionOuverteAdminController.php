<?php

namespace App\Http\Controllers\Admin;

use App\Models\Formation;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Models\SessionOuverte;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailNewsletterSessionOuverte;


class SessionOuverteAdminController extends Controller
{
    public function index(){
        $session_ouvertes_en_cours = SessionOuverte::where('statut', 'en cours')->get();
        $session_ouvertes_termine = SessionOuverte::where('statut', 'terminer')->get();

        return view('dashboard.sessions-ouvertes.index', compact('session_ouvertes_termine', 'session_ouvertes_en_cours'));
    }

    public function create(){
        $session_ouverte = new SessionOuverte;
        $formations = Formation::all();
        return view('dashboard.sessions-ouvertes.create', compact('session_ouverte', 'formations'));

    }

    public function store(Request $request){

        $request->validate([
            'formation' => 'required',
            'type_formation' => 'required',
            'lieu' => 'required',
            'certification' => 'required',
            'examen' => 'required',
            'montant' => 'required|integer',
            'date_debut' => 'required',
            'date_fin' => 'required|after_or_equal:date_debut',
        ]);

        $newsletters = Newsletter::where('statut', 'actif')->get();

        $formation = Formation::findOrfail($request->formation);

        $data = SessionOuverte::create([
            'image' => 'null',
            'formation_id' =>$request->formation,
            'type_formation' =>$request->type_formation,
            'lieu' => $request->lieu,
            'certification' => $request->certification,
            'examen' => $request->examen,
            'montant' =>$request->montant,
            'date_debut' =>$request->date_debut,
            'date_fin' =>$request->date_fin,
        ]);

        foreach ($newsletters as $newsletter) {

            Mail::to($newsletter->email)->send(new SendMailNewsletterSessionOuverte($data, $formation));

        }

        flashy()->success('Nouvelle session ajoutée avec succès');

        return redirect()->route('root_admin_index_session_ouverte');
    }

    public function show($id){
        $session_ouverte = SessionOuverte::findOrfail($id);

        return view('dashboard.sessions-ouvertes.show', compact('session_ouverte'));
    }

    public function edit($id){
        $session_ouverte = SessionOuverte::findOrfail($id);

        $formations = Formation::all();

        return view('dashboard.sessions-ouvertes.edit', compact('session_ouverte', 'formations'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'formation' => 'required',
            'type_formation' => 'required',
            'lieu' => 'required',
            'certification' => 'required',
            'examen' => 'required',
            'montant' => 'required|integer',
            'date_debut' => 'required',
            'date_fin' => 'required|after_or_equal:date_debut',
        ]);

        SessionOuverte::findOrfail($id)->update([
            'image' => 'e',
            'formation_id' =>$request->formation,
            'type_formation' =>$request->type_formation,
            'lieu' => $request->lieu,
            'certification' => $request->certification,
            'examen' => $request->examen,
            'montant' =>$request->montant,
            'date_debut' =>$request->date_debut,
            'date_fin' =>$request->date_fin,
        ]);

        flashy()->primary('Session #' . $id . 'modifiée avec succès');

        return redirect()->route('root_admin_index_session_ouverte');
    }

    public function delete(Request $request){

        $session_ouverte = SessionOuverte::findOrFail($request->test);

        $session_ouverte->delete();

        flashy()->error('Session #' . $request->test . ' supprimée avec succès');

        return redirect()->route('root_admin_index_session_ouverte');
    }
}
