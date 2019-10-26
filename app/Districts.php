<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Districts extends Model
{

	protected $primaryKey = 'district_id';
	protected $table = 'districts';
	public $timestamps = false;

}
