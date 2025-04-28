<?php

namespace App\Http\Controllers\Recruteurs;

use App\Http\Controllers\Controller;
use App\Models\OffresModel;
use App\Models\ProfilModel;
use Illuminate\Http\Request;

class PrecruteurController extends Controller
{
    public function index() {
        
        $totalOffres = OffresModel::count();
        $totalProfils = ProfilModel::count();

        return view('recruteurs.recruteur', compact('totalOffres', 'totalProfils'));
    }
}
