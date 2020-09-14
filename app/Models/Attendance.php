<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    protected $dates = [
        'in_date', 'out_date'
    ];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employees_id', 'time_in', 'in_date', 'in_status', 'time_out', 'out_date', 'out_status', 'app_user',
    ];
}
