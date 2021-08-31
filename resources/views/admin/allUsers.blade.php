@extends('welcome')

@section('content')

<section>
    {{-- Section contenant toute la liste de sites --}}
    @foreach ($users as $user )
    <div class="users">
        <p>Nom : {{$user->name}}  {{$user->firstname}}</p>
        <p> Email :  {{$user->email}}</p>
        <p>Inscrit depuis {{$user->created_at}}</p>
        <a href={{"/admin/users/" . $user->id . "/delete"}}> <button class="buttonSupprimer"> Supprimer </button></a>
    </div>

    @endforeach

</section>
@endsection
