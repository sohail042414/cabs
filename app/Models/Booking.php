<?php

namespace App\Models;

use App\Models\BaseModel;

class Booking extends BaseModel
{
    
    // protected $dates = [
    //     'booking_date',
    // ];

    //protected $dateFormat = 'Y-m-d h:i';

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


    public function modeList()
    {
        return array(
            'one_way' => 'One Way',
            'two_way' => 'Two Way',
        );
    }

    public function cab()
    {
        return $this->belongsTo('App\Models\Cab');
    }


    public function driver()
    {
        return $this->belongsTo('App\Models\Driver');
    }

    public function cartype()
    {
        return $this->belongsTo('App\Models\CarType','car_type','type');
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


    public function showBookingFields()
    {

        $data =  [            
            'id' => [
                'title'=>'Booking Id',
                'value'=>$this->id,
            ],
            'status' => [
                'title'=>'Status',
                'value'=> ucfirst($this->status),
            ],
            'date' => [
                'title'=>'Date',
                'value'=>date('Y-m-d',strtotime($this->booking_date)),
                //'value'=>$this->booking_date,
            ],
            'time' => [
                'title'=>'Time',
                'value'=>$this->booking_time
            ],
            'from_address' => [
                'title'=>'From',
                'value'=>$this->from_address,
            ],
            'to_address' => [
                'title'=>'To',
                'value'=>$this->to_address,
            ]
        ];

        if($this->type =='from_airport' || $this->type == 'to_airport'){
            $data['origin'] = [
                'title'=>'Origin',
                'value'=>$this->origin,
            ];

            $data['flight_no'] = [
                'title'=>'Flight #',
                'value'=>$this->flight_no,
            ];
        }
        
        $data['email'] = [
                'title'=>'Email',
                'value'=>$this->email,
            ];
            $data['phone'] = [
                'title'=>'Phone',
                'value'=>$this->phone,
            ];
            $data['car_type'] = [
                'title'=>'Car Type',
                'value'=>$this->cartype->title,
            ];
            $data['rate'] = [
                'title'=>'Rate',
                'value'=> config('settings.currency_symbol').$this->rate."/mi",
            ];          
            $data['distance'] = [
                'title'=>'Distance',
                'value'=> $this->distance."mi",
            ];
            $data['fare'] = [
                'title'=>'Fare',
                'value'=> config('settings.currency_symbol').$this->amount,
            ];


        return $data;
    }

    public function showCabFields()
    {
        return array(
            'type' => 'Type',
            'name' => 'Name',
            'model' => 'Model',
            'reg_number' => 'Registration Number',
            'brand' => 'Brand',
        );
    }


    public function showDriverFields()
    {
        return array(
            'name' => 'Driver Name',
            'email' => 'Driver Email',
        );
    }


}