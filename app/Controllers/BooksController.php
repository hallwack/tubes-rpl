<?php

namespace App\Controllers;

class BooksController extends BaseController
{
    public function index()
    {
        $bookModel = new \App\Models\BookModel();
        $books = $bookModel->findAll();

        $data = [
            'title' => 'Daftar Buku',
            'books' => $books,
        ];
        return view('admin/books/index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit',
        ];
        return view('admin/books/edit', $data);
    }
}
