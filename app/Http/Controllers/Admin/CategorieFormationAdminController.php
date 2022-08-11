<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategorieFormationAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        $categorie = new Categorie;

        return view('dashboard.formations.categorie-formation', compact('categories', 'categorie'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);
        Categorie::create([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);

        flashy()->success('Catégorie formation ajoutée avec succès');

        return redirect()->route('categories-formations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($request->cat_id);

        $categorie->update([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);

        flashy()->primary('Catégorie formation #' . $request->cat_id . ' modifiée avec succès');

        return redirect()->route('categories-formations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $categorie = Categorie::findOrfail($request->test);

        $categorie->delete();

        flashy()->error('Catégorie produit #' . $request->test . ' supprimée avec succès');

        return redirect()->route('categories-formations.index');
    }
}
