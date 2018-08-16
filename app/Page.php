<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

	protected $table = 'page';

  // menyimpan data tanpa timestamps(created_at, updated_at, delete_at)
	public $timestamps = true;

	public function post()
	{
		return $this->belongsTo('App\Post');
	}

	public function subid()
	{
		return $this->belongsTo(Page::class, 'sub_page');
	}
}
