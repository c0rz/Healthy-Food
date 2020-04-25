<div class="container-fluid">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Pesan #<?= $konsul['idk'] ?></h1>
            </div>
            <hr>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-inbox"></i> Pesan</div>
                    <div class="card-body">
                        <?php
                        $sql = "SELECT * FROM pesan_konsul WHERE url_hash = '" . $konsul['url_hash'] . "' order by id_pesan asc";
                        $query = $this->db->query($sql);
                        foreach ($query->result() as $row) {
                            $sqli = "SELECT * FROM account WHERE id_akun = '" . $row->ida . "'";
                            $queryi = $this->db->query($sqli);
                            foreach ($queryi->result() as $profile) {
                        ?>
                                <div class="container <?php if ($profile->level == "Dokter") {
                                                            print 'darker';
                                                        } ?>">
                                    <img src="<?php if ($profile->level == "Dokter") {
                                                    print base_url('assets/images/profiledok.png');
                                                } else {
                                                    print base_url('assets/images/user.png');
                                                } ?>" alt="Avatar" class="imgop" style="width:100%;">
                                    <span style="font-weight: bold;"><?= $profile->nama_lengkap ?></span>
                                    <p><?= $row->pesan ?></p>
                                    <span class="time-right"><?= $row->created ?></span>
                                </div>
                        <?php }
                        } ?>
                        <form action="<?= base_url('send/' . $konsul['url_hash']) ?>" method="post" autocomplete="off">
                            <div class="form-group">
                                <label for="reply" class="col-form-label">Balas Pesan</label>
                                <textarea type="text" class="form-control" value="" name="reply" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">
                                    KIRIM PESAN
                                </button>
                            </div>
                        </form>
                        <?php if (isset($error_message)) { ?>
                            <div class="form-group">
                                <div class="alert alert-danger col-md-12" role="alert">
                                    <?= $error_message ?>
                                </div>
                            </div>
                        <?php } else if (isset($sukses_message)) { ?>
                            <div class="form-group">
                                <div class="alert alert-success col-md-12" role="alert">
                                    <?= $sukses_message ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
    </div>