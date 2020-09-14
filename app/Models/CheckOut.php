<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rule_name', 'checkOut_time', 
    ];
}
