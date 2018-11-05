<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //In polymorphic relation the common(or child) table will have this method.
	//Here, commentable is the prefix of the two columns of the comments table.
	
	public function commentable() {
		return $this->morphTo();
	}
}
