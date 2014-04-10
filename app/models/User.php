<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	//We're adding a mutator to our User.php model - we spcify that before a field is saved we will Hash it
	//the convention is the same for any field attribute. ex: setUsernameAttribute
	public function setPasswordAttribute($value)
	{
		//this will update all attributes 
		$this->attributes['password'] = Hash::make($value);
	}

	public function tasks()
	{
		//we must use the class name that we specified in the other model
		return $this->hasMany('Task');

	}

}