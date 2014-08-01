<?php

class UserController extends BaseController {
	
	
	public function showCreate()
	{
		return View::make('/user/create');
	}
	
	public function handleCreate()
	{
		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->email = Input::get('email');
		$user->save();
		
		return Response::make('User Created!');
	}
	
}