<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(){
        $newsletters_actif = Newsletter::where('statut', 'actif')->get();
        $newsletters_bloque = Newsletter::where('statut', 'bloquer')->get();

        return view('dashboard.newsletters', compact('newsletters_actif', 'newsletters_bloque'));

    }

    public function create(Request $request){
        $request->validate([
            'newsletter' => 'required|unique:newsletters,email,except,id',
        ]);

        Newsletter::create([
            'email' => $request->newsletter,
        ]);
        flashy()->success('Vous vous êtes abonné(e) avec succès');

        return redirect()->back();
    }

    public function bloquer(Request $request){
        $newsletter = Newsletter::findOrfail($request->id_abon);

        $newsletter->update([
            'statut' => 'bloquer',
        ]);
        flashy()->success('Vous avez bloqué cet abonné(e) avec succès');

        return redirect()->back();
    }

    public function debloquer(Request $request){
        $newsletter = Newsletter::findOrfail($request->id_abon);

        $newsletter->update([
            'statut' => 'actif',
        ]);
        flashy()->success('Vous avez débloqué cet abonné(e) avec succès');

        return redirect()->back();
    }

    public function delete(Request $request){

        $newsletter = Newsletter::findOrFail($request->test);

        $newsletter->delete();

        flashy()->error('Abonné(e) #' . $request->test . ' supprimé avec succès');

        return redirect()->route('root_admin_index_newsletter');
    }

}
