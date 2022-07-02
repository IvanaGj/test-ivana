<?php

namespace App\Http\Controllers;

use App\Imports\RacesImport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\RaceResult;
use App\Models\Race;

class ResultsController extends Controller
{
    public function index($id)
    {

        $race = Race::FindOrFail($id);

        $raceResultsMedium = RaceResult::where('distance', '=', 'medium')
            ->where('race_id', '=', $id)
            ->orderBy('time', 'asc')->get();

        $raceResultsLong = RaceResult::where('distance', '=', 'long')
            ->where('race_id', '=', $id)
            ->orderBy('time', 'asc')->get();

        $avrTimeMedium = RaceResult::averageTime('medium');
        $avrTimeLong = RaceResult::averageTime('long');

        $data = [
            'raceResultsMedium' => $raceResultsMedium,
            'raceResultsLong' => $raceResultsLong,
            'avrTimeMedium' => $avrTimeMedium,
            'avrTimeLong' => $avrTimeLong,
            'race' => $race
        ];

        return view('result.index')->with($data);
    }

    public function create($race_id)
    {

        $race = Race::FindOrFail($race_id);
        $data = ['race' => $race];
        return view('result.create')->with($data);
    }

    public function uploadRaces(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'max:10240|required|mimes:csv,xlsx',
        ]);

        if ($validator->fails()) {

            return redirect()->route('results.create', $id)
                ->withErrors($validator)
                ->withInput();
        }

        Excel::import(new RacesImport($id), $request->file);

        return redirect()->route('results.index', $id)
            ->with('success', 'Race Imported Successfully');
    }

    public function edit($id)
    {
        $result = RaceResult::FindOrFail($id);
        $races = Race::all();
        $data = [
            'result' => $result,
            'races' => $races
        ];
        return view('result.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $result = RaceResult::FindOrFail($id);
        $input = $request->all();

        $result->fill($input)->save();

        return redirect()->back();

    }

    public function delete($id)
    {
        $result = RaceResult::FindOrFail($id);
        $result->delete();
        return redirect()->back();

    }
}
