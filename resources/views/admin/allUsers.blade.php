@extends('welcome')

@section('content')

<section>
    {{-- Section contenant toute la liste de sites --}}
    @foreach ($users as $user )
    <p> {{$user->email}}</p>
    <a href={{"/admin/users/" . $user->id . "/delete"}}> <button> Supprimer </button></a>

    @endforeach

</section>
@endsection
