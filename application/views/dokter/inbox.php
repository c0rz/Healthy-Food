<div class="container-fluid">
    <div class="row">
        <div class="container-fluid">
            <h1 class="mt-4">Panel Admin</h1>
        </div>
        <div class="col lg-12">
            <div class="form-group pull-right">
                <input type="text" class="search form-control" placeholder="User yang ingin dicari?" autocomplete="off">
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
                                    <td><?= $p["status"] ?></td>
                                    <td><?= $p["created"] ?></td>
                                </tr>
                    <?php }
                        } else : echo '<td colspan="6"><i class="fas fa-warning"></i> No result</td>';
                    endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>