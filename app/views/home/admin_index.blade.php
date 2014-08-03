@extends('layouts.main')

@section('content')

<h2>Manager Menu</h2>

<div id="staffPage" class="group">

<div class="menuBox wide holiday" id="holiday">

@include('widgets.holiday')

<a href="{{ url('admin/holiday/index') }}"><h2>Holidays</h2></a>
</div> <!--end holiday-->

</div> <!--end staffPage-->

@stop