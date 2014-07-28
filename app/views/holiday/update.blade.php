@extends('layouts.main')

@section('content')


<div class="form holiday">

<form action="{{ action('HolidayController@handleUpdate') }}" method="post" role="form">

<input type="hidden" name="id" value="{{ $holiday->id }}" />

<div>
<label for="staff_id">Staff Id</label>
<input type="text" name="staff_id" value="{{ $holiday->staff_id }}" />
</div>

<div>
<label for="hours_requested">Hours Requested</label>
<input type="text" name="hours_requested" value="{{ $holiday->hours_requested }}"/>
</div>

<div>
<label for="prebooked">
	<input type="checkbox" name="prebooked" {{ $holiday->prebooked ? checked : '' }}" />Prebooked?
</label>
</div>

<div>
<label for="request_date_from">Request Date From</label>
<input type="text" name="request_date_from" value="{{ $holiday->request_date_from }}" />
</div>

<div>
<label for="request_date_to">Request Date to</label>
<input type="text" name="request_date_to" value="{{ $holiday->request_date_to }}" />
</div>

<div>
<label for="approved">
	<input type="checkbox" name="approved" {{ $holiday->approved ? checked : '' }}/>Approved? 
</label>
</div>

<div>
<label for="requested_on_date">Requested on date</label>
<input type="text" name="requested_on_date" value="{{ $holiday->requested_on_date }}" />
</div>


<input type="submit"  value="Save" />
<a href="{{ action('HolidayController@showIndex') }}">Cancel</a>
</form>


</div> <!--.form holiday-->

@stop