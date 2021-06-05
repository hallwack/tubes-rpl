<?php

namespace App\Controllers;

use App\Models\BooksModel;

class PageController extends BaseController
{

    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $booksModel = new BooksModel();

        $books = $booksModel->getBooksWithCategory()->getResultArray();

        $data = [
            'title' => 'Index',
            'books' => $books
        ];

        return view('pages/index', $data);
    }

    public function check()
    {
        $booksModel = new BooksModel();

        $cart = \Config\Services::cart();

        $res = $cart->contents();

        echo '<pre>';
        print_r($res);
        echo '</pre>';
        exit;
    }

    public function add()
    {
        $cart = \Config\Services::cart();

        // TODO: Cuma bisa ngambil data yang terakhir, seharusnya yang diambil adalah data yang dipilih
        dd([
            'id' => $this->request->getPost('id'),
            'qty' => 1,
            'price' => $this->request->getPost('price'),
            'name' => $this->request->getPost('name'),
            'options' => [
                'slug' => $this->request->getPost('slug'),
                'image' => $this->request->getPost('image'),
                'author' => $this->request->getPost('author'),
                'publisher' => $this->request->getPost('publisher'),
                'description' => $this->request->getPost('description'),
            ]
        ]);
    }

    public function clearCart()
    {
        $cart = \Config\Services::cart();

        $cart->destroy();
    }
}
