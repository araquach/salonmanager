@extends('layouts.main')

@section('content')


<div class="form holiday">

<form action="{{ action('HolidayController@handleCreate') }}" method="post" role="form">
<div>
<label for="staff_id">Staff Id</label>
<input type="text" name="staff_id" />
</div>

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
<input type="text" name="request_date_from" />
</div>

<div>
<label for="request_date_to">Request Date to</label>
<input type="text" name="request_date_to" />
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