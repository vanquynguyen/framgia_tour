<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestService extends Model
{
    protected $fillable = [
    	'category_id', 'province_id', 'user_id', 
    	'name', 'address', 'open_time', 'price', 'status'
    ];
}
