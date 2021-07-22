<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
    protected $fillable = [
        'string'
    ];

    public static function out($string)
    {
        $output = array();
        $unique = array_unique( str_split($string) );

        foreach ($unique as $letter) {
            if ($letter == " ")
                continue;

            array_push($output, [
                "symbol" => $letter,
                "times" => substr_count($string, $letter),
                "data" => self::getData($string, $letter)
            ]);
        }

        return $output;
    }

    private static function getData($string, $letter)
    {
        $before = "before: ";
        $after = "after: ";
        $distance = "";

        $counter = 0;
        $maxDistance = 0;
        $distanceCounter = 0;
        foreach (str_split($string) as $character) {

            if ($character == $letter) {
                if ($distanceCounter == 0) {
                    $distanceCounter++;
                }
                else {
                    $maxDistance = $distanceCounter;
                }
                $before .= (isset($string[$counter+1]) ? (($string[$counter+1] == " ") ? "space" : $string[$counter+1]) : "none") . ",";
                $after .= (($counter-1 >= 0) ? (($string[$counter-1] == " ") ? "space" : $string[$counter-1]) : "none") . ",";
            }
            else {
                if ($distanceCounter > 0) {
                    $distanceCounter++;
                }
            }

            $counter++;
        }
        $before = substr($before, 0, -1);
        $after = substr($after, 0, -1);
        $before .= " ";
        $after .= " ";

        if (substr_count($string, $letter) > 1) {
            $distance = "max-distance: ".($maxDistance - 1)." chars";
        }

        $output = $before.$after.$distance;

        return $output;
    }
}
