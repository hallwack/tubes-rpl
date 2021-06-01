<?php

namespace App\Controllers;

class BooksController extends BaseController
{
    public function index()
    {
        $bookModel = new \App\Models\BookModel();

        $book = $bookModel->findAll();

        $data = [
            'title' => 'Daftar Buku',
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
