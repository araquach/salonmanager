@extends('layouts.main')

@section('content')

<div id="staffPage" class="group">

<div class="menuBox wide holiday" id="holiday">

@include('widgets.admin.holiday')

<a href="{{ url('/holiday/index') }}"><h2>Holidays</h2></a>
</div> <!--end holiday-->

</div> <!--end staffPage-->


@stop