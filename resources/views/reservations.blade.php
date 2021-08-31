@extends('welcome')

@section('content')
<h3 class="page-title">Listes de reservations</h3>
@foreach ($reservations as $r )

<div>
    <p>Reservation pour le {{$r->reservationDate}}</p>
</div>

@endforeach
@endsection
