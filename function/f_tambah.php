<?php
include '../koneksi.php';

// get variable from form input
$kode_makanan = $_POST["kode_makanan"];
$nama_makanan = $_POST["makanan"];
$me_sak = $_POST["me_sak"];
$harga = $_POST["harga"];
$kategori = $_POST["kategori"];

$target_dir = "../images/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query(
    $connect,
    "INSERT INTO `makanan` 
           (`id`, `kode_makanan`, `foto`, `id_me_sak`,`nama_makanan`, `harga`, `id_kategori`) 
    VALUES ('', '$kode_makanan', '$target_file', '$me_sak', '$nama_makanan', '$harga', '$kategori');"
);

header("Location:../index.php");
