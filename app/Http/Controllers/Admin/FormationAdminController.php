<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use App\Models\Formation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFormationFormRequest;
use App\Http\Requests\UpdateFormationFormRequest;

class FormationAdminController extends Controller
{
    public function index(){
        $formations = Formation::all();
        return view('dashboard.formations.index', compact('formations'));
    }

    public function create(){
        $formation = new Formation;
        $categories = Categorie::all();
        return view('dashboard.formations.create', compact('categories', 'formation'));
    }

    public function store(CreateFormationFormRequest $request){

        Formation::create([
            'nom' => $request->nom,
            'reference' => $request->reference,
            'niveau' => $request->niveau,
            'duree' => $request->duree,
            'lieu' => $request->lieu,
            'type_formation' => $request->type_formation,
            'description' => $request->description,
            'objectif' => $request->objectif,
            'prerequis' => $request->prerequis,
            'public' => $request->public,
            'points_forts' => $request->points_forts,
            'certification' => $request->certification,
            'programme' => $request->programme,
            'categorie_id' => $request->categorie,
        ]);

        flashy()->success('Formation ajoutée avec succès');

        return redirect()->route('root_admin_index_formation');
    }

    public function show($id){
        $formation = Formation::findOrfail($id);
        return view('dashboard.formations.show', compact('formation'));
    }

    public function edit($id){
        $formation = Formation::findOrfail($id);
        $categories = Categorie::all();
        return view('dashboard.formations.edit', compact('categories', 'formation'));
    }

    public function update(UpdateFormationFormRequest $request, $id){

        $formation = Formation::findOrfail($id);
        $formation->update([
            'nom' => $request->nom,
            'reference' => $request->reference,
            'niveau' => $request->niveau,
            'duree' => $request->duree,
            'lieu' => $request->lieu,
            'type_formation' => $request->type_formation,
            'description' => $request->description,
            'objectif' => $request->objectif,
            'prerequis' => $request->prerequis,
            'public' => $request->public,
            'points_forts' => $request->points_forts,
            'certification' => $request->certification,
            'programme' => $request->programme,
            'categorie_id' => $request->categorie,
        ]);

        flashy()->success('Formation modifiée avec succès');

        return redirect()->route('root_admin_show_formation', $id);
    }

    public function delete(Request $request){

        $formation = Formation::findOrFail($request->test);

        $formation->delete();

        flashy()->error('Formation #' . $request->test . ' supprimée avec succès');

        return redirect()->route('root_admin_index_formation');
    }
}
