<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionsModel extends Model
{
	protected $table                = 'transactions';
	protected $primaryKey           = 'transaction_id';
	protected $useAutoIncrement     = true;

	protected $useSoftDeletes       = true;
	protected $allowedFields        = ['user_id', 'type_of_payment_id', 'transaction_date', 'transaction_total'];

	protected $useTimestamps        = true;

	public function getTransactionWithUserAndPaymentType()
	{
		$builder = $this->db->table('transactions');

		$builder->select('transactions.*, users.user_name, type_of_payments.payment_type')
			->join('users', 'transactions.user_id = users.user_id')
			->join('type_of_payments', 'transactions.type_of_payment_id = type_of_payments.type_of_payment_id');

		return $builder->get();
	}

	public function getDetailTransaction()
	{
		$builder = $this->db->table('detail_transactions');

		$builder->select('detail_transactions.*, transactions.transaction_id, books.book_name, (detail_transactions.quantity_purchased*books.book_price) as total')
			->join('transactions', 'detail_transactions.transaction_id = transactions.transaction_id')
			->join('books', 'detail_transactions.book_id = books.book_id');

		return $builder->get();
	}
}
