<?php

namespace App\Controllers;

use App\Models\BookModel;

class PageController extends BaseController
{
    public function index()
    {
        $bookModel = new BookModel();

        $books = $bookModel->getBookCategory()->getResultArray();

        $data = [
            'title' => 'Index',
            'books' => $books
        ];

        return view('pages/index', $data);
    }

    public function addToCart()
    {
        $bookModel = new BookModel();

        $data = [
            'name' => $bookModel,
        ];
    }
}
