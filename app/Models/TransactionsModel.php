<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionsModel extends Model
{
	protected $table                = 'transactions';
	protected $primaryKey           = 'transaction_id';
	protected $useAutoIncrement     = true;

	protected $useSoftDeletes       = true;
	protected $allowedFields        = [];

	protected $useTimestamps        = true;

	public function getTransactionWithUserAndPaymentType()
	{
		$builder = $this->db->table('transactions');

		$builder->select('transactions.*, users.user_name, type_of_payments.payment_type')
			->join('users', 'transactions.user_id = users.user_id')
			->join('type_of_payments', 'transactions.type_of_payment_id = type_of_payments.type_of_payment_id');

		return $builder->get();
	}
}
