@extends('Layout.recruteur')
@section('title-section')
    Creation offres
@endsection


@section('content-section')
    <div class="container">
        <div class="page-inner">
            <div class="w-85">
                <h1>Inserer des offres</h1>
                <form method="post" action="{{ route('recruteurs.offres.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Titre</label>
                        <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Entreprise</label>
                        <input type="text" class="form-control" name="entreprise" id="entreprise"
                            placeholder="Entreprise" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Contrat</label>
                        <input type="text" class="form-control" name="contrat" id="contrat" placeholder="Contrat"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Localisation</label>
                        <input type="text" class="form-control" name="localisation" id="localisation"
                            placeholder="Localisation" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Domaine</label>
                        <input type="text" class="form-control" name="domaine" id="domaine" placeholder="Domaine"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <div id="editor"></div> <!-- Éditeur Quill -->
                        <input type="hidden" name="description" id="hidden-description" required> <!-- Stocke le HTML -->
                    </div>
                    <button type="submit" class="btn btn-primary" name="inserer">Inserer</button>
                    <a href="{{ route('recruteurs.offres.index') }}" class="btn btn-success">Annuler</a>
                </form>
            </div>
        </div>
    </div>
@endsection
