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
                    <meta http-equiv="refresh" content="3;url=<?= base_url('lihat_user'); ?>" />
                </div>
            <?php } ?>
            <span class="counter pull-right"></span>
            <table class="table table-hover table-bordered results">
                <thead class="thead dark">
                    <tr>
                        <th>#</th>
                        <th class="col-md-5 col-xs-5">Nama Lengkap</th>
                        <th class="col-md-4 col-xs-4">Tanggal Lahir</th>
                        <th class="col-md-3 col-xs-3">Email</th>
                        <th class="col-md-3 col-xs-3">Level</th>
                        <th class="col-md-3 col-xs-3">Aksi</th>
                    </tr>
                    <tr class="bg-danger no-result">
                        <td colspan="6"><i class="fas fa-warning"></i> No result</td>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($list_data as $p) {
                        $tanggal = new DateTime($p['tanggal_lahir']);
                        $skrng = new DateTime('today');
                        $umur = $skrng->diff($tanggal)->y; ?>
                        <tr>
                            <th scope="row"><?= $p["id_akun"] ?></th>
                            <td><?= $p["nama_lengkap"] ?></td>
                            <td><?= $p["tanggal_lahir"] ?> (Usia : <?= $umur ?> Thn)</td>
                            <td><?= $p["email"] ?></td>
                            <td><?= $p["level"] ?></td>
                            <td><a href="<?= base_url('users/delete/' . $p["id_akun"]) ?>" onclick="return confirm('Yakin mau dihapus?')" type="button" class="btn btn-danger btn-sm">HAPUS</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>