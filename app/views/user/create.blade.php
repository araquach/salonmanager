@extends('layouts.main')

@section('content')



<div class="form staff">

<form action="{{ url('/user/create') }}" method="post">
		
		<div>
			<label for="username">Username:</label>
			<input type="text" name="username" placeholder="Username" />
		</div>
		
		<div>
			<label for="email">Email:</label>
			<input type="text" name="email" placeholder="Email" />
		</div>
		
		<div>
			<label for="password">Password:</label>
			<input type="password" name="password" placeholder="Passwork" />
		</div>
		
		<input type="submit" value="Create" />
	
</form>
	
</div> <!--end form user-->
@stop