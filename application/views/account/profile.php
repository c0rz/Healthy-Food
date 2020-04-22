<div class="container-fluid">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Profile</h1>
            </div>
            <hr>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-user"></i> Update Profile</div>
                    <div class="card-body">
                        <form action="<?= base_url('users/update') ?>" method="post" autocomplete="off">
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
                                    <meta http-equiv="refresh" content="3;url=<?= base_url('users/logout'); ?>" />
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="email_address" class="col-form-label">E-Mail Address</label>
                                <input type="email" class="form-control" value="<?= $user_data['email'] ?>" id="email" required disabled>
                            </div>
                            <div class="form-group">
                                <label for="full_name" class="col-form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" value="<?= $user_data['nama_lengkap'] ?>" name="full_name" id="full_name" required>
                            </div>
                            <div class="form-group">
                                <label for="password_old" class="col-form-label">Password</label>
                                <input type="password" class="form-control" name="password_old" id="password_old" required>
                            </div>
                            <div class="form-group">
                                <label for="password_new" class="col-form-label">Password Baru</label>
                                <input type="password" class="form-control" name="password_new" id="password_new">
                            </div>
                            <div class="form-group">
                                <label for="password_new2" class="col-form-label">Konfrimasi Password Baru</label>
                                <input type="password" class="form-control" name="password_new2" id="password_new2">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success">
                                    PERBAHARUI DATA
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
    </div>