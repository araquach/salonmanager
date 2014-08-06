<?php

class Person extends Eloquent {
	
	public static $unguarded = true;
	
	public function staff() {
		$this->hasOne('Staff');
	}

}