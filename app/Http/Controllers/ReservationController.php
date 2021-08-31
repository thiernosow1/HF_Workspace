<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{

    public function createReservation(Request $request)
    {
        $reservationDate = $request("reservationDate");
        $userId = $request("userId");
        $siteId = $request("siteId");
        $placeId = $request("placeId");

        $reservation = new Reservation(['reservationDate' => $reservationDate, 'user_id' => $userId, 'site_id' => $siteId, 'place_id' => $placeId]);
        $reservation->save();
        return redirect($to = '/sites');
    }

    public function allReservations()
    {
        return view('reservations', ["reservations" => Reservation::all()]);
    }

    public function userReservations($id)
    {
        $reservations = Reservation::where('user_id', '=', $id);
        return view('userReservations', ["reservations" => $reservations]);
    }

    public function reservationInfo($id)
    {
        return view('reservation', ["reservation" => Reservation::find($id)]);
    }

    public function deleteReservation($id)
    {
        Reservation::find($id)->delete();
        return redirect($to = '/somewhere'); // TODO: redirect to user reservations
    }
}
