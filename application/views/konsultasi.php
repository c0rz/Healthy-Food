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

  <style type="text/css">
    h1{font-family: Tw Cen MT;}
    h5{font-family: Tw Cen MT;}
    #datadiri{margin-right: 500px;
              margin-top: 50px;
              }
    #dokter1{margin-top: 50px;
             margin-left:300px; }

    #dokter3{margin-top: 50px;
             margin-left: 300px; 
            }
    #dokter4{margin-top: 50px;
             margin-left: 300px; 
            }
        
  </style>


</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><i class="fas fa-hospital"></i> <?= $list_config['title'] ?></div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">Dashboard <div class="nav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
        <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
              <h4 class="text-white">Collapsed content</h4>
              <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
          </div>
        </div>
        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <span class="navbar-toggler-icon" id="menu-toggle"></span>
      </nav>

      <div class="container-fluid">
        <div id="layoutSidenav_content">
          <main>
            <div class="container-fluid">
              <h1 class="mt-4">Konsultasi Bersama Kami</h1>
              <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Pilih Dokter dan Berkonsultasilah</li>
              </ol>

<!--               <center><h5>ISI DATA DIRI KAMU</h5></center>
 -->
              <div id="dokter1">
                <div class="card" style="width:300px">
                  <img class="card-img-top" src="assets/images/dokter1.jpg" alt="Card image">
                  <div class="card-body">
                    <center><h6>Dr.dr.Mardjono Tjahjadi,SpBS,PhD</h6></center>
                    <center><p class="card-text">RS Mitra Keluarga Kemayoran</p></center>
                    <center><a href="#" class="btn btn-primary" style="margin-top: 20px;">Konsultasi</a></center>
                  </div>
                </div>
              </div>
              <div id="chatdok1">
               
              </div>

              <!-- <div id="dokter2">
                <div class="card" style="width:300px;">
                  <img class="card-img-top" style="height: 200px;" src="assets/images/dokter2.jpg" alt="Card image">
                  <div class="card-body">
                    <center><h6>dr.L.Aswin Pramono</h6></center>
                    <center><p class="card-text">RS St. Carolus</p></center>
                    <center><a href="#" class="btn btn-primary" style="margin-top: 20px;">Konsultasi</a></center>
                  </div>
                </div>
              </div> -->

              <div id="dokter3">
                <div class="card" style="width:300px;">
                  <img class="card-img-top"  src="assets/images/dokter3.jpg" alt="Card image">
                  <div class="card-body">
                    <center><h6>dr.Andjar Bhawono,Sp.OT</h6></center>
                    <center><p class="card-text">RS St. Carolus</p></center>
                    <center><a href="#" class="btn btn-primary" style="margin-top: 20px;">Konsultasi</a></center>
                  </div>
                </div>
              </div>
              <div id="dokter4">
                <div class="card" style="width:300px;">
                  <img class="card-img-top"src="assets/images/dokter4.jpg" alt="Card image">
                  <div class="card-body">
                    <center><h6>dr.Diah Anisa,O,Sp.AN</h6></center>
                    <center><p class="card-text">RS St. Carolus</p></center>
                    <center><a href="#" class="btn btn-primary" style="margin-top: 20px;">Konsultasi</a></center>
                  </div>
                </div>
              </div>
              <!-- <div id="datadiri">
                <div class="form-group">
                  <label for="usr">Nam:</label>
                  <input type="text" class="form-control" id="usr">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="text" class="form-control" id="pwd">
                </div>  
              </div>   -->

              
              </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="<?= base_url(); ?>assets/js/vendor/popper.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/vendor/holder.min.js"></script>
        <script>
          $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
          });
          $("#menukbawah").click(function(e) {
            e.preventDefault();
            $("#balikin").toggleClass("toggled");
          });
        </script>
</body>

</html>