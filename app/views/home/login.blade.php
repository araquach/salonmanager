@extends('layouts.main')

@section('content')

<div class="form staff">

<form action="{{ url('/login')}}" method="post" >
	
	<div>
		<label for="username">Username:</label>
		<input type="text" name="username" placeholder="Username" />
	</div>
	
	<div>
		<label for="password">Password:</label>
		<input type="password" name="password" placeholder="Password" />
	</div>
	
	<input type="submit" value="Login" />

</form>

</div> <!--form-->

@stop