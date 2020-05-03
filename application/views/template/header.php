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
  <link href="<?= base_url($list_config['base_css']) ?>/boostrap-sidebar.css" rel="stylesheet">
  <link href="<?= base_url($list_config['base_css']) ?>/tabel.css" rel="stylesheet">
  <link href="<?= base_url($list_config['base_css']) ?>/slider.css" rel="stylesheet">
</head>

<body>

  <div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><i class="fas fa-hospital"></i> <?= $list_config['title'] ?></div>
      <div class="list-group list-group-flush">
        <a href="<?= base_url() ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i> Halaman utama</a>
        <a href="javascript:void(0);" id="lparent" class="list-group-item list-group-item-action bg-light" data-toggle="collapse" data-target="#layanan" aria-expanded="true" aria-controls="layanan">Layanan <?= $list_config['title'] ?> <i class="fas fa-angle-down text-left"></i></a>
        <div class="collapse" id="layanan" aria-labelledby="lparent" data-parent="#sidebar-wrapper">
        <?php if ($user_data['level'] ==  "Member") { ?>
          <a href="<?= base_url('inbox') ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-mail-bulk"></i> Lihat Semua Konsutasi</a>
          <a href="<?= base_url('konsultasi') ?>" class="list-group-item list-group-item-action bg-light"><i class="far fa-question-circle"></i> Konsultasi/Bertanya</a>
        <?php } ?>
          <a href="<?= base_url('blog') ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-blog"></i> Blog</a>
        </div>
        <?php if ($user_data['level'] ==  "Admin") { ?>
          <a href="javascript:void(0);" id="lparent" class="list-group-item list-group-item-action bg-light" data-toggle="collapse" data-target="#adminm" aria-expanded="true" aria-controls="layanan">Admin Menu <i class="fas fa-angle-down text-left"></i></a>
          <div class="collapse" id="adminm" aria-labelledby="lparent" data-parent="#sidebar-wrapper">
            <a href="<?= base_url('lihat_user') ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users"></i> Lihat Semua User</a>
            <a href="<?= base_url('daftar_dokter') ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-nurse"></i> Daftar Dokter</a>
            <a href="<?= base_url('verif_post') ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-blog"></i> Verifikasi Post</a>
            <a href="<?= base_url('inbox') ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-mail-bulk"></i> Konsutasi</a>
          </div>
        <?php } ?>
        <?php if ($user_data['level'] ==  "Dokter") { ?>
          <a href="javascript:void(0);" id="lparent" class="list-group-item list-group-item-action bg-light" data-toggle="collapse" data-target="#dokter" aria-expanded="true" aria-controls="layanan">Dokter Menu <i class="fas fa-angle-down text-left"></i></a>
          <div class="collapse" id="dokter" aria-labelledby="lparent" data-parent="#sidebar-wrapper">
            <a href="<?= base_url('new_post') ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-edit"></i> Buat Post</a>
            <a href="<?= base_url('inbox') ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-folder-open"></i> Konsultasi</a>
          </div>
        <?php } ?>
        <a href="javascript:void(0);" id="pprofile" class="list-group-item list-group-item-action bg-light" data-toggle="collapse" data-target="#profile" aria-controls="profile" aria-expanded="false" aria-label="Toggle navigation">Profile <i class="fas fa-angle-down text-left"></i></a>
        <div class="collapse" id="profile" aria-labelledby="pprofile" data-parent="#sidebar-wrapper">
          <a href="<?= base_url('profile') ?>" class="list-group-item list-group-item-action bg-light"><i class="far fa-user"></i> Edit Profile</a>
        </div>
        <a href="<?= base_url('users/logout') ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-sign-out-alt"></i> Keluar Layanan</a>
      </div>
    </div>
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <span class="navbar-toggler-icon" id="menu-toggle"></span>
      </nav>