<?php
include('header_admin.php');
include('koneksi.php');
$query = mysqli_query($koneksi, "SELECT * FROM tbl_promo");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<body>
    <div>

        <a href="input_promo.php" class="btn btn-outline-success">Tambah Data</a>
        <table border="2" class="table table-success table-striped mt-2"> 

            <tr>
                <th>No</th>
                <th>Judul Promo</th>
                <th>Jenis Promo </th>
                <th>Priode Promo</th>
                <th>Keterangan</th>
                <th>Gambar</th>  
                <th>Aksi</th>             
            </tr>

            <?php $nomor = 1;
            foreach ($results as $result) { ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $result['nama'] ?></td>
                    <td><?php echo $result['jenisp'] ?></td>
                    <td><?php echo $result['waktu'] ?></td>
                    <td><?php echo $result['ket'] ?></td>                   
                    <td><img src="img_promo/<?php echo $result['cover'] ?>" width="320" height="320"></td>
                    <td><a href="hapus.php?idx=<?php echo $result['id']; ?>" class="btn btn-danger">Delete</a> |
                        <a href="edit_promo.php?id=<?php echo $result['id']; ?>" class="btn btn-success">edit</a>
                    </td>

                </tr>
            <?php $nomor++;
            } ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>