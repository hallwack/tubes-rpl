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

		$typeOfPaymentsModel->insert([
			'payment_type' => $this->request->getPost('paymentType'),
		]);

		return redirect()->to('/admin/type-of-payments');
	}

	public function edit($id)
	{
		$typeOfPaymentsModel =  new TypeOfPaymentsModel();

		$paymentType = $typeOfPaymentsModel->getIdPaymentType($id);
		$data = [
			'title' => 'Edit Payment Type',
			'payments' => $paymentType
		];

		return view('admin/type_of_payments/edit', $data);
	}

	public function update($id)
	{
		$typeOfPaymentsModel =  new TypeOfPaymentsModel();

		$typeOfPaymentsModel->save([
			'type_of_payment_id' => $id,
			'payment_type' => $this->request->getPost('paymentType')
		]);

		return redirect()->to('/admin/type-of-payments');
	}

	public function delete()
	{
		$typeOfPaymentsModel =  new TypeOfPaymentsModel();

		$typeOfPaymentsModel->delete($this->request->getPost('type_of_payment_id'));
		return redirect()->to('/admin/type-of-payments');
	}
}
