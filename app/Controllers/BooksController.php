<?php

namespace App\Controllers;

use App\Models\BookCategoriesModel;
use App\Models\BooksModel;

class BooksController extends BaseController
{
    public function index()
    {
        $booksModel = new BooksModel();

        $books = $booksModel->getBooksWithCategory()->getResultArray();

        $data = [
            'title' => 'Daftar Buku',
            'books' => $books,
        ];
        return view('admin/books/index', $data);
    }

    public function create()
    {
        $booksModel = new BooksModel();

        $books = $booksModel->getBookCategories()->getResultArray();

        $data = [
            'title' => 'Create Book',
            'books' => $books
        ];

        return view('admin/books/create', $data);
    }

    public function save()
    {
        $booksModel = new BooksModel();

        $image = $this->request->getFile('image');
        // dd($imageName);
        $image->move('img');
        $imageName = $image->getName();

        $booksModel->insert([
            'book_name' => $this->request->getPost('name'),
            'book_slug' => url_title($this->request->getPost('name'), '-', true),
            'book_image' => $imageName,
            'book_category_id' => (int)$this->request->getPost('category'),
            'book_author' => $this->request->getPost('author'),
            'book_publisher' => $this->request->getPost('publisher'),
            'book_description' => $this->request->getPost('description'),
            'book_price' => $this->request->getPost('price'),
        ]);

        return redirect()->to('/admin/books');
    }

    public function edit($id)
    {
        $booksModel = new BooksModel();

        $books = $booksModel->getIdBooks($id);
        $bookCategories = $booksModel->getBookCategories()->getResultArray();

        $data = [
            'title' => 'Edit Book',
            'books' => $books,
            'bookCategories' => $bookCategories,
        ];

        return view('admin/books/edit', $data);
    }

    public function update($id)
    {
        $booksModel = new BooksModel();

        $image = $this->request->getFile('image');

        if ($image->getError() == 4) {
            $imageName = $this->request->getPost('oldImage');
        } else {
            $imageName = $image->getName();
            $image->move('img');
        }

        $booksModel->save([
            'book_id' => $id,
            'book_name' => $this->request->getPost('name'),
            'book_slug' => url_title($this->request->getPost('name'), '-', true),
            'book_image' => $imageName,
            'book_category_id' => (int)$this->request->getPost('category'),
            'book_author' => $this->request->getPost('author'),
            'book_publisher' => $this->request->getPost('publisher'),
            'book_description' => $this->request->getPost('description'),
            'book_price' => $this->request->getPost('price'),
        ]);

        return redirect()->to('/admin/books');
    }

    public function delete()
    {
        $booksModel = new BooksModel();

        $booksModel->delete($this->request->getPost('book_id'));
        return redirect()->to('/admin/books');
    }
}
