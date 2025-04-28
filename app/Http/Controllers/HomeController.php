<?php

namespace App\Http\Controllers;

use App\Models\OffresModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
   public function home() {
    $offres = OffresModel::where('status', 'validée')->get();
    return view('index', ['offresView' => $offres]);
   }
   
}
