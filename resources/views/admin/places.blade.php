@extends('welcome')

@section('content')

<a href="/admin/places/create"> <button> Ajouter une place </button></a>

<section>
    {{-- Section contenant toute la liste de sites --}}
    @foreach ($places as $place )
    <p>Place Numéro : {{$place->id}}</p>
    <a href={{"/admin/places/" . $place->id . "/delete"}}> <button> Supprimer </button></a>

    @endforeach

</section>
@endsection
