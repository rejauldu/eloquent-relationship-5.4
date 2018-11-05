<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //Returns users of this country
	public function users() {
		return $this->hasMany(User::class);
	}
	
	//Returns articles of the total user of this country.
	//Country>User>Article
	public function articles() { 
		return $this->hasManyThrough(Article::class, User::class, 'country_id', 'user_id') ;
	}
	
}
