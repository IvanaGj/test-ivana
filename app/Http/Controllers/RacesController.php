<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RacesController extends Controller
{
    public function index()
    {
        $races = Race::all();
        $data = ['races' => $races];

        return view('race.index')->with($data);
    }

    public function create(Race $race)
    {
        $data = ['race' => $race];
        return view('race.create')->with($data);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Race::create([
           'date_of_race' => Carbon::parse($data['date_of_race']),
           'race_name' => $data['race_name']
        ]);

        return redirect()->route('races.index');
    }
}
