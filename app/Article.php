<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
	public function user() {
		return $this->belongsTo(User::class);
	}
	
	/*
	In polymorphic relation the parent tables should have the following method.
	Here, commentable is the method name of comments table.
	*/
	
	public function comments() {
		return $this->morphMany('App\Comment', 'commentable');
	}
}
