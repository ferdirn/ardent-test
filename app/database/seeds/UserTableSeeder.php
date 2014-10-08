<?php

class UserTableSeeder extends Seeder {

  public function run()
  {
  	DB::table('users')->delete();

  	$user = User::create(array(
  		'email' => 'ferdirn@gmail.com',
  		'password' => Hash::make('ardent'),
  		'name' => 'Ferdi Ramdhon',
  		'phone' => '083812199777'
  	));
  }

}