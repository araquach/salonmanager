@extends('layouts.main')

@section('content')

<div id="staffPage" class="group">

<div class="menuBox wide holiday" id="holiday">

@include('widgets.holiday')

{{ HTML::link('/holiday/index', "Holidays") }}
</div>

@stop