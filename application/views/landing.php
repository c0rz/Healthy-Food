<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Kesehatan adalah jalan ninja ku.">
  <meta name="author" content="Kelompok Webpro">
  <link rel="icon" href="<?= base_url($list_config['base_images']) ?>/icon.png">

  <title><?= $list_config['title'] ?></title>
  <link rel="stylesheet" href="<?= base_url($list_config['base_css']) ?>/fontawesome/css/all.min.css">
  <link href="<?= base_url($list_config['base_css']) ?>/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url($list_config['base_css']) ?>/slider.css" rel="stylesheet">
  <link href="<?= base_url($list_config['base_css']) ?>/coursel.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>"><i class="fas fa-hospital"></i> <?= $list_config['title'] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url() ?>"><i class="fas fa-home"></i> Halaman Utama</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url('blog') ?>"><i class="fas fa-blog"></i> Portal Berita</a>
            </li>
          </ul>
          <div class="navbar-form navbar-left">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('login') ?>">Masuk</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('register') ?>">Daftar</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" style="background-color: green; height: 80vh;">
          <div class="container">
            <div class="content style text-center">
              <h2 class="text-bold mb-2" style="margin-top: 160px;">
                Layanan Konsultasi
              </h2>
              <p class="tag-text mb-5">
                Kami menawarkan konsultasi gratis sebelum pemeriksaan
                lebih lanjut.
              </p>
              <a href="#" class="btn btn-main btn-white">Eksplorasi</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" style="background-image: url(<?= base_url('assets/images/slider-bg-2.jpg') ?>);">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" style="background-image: url(<?= base_url('assets/images/slider-bg-3.jpg') ?>);">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <i class="rounded-circle fas fa-ambulance fa-4x"></i>
          <h2>Asisten Kesehatan Anda</h2>
          <p>Kami hadir untuk membantu Anda mengelola kesehatan Anda dan keluarga. Perjalanan kesehatan dimulai dari pencegahan, pengobatan ketika sakit, dan perawatan setelah sembuh.</p>
        </div>
        <div class="col-lg-4">
          <i class="rounded-circle fas fa-users fa-4x"></i>
          <h2>Terhubung</h2>
          <p>Tim <?= $list_config["title"] ?> menyiapkan informasi kesehatan dengan referensi yang jelas dan kredibel, menyediakan platform komunitas bagi pengguna untuk bertukar informasi dan saling mendukung dalam perjalanan kesehatannya.</p>
        </div>
        <div class="col-lg-4">
          <i class="rounded-circle fas fa-money-check-alt fa-4x"></i>
          <h2>Layanan Gratis</h2>
          <p>Semua yang ada layanan tanpa dipungut biaya 1% karena memang tujuan untuk mempermudah konsultasi tentang kesehatan pada kehidupan.</p>
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Rekomendasi makanan sehat <span class="text-muted">untukmu</span></h2>
          <p class="lead">Kami merekomendasikan makanan sehat dan tepat berdasarkan kondisi kesehatan kamu saat ini. Masukan keluhanmu kami rekomendasikan makanan sehat untukmu.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="<?= base_url($list_config['base_images']) ?>/doc2.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Tips kesehatan <span class="text-muted">untukmu</span></h2>
          <p class="lead">Kami menyediakan berbagai artikel kesehatan yang bisa kamu coba. Terapkan tips kami untuk mendapatkan hidup sehat impian semua orang. </p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="<?= base_url($list_config['base_images']) ?>/doc1.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Konsultasi bersama <span class="text-muted">kami</span></h2>
          <p class="lead">Sampaikan keluhan kesehatan diri kamu disini. Dokter kami akan berikan solusi untuk masalah kesehatanmu.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="<?= base_url($list_config['base_images']) ?>/doc3.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

    </div>


    <footer class="container">
      <p class="float-right"><a onclick="gotoTop()" href="#">Back to top</a></p>
      <p>&copy; 2020 <?= $list_config["title"] ?></p>
    </footer>
  </main>
  <script type="text/javascript">
    function gotoTop() {
      $("html, body").animate({
        scrollTop: "0"
      });
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="<?= base_url(); ?>assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="<?= base_url(); ?>assets/js/vendor/popper.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/vendor/holder.min.js"></script>
</body>

</html>