<?php

class AuthController extends \BaseController {

	public function getLogin() {
		return View::make('login');
	}

	public function postLogin() {
		$rules = array(
				'email' => 'required|email',
				'password' => 'required|alphaNum|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::to('/login')->withErrors($validator);
		} else {
			$data = array(
					'email' => Input::get('email'),
					'password' => Input::get('password')
			);

			if(Auth::attempt($data, false)) {
				return Redirect::to('dashboard');
			} else {
				return View::make('login')->withErrors(array('Authentication fails!'));
			}
		}
	}

	public function getDashboard() {
		return View::make('dashboard');
	}

	public function getLogout() {
		Auth::logout();
		return Redirect::to('/login');
	}

}