<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = 'user_id';
	protected $useAutoIncrement     = true;

	protected $useSoftDeletes       = true;
	protected $allowedFields        = [];

	protected $useTimestamps        = true;

	public function getIdUser($id = null)
	{
		$builder = $this->db->table('users');

		return $builder->getWhere(['user_id' => $id,])->getRow();
	}
}
