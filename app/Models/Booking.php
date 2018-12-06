<?php

namespace App\Models;

use App\Models\BaseModel;

class Booking extends BaseModel
{
    //
    public function statusList(){
        return array(
            'pending'=>'Pending',
            'confirmed'=>'Confirmed',
            'canceled'=>'Canceled',
            'deleyed'=>'Delayed',
            'complete'=>'Complete'
        );
    }

}