<?php

namespace App\Http\Controllers;

class AuthController extends Controller {
	protected function create(array $data){
		$thema="Вы зарегистрировались  на сайте site.by"
		$body=<<<BODY html-код BODY;
		$body=
		'Ваш логин'.$data['name'].'\n';
		'Ваш пароль '.$data['password']. '/n';
		mail($data['email'],$thema,$body);    

		return User::create([
		'name' => $data['name'],
		'email' => $data['email'],
		'password' => bcrypt($data['password']),
		]);
	}
}