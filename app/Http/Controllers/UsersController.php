<?php

namespace App\Http\Controllers;

class UsersController extends Controller {
	//返回注册视图
	public function create() {
		return view('users.create');
	}
}
