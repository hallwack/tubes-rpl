<?php

namespace App\Models;

use CodeIgniter\Model;

class TypeOfPaymentsModel extends Model
{
	protected $table                = 'type_of_payments';
	protected $primaryKey           = 'type_of_payment_id';
	protected $useAutoIncrement     = true;

	protected $useSoftDeletes       = false;
	protected $allowedFields        = ['payment_type'];

	protected $useTimestamps        = true;

	public function getIdPaymentType($id = null)
	{
		return $this->where('type_of_payment_id', $id)->first();
	}

	public function getTypePayments()
	{
		return $this->db->table('type_of_payments')->select('*')->get();
	}
}
