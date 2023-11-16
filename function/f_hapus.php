<?php
include '../koneksi.php';

// Check if 'id' is set in the $_GET array
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Use mysqli_real_escape_string to prevent SQL injection
    $id = mysqli_real_escape_string($connect, $id);

    $result = mysqli_query($connect, "DELETE FROM makanan WHERE `id` = '$id'");

    if (!$result) {
        die('Error: ' . mysqli_error($connect));
    }

    header("Location:../index.php");
} else {
    // Redirect or handle the case where 'id' is not set
    echo "Error: 'id' parameter is not set.";
}
