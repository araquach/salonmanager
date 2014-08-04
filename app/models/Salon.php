<?php

class Salon extends Eloquent {
	
	public static $unguarded = true;
	
	public function staff() {
		$this->hasMany('staff');
	}

}