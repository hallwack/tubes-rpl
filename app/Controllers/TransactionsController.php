<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DetailTransactionsModel;
use App\Models\TransactionsModel;

class TransactionsController extends BaseController
{
	public function index()
	{
		$transactionsModel = new TransactionsModel();
		$detailTransactionsModel = new TransactionsModel();

		$transactions = $transactionsModel->getTransactionWithUserAndPaymentType()->getResultArray();
		$detailTransactions = $detailTransactionsModel->getDetailTransaction()->getResultArray();

		$data = [
			'title' => 'Transaksi',
			'transactions' => $transactions,
			'detailTransactions' => $detailTransactions,
		];

		return view('admin/transactions/index', $data);
	}

	public function showDetailTransaction()
	{
		$detailTransactionsModel = new TransactionsModel();

		$detailTransactions = $detailTransactionsModel->getDetailTransaction()->getResultArray();

		$data = [
			'title' => 'Detail Transaksi',
			'detailTransactions' => $detailTransactions,
		];

		return $data;
	}
}
