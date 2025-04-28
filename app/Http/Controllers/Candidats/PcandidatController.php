<?php

namespace App\Http\Controllers\Candidats;

use App\Http\Controllers\Controller;
use App\Models\OffresModel;
use App\Models\ProfilModel;
use Illuminate\Http\Request;

class PcandidatController extends Controller
{
    public function index() {
        $totalOffres = OffresModel::count();
        $totalProfils = ProfilModel::count();

        return view('candidats.candidat', compact('totalOffres', 'totalProfils'));
    }
}
