<?php
include('header.php');

?>

<?php
include ('admin/koneksi.php');
?>

<?php
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM tbl_promo where id='$id' limit 1");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);





