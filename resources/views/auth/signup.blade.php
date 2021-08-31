@extends('welcome')

@section('content')
<h3 class="page-title">Inscription</h3>

<form class="login-form" method="POST" action="/signup">
    @csrf
    <div class="input">
        <label hidden for="name">Nom</label>
        <input type="text" id="name" name="name" placeholder="Nom" required/>
    </div>

    <div class="input">
        <label hidden for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname" placeholder="Prénom" required/>
    </div>
    <div class="input">
        <label hidden for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" required/>
    </div>
    <div class="input">
        <label hidden for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Mot de passe" required/>
    </div>

    <div class="input">
        <label hidden for="phone">Téléphone</label>
        <input type="tel" id="phone" name="phone" maxlength="10" minlength="10" placeholder="Numéro de téléphone" required/>
    </div>

    <label for="remember">se souvenir de moi</label>
    <input type="checkbox" id="remember" name="remember"/>


    <button class="button" type="submit">Inscription</button>

</form>
@endsection
