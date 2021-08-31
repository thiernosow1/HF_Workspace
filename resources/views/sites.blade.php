@extends('welcome')

@section('content')

{{-- @foreach ($users as $u )
<p>{{$u->name}} </p>
@endforeach --}}
<form class="form-search" method="GET" action="">
    <div class="section-search">
        <label for="site-search"></label>
        <input type="search" id="search" name="search" placeholder="chercher un lieu">

        <a class="icon-search" href="#"><span class="iconify iconify_nav" data-icon="carbon:search"></span> </a>
</div>
</form>

<section class="sites">
    {{-- Section contenant toute la liste de sites --}}
    @foreach ($sites as $s )
    <a href={{"/sites/" . $s->id}}>
        <div class="background-img">
            {{-- Div par site --}}

            <div class="name-places">
                <h4 class="name">{{$s->name}}</h4>
                <p class="places">{{$s->nbPlaces}}</p>
            </div>
        </div>
    </a>


    @endforeach

</section>
@endsection
