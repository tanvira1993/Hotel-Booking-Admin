<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Blogs extends Model
{

	protected $primaryKey = 'blog_id';
	protected $table = 'blogs';
	public $timestamps = false;

}
