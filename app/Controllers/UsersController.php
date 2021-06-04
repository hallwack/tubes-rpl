<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class UsersController extends BaseController
{
	public function index()
	{
		$usersModel = new UsersModel();

		$users = $usersModel->findAll();

		$data = [
			'title' => 'User',
			'users' => $users
		];

		return view('admin/users/index', $data);
	}
}
