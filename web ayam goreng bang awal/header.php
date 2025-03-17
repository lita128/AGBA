<?php
include('admin/koneksi.php');
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--fonts google-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- my style -->
  <link rel="stylesheet" href="css/style.css">

  <!-- responsive style -->
  <link rel="stylesheet" href="css/responsive.css">


  <!-- logo -->
  <link rel="icon" href="aset/img/logo kecil.png">

  <title>Ayam Goreng Bang Awal</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="aset/img/logo kecil.png" alt="" width="30" class="d-inline-block align-text-top mx-3">
            Ayam Goreng Bang Awal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tentang Kami
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="profil_perusahaan.php">Profil Perusahaan</a></li>
                  <li><a class="dropdown-item" href="tim.php">TIM Perusahaan</a></li>
                  <!-- <li><a class="dropdown-item" href="halal.php">Sertifikat Halal</a></li> -->
                  <li><a class="dropdown-item" href="haki.php">HAKI</a></li>
                </ul>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="alamat.php">Alamat</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="menu.php"> Menu </a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="promo.php">Promo</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="layanan.php">Layanan</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="kontak.php">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>