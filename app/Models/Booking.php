<?php

namespace App\Models;

use App\Models\BaseModel;

class Booking extends BaseModel
{
    //
    public function statusList()
    {
        return array(
            'pending' => 'Pending',
            'confirmed' => 'Confirmed',
            'canceled' => 'Canceled',
            'deleyed' => 'Delayed',
            'complete' => 'Complete'
        );
    }

    public function getDistance()
    {
        return $this->distanceMiles();
    }

    /**
     * 
     */
    public function distanceMiles()
    {
        return $this->calculateDistance($this->from_lat, $this->from_lng, $this->to_lat, $this->to_lng, 'M');
    }
    /**
     * 
     */

    public function distanceKilometers()
    {
        return $this->calculateDistance($this->from_lat, $this->from_lng, $this->to_lat, $this->to_lng, 'K');
    }
    /**
     * 
     */
    public function calculateDistance($lat1, $lon1, $lat2, $lon2, $unit)
    {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
            return 0;
        } else {
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            $value = 0;

            if ($unit == "K") {
                $value = ($miles * 1.609344);
            } else if ($unit == "N") {
                $value = ($miles * 0.8684);
            } else {
                $value = $miles;
            }

            return number_format($value, 2);
        }
    }



}