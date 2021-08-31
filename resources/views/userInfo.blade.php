@extends('welcome')

@section('content')
<h3 class="page-title">Mon compte</h3>

<p class="compteP">Nom : <span class="alignRight">{{$user->name}}</span></p>
<p class="compteP">Prenom : <span class="alignRight">{{$user->firstname}}</span></p>
<p class="compteP">Email : <span class="alignRight">{{$user->email}}</span></p>
<p class="compteP">Numéro de télephone : <span class="alignRight">{{$user->phone}}</span></p>


<a href="/admin/users/{{Session::get('id')}}/delete">Supprimer le compte</a>
@endsection
