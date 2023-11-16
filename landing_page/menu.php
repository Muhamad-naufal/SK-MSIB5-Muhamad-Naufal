<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        nav {
            background-color: transparent;
            height: 50px;
            position: fixed;
            width: 100%;
            text-align: center;
            transition: background-color 0.5s ease;
            z-index: 1000;
        }

        nav.scrolled {
            background-color: #333;
            /* Ganti warna latar belakang sesuai kebutuhan */
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav li {
            margin: 10px 15px;
        }

        nav a {
            text-decoration: none;
            color: white;
            /* Ganti warna teks sesuai kebutuhan */
            font-size: 16px;
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffcc00;
            /* Ganti warna teks saat hover sesuai kebutuhan */
        }
    </style>
</head>

<body style="background: linear-gradient(to right, #ff8c00, #ff0080);">
    <!-- Navbar -->
    <section class="nav">
        <nav id="navbar" class="mb-5">
            <ul>
                <li><a href="index.php#header">Home</a></li>
                <li><a href="index.php#about">Tentang Kami</a></li>
                <li><a href="index.php#about_me">Tentang Saya</a></li>
                <li><a href="#">Menu</a></li>
            </ul>
        </nav>
    </section>


    <!-- Menu -->
    <section class="menu mt-5">
        <h1 class="menu-title text-white">Our Menu</h1>
        <div class="container">
            <div class="row">
                <h2 class="food">Food</h2>
                <?php
                include "../koneksi.php";
                $query = mysqli_query($connect, "SELECT * FROM makanan as m 
                        JOIN kategori as k ON m.id_kategori = k.id_kategori 
                        JOIN me_sak as ms ON m.id_me_sak = ms.id_me_sak 
                        WHERE k.kategori = 'Makanan' 
                        ORDER BY m.id ASC");
                if (mysqli_num_rows($query) > 0) {
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                        <div class="col-md-3">
                            <div class="card mb-5 mt-1" data-aos="fade-up" data-aos-duration="15000">
                                <img src="<?php echo $data['foto']; ?>" class="card-img-top img-fluid" alt="Food Image" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['nama_makanan']; ?></h5>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p class="crd-text"><?php echo rupiah($data['harga']); ?></p>
                                            </div>
                                            <div class="col">
                                                <div class="input-group">
                                                    <button class="btn btn-outline-secondary" type="button" onclick="decrementQuantity(this)">-</button>
                                                    <input type="text" class="form-control" value="0" readonly>
                                                    <button class="btn btn-outline-secondary" type="button" onclick="incrementQuantity(this)">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No data found";
                }
                ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h2 class="food">Drink</h2>
                <?php
                include "../koneksi.php";
                $query = mysqli_query($connect, "SELECT * FROM makanan as m 
                        JOIN kategori as k ON m.id_kategori = k.id_kategori 
                        JOIN me_sak as ms ON m.id_me_sak = ms.id_me_sak 
                        WHERE k.kategori = 'Minuman' 
                        ORDER BY m.id ASC");
                if (mysqli_num_rows($query) > 0) {
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                        <div class="col-md-3">
                            <div class="card mb-5 mt-1" data-aos="fade-up" data-aos-duration="15000">
                                <img src="<?php echo $data['foto']; ?>" class="card-img-top img-fluid" alt="Food Image" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['nama_makanan']; ?></h5>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p class="crd-text"><?php echo rupiah($data['harga']); ?></p>
                                            </div>
                                            <div class="col">
                                                <div class="input-group">
                                                    <button class="btn btn-outline-secondary" type="button" onclick="decrementQuantity(this)">-</button>
                                                    <input type="text" class="form-control" value="0" readonly>
                                                    <button class="btn btn-outline-secondary" type="button" onclick="incrementQuantity(this)">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No data found";
                }
                ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h2 class="food">Snack</h2>
                <?php
                include "../koneksi.php";
                $query = mysqli_query($connect, "SELECT * FROM makanan as m 
                        JOIN kategori as k ON m.id_kategori = k.id_kategori 
                        JOIN me_sak as ms ON m.id_me_sak = ms.id_me_sak 
                        WHERE k.kategori = 'Cemilan' 
                        ORDER BY m.id ASC");
                if (mysqli_num_rows($query) > 0) {
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                        <div class="col-md-3">
                            <div class="card mb-5 mt-1" data-aos="fade-up" data-aos-duration="15000">
                                <img src="<?php echo $data['foto']; ?>" class="card-img-top img-fluid" alt="Food Image" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['nama_makanan']; ?></h5>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p class="crd-text"><?php echo rupiah($data['harga']); ?></p>
                                            </div>
                                            <div class="col">
                                                <div class="input-group">
                                                    <button class="btn btn-outline-secondary" type="button" onclick="decrementQuantity(this)">-</button>
                                                    <input type="text" class="form-control" value="0" readonly>
                                                    <button class="btn btn-outline-secondary" type="button" onclick="incrementQuantity(this)">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No data found";
                }
                ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h2 class="food">Desert</h2>
                <?php
                include "../koneksi.php";
                $query = mysqli_query($connect, "SELECT * FROM makanan as m 
                        JOIN kategori as k ON m.id_kategori = k.id_kategori 
                        JOIN me_sak as ms ON m.id_me_sak = ms.id_me_sak 
                        WHERE k.kategori = 'Pencuci Mulut' 
                        ORDER BY m.id ASC");
                if (mysqli_num_rows($query) > 0) {
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                        <div class="col-md-3">
                            <div class="card mb-5 mt-1" data-aos="fade-up" data-aos-duration="15000">
                                <img src="<?php echo $data['foto']; ?>" class="card-img-top img-fluid" alt="Food Image" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['nama_makanan']; ?></h5>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p class="crd-text"><?php echo rupiah($data['harga']); ?></p>
                                            </div>
                                            <div class="col">
                                                <div class="input-group">
                                                    <button class="btn btn-outline-secondary" type="button" onclick="decrementQuantity(this)">-</button>
                                                    <input type="text" class="form-control" value="0" readonly>
                                                    <button class="btn btn-outline-secondary" type="button" onclick="incrementQuantity(this)">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No data found";
                }
                ?>
            </div>
        </div>
    </section>
    <?php
    function rupiah($angka)
    {

        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }

    ?>
    <script src="https://kit.fontawesome.com/25db4f44a1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function incrementQuantity(button) {
            var input = button.parentNode.querySelector('input[type=text]');
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
        }

        function decrementQuantity(button) {
            var input = button.parentNode.querySelector('input[type=text]');
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value = value <= 0 ? 0 : value - 1;
            input.value = value;
        }
    </script>
    <script>
        window.addEventListener("scroll", function() {
            var nav = document.getElementById("navbar");
            nav.classList.toggle("scrolled", window.scrollY > 0);
        });
    </script>
</body>

</html>