@extends('layout.base')

@section('content')
    <div class="container">
        <h1 class="mb-4">Détails de la catégorie</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nom :</h5>
                <p class="card-text">{{ $category->name }}</p>

                <h5 class="card-title">Description :</h5>
                <p class="card-text">
                    {{ $category->description ? $category->description : 'Non rempli.' }}
                </p>

                <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
            </div>
        </div>
    </div>
@endsection
