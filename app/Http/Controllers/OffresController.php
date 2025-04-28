<?php

namespace App\Http\Controllers;

use App\Models\OffresModel;
use Illuminate\Http\Request;

class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $offres = OffresModel::all();
        return view('offres.index', ['offresView' => $offres]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('offres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $offres = new OffresModel();
        $offres->titre = $request->input('titre');
        $offres->entreprise = $request->input('entreprise');
        $offres->contrat = $request->input('contrat');
        $offres->localisation = $request->input('localisation');
        $offres->domaine = $request->input('domaine');
        $offres->description = $request->input('description');
        $offres->save();
        // Mail::to($request->user())->send(new GmailEmail);
        return redirect()->route('offres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $offres = OffresModel::find($id);
        return view('offres.show', ['offresView' => $offres]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $offres = OffresModel::find($id);
        return view('offres.edit', ['offresView' => $offres]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $offres = OffresModel::find($id);
        $offres->titre = $request->input('titre');
        $offres->entreprise = $request->input('entreprise');
        $offres->contrat = $request->input('contrat');
        $offres->localisation = $request->input('localisation');
        $offres->domaine = $request->input('domaine');
        $offres->description = $request->input('description');
        $offres->save();
        return redirect()->route('offres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $offres = OffresModel::find($id);
        $offres ->destroy($offres->id);
        return redirect()->route('offres.index');
    }
}
