<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rumah Makan Mindo Enak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
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

<body>
    <!-- Navbar -->
    <nav id="navbar">
        <ul>
            <li><a href="#header">Home</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#about_me">Tentang Saya</a></li>
            <li><a href="menu.php">Menu</a></li>
        </ul>
    </nav>

    <!-- Header -->
    <section class="header" id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="15000">
                    <h1 class="md"><span>Hay, Welcome To</span> Mindo Enak</h1>
                    <p class="md">Nikmati pengalaman kuliner yang tak terlupakan dengan hidangan lezat dan suasana yang menyenangkan. Kami hadir untuk memberikan kelezatan terbaik bagi Anda dan keluarga.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8" data-aos="fade-up" data-aos-duration="15000">
                    <h1>MINDO ENAK</h1>
                    <p>Selamat datang di Restoran Mindo Enak, di mana kehangatan pedesaan dan sentuhan modern bersatu dalam suasana unik. Menu autentik kami, hasil kreativitas dan inovasi, menghadirkan pengalaman makan yang memikat dari ladang ke meja. Desain interior yang elegan menciptakan kenyamanan, mempersembahkan pengalaman kuliner tak terlupakan di tempat di mana kelezatan tradisional dan keanggunan modern bertemu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me -->
    <section class="about_me" id="about_me">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="15000">
                    <div class="about_name_header">
                        <h1 class="halo">Halo</h1>
                        <h1 class="halo">Nama Saya <span>NAUFAL</span></h1>
                        <h1 class="halo">Web Developer</h1>
                        <p class="halo_p">
                            saya adalah seorang mahasiswa di Universitas Amikom Purwokerto.
                            Saya adalah seorang yang suka dengan dunia IT, saya juga suka dengan dunia kuliner.
                            Saya membuat website ini untuk memenuhi tugas dalam Program MSIB Tahun 2023.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <?php
    function rupiah($angka)
    {

        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }

    ?>
    <script src="https://kit.fontawesome.com/25db4f44a1.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener("scroll", function() {
            var nav = document.getElementById("navbar");
            nav.classList.toggle("scrolled", window.scrollY > 0);
        });
    </script>
</body>

</html>