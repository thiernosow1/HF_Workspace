<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class FullCalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = Reservation::whereDate('reservationDate', '>=', $request->start)
                ->whereDate('reservationDate',   '<=', $request->end)
                ->get(['id', 'user_id', 'place_id', 'site_id']);

            return response()->json($data);
        }

        return view('fullcalender');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
        var_dump($request->type);
        switch ($request->type) {
            case 'add':
                $reservation = Reservation::create([
                    'user_id' => $request->user_id,
                    'place_id' => $request->place_id,
                    'site_id' => $request->site_id,
                    'reservationDate' => $request->reservationDate,
                ]);

                var_dump($reservation);
                return response()->json($reservation);
                break;

            case 'update':
                $reservation = Reservation::find($request->id)->update([
                    'start' => $request->reservationDate,
                    'end' => $request->end,
                ]);

                return response()->json($reservation);
                break;

            case 'delete':
                $event = Reservation::find($request->id)->delete();

                return response()->json($event);
                break;

            default:
                # code...
                break;
        }
    }
}
