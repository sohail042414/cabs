<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Driver extends Model
{
    //
    protected $table = 'users';

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('driver', function (Builder $builder) {
            $builder->where('type', '=', 'driver');
        });
    }
}
