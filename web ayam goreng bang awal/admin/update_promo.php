<?php

include('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama_promo'];
$jenis =$_POST['jenisp'];
$waktu = $_POST['waktu'];
$ket = $_POST['ket'];

$rand = rand();
$ekstension = array('jpg', 'jpeg', 'png', 'gif');
$filename = $_FILES['cover']['name'];
$ukuran = $_FILES['cover']['size'];

$ext = pathinfo($filename, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstension)) {
    echo "Gagal eksistensi";
} else {
    if ($ukuran < 1044070) {
        $xx = $rand . '_' . $filename;

        move_uploaded_file($_FILES['cover']['tmp_name'], 'img_promo/' . $rand . '_' . $filename);

        $simpan = mysqli_query($koneksi, "INSERT into tbl_promo set nama='$nama', jenisp='$jenis', 
        waktu='$waktu', ket='$ket', cover='$xx'");

        if ($simpan) {
            header('location: tampil_promo.php');
        } else {
            echo "Gagal input data";
        }
    }
}
