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
			'transactions' => $transactions,
		];

		return view('admin/transactions/index', $data);
	}

	public function show($id)
	{
		$transactionsModel = new TransactionsModel();
		$detailTransactionsModel = new TransactionsModel();

		$transactions = $transactionsModel->showTransactions($id)->getRowArray();
		// dd($transactions);
		$detailTransactions = $detailTransactionsModel->showDetailTransactionOnTransaction($id)->getResultArray();


		$data = [
			'title' => 'Detail Transaksi',
			'transactions' => $transactions,
			'detailTransactions' => $detailTransactions,
		];

		return view('admin/transactions/show', $data);
	}
}
