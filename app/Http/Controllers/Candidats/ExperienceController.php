<?php

namespace App\Http\Controllers\Candidats;

use App\Http\Controllers\Controller;
use App\Models\ExperienceModel;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = ExperienceModel::all();
        return view('candidats.profils.profil', ['experiencesView' => $experiences]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('candidats.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $experience = new ExperienceModel();
        $experience->user_id = $request->user()->id;
        $experience->moisDebut = $request->input('mois-debut');
        $experience->anneeDebut = $request->input('annee-debut');
        $experience->moisFin = $request->input('mois-fin');
        $experience->anneeFin = $request->input('annee-fin');
        $experience->anneeExperience = $request->input('anneeExperience');
        $experience->societe = $request->input('societe');
        $experience->posteExperience = $request->input('posteExperience');
        $experience->descriptionExperience = $request->input('descriptionExperience');
        $experience->save();
        // Mail::to($request->user())->send(new GmailEmail);
        return redirect()->route('candidats.profils.profil');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExperienceModel $experience)
    {
        return view('candidats.experiences.show', ['experience' => $experience]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExperienceModel $experience)
    {
        //
        return view('candidats.experiences.edit', ['experience' => $experience]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExperienceModel $experience)
    {
        
        $experience->moisDebut = $request->input('mois-debut');
        $experience->anneeDebut = $request->input('annee-debut');
        $experience->moisFin = $request->input('mois-fin');
        $experience->anneeFin = $request->input('annee-fin');
        $experience->anneeExperience = $request->input('anneeExperience');
        $experience->societe = $request->input('societe');
        $experience->posteExperience = $request->input('posteExperience');
        $experience->descriptionExperience = $request->input('descriptionExperience');
        $experience->save();
        return redirect()->route('candidats.profils.profil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExperienceModel $experience)
    {
        //
        $experience ->delete();
        return redirect()->route('candidats.profils.profil');
    }
}
