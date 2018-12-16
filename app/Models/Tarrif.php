<?php

namespace App\Models;

use App\Models\BaseModel;

class Tarrif extends BaseModel
{
    //
    protected $table = 'car_types';

    public function typeList()
    {
        return array(
            'standard' => 'Standard',
            'business' => 'Business',
            'vip' => 'VIP',
            'van' => 'Van/Mini-bus',
            'bus' => 'Bus'
        );
    }

}