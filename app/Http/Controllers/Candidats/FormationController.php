<?php

namespace App\Http\Controllers\Candidats;

use App\Http\Controllers\Controller;
use App\Models\FormationModel;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = FormationModel::all();
        return view('candidats.profils.profil', ['formationsView' => $formations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('candidats.formations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $formation = new FormationModel();
        $formation->user_id = $request->user()->id;
        $formation->anneeScolaire = $request->input('annee-scolaire');
        $formation->diplome = $request->input('diplome');
        $formation->etablissement = $request->input('etablissement');
        $formation->descriptionFormation = $request->input('descriptionFormation');
        $formation->save();
        // Mail::to($request->user())->send(new GmailEmail);
        return redirect()->route('candidats.profils.profil');
    }

    /**
     * Display the specified resource.
     */
    public function show(FormationModel $formation)
    {
        return view('candidats.formations.show', ['formation' => $formation]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormationModel $formation)
    {
        //
        return view('candidats.formations.edit', ['formation' => $formation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormationModel $formation)
    {
        
        $formation->anneeScolaire = $request->input('annee-scolaire');
        $formation->diplome = $request->input('diplome');
        $formation->etablissement = $request->input('etablissement');
        $formation->descriptionFormation = $request->input('descriptionFormation');
        $formation->save();
        return redirect()->route('candidats.profils.profil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormationModel $formation)
    {
        //
        $formation ->delete();
        return redirect()->route('candidats.profils.profil');
    }
}
