<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'department',  'position', 'address', 'contact', 'checkIn_time', 'checkOut_time',
    ];
}
