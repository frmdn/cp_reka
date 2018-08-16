<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'post';
	protected $fillable=['title','body','sort','pic'];

	public function page()
	{
		return $this->hasMany('App\Post');
	}
}
