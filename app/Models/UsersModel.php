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
}
