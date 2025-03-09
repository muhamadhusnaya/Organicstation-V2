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

    <title>Category</title>
</head>
<body>
    <x-navbar></x-navbar>
    <section class="home">
        <div class="content mx-5">
            <div class="content-top">
                <div class="content-preview d-flex align-items-center py-2">
                    <a href="">Category</a>
                    <i class="bx bx-chevrons-right"></i>
                    <a href="">List</a>
                </div>
                <span class="title-content">Categories</span>
            </div>
            <div class="button-create">
                <a type="button" class="btn btn-warning" href="{{ url('/admin/category-create') }}">Tambah Category</a>
            </div>
            <div class="content-list">
                <div class="head-list d-flex justify-content-end">
                    <div class="search-category d-flex align-items-center">
                        <input type="text" placeholder="Search....">
                        <i class="bx bx-search"></i>
                    </div>

                </div>
                <div class="list">
                    <table class="table table-layout-auto">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Jenis Category</th>
                                <th>Image</th>
                                <th>Slug</th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr class="list-category">
                                <td class="id-category"></td>
                                <td class="jenis-category">Obat Kesehatan</td>
                                <td class="image-categoty"><img src="{{ asset('img/Group 559.png') }}" alt=""></td>
                                <td class="slug-category">obat-kesehatan</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Serum Kesehatan</td>
                                <td></td>
                                <td>serum-kesehatan</td>
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