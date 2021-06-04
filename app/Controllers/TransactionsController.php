<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransactionsModel;

class TransactionsController extends BaseController
{
	public function index()
	{
		$transactionsModel = new TransactionsModel();

		$transactions = $transactionsModel->getTransactionWithUserAndPaymentType()->getResultArray();

		$data = [
			'title' => 'Transaksi',
			'transactions' => $transactions
		];

		return view('admin/transactions/index', $data);
	}
}
