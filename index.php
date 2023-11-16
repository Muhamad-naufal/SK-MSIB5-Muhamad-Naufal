<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Makanan || Index</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="components/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="components/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="components/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <?php
    include "koneksi.php";
    $query = mysqli_query($connect, "SELECT * FROM makanan as m join kategori as k on m.id_kategori = k.id_kategori join me_sak as ms on m.id_me_sak = ms.id_me_sak order by m.id asc")
    ?>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="logo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
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
                                    <a href="dashboard.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rangkuman</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
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
                            <h1 class="m-0">Data Makanan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Data Makanan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <a href="pages/tambah.php" class="ml-1 mb-3"><button type=" button" class="btn btn-primary"><i class="fa-solid fa-plus"></i></button></a>
                    <table id="tabel-data" class="table table-dark table-striped table-bordered display" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    Kode Makanan
                                </th>
                                <th>
                                    Gambar
                                </th>
                                <th>
                                    Nama Makanan
                                </th>
                                <th>
                                    Metode Masak
                                </th>
                                <th>
                                    Harga
                                </th>
                                <th>
                                    Kategori
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($query) > 0) {
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)) {
                            ?>
                                    <tr>
                                        <td> <?php echo $data["kode_makanan"] ?></td>
                                        <td> <img src="images/<?php echo $data["foto"] ?>" width="100"> </td>
                                        <td> <?php echo $data["nama_makanan"] ?> </td>
                                        <td> <?php echo $data["me_sak"] ?> </td>
                                        <td> <?php echo $data["harga"] ?></td>
                                        <td> <?php echo $data["kategori"] ?></td>
                                        <td>
                                            <button type=" button" class="btn btn-danger" onclick="confirmDelete('<?php echo $data["id"] ?>')"><i class=" fa-solid fa-trash"></i></button>
                                            <a href="pages/edit.php?id=<?php echo $data["id"] ?>"><button type=" button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="components/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="components/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="components/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="components/dist/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="components/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="components/plugins/raphael/raphael.min.js"></script>
    <script src="components/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="components/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="components/plugins/chart.js/Chart.min.js"></script>
    <script src="components/dist/js/pages/dashboard2.js"></script>
    <script src="https://kit.fontawesome.com/25db4f44a1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#tabel-data');

        let deleteConfirmed = false;

        function confirmDelete(id) {
            if (deleteConfirmed || confirm("Are you sure you want to delete this record?")) {
                deleteConfirmed = true;
                window.location.href = "function/f_hapus.php?id=" + id;
            } else {
                return false;
            }
        }
    </script>
</body>

</html>