<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cab extends Model
{
    //

    public function statusList()
    {
        return array(
            'free' => 'Free',
            'booked' => 'Booked',
            'suspended' => 'Suspended'
        );
    }
}
