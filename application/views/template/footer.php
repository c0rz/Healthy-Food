<footer class="page-footer text-center font-small mdb-color darken-2 mt-4 wow fadeIn">
  <hr class="my-4">
  <div class="pb-4">
    <a onclick="gotoTop()" href="#">
      Back to Top
    </a>
  </div>
  <div class="footer-copyright py-3">
    © 2018 Copyright:
    <a href="<?= base_url() ?>" target="_blank"> <?= $list_config['title'] ?></a>
  </div>
</footer>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/js/vendor/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/vendor/holder.min.js"></script>
<script>
  function gotoTop() {
    $("html, body").animate({
      scrollTop: "0"
    });
  }
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
  $("#menukbawah").click(function(e) {
    e.preventDefault();
    $("#balikin").toggleClass("toggled");
  });
  <?php if ($user_data["level"] != "Member") { ?>
    $(document).ready(function() {
      $(".search").keyup(function() {
        var searchTerm = $(".search").val();
        var listItem = $('.results tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

        $.extend($.expr[':'], {
          'containsi': function(elem, i, match, array) {
            return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
          }
        });

        $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e) {
          $(this).attr('visible', 'false');
        });

        $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
          $(this).attr('visible', 'true');
        });

        var jobCount = $('.results tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');

        if (jobCount == '0') {
          $('.no-result').show();
        } else {
          $('.no-result').hide();
        }
      });
    });
  <?php } ?>
</script>
</body>

</html>