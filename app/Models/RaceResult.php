<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'distance',
        'time',
        'race_id'
    ];

    public static function averageTime($filter)
    {
        $times = self::where('distance', '=', $filter)->pluck('time')->toArray();
        if($times) {
            return date('H:i:s', array_sum(array_map('strtotime', $times)) / count($times));
        }
        return null;
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }
}
