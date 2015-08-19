<?php namespace App\Services;

use App\Students;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'school_id' =>'required|max:15|unique:students',
			'lastname' => 'required|max:25',
			'firstname' => 'required|max:25',
			'middlename' => 'required|max:25',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
			return Students::create([
				'school_id' => $data['school_id'],
				'lastname' => $data['lastname'],
				'firstname' => $data['firstname'],
				'middlename' => $data['middlename'],
				'password' => bcrypt($data['password']),
			]);
	
		
	}

}
