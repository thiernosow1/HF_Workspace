@extends('welcome')

@section('content')

<h2>Création de site</h2>

<form method="post" action="createSite">
    @csrf
    <div>
        <label hidden for="name">Nom</label>
        <input type="text" name="name" placeholder="Nom du site" />
    </div>

    <div>
        <label hidden for="description">Description</label>
        <input type="text" name="description" placeholder="Description" />
    </div>

    <div>
        <label hidden for="nbPlaces">Nombres de places</label>
        <input type="number" name="nbPlaces" placeholder="10" />
    </div>

    {{-- <div>
        <label for="photo">Selectionner une image pour le site</label>
        <input type="file" name="photo" accept="image/*" />
    </div> --}}

    <button type="submit"> Créer </button>
</form>

@endsection
