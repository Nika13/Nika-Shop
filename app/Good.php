<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $fillable=[
		'name', 'cost', 'category', 'description', 'picture', 'user_id', 'cat_id'
	];
}
