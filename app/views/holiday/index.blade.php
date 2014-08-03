@extends('layouts.main')

@section('content')

<div id="holidayPage">

<div class="pageHead holiday">

<nav>
<ul>
<li>{{ HTML::link('/holiday/create', "Book Holiday") }}</li>
</ul>
</nav>

@include('widgets.holiday')

</div> <!--.pageHead holiday-->

@foreach($holidays as $holiday)

<div class="view @if($holiday->approved == 1) 
						unapproved 
					@elseif($holiday->approved == 2) 
						approved 
					@else 
						pending 
					@endif" >
					
	
	<a href="{{ action('HolidayController@showView', $holiday->id) }}"></a>
	<b>Requested:</b> 
	{{ $holiday->hours_requested }} {{-- hour converter function --}}
	<br />

	<b>From:</b> 
	{{ $holiday->request_date_from->toFormattedDateString() }} {{-- use date formatter --}}
	<br />

	<b>To:</b> 
	{{ $holiday->request_date_to->toFormattedDateString() }} {{-- use date formatter --}}
	<br />
	
	@if($holiday->id == 1) 
	 	<img src="{{ asset('/images/icons/icons_1xsat.png') }}" />
	@elseif($holiday->id == 2) 
		<img src="{{ asset('/images/icons/icons_2xsat.png') }}" />
	@endif
	
	@if($holiday->prebooked ==1) 
		<img src="{{ asset('images/icons/pb-11.png') }}">
	@endif
</div>

@endforeach

</div> <!--holidayPage-->

@stop