<?php
include "../koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kodeMakanan = mysqli_real_escape_string($connect, $_POST['kode_makanan']);

    // Perform the check in the database
    $query = mysqli_query($connect, "SELECT * FROM makanan WHERE kode_makanan = '$kodeMakanan'");

    if (mysqli_num_rows($query) > 0) {
        echo 'exists';
    } else {
        echo 'not_exists';
    }
} else {
    echo 'invalid_request';
}
