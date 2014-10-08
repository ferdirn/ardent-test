<?php

class ExampleTest extends TestCase {

	public function testHomepage()
	{
		$this->call('GET', '/');

		$this->assertResponseOk();
	}

	public function testLoginpage()
	{
		$this->call('GET', '/login');

		$this->assertResponseOk();
	}

	public function testPostLogin()
	{
		$this->action('POST', 'AuthController@postLogin', array(
				'email'=>'ferdirn@gmail.com',
				'password'=>'ardent'
		));

		$this->assertRedirectedTo('dashboard');
	}

	public function testLogoutpage()
	{
		$this->call('GET', '/logout');

		$this->assertRedirectedTo('login');
	}

}
