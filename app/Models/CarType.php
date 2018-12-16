<?php

namespace App\Models;

use App\Models\BaseModel;

class CarType extends BaseModel
{
    //

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