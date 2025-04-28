@extends('Layout.recruteur')
@section('title-section')
    Modifier offres
@endsection

@section('content-section')
    <div class="container">
        <div class="page-inner">
            <div class="w-85">
                <h1>Modifier offres</h1>
                <form method="post" action="{{ route('recruteurs.offres.update', $offre) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Titre</label>
                        <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre"
                            value="{{ $offre->titre }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Entreprise</label>
                        <input type="text" class="form-control" name="entreprise" id="entreprise"
                            placeholder="Entreprise" value="{{ $offre->entreprise }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Contrat</label>
                        <input type="text" class="form-control" name="contrat" id="contrat" placeholder="Contrat"
                            value="{{ $offre->contrat }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Localisation</label>
                        <input type="text" class="form-control" name="localisation" id="localisation"
                            placeholder="Localisation" value="{{ $offre->localisation }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Domaine</label>
                        <input type="text" class="form-control" name="domaine" id="domaine" placeholder="Domaine"
                            value="{{ $offre->domaine }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <div id="editor"></div> <!-- Éditeur Quill -->
                        <input type="hidden" name="description" id="hidden-description"
                            value="{{ old('description', $offre->description) }}"> <!-- Stocke le HTML -->
                    </div>
                    <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
                    <a href="{{ route('recruteurs.offres.index') }}" class="btn btn-success">Annuler</a>
                </form>
            </div>
        </div>
    </div>
@endsection
