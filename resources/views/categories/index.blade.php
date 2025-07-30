@extends('layout.base')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Liste des Catégories</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Créer une catégorie</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @forelse ($categories as $category)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <p class="card-text">
                    <strong>Description :</strong> {{ $category->description ?? 'Non rempli.' }}
                </p>
                <div class="d-flex gap-2">
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-outline-info btn-sm">Détails</a>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-outline-warning btn-sm">Modifier</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr(e) de vouloir supprimer cette catégorie ? Cette action sera irréversible !')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-secondary">
            Aucune catégorie disponible.
        </div>
    @endforelse
@endsection
