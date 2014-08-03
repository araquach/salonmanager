<?php

class HolidayController extends BaseController {

	public function showIndex()
	{
		$holidays = Holiday::where('staff_id', '=', Auth::id())->get();
		return View::make('/holiday/index', compact('holidays'));
	}
	
	public function showView(Holiday $holiday) {
		return View::make('/holiday/view', compact('holiday'));
	}
	
	public function showCreate()
	{
		return View::make('/holiday/create');
	}
	
	public function handleCreate()
	{
		$data = Input::all();
		
		$rules =array(
			'hours_requested' => 'datetime',
			'prebooked' => 'boolean',
			'request_date_from' => 'datetime',
			'request_date_to' => 'datetime',
			'approved' => 'boolean',
			'requested_on_date' => 'datetime',
		);
	
		$holiday = new Holiday;
		$holiday->staff_id = Input::get('staff_id');
		$holiday->hours_requested = Input::get('hours_requested');
		$holiday->prebooked = Input::has('prebooked');
		$holiday->request_date_from = Input::get('request_date_from');
		$holiday->request_date_to = Input::get('request_date_to');
		$holiday->approved = Input::has('approved');
		$holiday->requested_on_date = Input::get('requested_on_date');
		$holiday->save();
		
		return Redirect::action('HolidayController@showIndex');
	}
	
	public function showUpdate(Holiday $holiday)
	{
		return View::make('/holiday/update', compact('holiday'));
	}
	
	public function handleUpdate()
	{
		$holiday = Holiday::findOrFail(Input::get('id'));
		$holiday->hours_requested = Input::get('hours_requested');
		$holiday->prebooked = Input::has('prebooked');
		$holiday->hours_requested = Input::get('hours_requested');
		$holiday->request_date_from = Input::get('request_date_from');
		$holiday->request_date_to = Input::get('request_date_to');
		$holiday->approved = Input::has('approved');
		$holiday->requested_on_date = Input::get('requested_on_date');
		$holiday->save();
		
		return Redirect::action('HolidayController@showIndex');
	}
	
	// Admin
	
	public function showAdminIndex()
	{
		$holidays = Holiday::all();
		return View::make('/holiday/admin/index', compact('holidays'));
	}
	
	public function showAdminView(Holiday $holiday) {
		return View::make('holiday/admin/view', compact('holiday'));
	}
	
	public function showAdminCreate()
	{
		return View::make('/holiday/admin/create');
	}
	
	public function handleAdminCreate()
	{
		$holiday = new Holiday;
		$holiday->staff_id = Input::get('staff_id');
		$holiday->hours_requested = Input::get('hours_requested');
		$holiday->prebooked = Input::has('prebooked');
		$holiday->hours_requested = Input::get('hours_requested');
		$holiday->request_date_from = Input::get('request_date_from');
		$holiday->request_date_to = Input::get('request_date_to');
		$holiday->approved = Input::has('approved');
		$holiday->requested_on_date = Input::get('requested_on_date');
		$holiday->save();
		
		return Redirect::action('HolidayController@showAdminIndex');
	}
	
	public function showAdminUpdate(Holiday $holiday)
	{
		return View::make('/holiday/admin/update', compact('holiday'));
	}
	
	public function handleAdminUpdate()
	{
		$holiday = Holiday::findOrFail(Input::get('id'));
		$holiday->hours_requested = Input::get('hours_requested');
		$holiday->prebooked = Input::has('prebooked');
		$holiday->hours_requested = Input::get('hours_requested');
		$holiday->request_date_from = Input::get('request_date_from');
		$holiday->request_date_to = Input::get('request_date_to');
		$holiday->approved = Input::has('approved');
		$holiday->requested_on_date = Input::get('requested_on_date');
		$holiday->save();
		
		return Redirect::action('HolidayController@showAdminIndex');
	}
}
