@extends('welcome')

@section('content')
<section class="site">

    <h2>{{$site->name}}</h2>
    <div class="imageSite">
        <img src="/img/lille_flandres.jpg"/>
    </div>
    <div>
        <img src="" alt=""/>
        <img src="" alt=""/>
        <p>Nombre de places : {{$site->nbPlaces}}</p>
    </div>

    <p>{{$site->description}}</p>

    <a class="buttonReserver" href="/fullcalender">Réserver une place</a>

{{-- <h2></h2>
<<img src="" alt=""/>


<p>
    {{-- Description du site
</p>

 <button>Réserver une place</button>  --}}


</section>
@endsection
