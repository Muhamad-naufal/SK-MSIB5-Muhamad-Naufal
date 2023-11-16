<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit || Index</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../components/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../components/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../components/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <?php

    include '../koneksi.php';

    $query = mysqli_query($connect, "SELECT * FROM makanan where id = '$_GET[id]'");
    while ($b = mysqli_fetch_array($query)) {
        $id = $_GET['id'];
        $kode = $b["kode_makanan"];
        $gambar = $b["foto"];
        $nama = $b["nama_makanan"];
        $me_sak = $b["id_me_sak"];
        $harga = $b["harga"];
        $kategori = $b["id_kategori"];
    }
    echo "Kode: $kode, Gambar: $gambar, Nama: $nama, Me_sak: $me_sak, Harga: $harga, Kategori: $kategori";

    ?>
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../logo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">About</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../dashboard.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rangkuman</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Makanan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Tambahkan Data Makanan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card border-info mb-3" style="max-width: 58rem;">
                        <div class="card-header">Tambah Makanan</div>
                        <div class="card-body">
                            <form action="../function/f_edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                                <img src="<?php echo $gambar ?>" width="100"> <br>
                                <label for=" makanan">Kode Makanan</label>
                                <input class="form-control" type="text" name="kode_makanan" readonly value="<?php echo $kode ?>">
                                <label for="fileToUpload">Gambar</label>
                                <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                                <label for="makanan">Nama Makanan</label>
                                <input class="form-control" type="text" name="makanan" value="<?php echo $nama ?>">
                                <label for="me_sak">Metode Masak</label>
                                <select class="form-control" name="me_sak" id="me_sak">
                                    <?php
                                    // Fetch data from the "items" table
                                    $query = mysqli_query($connect, "SELECT * FROM me_sak");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            $selected = ($data["id_me_sak"] == $me_sak) ? "selected" : "";
                                            echo "<option value='" . $data["id_me_sak"] . "'$selected>" . $data["me_sak"] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No items available</option>";
                                    }
                                    ?>
                                </select>
                                <label for="harga">Harga Satuan</label>
                                <input class="form-control" type="number" name="harga" value="<?php echo $harga ?>">
                                <label for="me_sak">Kategori</label>
                                <select class="form-control" name="kategori" id="kategori">
                                    <?php
                                    // Fetch data from the "items" table
                                    $query = mysqli_query($connect, "SELECT * FROM kategori");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            $selected = ($data["id_kategori"] == $kategori) ? "selected" : "";
                                            echo "<option value='" . $data["id_kategori"] . "'$selected>" . $data["kategori"] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No items available</option>";
                                    }
                                    ?>
                                </select>
                                <input type="submit" name="Submit" class="btn btn-primary mt-5" value="Simpan">
                            </form>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../components/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../components/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../components/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../components/dist/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="../components/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="../components/plugins/raphael/raphael.min.js"></script>
    <script src="../components/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="../components/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="../components/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../components/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../components/dist/js/pages/dashboard2.js"></script>
    <script src="https://kit.fontawesome.com/25db4f44a1.js" crossorigin="anonymous"></script>
</body>

</html>