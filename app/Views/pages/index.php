<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('tubes'); ?>/src/main.css" />
    <title><?= $title; ?> | Sistem Pembelian Buku</title>
</head>

<?php

$session = \Config\Services::session();
$cart = \Config\Services::cart();

$errors = $session->getFlashdata('errors');

if ($errors != null) {
    dd($errors);
}

?>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">Cart</a>
                        </li>
                        <?php if (!$session->get('email')) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">Hello, <?= $session->get('name'); ?> (Logout)</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="my-3">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php foreach ($books as $book) : ?>
                    <div class="col">
                        <form action="/books/add" method="post">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id" value="<?= $book['book_id'] ?>" />
                            <input type="hidden" name="name" value="<?= $book['book_name'] ?>" />
                            <input type="hidden" name="price" value="<?= $book['book_price'] ?>" />
                            <input type="hidden" name="slug" value="<?= $book['book_slug'] ?>" />
                            <input type="hidden" name="image" value="<?= $book['book_image'] ?>" />
                            <input type="hidden" name="author" value="<?= $book['book_author'] ?>" />
                            <input type="hidden" name="publisher" value="<?= $book['book_publisher'] ?>" />
                            <input type="hidden" name="description" value="<?= $book['book_description'] ?>" />

                            <div class="card" style="width: 18rem">
                                <img src="/img/<?= $book['book_image']; ?>" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h4 class="card-title"><?= $book['book_name']; ?></h4>
                                    <div class="mt-3">
                                        <button type="button" id="detailSet" class="btn btn-outline-primary me-2 px-3 button-edit" data-bs-toggle="modal" data-bs-target="#detailModal" data-name="<?= $book['book_name']; ?>" data-description="<?= $book['book_description']; ?>" data-price="<?= $book['book_price']; ?>" data-image="/img/<?= $book['book_image']; ?>" data-category="<?= $book['book_category']; ?>">
                                            Detail
                                        </button>
                                        <button type="submit" id="add-to-cart" class="btn btn-primary px-3" data-id="<?= $book['book_id']; ?>" data-name="<?= $book['book_name']; ?>" data-price="<?= $book['book_price']; ?>">
                                            Put in Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="detailModalLabel">
                        Book Details
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img id="image" src="" class="card-img-top" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <h2 id="name"></h2>
                            </div>
                            <div class="row">
                                <p id="description"></p>
                            </div>
                            <div class="row">
                                <h5 id="category"></h5>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <form action="/proses" method="post">
                    <?= csrf_field(); ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="cartModalLabel">
                            Shopping Cart
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="cart">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Buku</th>
                                    <th scope="col">Harga Buku</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="show-cart">
                            </tbody>
                        </table>
                        <select class="form-select" name="paymentType" aria-label="Selected Payment Type">
                            <?php foreach ($paymentTypes as $paymentType) : ?>
                                <option value="<?= $paymentType['type_of_payment_id']; ?>"><?= $paymentType['payment_type']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Checkout
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('tubes'); ?>/src/index.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', "#detailSet", function() {
                var name = $(this).data('name');
                var description = $(this).data('description');
                var price = $(this).data('price');
                var image = $(this).data('image');
                var category = $(this).data('category');
                $('#name').text(name);
                $('#description').text(description);
                $('#price').text(price);
                $('#image').attr('src', image);
                $('#category').html('Category : ' + category);
            })

            $('#add-to-cart').click(function() {
                var book_id = $(this).data('id');
                var book_name = $(this).data('name');
                var book_price = $(this).data('price');
                $.ajax({
                    url: "/books/add",
                    method: "POST",
                    data: {
                        book_id: book_id,
                        book_name: book_name,
                        book_price: book_price,
                    },
                    success: function(data) {
                        $('#show-cart').html(data);
                    }
                });
            });

            $(document).on('click', '#delete-cart', function() {
                var row_id = $(this).data("row-id");
                $.ajax({
                    url: "/books/clear",
                    method: "POST",
                    data: {
                        row_id: row_id
                    },
                    success: function(data) {
                        $('#show-cart').html(data);
                    }
                });
            });

            $('#show-cart').load("/books/load");

        });
    </script>
</body>

</html>