<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container-fluid">
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4">
              <div class="card-body"><i class="fas fa-file-medical-alt"></i> Total Positif : <?= $corona_indonesia->Confirmed ?></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card bg-success text-white mb-4">
              <div class="card-body"><i class="fas fa-heartbeat"></i> Total Sembuh : <?= $corona_indonesia->Recovered ?></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card bg-danger text-white mb-4">
              <div class="card-body"><i class="fas fa-skull-crossbones"></i> Total Meninggal : <?= $corona_indonesia->Deaths ?></div>
            </div>
          </div>
        </div>
      </div>
      <div class="wow fadeIn">
        <h2 class="h1 text-center mb-5">#Dirumahaja</h2>
      </div>
      <div class="row">
        <?php foreach ($berita as $list) {
          $preview = substr($list['isi_blog'], 0, 100) . '...'; ?>
          <div class="col-lg-5">
            <div class="view overlay rounded z-depth-1">
              <img src="<?= base_url('assets/blog/' . $list["gambar"]) ?>" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-7">
            <h3 class="font-weight-bold dark-grey-text">
              <strong><?= $list["judul"] ?></strong>
            </h3>
            <p class="grey-text"><?= $preview ?></p>
            <a href="<?= base_url('read/' . $list["url"]) ?>" class="btn btn-primary btn-sm"> Baca Selengkapnya
              <i class="fas fa-book"></i>
            </a>
          </div>
          <!--Grid column-->
          <hr class="mb-5">
        <?php } ?>
      </div>
  </div>
</div>