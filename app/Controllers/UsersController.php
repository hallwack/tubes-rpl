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

		$usersModel->insert([
			'user_name' => $this->request->getPost('name'),
			'user_phone_number' => $this->request->getPost('phone_number'),
			'user_address' => $this->request->getPost('address'),
			'user_level' => $this->request->getPost('level'),
			'user_email' => $this->request->getPost('email'),
			'user_password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
		]);

		return redirect()->to('index');
	}

	public function edit($id)
	{
		$usersModel = new UsersModel();

		$users = $usersModel->getIdUser($id);
		$data = [
			'title' => 'Edit User',
			'users' => $users
		];

		return view('admin/users/edit', $data);
	}

	public function update($id)
	{
		$usersModel = new UsersModel();

		$usersModel->save([
			'user_id' => $id,
			'user_name' => $this->request->getPost('name'),
			'user_phone_number' => $this->request->getPost('phone_number'),
			'user_address' => $this->request->getPost('address'),
			'user_level' => $this->request->getPost('level'),
			'user_email' => $this->request->getPost('email')
		]);

		return redirect()->to('/admin/users/index');
	}

	public function delete($id)
	{
		$usersModel = new UsersModel();

		$usersModel->delete($id);
		return redirect()->to('/admin/users/index');
	}
}
