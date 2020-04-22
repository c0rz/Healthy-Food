<div class="container-fluid">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">New Post</h1>
            </div>
            <hr>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-edit"></i> New Post</div>
                    <div class="card-body">
                        <form action="<?= base_url('new_post') ?>" method="post" autocomplete="off" enctype="multipart/form-data">
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
                                <label class="col-form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Isi post</label>
                                <textarea type="text" class="form-control" name="isi"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Gambar</label>
                                <input type="file" name="gambar" accept="image/gif,image/jpeg" class="form-control" required>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success">
                                    PUBLIKASI BERITA
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
    </div>