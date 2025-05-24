<?php

namespace App\Http\Controllers\Recruiters;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferFormRequest;
use App\Models\Offers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferListController extends Controller
{
    public function index()
    {

        // $offre = Offres::all();
        $offre = Offers::where('user_id', Auth::id())->get();     
        return view('recruiters.offers.index', ['offresView' => $offre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('recruiters.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OfferFormRequest $request)
    {
        //
        $offre = new Offers();
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
        return redirect()->route('recruiters.offers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offers $offre)
    {
        return view('recruiters.offers.show', ['offre' => $offre]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offers $offre)
    {
        return view('recruiters.offers.edit', ['offre' => $offre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OfferFormRequest $request, Offers $offre)
    {
        $offre->titre = $request->input('titre');
        $offre->entreprise = $request->input('entreprise');
        $offre->contrat = $request->input('contrat');
        $offre->localisation = $request->input('localisation');
        $offre->domaine = $request->input('domaine');
        $offre->description = $request->input('description');
        $offre->save();
        return redirect()->route('recruiters.offers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offers $offre)
    {
        
        $offre ->delete();
        return redirect()->route('recruiters.offers.index');
    }
}
