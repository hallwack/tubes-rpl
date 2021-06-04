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
}
