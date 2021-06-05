<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookCategoriesModel;

class BookCategoriesController extends BaseController
{
	public function index()
	{
		$bookCategoriesModel = new BookCategoriesModel();
		$book = $bookCategoriesModel->findAll();

		$data = [
			'title' => 'Daftar Kategori Buku',
			'bookCategories' => $book,
		];
		return view('admin/book_categories/index', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Create Book Categories',
		];

		return view('admin/book_categories/create', $data);
	}

	public function save()
	{

		$bookCategories = new BookCategoriesModel();

		dd([
			'name' => $this->request->getPost('name')
		]);
	}
}
