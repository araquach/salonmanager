<?php

class StaffRole extends Eloquent {
	
	public static $unguarded = true;
	
	public function staff() {
		$this->hasMany('Staff');
	}
}