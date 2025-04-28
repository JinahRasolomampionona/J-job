<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OffresModel;
use Illuminate\Http\Request;

class ValidationOffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $offre = OffresModel::where('status', 'en attente')->get();
        return view('admin.offres.index', ['offresView' => $offre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OffresModel $offre)
    {
        //
        return view('admin.offres.show', ['offresView' => $offre]);
    }

    public function valider(OffresModel $offre)
    {
        $offre->status = 'validée';
        $offre->save();

        return redirect()->back()->with('message', 'Offre validée');
    }

    public function refuser(OffresModel $offre)
    {
        $offre->status = 'refusée';
        $offre->save();

        return redirect()->back()->with('message', 'Offre refusée');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
