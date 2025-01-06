<?php
include "koneksi.php"; 
?>
<html lang="en">
  <head>
    <!doctype html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/triangles.png">
    <title>My Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="img/logo.png" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <style>
      .bg-custom1{
        background: linear-gradient(to top right, black, rgba(51,8,103,1));
      }

      .bg-custom{
        background: linear-gradient(to bottom right, rgba(51,8,103,1), rgba(48,207,208,1));
      }

      .nav-link:hover{
        color: white;
      }

      .bi-person-circle{
        color: black;
      }

      .bi-person-circle:hover{
        color: white;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg bg-custom sticky-top">
      <div class="container  align-items-center">
        <a class="navbar-brand text-info" href="."><b>My Daily Journal</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark align-items-center">
            <li class="nav-item">
              <a class="nav-link" href="index.php#hero">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#Schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#galeri">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#Profil">Profile</a>
            </li>
            <li><a href="login.php"><i class="bi bi-person-circle"></i></a></li>
        </div>
      </div>
    </nav>

    <a><section id="hero" class="text-sm-start text-center p-5 bg-custom1" style="min-height: 100vh"></a>
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center text-white">
          <img src="img/gambar.jpg" width="300" class="img-fluid">
          <div>
            <h1 class="fw-bold display-4">My Daily Journal</h1>
            <h4 class="lead display-6">Selamat datang! Disini kalian bisa melihat beberapa hal yang kusuka.</h4>
          </div>
        </div>
      </div>
    </section>

    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <a><section id="Schedule" class="text-center p-5 bg-custom1 text-white"></a>
      <div class="container">
        <h1>
          Schedule
        </h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-start">
          <div class="col">
            <div class="card border-primary">
              <div class="card-header text-bg-primary">
                Senin
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h5 class="card-title p-2">10:20-12:00</h5>
                  <p class="card-text">Basis Data</p>
                  <p class="card-text">Ruang H.3.4</p>
                </li>
                <li class="list-group-item">
                  <h5 class="card-title p-2">12:30-15:00</h5>
                  <p class="card-text">Dasar Pemrograman</p>
                  <p class="card-text">Ruang H.3.1</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card  border-success">
              <div class="card-header text-bg-success">
                Selasa
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h5 class="card-title p-2">08:00-09:30</h5>
                  <p class="card-text">Pemrograman Berbasis Web</p>
                  <p class="card-text">Ruang D.2.7</p>
                </li>
                <li class="list-group-item">
                  <h5 class="card-title p-2">14:00-16:00</h5>
                  <p class="card-text">Basis Data</p>
                  <p class="card-text">Ruang D.3.M</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card  border-danger">
              <div class="card-header text-bg-danger">
                Rabu
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h5 class="card-title p-2">10:20-12:00</h5>
                  <p class="card-text">Pemrograman Berbasis Object</p>
                  <p class="card-text">Ruang D.2.A</p>
                </li>
                <li class="list-group-item">
                  <h5 class="card-title p-2">13:30-15:00</h5>
                  <p class="card-text">Pemrograman Sisi Server</p>
                  <p class="card-text">Ruang D.2.A</p>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col">
            <div class="card  border-warning  h-100">
              <div class="card-header text-bg-warning">
                Kamis
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h5 class="card-title p-2">08:00-10:00</h5>
                  <p class="card-text">Pengantar Teknologi Informasi</p>
                  <p class="card-text">Ruang D.3.N</p>
                </li>
                <li class="list-group-item">
                  <h5 class="card-title p-2"> </h5>
                  <p class="card-text"> </p>
                  <p class="card-text"> </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card  border-info">
              <div class="card-header text-bg-info">
                Jumat
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h5 class="card-title p-2">10:20-12:00</h5>
                  <p class="card-text">Basis Data</p>
                  <p class="card-text">Ruang H.3.4</p>
                </li>
                <li class="list-group-item">
                  <h5 class="card-title p-2">12:30-15:00</h5>
                  <p class="card-text">Dasar Pemrograman</p>
                  <p class="card-text">Ruang H.3.1</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card  border-secondary">
              <div class="card-header text-bg-secondary">
                Sabtu
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h5 class="card-title p-2">10:20-12:00</h5>
                  <p class="card-text">Basis Data</p>
                  <p class="card-text">Ruang H.3.4</p>
                </li>
                <li class="list-group-item">
                  <h5 class="card-title p-2">12:30-15:00</h5>
                  <p class="card-text">Dasar Pemrograman</p>
                  <p class="card-text">Ruang H.3.1</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card  border-dark h-100">
              <div class="card-header text-bg-dark">
                Minggu
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h5 class="card-title p-2">Tidak Ada Jadwal</h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <a><section id="Profil" class="text-center p-5" style="min-height: 100vh"></a>
      <div class="container">
        <h1>
          Profil Mahasiswa
        </h1>
        <div class="row row-cols-1 row-cols-md-2 justify-content-center">
          <div class="d-sm-flex align-items-center">
            <img src="img/tanktempur.jpg" style="width:300px; height: 300px;" class="img-fluid rounded-circle">
            <div>
              <table class="table" style="margin-left:auto;margin-right:auto;">
                <tbody>
                  <tr>
                    <td colspan="2" class="text-center"><h3>Ryandika Syauqi Ramadhani</h3></td>
                  </tr>
                  <tr>
                      <td colspan="2" class="text-center"><p>Mahasiswa Teknik Informatika</p></th>      
                  </tr>    
                  <tr>
                    <th scope="row" class="text-end"  width="120%">NIM</th>
                    <td>: A11.2023.15349</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-end" width="120%">Program Studi</th>
                    <td>: Teknik Informatika</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-end" width="120%">EMAIL</th>
                    <td>: 111202315349@gmail.com</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-end" width="120%">Telepon</th>
                    <td>: +62 895 4122 02621</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-end" width="120%">Alamat</th>
                    <td>: Jl. Pamularsih 1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <a><section id="galeri" class="text-center p-5  bg-custom1 text-white"></a>
      <h1>
        Gallery
      </h1>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1276872178p.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/tanktempur.jpg" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <footer class="text-center p-5 bg-info footer">
    <div>
        <a href="https://www.instagram.com/udinusofficial"
        ><i class="bi bi-instagram h2 p-2 text-dark"></i
        ></a>
        <a href="https://twitter.com/udinusofficial"
        ><i class="bi bi-twitter h2 p-2 text-dark"></i
        ></a>
        <a href="https://wa.me/+62895412202722"
        ><i class="bi bi-whatsapp h2 p-2 text-dark"></i
        ></a>
    </div>
    <div>Ryandika Syauqi Ramadhani &copy; 2024</div>
    </footer>
  
  </body>
</html>