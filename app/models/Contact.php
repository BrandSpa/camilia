<?php

class Contact extends \Eloquent {

	protected $guarded = array();

    public static $rules = array(
		'name' => 'required',
		'mail' => 'required|email',
		'message' => 'required'
	);
}