<?php

namespace App\Controllers;

use App\Models\BooksModel;
use App\Models\DetailTransactionsModel;
use App\Models\TransactionsModel;
use App\Models\TypeOfPaymentsModel;

class PageController extends BaseController
{

    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $booksModel = new BooksModel();
        $typeOfPaymentsModel = new TypeOfPaymentsModel();

        $books = $booksModel->getBooksWithCategory()->getResultArray();
        $typeOfPayments = $typeOfPaymentsModel->getTypePayments()->getResultArray();

        $data = [
            'title' => 'Index',
            'books' => $books,
            'paymentTypes' => $typeOfPayments
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

        $data = [
            'id' => (int)$this->request->getPost('id'),
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
        ];

        $cart->insert($data);

        return redirect()->to('/');
    }

    public function show()
    {
        $cart = \Config\Services::cart();
        $no = 0;
        $output = '';

        foreach ($cart->contents() as $items) {
            $no++;
            $output .= '
                            <tr>
                                <td>' . $items['name'] . '</td>
                                <td>' . 'Rp ' . number_format($items['price']) . '</td>
                                <td>
                                    ' . $items['qty'] . '
                                </td>
                                <td>' . 'Rp ' . number_format($items['subtotal']) . '</td>
                                <td>
                                    <button type="button" id="delete-cart" data-row-id="' . $items['rowid'] . '" class="btn btn-danger">Hapus Item</button>
                                </td>
                            </tr>';
        }

        $output .= '<tr>
                        <th colspan="3">Total</th>
                        <th colspan="2">' . 'Rp ' . number_format($cart->total()) . '</th>
                    </tr>';

        return $output;
    }

    public function load()
    {
        echo $this->show();
    }

    public function clear()
    {
        $cart = \Config\Services::cart();
        $row_id = $this->request->getPost('row_id');

        $cart->remove($row_id);

        return $this->show();
    }

    public function clearAll()
    {
        $cart = \Config\Services::cart();

        $cart->destroy();

        return redirect()->to('/');
    }

    public function process()
    {
        $cart = \Config\Services::cart();
        $session = \Config\Services::session();
        $transactionsModel = new TransactionsModel();
        $detailTransactionsModel = new DetailTransactionsModel();

        $dataUser = [
            'id' => $session->get('id'),
            'name' => $session->get('name'),
            'address' => $session->get('address'),
            'phone_number' => $session->get('phone_number'),
            'email' => $session->get('email'),
        ];

        $carts = $cart->contents();

        if ($carts && $session->has('id')) {
            $orderData = [
                'user_id' => $dataUser['id'],
                'type_of_payment_id' => $this->request->getPost('paymentType'),
                'transaction_total' => (int)$cart->total(),
            ];

            $transactionsModel->insert($orderData);

            foreach ($carts as $item) {
                $detailOrderData = [
                    'transaction_id' => $transactionsModel->getInsertID(),
                    'book_id' => $item['id'],
                    'quantity_purchased' => $item['qty'],
                    'total_purchase' => (int)$item['subtotal'],
                ];
                $detailTransactionsModel->insert($detailOrderData);
            }
            $cart->destroy();

            return redirect()->to('/');
        }

        return redirect()->to('/');



        // foreach ($carts as $item) {
        //     echo '<pre>';
        //     var_dump($item);
        //     echo '</pre>';
        // }
    }
}
