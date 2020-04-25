<div class="container-fluid">
    <div class="row">
        <div class="container-fluid">
            <h1 class="mt-4">Panel Dokter</h1>
        </div>
        <div class="col lg-12">
            <div class="form-group pull-right">
                <input type="text" class="search form-control" placeholder="yang ingin dicari?" autocomplete="off">
            </div>
            <?php if (isset($error_message)) { ?>
                <div class="alert alert-danger col-md-12" role="alert">
                    <?= $error_message ?>
                </div>
            <?php } else if (isset($sukses_message)) { ?>
                <div class="alert alert-success col-md-12" role="alert">
                    <?= $sukses_message ?>
                    <!-- <meta http-equiv="refresh" content="3;url=<?= base_url('verif_post'); ?>" /> -->
                </div>
            <?php } ?>
            <span class="counter pull-right"></span>
            <table class="table table-hover table-bordered results">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Konsultasi</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal Konsul</th>
                        <th scope="col">BUKA PESAN</th>
                    </tr>
                    <tr class="bg-danger no-result">
                        <td colspan="6"><i class="fas fa-warning"></i> No result</td>
                    </tr>
                </thead>
                <tbody>

                    <?php if ($list_data) : foreach ($list_data as $p) {
                            $sql = "SELECT * FROM account WHERE id_akun = '" . $p['id_konsul'] . "'";
                            $query = $this->db->query($sql);
                            foreach ($query->result() as $row) { ?>
                                <tr>
                                    <td scope="row"><?= $p["idk"] ?></td>
                                    <td><?= $row->nama_lengkap ?></th>
                                    <td><?= $p["subject"] ?></td>
                                    <td><?= $p["topic"] ?></td>
                                    <td><?php if ($p["status"] == 0) {
                                        if ($p['dokter_respone'] == 0) {
                                            print '<button type="button" class="btn btn-outline-success btn-sm">PESAN BARU</button>';
                                        } else {
                                            print '<button type="button" class="btn btn-outline-success btn-sm">TERBACA</button>';
                                        }
                                        } else {
                                            print '<button type="button" class="btn btn-outline-danger btn-sm">CLOSED</button>';
                                        } ?></td>
                                    <td><?= $p["created"] ?></td>
                                    <td><a href="<?= base_url('pesan/'.$p["url_hash"]) ?>">Baca Pesan</a></td>
                                </tr>
                    <?php }
                        } else : echo '<td colspan="6"><i class="fas fa-warning"></i> No result</td>';
                    endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>