<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rule_name', 'checkIn_time', 
    ];
}
