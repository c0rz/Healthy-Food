<div class="container-fluid">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Panel Admin</h1>
            </div>
            <hr>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-hospital-user"></i> Tambah Dokter</div>
                    <div class="card-body">
                        <form action="<?= base_url('daftar_dokter') ?>" method="post" autocomplete="off">
                            <?php if (isset($error_message)) { ?>
                                <div class="form-group row">
                                    <div class="alert alert-danger col-md-12" role="alert">
                                        <?= $error_message ?>
                                    </div>
                                </div>
                            <?php } else if (isset($sukses_message)) { ?>
                                <div class="form-group row">
                                    <div class="alert alert-success col-md-12" role="alert">
                                        <?= $sukses_message ?>
                                    </div>
                                    <!-- <meta http-equiv="refresh" content="3;url=<?= base_url('users/logout'); ?>" /> -->
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label class="col-form-label">E-Mail Address</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="full_name" id="full_name" required>
                            </div>
                            <div class="form-group">
                                <label lass="col-form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="form-group">
                                <label lass="col-form-label">Spesialisasi</label>
                                <input type="text" class="form-control" name="spel" required>
                            </div>
                            <div class="form-group">
                                <label lass="col-form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="ttl" required>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success">
                                    Tambah Dokter
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
    </div>