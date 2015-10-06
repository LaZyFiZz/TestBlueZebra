<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/**
	* Validation rules
	* @var array
	*/
	public $rules = array(
		'firstname' => 'required',
		'lastname'  => 'required',
		'email'      => 'required|email',
		'birthday' => 'required|date_format:Y-m-d'
	);

	public $layout = 'layouts.main';

	public function index()
	{
		$users = User::all();
		$this->layout->nest('content', 'home.main', array('users' => $users));
	}

	public function edit($id)
	{
		$user = User::find($id);
		$this->layout->nest('content', 'home.update', array('user' => $user));
	}

	public function update($id)
	{
		$validator = Validator::make(Input::except('_method', '_token'), $this->rules);

		if ($validator->fails())
		{
			$messages = $validator->messages();
			return Redirect::to('home/'.$id.'/edit');
		}
		else
		{
			$user = User::find($id);
			$user->fill(Input::except('_method', '_token'));
			try
			{
				$user->save();
				return Redirect::to('home');
			}
			catch(Exeption $e)
			{
				return Redirect::to('home/'.$id.'/edit');
			}
		}
	}

	public function destroy($id)
	{
		$user = User::find($id);
		try
		{
			$user->delete();
			return;
		}
		catch(Exeption $e)
		{
			return;
		}
	}

	public function create()
	{
		$this->layout->nest('content', 'home.update');
	}

	public function store()
	{
		$validator = Validator::make(Input::except('_method', '_token'), $this->rules);

		if ($validator->fails())
		{
			$messages = $validator->messages();
			return Response::json($validator);
		}
		else
		{
			$user = new User();
			$user->fill(Input::except('_method', '_token'));
			try
			{
				$user->save();
				return Redirect::to('home');
			}
			catch(Exeption $e)
			{
				return Redirect::to('home');
			}
		}
	}
}
