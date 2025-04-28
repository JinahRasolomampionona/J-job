<?php

namespace App\Http\Controllers\Candidats;

use App\Http\Controllers\Controller;
use App\Models\OffresModel;
use Illuminate\Http\Request;

class VoiroffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $offres = OffresModel::all();
        $offres = OffresModel::where('status', 'validée')->get();
        return view('candidats.offres.index', ['offresView' => $offres]);
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
        return view('candidats.offres.show', ['offresView' => $offre]);

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
