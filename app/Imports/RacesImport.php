<?php

namespace App\Imports;

use App\Models\RaceResult;
use Maatwebsite\Excel\Concerns\ToModel;

class RacesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public $raceId;

    public function __construct($raceId)
    {
        $this->raceId = $raceId;
    }

    public function model(array $row)
    {
        return new RaceResult([
            "full_name" => $row[0],
            "distance" => $row[1],
            "time" => $row[2],
            "race_id" => $this->raceId
        ]);
    }
}
