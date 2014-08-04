<?php

class Staff extends Eloquent {
	
	public static $unguarded = true;
	
	public function staffRole() {
		$this->belongsTo('StaffRole');
	}
	
	public function Person() {
		$this->belongsTo('Person');
	}
	
	public function salon() {
		$this->belongsTo('Salon');
	}
	
}