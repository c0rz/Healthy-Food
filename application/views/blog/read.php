<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<main role="blog">
    <div class="container">
        <section class="mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-12 wow fadeIn">

                        <img src="<?= base_url('assets/blog/' . $artikel["gambar"]) ?>" class="img-fluid" alt="">

                    </div>
                    <hr>
                </div>
            </div>
            <div class="card mb-4 wow fadeIn">
                <div class="card-body">
                    <h1>
                        <p class="my-4 text-center"><?= $artikel['judul'] ?></p>
                    </h1>
                    <p>
                        <?= $artikel['isi_blog'] ?>
                    </p>

                </div>

            </div>
            <div class="card mb-4 wow fadeIn">
                <div class="card-header font-weight-bold">
                    <span>About author</span>
                </div>
                <div class="card-body">

                    <div class="media d-block d-md-flex mt-3">
                        <img class="d-flex mb-3 mx-auto z-depth-1" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="Generic placeholder image" style="width: 100px;">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h5 class="mt-0 font-weight-bold"><?= $author["nama_lengkap"] ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</main>
<footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">
    <hr class="my-4">
    <a onclick="gotoTop()" href="#">
        Back to Top
    </a>
    <div class="footer-copyright py-3">
        © 2020 Copyright:
        <a href="<?= base_url() ?>" target="_blank"> <?= $list_config['title'] ?> </a>
    </div>
</footer>
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