@extends('layouts.main')

@section('content')

<div id="holidayPage">

<div class="pageHead holiday">

<?php $this->widget('Admin_holidayWidget'); ?>

<?php $this->widget('Admin_holidayMenu'); ?>

</div> <!--.pageHead holiday-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array('cssFile'=>false),
)); ?>



</div> <!--holidayPage-->

@stop