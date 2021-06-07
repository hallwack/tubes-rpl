<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookCategoriesModel;

class BookCategoriesController extends BaseController
{
	public function index()
	{
		$bookCategoriesModel = new BookCategoriesModel();

		$bookCategories = $bookCategoriesModel->findAll();
		$data = [
			'title' => 'Daftar Kategori Buku',
			'bookCategories' => $bookCategories,
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

		$bookCategories->insert([
			'book_category' => $this->request->getPost('category')
		]);

		return redirect()->to('index');
	}

	public function edit($id)
	{
		$bookCategoriesModel = new BookCategoriesModel();

		$bookCategories = $bookCategoriesModel->getIdCategory($id);
		$data = [
			'title' => 'Edit Book Category',
			'bookCategories' => $bookCategories
		];

		return view('admin/book_categories/edit', $data);
	}

	public function update($id)
	{
		$bookCategoriesModel = new BookCategoriesModel();

		$bookCategoriesModel->save([
			'book_category_id' => $id,
			'book_category' => $this->request->getPost('category')
		]);

		return redirect()->to('/admin/categories/index');
	}

	public function delete()
	{
		$bookCategoriesModel = new BookCategoriesModel();

		$bookCategoriesModel->delete($this->request->getPost('book_category_id'));
		return redirect()->to('/admin/categories/index');
	}
}
