<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    $fillable = [
    	'user_id', 'title', 'content', 'summary',
    ];
}
