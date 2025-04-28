<?php

namespace App\Http\Controllers;

use App\Models\OffresModel;
use App\Models\ProfilModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Auth::user());:voir le contenu
        //Creation user
        // User::create([
        //     'name' => 'Jinah',
        //     'email' => 'jinahdev777@gmail.com',
        //     'password' => Hash::make('admin')
        // ]);
        $totalRecruteurs = User::where('role', 'recruteur')->count();
        $totalCandidats = User::where('role', 'candidat')->count();
        $totalOffres = OffresModel::count();
        $totalProfils = ProfilModel::count();

        return view('admin.index', compact('totalRecruteurs', 'totalCandidats', 'totalOffres', 'totalProfils'));

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
    public function show(string $id)
    {
        //
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
