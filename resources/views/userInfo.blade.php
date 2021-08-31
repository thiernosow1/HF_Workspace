@extends('welcome')

@section('content')
<h3 class="page-title">Mon compte</h3>

<p>Vous êtes {{$user->name}}</p>

<a href="/admin/users/{{Session::get('id')}}/delete">Supprimer le compte</a>
@endsection
