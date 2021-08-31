<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function createPlace()
    {

        $place = new Place([]);
        $place->save();
        return redirect($to = '/admin/places');
    }

    public function allPlaces()
    {
        return view('admin/places', ["places" => Place::all()]);
    }

    public function deletePlace($id)
    {
        Place::find($id)->delete();
        return redirect($to = '/admin/places');
    }
}
