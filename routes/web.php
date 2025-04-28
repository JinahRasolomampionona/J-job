<?php

use App\Http\Controllers\Admin\CandidatController;
use App\Http\Controllers\Admin\RecruteurController;
use App\Http\Controllers\Admin\ValidationOffreController;
use App\Http\Controllers\Admin\ValidationProfilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Candidats\ExperienceController;
use App\Http\Controllers\Candidats\FormationController;
use App\Http\Controllers\Candidats\PcandidatController;
use App\Http\Controllers\Candidats\ProfilController;
use App\Http\Controllers\Candidats\VoiroffreController;
use App\Http\Controllers\GmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OffresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Recruteurs\ListoffreController;
use App\Http\Controllers\Recruteurs\PrecruteurController;
use App\Http\Controllers\Recruteurs\VoirprofilController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;

Route::get('/dashboard', function () {
    return view('index'); // Optionnel, si aucun rôle ne correspond
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Page d'accueil
Route::get('/', [HomeController::class, 'home'])->name('index');

/*Offres*/
Route::get('/offres', [OffresController::class, 'index'])->name('offres.index');
Route::get('/offre/{id}/detail', [OffresController::class, 'show'])->name('offres.show');
Route::get('/offre/creation', [OffresController::class, 'create'])->name('offres.create');
Route::get('offre/{id}/edition', [OffresController::class, 'edit'])->name('offres.edit');
Route::post('offre/store', [OffresController::class, 'store'])->name('offres.store');
Route::put('offre/{id}/update', [OffresController::class, 'update'])->name('offres.update');
Route::post('offre/{id}/destroy', [OffresController::class, 'destroy'])->name('offres.destroy');

//Route Page Recruteur
Route::get('/Page-recruteur', [PrecruteurController::class, 'index'])->name('recruteurs.recruteur');

Route::get('/recruteurs/offres', [ListoffreController::class, 'index'])->name('recruteurs.offres.index');
Route::get('/recruteurs/offre/{offre}/details', [ListoffreController::class, 'show'])->name('recruteurs.offres.show');
Route::get('/recruteurs/offre/creation-offres', [ListoffreController::class, 'create'])->name('recruteurs.offres.create');
Route::get('/recruteurs/offre/{offre}/editer-offres', [ListoffreController::class, 'edit'])->name('recruteurs.offres.edit');
Route::post('/recruteurs/offre/store', [ListoffreController::class, 'store'])->name('recruteurs.offres.store');
Route::post('/recruteurs/offre/{offre}/update', [ListoffreController::class, 'update'])->name('recruteurs.offres.update');
Route::post('/recruteurs/offre/{offre}/destroy', [ListoffreController::class, 'destroy'])->name('recruteurs.offres.destroy');

Route::get('/recruteur/profils', [VoirprofilController::class, 'index'])->name('recruteurs.profils.index');
Route::get('/recruteur/profil/{user}/details', [VoirprofilController::class, 'show'])->name('recruteurs.profils.show');

//Route Page Candidat
Route::get('/candidat/offres', [VoiroffreController::class, 'index'])->name('candidats.offres.index');
Route::get('/candidat/offre/{offre}/details', [VoiroffreController::class, 'show'])->name('candidats.offres.show');

Route::get('/Page-candidat', [PcandidatController::class, 'index'])->name('candidats.candidat');

// Route Profil
Route::get('/candidats/profils', [ProfilController::class, 'index'])->name('candidats.profils.profil');
Route::get('/candidats/profil/{user}/details', [ProfilController::class, 'show'])->name('candidats.profils.show');
Route::get('/candidats/profil/creation-profils', [ProfilController::class, 'create'])->name('candidats.profils.create');
Route::get('/candidats/profil/{profil}/editer-profils', [ProfilController::class, 'edit'])->name('candidats.profils.edit');
Route::post('/candidats/profil/store', [ProfilController::class, 'store'])->name('candidats.profils.store');
Route::post('/candidats/profil/{profil}/update', [ProfilController::class, 'update'])->name('candidats.profils.update');
Route::post('/candidats/profil/{profil}/destroy', [ProfilController::class, 'destroy'])->name('candidats.profils.destroy');

//Route formation
Route::get('/candidats/formations', [FormationController::class, 'index'])->name('candidats.formations.index');
Route::get('/candidats/formation/{formation}/details', [FormationController::class, 'show'])->name('candidats.formations.show');
Route::get('/candidats/formation/creation-formations', [FormationController::class, 'create'])->name('candidats.formations.create');
Route::get('/candidats/formation/{formation}/editer-formations', [FormationController::class, 'edit'])->name('candidats.formations.edit');
Route::post('/candidats/formation/store', [FormationController::class, 'store'])->name('candidats.formations.store');
Route::post('/candidats/formation/{formation}/update', [FormationController::class, 'update'])->name('candidats.formations.update');
Route::post('/candidats/formation/{formation}/destroy', [FormationController::class, 'destroy'])->name('candidats.formations.destroy');

//Route Experience
Route::get('/candidats/experiences', [ExperienceController::class, 'index'])->name('candidats.experiences.index');
Route::get('/candidats/experience/{experience}/details', [ExperienceController::class, 'show'])->name('candidats.experiences.show');
Route::get('/candidats/experience/creation-experiences', [ExperienceController::class, 'create'])->name('candidats.experiences.create');
Route::get('/candidats/experience/{experience}/editer-experiences', [ExperienceController::class, 'edit'])->name('candidats.experiences.edit');
Route::post('/candidats/experience/store', [ExperienceController::class, 'store'])->name('candidats.experiences.store');
Route::post('/candidats/experience/{experience}/update', [ExperienceController::class, 'update'])->name('candidats.experiences.update');
Route::post('/candidats/experience/{experience}/destroy', [ExperienceController::class, 'destroy'])->name('candidats.experiences.destroy');


//Page Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/recruteurs', [RecruteurController::class, 'index'])->name('admin.recruteurs');
Route::get('/candidats', [CandidatController::class, 'index'])->name('admin.candidats');
Route::delete('/admin/users/{user}', [RecruteurController::class, 'destroy'])->name('admin.recruteurs.destroy');

//Validation offre
Route::get('/admin/offres', [ValidationOffreController::class, 'index'])->name('admin.offres.index');
Route::get('/admin/offre/{offre}/details', [ValidationOffreController::class, 'show'])->name('admin.offres.show');

Route::post('/admin/offre/{offre}/valider', [ValidationOffreController::class, 'valider'])->name('admin.offre.valider');
Route::post('/admin/offre/{offre}/refuser', [ValidationOffreController::class, 'refuser'])->name('admin.offre.refuser');

//Validation Profil
Route::get('/admin/profils', [ValidationProfilController::class, 'index'])->name('admin.profils.index');
Route::get('/admin/profil/{user}/details', [ValidationProfilController::class, 'show'])->name('admin.profils.show');

//Recherche
Route::get('/search', [SearchController::class, 'index'])->name('search.index');

//Email
Route::get('/sendEmail', [GmailController::class, 'send'])->name('gmail.send');



