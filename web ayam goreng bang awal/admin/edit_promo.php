<?php


include('koneksi.php');
$id = $_GET['id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_promo WHERE id='$id' LIMIT 1");
$result = mysqli_fetch_all($tampil, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.tiny.cloud/1/t5r1zn6bql519qzcf2ndlrspehxd1249dtd3hdt1v2d4hpyi/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <form method="POST" action="update_promo.php" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?php echo $result[0]['id'] ?>">

            <div class="form-group">
                <label>Judul Promo</label>
                <input type="text" name="nama_promo" size="50" value="<?php echo $result[0]['nama'] ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Jenis Promo</label>
                <input type="text" name="jenisp" value="<?php echo $result[0]['jenisp'] ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Periode Promo</label>
                <input type="text" name="waktu" value="<?php echo $result[0]['waktu'] ?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="ket" value="<?php echo $result[0]['ket'] ?>" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Gambar</label>
                <input type="text" name="cover" value="<?php echo $result[0]['cover'] ?>" class="form-control">
            </div>

            <input type="submit" value="edit" class="btn btn-info">

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