
<?php
      include 'konekcija.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kafeterija Mlin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/slippry.css">
  <link href="assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/color/default.css">
  <script src="assets/js/modernizr.custom.js"></script>
</head>

<body>

  <?php
        include 'meni.php';
        include 'slajder.php';
  ?>

  <section id="about" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Forma izmene cene napitka</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              unesi novu cenu
            </p>

          </div>
        </div>
      </div>
      <div id="podaci">
        <form method="post" action="update.php">
          <input type="hidden" name="id" class="form-control" value="<?php echo $_GET['id'];?>">
          <label for="cena">Cena</label>
          <input type="text" name="cena" class="form-control" value="<?php echo $_GET['cena'];?>">

          <label for="dugme"></label>
          <input type="submit" name="unos" class="form-control btn-primary" value="Izmeni">
        </form>
      </div>
    </div>
  </section>


  <?php
      include 'footer.php';
   ?>
  <a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>
  <!-- javascript -->
  <script src="assets/js/jquery-1.9.1.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/slippry.min.js"></script>
  <script src="assets/js/nagging-menu.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/jquery.scrollTo.js"></script>
  <script src="assets/js/jquery.fancybox.pack.js"></script>
  <script src="assets/js/jquery.fancybox-media.js"></script>
  <script src="assets/js/masonry.pkgd.min.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/jquery.nicescroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="assets/js/AnimOnScroll.js"></script>

  <script>
    $(document).ready(function() {
      $('#slippry-slider').slippry(
        defaults = {
          transition: 'vertical',
          useCSS: true,
          speed: 5000,
          pause: 3000,
          initSingle: false,
          auto: true,
          preload: 'visible',
          pager: false,
        }

      )
    });
  </script>


</body>

</html>
