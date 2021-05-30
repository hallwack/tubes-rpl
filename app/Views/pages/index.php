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
    <title>Sistem Pembelian Buku</title>
</head>

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
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#cartModal">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Hello, User</a>
                        </li>
                    </ul>
                    <form class="d-flex align-items-center">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success me-2" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="my-3">
            <div class="row row-cols-1 row-cols-md-4 g-4">

                <div class="col">
                    <div class="card" style="width: 18rem">
                        <img src="<?= base_url('tubes'); ?>/assets/initial-d.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">Naruto</h4>
                            <div class="mt-3">
                                <button type="button" class="
                                            btn btn-outline-primary
                                            me-2
                                            px-3
                                        " data-bs-toggle="modal" data-bs-target="#detailModal">
                                    Detail
                                </button>
                                <button type="button" id="add-to-cart" class="btn btn-primary px-3" data-name="Naruto" data-price="19000">
                                    Put in Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem">
                        <img src="<?= base_url('tubes'); ?>/assets/one-piece.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">Naruto</h4>
                            <div class="mt-3">
                                <button type="button" class="
                                            btn btn-outline-primary
                                            me-2
                                            px-3
                                        " data-bs-toggle="modal" data-bs-target="#detailModal">
                                    Detail
                                </button>
                                <button type="button" id="add-to-cart" class="btn btn-primary px-3" data-name="Naruto" data-price="19000">
                                    Put in Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem">
                        <img src="<?= base_url('tubes'); ?>/assets/persona-5.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">Naruto</h4>
                            <div class="mt-3">
                                <button type="button" class="
                                            btn btn-outline-primary
                                            me-2
                                            px-3
                                        " data-bs-toggle="modal" data-bs-target="#detailModal">
                                    Detail
                                </button>
                                <button type="button" id="add-to-cart" class="btn btn-primary px-3" data-name="Naruto" data-price="19000">
                                    Put in Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem">
                        <img src="<?= base_url('tubes'); ?>/assets/nisekoi.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">Naruto</h4>
                            <div class="mt-3">
                                <button type="button" class="
                                            btn btn-outline-primary
                                            me-2
                                            px-3
                                        " data-bs-toggle="modal" data-bs-target="#detailModal">
                                    Detail
                                </button>
                                <button type="button" id="add-to-cart" class="btn btn-primary px-3" data-name="Naruto" data-price="19000">
                                    Put in Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

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
                            <img src="<?= base_url('tubes'); ?>/assets/initial-d.jpg" class="card-img-top" alt="..." />
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <h2>Initial D</h2>
                            </div>
                            <div class="row">
                                <p>
                                    The story is about 18 year old Takumi
                                    Fujiwara who is an average high school
                                    kid. His father, Bunta Fujiwara, owns a
                                    tofu shop and Takumi is the delivery
                                    boy. He uses his father's Panda 1984
                                    Toyota Sprinter Trueno GT-APEX AE86 to
                                    do the deliveries. Takumi hated driving
                                    because he was forced to drive since he
                                    was in middle school. The deliveries
                                    train his extraordinary driving skills.
                                    His friends learn about his skills, and
                                    introduce Takumi into the world of Touge
                                    racing. Takumi eventually loves street
                                    racing, and driving altogether, and then
                                    he has only one priority: To become the
                                    best driver in the Gunma Prefecture.
                                </p>
                            </div>
                            <div class="row">
                                <h5>Category: Shounen, Race</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" data-name="Naruto" data-price="19000">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">
                        Modal title
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table id="show-cart" class="table"></table>
                    <div>Total price: $<span id="total-cart"></span></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" id="clear-cart" class="btn btn-primary">
                        Clear Cart
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('tubes'); ?>/src/app.js"></script>
</body>

</html>