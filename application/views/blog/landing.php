<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<main role="blog">
    <div class="container">
        <div class="row">
            <?php foreach ($berita as $list) {
                $preview = substr($list['isi_blog'], 0, 100) . '...'; ?>
                <div class="col-lg-5">
                    <div class="view overlay rounded z-depth-1">
                        <img src="<?= base_url('assets/blog/' . $list["gambar"]) ?>" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <h3 class="font-weight-bold dark-grey-text">
                        <strong><?= $list["judul"] ?></strong>
                    </h3>
                    <p class="grey-text"><?= $preview ?></p>
                    <a href="<?= base_url('read/' . $list["url"]) ?>" class="btn btn-primary btn-sm"> Baca Selengkapnya
                        <i class="fas fa-book"></i>
                    </a>
                </div>
                <!--Grid column-->
                <hr class="mb-5">
            <?php } ?>
        </div>
    </div>
</main>
<script type="text/javascript">
    function gotoTop() {
        $("html, body").animate({
            scrollTop: "0"
        });
    }
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="<?= base_url(); ?>assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="<?= base_url(); ?>assets/js/vendor/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/vendor/holder.min.js"></script>
</body>

</html>