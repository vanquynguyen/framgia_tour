<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    $fillable = [
    	'user_id', 'title', 'description', 'start_at', 'end_at', 
    	'rate_average', 'rate_count', 'price', 'status' 
    ];
}
