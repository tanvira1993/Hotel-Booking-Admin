<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Divisions extends Model
{

	protected $primaryKey = 'division_id';
	protected $table = 'divisions';
	public $timestamps = false;

}
