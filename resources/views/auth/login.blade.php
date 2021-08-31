@extends('welcome')

@section('content')
<h3 class="page-title">Connexion</h3>

<form class="login-form" method="POST" action="/login">
    @csrf
    <div class="input">
        <label hidden for="email">Email</label>
        <input type="text" name="email" placeholder="Email" required/>
    </div>
    <div class="input">
        <label hidden for="password">Password</label>
        <input type="text" name="password" placeholder="Mot de passe" required/>
    </div>

    <button class="button" type="submit">Connexion</button>

</form>
@endsection
