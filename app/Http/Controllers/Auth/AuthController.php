<?php

namespace App\Http\Controllers;

class AuthController extends Controller {
	protected function create(array $data){
		$thema="�� ������������������  �� ����� site.by"
		$body=<<<BODY html-��� BODY;
		$body=
		'��� �����'.$data['name'].'\n';
		'��� ������ '.$data['password']. '/n';
		mail($data['email'],$thema,$body);    

		return User::create([
		'name' => $data['name'],
		'email' => $data['email'],
		'password' => bcrypt($data['password']),
		]);
	}
}