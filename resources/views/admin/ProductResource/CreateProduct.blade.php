<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Create Product</title>
</head>
<body>
    <x-navbar></x-navbar>
    <section class="home">
        <div class="content mx-5">
            <div class="content-top">
                <div class="content-preview d-flex align-items-center py-2">
                    <a href="{{ url ('admin/product') }}">Product</a>
                    <i class='bx bx-chevrons-right'></i>
                    <a href="{{ url ('admin/product-create') }}">Create Product</a>
                </div>
                <span class="title-content">Product</span>
            </div>
            <div class="content-form py-2 form">
                <form action="">
                    <div class="d-flex">
                        <div class="flex-column me-3 mb-4">
                            <div class="bg-light p-4 rounded-3 input-product">
                                <div class="d-flex justify-content-between">
                                    <div class="mb-3 content-input">
                                        <label for="name" class="form-label">Nama Produk</label>
                                        <input type="text" class="form-control form-control-lg" id="name">
                                    </div>
                                    <div class="mb-3 content-input">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" class="form-control form-control-lg" id="slug">
                                    </div>
                                </div>
                                <label for="description" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="description" rows="5"></textarea>
                            </div>
                            <div class="bg-light p-3 rounded-3 mt-3 input-product">
                                <span class="fw-bold">Upload Image Produk</span>
                                <hr>
                                <label for="formFileLg" class="form-label">Image</label>
                                <input class="form-control form-control-lg w-100 input-imgproduct" id="image" type="file">
                            </div>
                        </div>
                        <div class="flex-column mb-4 input-right">
                            <div class="bg-light rounded-3 p-3 mb-2 input">
                                <span class="fw-bold">Harga Produk</span>
                                <hr>
                                <label for="price" class="form-label">Harga</label>
                                <input type="text" class="form-control form-control-lg" id="price" style="width: 270px">
                            </div>
                            <div class="bg-light rounded-3 p-3 mb-2">
                                <span class="fw-bold">Stok Produk</span>
                                <hr>
                                <label for="stock" class="form-label">Stok</label>
                                <input type="text" class="form-control form-control-lg" id="stock" style="width: 270px">
                            </div>
                            <div class="bg-light rounded-3 p-3 mb-2">
                                <span class="fw-bold">Association</span>
                                <hr>
                                <div class="dropdown">
                                    <label for="category" class="form-label">Categori</label>
                                    <button class="form-select d-flex justify-content-between w-100 mb-3" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span id="dropdownText">Select a Category</span>
                                    </button>
                                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" href="#" data-value="elektronik"><i class="fas fa-tv me-2"></i> Elektronik</a></li>
                                        <li><a class="dropdown-item" href="#" data-value="fashion"><i class="fas fa-tshirt me-2"></i> Fashion</a></li>
                                        <li><a class="dropdown-item" href="#" data-value="otomotif"><i class="fas fa-car me-2"></i> Otomotif</a></li>
                                        <li><a class="dropdown-item" href="#" data-value="makanan"><i class="fas fa-utensils me-2"></i> Makanan</a></li>
                                    </ul>
                                    <label for="brand" class="form-label">Brand</label>
                                    <button class="form-select d-flex justify-content-between w-100 mb-3" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span id="dropdownText">Select a Brand</span>
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
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('dropdownText').innerText = this.innerText; // Ubah teks tombol dropdown
                document.getElementById('selectedCategory').value = this.getAttribute('data-value'); // Simpan nilai ke input
            });
        });
    </script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>