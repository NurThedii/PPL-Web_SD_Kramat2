<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Guru</title>
    <style>
        @font-face {
            font-family: 'TiltNeon' ;
            src: url(assets/font/Tilt_Neon/static/TiltNeon-Regular.ttf);
        }
        @font-face {
            font-family: 'ClimateC';
            src: url(assets/font/Climate_Crisis/static/ClimateCrisis-Regular.ttf);
        }
        @font-face {
            font-family: 'Anton';
            src: url(assets/font/Anton/Anton-Regular.ttf);
        }
        @font-face {
            font-family: 'Kanit';
            src: url(assets/font/Kanit/Kanit-Regular.ttf);
        }
        @font-face {
            font-family: 'Lobster';
            src: url(assets/font/Lobster/Lobster-Regular.ttf);
        }
        @font-face {
            font-family: 'DancingS';
            src: url(assets/font/Dancing_Script/static/DancingScript-Regular.ttf);
        }
        @font-face {
            font-family: 'Mynerve';
            src: url(assets/font/Mynerve/Mynerve-Regular.ttf);
        }
        @font-face {
            font-family: 'Oswald';
            src: url(assets/font/Oswald/static/Oswald-Regular.ttf);
        }
        @font-face {
            font-family: 'TiltWarp';
            src: url(assets/font/Tilt_Warp/static/TiltWarp-Regular.ttf);
        }
        @font-face {
            font-family: 'Poppins';
            src: url(assets/font/font-poppins/Poppins-Regular.ttf);
        }
        @media (max-width: 425px){
            .navbar-pertama{
                display: none;
            }
        }
        .display1{
            flex-wrap: nowrap;
        }
        /* .guru{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        } */
        .guru h5{
            font-family: 'lobster';
        }
    </style>
</head>
<body>
        <!-- COPY DARI SINI -->
    <!-- awal navbar pertama -->
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
    <!-- akhir navbar pertama -->


    <!-- awal navbar kedua -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-kedua" data-bs-theme="dark">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">
                <img src="image/logoSD.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                SDN Kramat 2
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>    
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-5">
                    <a class="nav-link active ms-4" aria-current="page" href="#">Home</a>
                    <a class="nav-link ms-4" href="#">Profil</a>
                    <a class="nav-link ms-4" href="#">Berita</a>
                    <a class="nav-link ms-4" href="#">PPDB</a>
                    <a class="nav-link ms-4" href="#">Galeri</a>
                    <a class="nav-link ms-4" href="#">Informasi</a>
                    <li class="nav-item dropdown ms-4">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Modifikasi Data
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="modifikasi_carousel.php">Carousel</a></li>
                            <li><a class="dropdown-item" href="#">Silahkan Isi Yang Lain</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>
<!-- akhir navbar kedua -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="mt-3 py-3">
                    <h5 class="text-center mb-3">Daftar Guru :</h5>
                    <div class="guru d-flex flex-wrap justify-content-center gap-5">
                        <div class="card border-2 text-center border-dark" style="width: 11rem;">
                            <img src="Foto Guru/g1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>Nama Guru</h5>
                                <p class="fw-light">-Guru Mapel-</p>
                                <button class="bg-transparent border-0 text-danger float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Profile ></button>
                            </div>
                        </div>
                        <div class="card border-2 text-center border-dark" style="width: 11rem;">
                            <img src="Foto Guru/g2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>Nama Guru</h5>
                                <p class="fw-light">-Guru Mapel-</p>
                                <button class="bg-transparent border-0 text-danger float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Profile ></button>
                            </div>
                        </div>
                        <div class="card border-2 text-center border-dark" style="width: 11rem;">
                            <img src="Foto Guru/g3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>Nama Guru</h5>
                                <p class="fw-light">-Guru Mapel-</p>
                                <button class="bg-transparent border-0 text-danger float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Profile ></button>
                            </div>
                        </div>
                        <div class="card border-2 text-center border-dark" style="width: 11rem;">
                            <img src="Foto Guru/g4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>Nama Guru</h5>
                                <p class="fw-light">-Guru Mapel-</p>
                                <button class="bg-transparent border-0 text-danger float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Profile ></button>
                            </div>
                        </div>
                        <div class="card border-2 text-center border-dark" style="width: 11rem;">
                            <img src="Foto Guru/g5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5>Nama Guru</h5>
                                <p class="fw-light">-Guru Mapel-</p>
                                <button class="bg-transparent border-0 text-danger float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Profile ></button>
                            </div>
                        </div>
                        <!-- SECTION POP DETAIL GURU -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                                <div class="modal-content text-start">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Guru</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- isi -->
                                    <div class="detail row" id="modal">
                                    <div class="col-md-4" id="detail_kanan">
                                        <img src="Foto Guru/g1.jpg" class="m-auto mb-2 w-100" alt="">
                                    </div>
                                    <div class="col ms-auto" id="detail_kiri">
                                        <h5>Nama Guru</h5>
                                        <p class="fw-light">-Guru Mapel-</p>
                                        <p>Tahun Mengajar : ...</p>
                                        <p>Alamat : ...</p>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- !SECTION DETAIL GURU -->
                    </div>
                </div>
            </div>
            <div class="col ms-auto">
                <div class="">
                    <form action="" class="m-auto mt-3 p-3 bg-dark border border-white border-2" method="POST">
                        <h3 class="text-white border-bottom border-2 border-white mb-5">FeedBack</h3>
                        <div class="mb-2">
                            <label class="form-label text-white" for="username" style="display: block;">Email :</label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-white" for="password" style="display: block;">Pesan :</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="6"></textarea>
                        </div>
                        <div class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill w-100 border-0 fw-bold mb-3" data-bs-target="#pesan" 
                        data-bs-toggle="modal" style="background: linear-gradient(120deg,#00ccff,#0036cb);" name="login">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>