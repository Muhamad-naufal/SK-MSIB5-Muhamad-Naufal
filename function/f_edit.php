<?php
include '../koneksi.php';

// get variable from form input
$query = mysqli_query($connect, "SELECT * FROM makanan as m 
join kategori as k on m.id_kategori = k.id_kategori 
join me_sak as ms on m.id_me_sak = ms.id_me_sak 
order by m.id asc");

$kode = $_POST["kode_makanan"];
$nama = $_POST["makanan"];
$me_sak = $_POST["me_sak"];
$harga = $_POST["harga"];
$kategori = $_POST["kategori"];

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    // Rest of your code...
} else {
    echo "Error: Missing or invalid 'id' parameter.";
    // Handle the error or redirect to an error page.
    exit();
}

$target_dir = "../images/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";
    $result = mysqli_query(
        $connect,
        "UPDATE `makanan` set 
    `nama_makanan` = '$nama', 
    `foto` = '$target_file', 
    `nama_makanan` = '$nama', 
    `id_me_sak` = '$me_sak', 
    `harga` = '$harga', 
    `id_kategori` = '$kategori'
    where `id` = '$_GET[id]'"
    );
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query(
    $connect,
    "UPDATE `makanan` set 
`nama_makanan` = '$nama', 
`nama_makanan` = '$nama', 
`id_me_sak` = '$me_sak', 
`harga` = '$harga', 
`id_kategori` = '$kategori'
where `id` = '$_GET[id]'"
);
header("Location:../index.php");
