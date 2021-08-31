<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function home()
    {
        //$photos = Photo::all(); // SELECT * from photos
        return view("home");
    }

    public function dashboard()
    {
        return view("admin/dashboard");
    }
}
