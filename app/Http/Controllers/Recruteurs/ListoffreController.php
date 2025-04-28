<?php

namespace App\Http\Controllers\Recruteurs;

use App\Http\Controllers\Controller;
use App\Models\OffresModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListoffreController extends Controller
{
    public function index()
    {
        //

        $offre = OffresModel::where('user_id', Auth::id())->get();     
        // $offre = OffresModel::all();
        return view('recruteurs.offres.index', ['offresView' => $offre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('recruteurs.offres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $offre = new OffresModel();
        $offre->titre = $request->input('titre');
        $offre->entreprise = $request->input('entreprise');
        $offre->contrat = $request->input('contrat');
        $offre->localisation = $request->input('localisation');
        $offre->domaine = $request->input('domaine');
        $offre->description = $request->input('description');
        $offre->status = 'en attente';
        $offre->user_id = Auth::id();
        $offre->save();
        // Mail::to($request->user())->send(new GmailEmail);
        return redirect()->route('recruteurs.offres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(OffresModel $offre)
    {
        return view('recruteurs.offres.show', ['offre' => $offre]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OffresModel $offre)
    {
        return view('recruteurs.offres.edit', ['offre' => $offre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OffresModel $offre)
    {
        $offre->titre = $request->input('titre');
        $offre->entreprise = $request->input('entreprise');
        $offre->contrat = $request->input('contrat');
        $offre->localisation = $request->input('localisation');
        $offre->domaine = $request->input('domaine');
        $offre->description = $request->input('description');
        $offre->save();
        return redirect()->route('recruteurs.offres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OffresModel $offre)
    {
        
        $offre ->delete();
        return redirect()->route('recruteurs.offres.index');
    }
}
