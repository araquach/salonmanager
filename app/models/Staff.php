<?php

class Staff extends Eloquent {
	
	public static $unguarded = true;
	
	public function staffRole() {
		$this->belongsTo('StaffRole');
	}
	
	public function person() {
		$this->belongsTo('Person');
	}
	
	public function salon() {
		$this->belongsTo('Salon');
	}
	
	public function user() {
		$this->belongsTo('User');
	}
	
}