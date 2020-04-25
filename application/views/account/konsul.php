<div class="container-fluid">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Konsultasi</h1>
            </div>
            <hr>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-book-reader"></i> Form Konsultasi</div>
                    <div class="card-body">
                        <form action="<?= base_url('konsultasi/member') ?>" method="post" autocomplete="off">
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
                                    <meta http-equiv="refresh" content="3;url=<?= base_url('konsultasi'); ?>" />
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="subject" class="col-form-label">Subject</label>
                                <input type="text" class="form-control" name="subjek" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Dokter</label>
                                <select class="form-control" name="dokter">
                                    <option>----- PILIH DOKTER -----</option>
                                    <?php foreach ($list_data as $row) { if($row['semua_spesialisasi'] == TRUE) { ?>
                                        <option value="<?= $row["id_akun"]?>"><?= $row["nama_lengkap"]?> ( <?= $row['semua_spesialisasi'] ?> )</option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Topik</label>
                                <select class="form-control" name="topik">
                                    <option>----- PILIH TOPIK -----</option>
                                    <option value="Gejala">Gejala</option>
                                    <option value="Obat">Obat</option>
                                    <option value="Tips & Trick">Tips & Trick</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Pesan</label>
                                <textarea type="text" class="form-control" name="isi" required>
                                </textarea>
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