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

    <title>Dashboard</title>
    <style>
        .content {
            margin-left: 250px;
            padding-left: 20px;
        }
        .sidebar {
            width: 250px;
            position: fixed;
            height: 100%;
        }
    </style>
</head>

<body>
    <x-navbar></x-navbar>
    <div class="content p-4" style="width: 100psh;">
            <h1 class="mb-4">Product List</h1>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="input-group" style="width: 300px;">
                    <input type="text" id="search-bar" class="form-control" placeholder="Search product...">
                    <button class="btn btn-outline-secondary" onclick="searchProduct()">Search</button>
                </div>
                <a href="{{ url ('admin/product-create') }}" class="btn btn-primary" onclick="addProduct()">Tambah Product</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Image</th>
                            <th>Nama Product</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-center align-middle" id="product-table">
                        <tr>
                            <td><img src="https://raw.githubusercontent.com/muhamadhusnaya/Organicstation/refs/heads/main/images/produk1.png" alt="" style="width: 100px;"></td>
                            <td>Susu Kedelai Organik</td>
                            <td>Rp. 78,000</td>
                            <td>10</td>
                            <td>Minuman</td>
                            <td><button class="btn btn-success"><i class='bx bx-edit'></i></button></td>
                            <td><button class="btn btn-danger"><i class='bx bx-trash'></i></button></td>
                        </tr>
                        <tr>
                            <td><img src="https://raw.githubusercontent.com/muhamadhusnaya/Organicstation/refs/heads/main/images/produk1.png" alt="" style="width: 100px;"></td>
                            <td>Susu Kedelai Organik</td>
                            <td>Rp. 78,000</td>
                            <td>10</td>
                            <td>Minuman</td>
                            <td><button class="btn btn-success"><i class='bx bx-edit'></i></button></td>
                            <td><button class="btn btn-danger"><i class='bx bx-trash'></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
