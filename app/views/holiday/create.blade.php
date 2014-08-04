@extends('layouts.main')

@section('content')

<script>
  $(function() {
    $( ".datepicker" ).each(function(){
    	$(this).datepicker();
    })
  });
</script>


<div class="form holiday">

<form action="{{ action('HolidayController@handleCreate') }}" method="post" role="form">

@if($errors->any())
	<div class="errorSummary">
		<p>Please fix the following input errors</p>
		<ul>
		@foreach($errors->all() as $message)
			<li>{{ $message }}</li>
		@endforeach
		</ul>
	</div> <!--errorSummary-->
@endif

<input type="hidden" name="staff_id" value="{{ Auth::id() }}" />

<div>
<label for="hours_requested">Hours Requested</label>
<input type="text" name="hours_requested" />
</div>

<div>
<label for="prebooked">
	<input type="checkbox" name="prebooked" />Prebooked?
</label>
</div>

<div>
<label for="request_date_from">Request Date From</label>
<input type="text" class="" name="request_date_from" />
</div>

<div>
<label for="request_date_to">Request Date to</label>
<input type="text" class="" name="request_date_to" />
</div>

<div>
<label for="approved">
	<input type="checkbox" name="approved" />Approved?
</label>
</div>

<div>
<label for="requested_on_date">Requested on date</label>
<input type="text" name="requested_on_date" />
</div>

<div class="row buttons">
<input type="submit"  value="create" />
<a href="{{ action('HolidayController@showIndex') }}">Cancel</a>
</div>

</form>


</div> <!--.form holiday-->

@stop