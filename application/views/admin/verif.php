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
                    <meta http-equiv="refresh" content="3;url=<?= base_url('verif_post'); ?>" />
                </div>
            <?php } ?>
            <span class="counter pull-right"></span>
            <table class="table table-hover table-bordered results">
                <thead class="thead dark">
                    <tr>
                        <th>#</th>
                        <th class="col-md-5 col-xs-5">Judul</th>
                        <th class="col-md-4 col-xs-4">Gambar</th>
                        <th class="col-md-3 col-xs-3">Preview</th>
                        <th colspan="2" class="col-md-3 col-xs-3 text-center">IZINKAN</th>
                    </tr>
                    <tr class="bg-danger no-result">
                        <td colspan="6"><i class="fas fa-warning"></i> No result</td>
                    </tr>
                </thead>
                <tbody>

                    <?php if ($list_data) : foreach ($list_data as $p) { ?>
                            <tr>
                                <th scope="row"><?= $p["id_blog"] ?></th>
                                <td><?= $p["judul"] ?></td>
                                <td><img src="<?= base_url('assets/blog/' . $p["gambar"]) ?>" class="img-fluid" alt=""></td>
                                <td><a href="<?= base_url('read/' . $p["url"]) ?>">Lihat Post</a></td>
                                <td><a href="<?= base_url('blog/update/' . $p["id_blog"]) ?>" type="button" class="btn btn-success btn-sm">IZINKAN</a></td>
                                <td><a href="<?= base_url('blog/delete/' . $p["id_blog"]) ?>" onclick="return confirm('Yakin mau dihapus?')" type="button" class="btn btn-danger btn-sm">HAPUS</a></td>
                            </tr>
                    <?php } else : echo '<td colspan="6"><i class="fas fa-warning"></i> No result</td>';
                    endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>