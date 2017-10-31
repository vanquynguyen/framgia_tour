<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
	protected $fillable = [
		'plan_id', 'service_id', 'start_at', 'end_at', 'date', 'title', 'price', 'description',
	];
}
