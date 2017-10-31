<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'email', 'password', 'avatar', 'gender', 'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = ['level'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function rates() {
        return $this->hasMany(Rate::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function forks() {
        return $this->hasMany(Fork::class);
    }

    public function plans() {
        return $this->hasMany(Plan::class);
    }
}
