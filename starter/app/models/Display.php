<?php

use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Display extends Eloquent implements RemindableInterface {

	use RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'displays';

	protected $fillable = array('id', 'teamname', 'project_name', 'team_members', 'type', 'content', 'user_id', 'url1', 'url2', 'url3');

}
