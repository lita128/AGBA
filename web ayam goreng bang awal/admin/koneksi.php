<?php

//koneksinya ini
    $koneksi=mysqli_connect('localhost','root','','AGBA');

    //kondisi
    if(!$koneksi){
        echo"Gagal terhubung..!!!";
    }

?>