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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	/*
	Find user's address
	*/
	public function address() {
		return $this->hasOne(Address::class);
	}
	
	/*
	Find user's role like admin, moderator, user etc.
	*/
	public function roles() {
		return $this->belongsToMany(Role::class);
	}
	
	/*
	In polymorphic relation the parent tables should have the following method.
	Here, commentable is the method name of comments table.
	*/
	
	public function comments() {
		return $this->morphMany('App\Comment', 'commentable');
	}
}
