<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
    	'plan_id', 'user_id', 'rate_point', 'rate_at'
    ];
}
