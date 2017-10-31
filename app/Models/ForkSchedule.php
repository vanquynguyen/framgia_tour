<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForkSchedule extends Model
{
    protected $fillable = [ 
    	'fork_id', 'service_id', 'start_at', 'end_at', 'date', 'title', 'price', 'description',
    ];
}
