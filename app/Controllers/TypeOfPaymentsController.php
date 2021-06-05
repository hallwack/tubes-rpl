<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TypeOfPaymentsModel;

class TypeOfPaymentsController extends BaseController
{
	public function index()
	{
		$typeOfPaymentsModel = new TypeOfPaymentsModel();

		$paymentType = $typeOfPaymentsModel->findAll();

		$data = [
			'title' => 'Tipe Pembayaran',
			'payments' => $paymentType,
		];

		return view('admin/type_of_payments/index', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Create Payment Type'
		];

		return view('admin/type_of_payments/create', $data);
	}

	public function save()
	{
		$typeOfPaymentsModel =  new TypeOfPaymentsModel();

		// $typeOfPayment = $typeOfPaymentsModel->insert();

		dd([
			'paymentType' => $this->request->getPost('paymentType'),
		]);
	}
}
