<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;


//use Illuminate\Http\Request;
use Request;

use App\Students;
use App\Teachers;
use App\User;

class UserController extends Controller {


/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('users.login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('users.register');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();

		// $student = new Students;
		// $student->school_id = $input['school_id'];
		// $student->lastname = $input['lastname'];
		// $student->firstname = $input['firstname'];
		// $student->middlename = $input['middlename'];
		// $student->password = $input['password'];
		// $student->save();

		//dd($input);

		Students::create($input);

		$user = new User;
		$user->school_id = $input['school_id'];
		$user->password = $input['password'];
		$user->status = "0"; 
		$user->save();

		return $input;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	
}
