<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fork extends Model
{
    protected $fillable = [
    	'user_id', 'plan_id', 'price', 'status',
    ];
}
