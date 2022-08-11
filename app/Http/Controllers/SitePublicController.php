<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Formation;

class SitePublicController extends Controller
{
    public function index()
    {
        $last_formations = Formation::all()->take(4);
        $categories = Categorie::paginate(8);

        return view('site-public.index', compact('categories', 'last_formations'));
    }

    public function formations()
    {
        $categories = Categorie::all();

        return view('site-public.formation', compact('categories'));
    }

    public function detail_formations($categorie, $formation)
    {
        $formation = Formation::where('slug', $formation)->first();

        return view('site-public.detail-formation', compact('formation'));
    }

    public function devis()
    {
        $formations = Formation::all();
        $formation = null;

        return view('site-public.demande-devis', compact('formations', 'formation'));
    }

    public function devis_formation($slug_formation)
    {
        $formations = Formation::all();
        $formation = Formation::where('slug', $slug_formation)->first();

        return view('site-public.demande-devis', compact('formations', 'formation'));
    }

    public function delocalisation()
    {
        return view('site-public.demande-de-delocalisation');
    }
}
