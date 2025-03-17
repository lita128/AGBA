<?php
//ini khusus untuk SELECT KATEGORI, line 40
include('koneksi.php');
$ambil = mysqli_query( $koneksi, "SELECT * FROM tbl_promo");
$results = mysqli_fetch_all($ambil, MYSQLI_ASSOC);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.tiny.cloud/1/t5r1zn6bql519qzcf2ndlrspehxd1249dtd3hdt1v2d4hpyi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>forminputpromo</title>
</head>

<body>
    <div class="container mt-3">

        <form method="POST" action="simpan_promo.php" enctype="multipart/form-data">

            <div class="form-group">
                <label>Judul Promo</label>
                <input type="text" name="nama_promo" size="50" class="form-control">
            </div>

            <div class="form-group">
                <label>Jenis Promo</label>
                <input type="text" name="jenisp" class="form-control">
            </div>

            <div class="form-group">
                <label>Priode Promo</label>
                <input type="text" name="waktu" class="form-control">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="ket" class="form-control">
            </div>        

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="cover" class="form-control">
            </div>

            <input type="submit" value="simpan" class="btn btn-info">
            <a href="tampil_promo.php" class="btn btn-success">kembali</a>

        </form>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>