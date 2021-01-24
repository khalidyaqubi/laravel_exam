<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $country_id = $request["country_id"] ? $request["country_id"] : "";

        $cities = City::
        when($country_id, function ($query) use ($country_id) {
            return $query->where('country_id', $country_id);
        })->withcount('hospitals')->paginate(5);
        $countries = Country::all();
        return view('home', compact('cities', 'countries'));
    }
}
