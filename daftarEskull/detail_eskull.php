<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ekstrakulikuler</title>
  <link rel="stylesheet" href="../assets/css/bootstrap-5.3.0/bootstrap.min.css">
  <style>
    @font-face {
      font-family: 'Poppins';
      src: url(assets/font/font-poppins/Poppins-Regular.ttf);
    }

    @media (max-width: 425px) {
      .navbar-pertama {
        display: none;
      }
    }

    * {
      font-family: 'Poppins';
    }
  </style>
</head>

<body>
<<<<<<< HEAD
    <!-- SECTION awal navbar pertama -->
    <div class="navbar-pertama">
        <nav class="navbar navbar-expand-sm display1 p-3" data-bs-theme="dark" style="height: 20px; background-color: #00ADEF">
            <div class="container-fluid">
                <span class="navbar-brand ukuran-selamat-datang">Selamat Datang Di Website Kami</span>
                <div class="d-flex me-2">
                    <span class="nav-link active me-4 text-light" aria-current="page">Jl. Siliwangi No. 44Kota Cirebon </span>
                    <span class="nav-link active text-light" aria-current="page">Telp. (0231) 202998</span>
                </div>
            </div>
        </nav>
    </div> 
    <!-- !SECTION akhir navbar pertama -->
    <!-- SECTION awal navbar kedua -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-kedua" data-bs-theme="dark">
        <div class="container-fluid ">
            <a class="navbar-brand p-0" href="home.html">
                <img src="../assets/imgs/Foto SD/logo light2.png" alt="Logo" width="230" class="m-0 mb-1 d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>    
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-5 gap-4">
                    <a class="nav-link text-white" aria-current="page" href="../home.php">Home</a>
                    <a class="nav-link text-white" href="../profile/profile.php">Profil</a>
                    <a class="nav-link text-white" href="../daftarBerita/berita.php">Berita</a>
                    <a class="nav-link text-white" href="#">PPDB</a>
                    <a class="nav-link text-white" href="../GALERI/galeri/admin/galeri.php">Galeri</a>
                    <a class="nav-link text-white" href="../daftarGuru/daftar_guru.php">Daftar Guru</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Edit Website
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Carousel</a></li>
                            <li><a class="dropdown-item" href="../daftarGuru/daftar_guru.php">Guru</a></li>
                            <li><a class="dropdown-item" href="../profile/edit_sejarah.php">Sejarah</a></li>
                            <li><a class="dropdown-item" href="../profile/edit_visi_misi.php">Visi Misi</a></li>
                            <li><a class="dropdown-item" href="../daftarEskull/crud_eskull.php">Ekstrakulikuler</a></li>
                            <li><a class="dropdown-item" href="../GALERI/galeri/admin/galeri.php">Galeri</a></li>
                            <li><a class="dropdown-item" href="../daftarBerita/crud_berita.php">Berita</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- !SECTION akhir navbar kedua -->
    <div class="container-fluid">
        <div class="justify-content-center d-flex mb-4 mt-3">
            <div class="card" style="width: 70%;">
                <img src="../sample_img/img5.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title mb-4 fw-bold">Judul Eskull</h2>
                    <h5 class="mb-2 fw-semibold">Informasi :</h5>
                    <h5>Hari : Minggu</h5>
                    <h5>Pukul : 08.00</h5>
                    <h5>Pembimbing : Pak Lorem</h5>
                    <h5>Jumlah anggota : 20</h5>
                </div>
            </div>
=======

  <?php include "aksi_ekskul.php" ?>
  <?php include "../assets/components/header.php" ?>

  <div class="container-fluid">
    <div class="justify-content-center d-flex mb-4 mt-3">
      <div class="card" style="width: 70%;">
        <img src="sample_img/img5.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h2 class="card-title mb-4 fw-bold">Judul Eskull</h2>
          <h5 class="mb-2 fw-semibold">Informasi :</h5>
          <h5>Hari : Minggu</h5>
          <h5>Pukul : 08.00</h5>
          <h5>Pembimbing : Pak Lorem</h5>
          <h5>Jumlah anggota : 20</h5>
>>>>>>> 5bf1e4653dba2858d896c6136602a848c90405bf
        </div>
      </div>
    </div>
  </div>
  <!-- SECTION FOOTER -->
  <div class="footer">
    <div class="text-center bg-dark" style="padding: 5%;">
      <p class="text-white mb-0 mt-0">
        Coypright By @SD_Keramat2023
      </p>
    </div>
  </div>
  <!-- !SECTION FOOTER -->
  <script src="../assets/js/bootstrap-5.3.0/bootstrap.bundle.js"></script>
</body>

</html>