<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
    	'category_id', 'province_id', 'name', 'price', 'rate', 'description',
    ];
}
