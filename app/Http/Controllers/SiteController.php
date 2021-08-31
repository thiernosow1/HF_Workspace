<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Site;


class SiteController extends Controller
{
    public function createSite(Request $request)
    {
        if ($request->method() === 'GET') {
            return view("createSite");
        }

        $name = $request("name");
        $description = $request("description");
        $nbPlaces = $request("nbPlaces");
        // $photo = $name . '_photo';
        // $request->file('photo')->store($photo);

        $site = new Site(['name' => $name, 'description' => $description, 'nbPlaces' => $nbPlaces]);
        $site->save();

        return view("sites");
    }

    public function allSites()
    {
        return view('sites', ["sites" => Site::all()]);
    }

    public function siteInfo($id)
    {
        return view('site', ['site' => Site::find($id)]);
    }
}
