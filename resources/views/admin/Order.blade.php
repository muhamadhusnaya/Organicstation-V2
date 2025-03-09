<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Orders</title>
</head>
<body>
    <x-navbar></x-navbar>
    <section class="home">
        <div class="text">Order</div>
        <div class="content mx-5">
            <div class="review-order">
                <div class="d-flex">
                    <div class="search-order">
                        <input type="search" class="align-content-between" placeholder="Telusuri Pesanan....">
                        <i class='bx bx-search icon'></i>
                    </div>
                    <div class="filters-orders">
                        <div class="d-flex">
                            <div class="dropdown">
                                <button class="form-select d-flex justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span id="dropdownText">Payment Status</span>
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#" data-value="elektronik"><i class="fas fa-tv me-2"></i> Elektronik</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="fashion"><i class="fas fa-tshirt me-2"></i> Fashion</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="otomotif"><i class="fas fa-car me-2"></i> Otomotif</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="makanan"><i class="fas fa-utensils me-2"></i> Makanan</a></li>
                                </ul>
                            </div>
                            <i class="fw-bold p-1">|</i>
                            <div class="dropdown">
                                <button class="form-select d-flex justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span id="dropdownText">Tanggal Transaksi</span>
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#" data-value="elektronik"><i class="fas fa-tv me-2"></i> Elektronik</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="fashion"><i class="fas fa-tshirt me-2"></i> Fashion</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="otomotif"><i class="fas fa-car me-2"></i> Otomotif</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="makanan"><i class="fas fa-utensils me-2"></i> Makanan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="export d-flex">
                        <i class='bx bxs-file-export'></i>
                        <a href="">Export</a>
                    </div>
                </div>
                <div class="orders">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.Order</th>
                                <th>Harga</th>
                                <th>Nama Konsumen</th>
                                <th>Payment Status</th>
                                <th>Deskripsi Pesanan</th>
                                <th>Tanggal Pesanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0001 </td>
                                <td>Rp. 12.000</td>
                                <td>Bintang Ananta</td>
                                <td><span class="payment-status">Pending</span></td>
                                <td>Es Teh Manis <br> Meja 4</td>
                                <td>15-12-2025</td>
                            </tr>
                            <tr>
                                <td>0002</td>
                                <td>Rp. 16.000</td>
                                <td>Avicenna</td>
                                <td><span class="payment-status">CENCEL</span></td>
                                <td>Es Jeruk Manis <br> Meja 1</td>
                                <td>15-12-2025</td>
                            </tr>
                            <tr>
                                <td>0003</td>
                                <td>Rp. 16.000</td>
                                <td>Saddam Raihan</td>
                                <td><span class="payment-status">SUCCES</span></td>
                                <td>Es Teh Manis <br> Meja 3</td>
                                <td>16-12-2025</td>
                            </tr>
                            <tr>
                                <td>0004</td>
                                <td>Rp. 16.000</td>
                                <td>Ananta Surya</td>
                                <td><span class="payment-status">SUCCES</span></td>
                                <td>Es Teh Manis <br> Meja 2</td>
                                <td>15-12-2025</td>
                            </tr>
                            <tr>
                                <td>0005</td>
                                <td>Rp. 16.000</td>
                                <td>Fajar Ilham</td>
                                <td><span class="payment-status">SUCCES</span></td>
                                <td>Es Teh Manis <br> Meja 5</td>
                                <td>15-12-2025</td>
                            </tr>
                            <tr>
                                <td>0006</td>
                                <td>Rp. 16.000</td>
                                <td>Aditya Hasan</td>
                                <td><span class="payment-status">CENCEL</span></td>
                                <td>Es Chocolatte <br> Meja 8</td>
                                <td>15-12-2025</td>
                            </tr>
                            <tr>
                                <td>0007</td>
                                <td>Rp. 16.000</td>
                                <td>Rayhan Aditya</td>
                                <td><span class="payment-status">SUCCES</span></td>
                                <td>Es Jeruk Manis <br> Meja 4</td>
                                <td>15-12-2025</td>
                            </tr>
                            <tr>
                                <td>0008</td>
                                <td>Rp. 16.000</td>
                                <td>Syifaa Arum</td>
                                <td><span class="payment-status">CENCEL</span></td>
                                <td>Es Jeruk Manis <br> Meja 4</td>
                                <td>15-12-2025</td>
                            </tr>
                            <tr>
                                <td>0009</td>
                                <td>Rp. 16.000</td>
                                <td>Harun Arosyid</td>
                                <td><span class="payment-status">SUCCES</span></td>
                                <td>Es Jeruk Manis <br> Meja 4</td>
                                <td>15-12-2025</td>
                            </tr>
                            <tr>
                                <td>0010</td>
                                <td>Rp. 16.000</td>
                                <td>Naufal Aditya</td>
                                <td><span class="payment-status">PENDING</span></td>
                                <td>Es Jeruk Manis <br> Meja 4</td>
                                <td>15-12-2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>