<?php

namespace App\Controllers;

use App\Models\BooksModel;

class BooksController extends BaseController
{
    public function index()
    {
        $booksModel = new BooksModel();
        $books = $booksModel->findAll();

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
