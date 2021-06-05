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

	public function create()
	{
		$data = [
			'title' => 'Create User'
		];

		return view('admin/users/create', $data);
	}

	public function save()
	{
		$usersModel = new UsersModel();

		dd([
			'name' => $this->request->getPost('name'),
			'phone_number' => $this->request->getPost('phone_number'),
			'address' => $this->request->getPost('address'),
			'level' => $this->request->getPost('level'),
			'email' => $this->request->getPost('email'),
			'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
		]);
	}

	// TODO: Data buat edit belum keambil cuy!
	public function edit($id)
	{
		// $usersModel = new UsersModel();

		// $users = $usersModel->getIdUser($id);
		// $data = [
		// 	'title' => 'Edit User',
		// 	'users' => $users
		// ];

		// return view('admin/users/edit', $data);
	}

	public function update()
	{
	}
}
