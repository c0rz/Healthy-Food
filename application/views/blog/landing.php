<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<main role="blog">
    <div class="container">
        <section class="card wow fadeIn" style="background-image: url(https://d1csarkz8obe9u.cloudfront.net/posterpreviews/stay-at-home-safe-life-prevent-corona-design-template-bfa231fbfa8cd9d7d1e206910546b9fa_screen.jpg?ts=1584757832); height: 100%; background-position: center;  background-repeat: no-repeat; background-size: cover;">

            <!-- Content -->
            <div class="card-body text-white text-center py-5 px-5 my-5">

                <h1 class="mb-4">
                    <b><strong style="font-family: TW Cen MT;">Bersama Lawan Corona</strong></b>
                </h1>
                <!-- <p>
                    <strong>#dirumahsaja</strong>
                </p> -->
                <p class="mb-4">
                    <strong style="color:#d9e3d8;font-family: TW Cen MT;">Mari bersama turunkan angka penyebaran dengan </strong>  <strong style="color:#46bd35;font-family: TW Cen MT;">#dirumahsaja</strong>
                </p>
                <a target="_blank" href="" class="btn btn-outline-white btn-lg">Baca
                    <i class="fas fa-graduation-cap ml-2"></i>
                </a>

            </div>
        </section>
        <hr class="my-5">
        <section  class="text-center">
            <div class="row mb-4 wow fadeIn">
                <?php foreach ($demo_berita as $r) {
                    $preview = substr($r['isi_blog'], 0, 100) . '...'; ?>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="view overlay">
                                <img src="<?= $r['gambar'] ?>" class="card-img-top" alt="">
                            </div>
                            <div class="card-body" style="position: left;">
                                <h4 class="card-title"><?=$r['judul']?></h4>
                                <p class="card-text"><?=$preview?></p>
                                <a href="<?=$r['judul']?>" target="_blank" class="btn btn-primary btn-md">
                                <i class="fas fa-book ml-2"></i> Baca selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <nav class="d-flex justify-content-center wow fadeIn">
                <ul class="pagination pg-blue">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>

                    <li class="page-item active">
                        <a class="page-link" href="#">1
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">5</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </div>
</main>

<footer class="container">
    <p class="float-right"><a onclick="gotoTop()" href="#">Back to top</a></p>
    <p>&copy; 2020 <?= $list_config["title"] ?></p>
</footer>
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