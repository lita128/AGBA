<?php


include('koneksi.php');
$id = $_GET['idx'];
$delete = mysqli_query($koneksi, "DELETE FROM tbl_promo WHERE id='$id'");


if ($delete) {

    header('location:tampil_promo.php');
} else {
    echo "Gagal menghapus data";
}
