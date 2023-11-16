<?php
include '../koneksi.php';

// get variable from form input
$kode = $_POST["kode_makanan"];
$nama = $_POST["makanan"];
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
    "UPDATE `makanan` set 
`nama_makanan` = '$nama', 
`foto` = '$target_file', 
`nama_makana` = '$nama', 
`id_me_sak` = '$me_sak', 
`harga` = '$harga', 
`id_kategori` = '$kategori'
where `id` = '$_GET[id]'"
);

header("Location:../index.php");
