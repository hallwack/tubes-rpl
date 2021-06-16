<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = 'user_id';
	protected $useAutoIncrement     = true;

	protected $useSoftDeletes       = false;
	protected $allowedFields        = ['user_name', 'user_phone_number', 'user_address', 'user_level', 'user_email', 'user_password'];

	protected $useTimestamps        = true;

	public function getIdUser($id = null)
	{
		return $this->where('user_id', $id)->first();
	}

	public function login($email, $password)
	{
		$session = \Config\Services::session();

		$query = $this->db->table('users')->where('user_email', $email);
		$result = $query->get()->getRowArray();

		if ($result) {
			$isPasswordTrue = password_verify($password, $result['user_password']);
			$isAdmin = $result['user_level'] == 'Admin';
			$isUser = $result['user_level'] == 'User';

			if ($isPasswordTrue && $isAdmin) {
				$session_data = [
					'id'	=> $result['user_id'],
					'name'	=> $result['user_name'],
					'address' => $result['user_address'],
					'phone_number' => $result['user_phone_number'],
					'email' => $email,
					'level' => $result['user_level'],
				];

				$session->set($session_data);
				return redirect()->to('/admin');
			}

			if ($isPasswordTrue && $isUser) {
				$session_data = [
					'id'	=> $result['user_id'],
					'name'	=> $result['user_name'],
					'address' => $result['user_address'],
					'phone_number' => $result['user_phone_number'],
					'email' => $email,
					'level' => $result['user_level'],
				];

				$session->set($session_data);
				return redirect()->to('/');
			}
		}

		return $session->setFlashdata('errors', 'Data User Tidak Ditemukan');
	}
}
