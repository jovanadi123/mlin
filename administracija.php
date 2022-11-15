
<?php
      include 'konekcija.php';
      include 'kategorijaModel.php';
      include 'vrstaModel.php';
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
            <h3><span>Administracija</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              unosi nov napitak
            </p>


          </div>
        </div>
      </div>
      <div id="podaci">
          <form method="post" action="add.php">
            <label for="naziv">Naziv</label>
            <input type="text" name="naziv" class="form-control" placeholder="Naziv">
            <label for="cena">Cena</label>
            <input type="text" name="cena" class="form-control" placeholder="Cena">
            <label for="kategorija">Kategorija </label>
            <select name="kategorija" class="form-control">
              <?php

                  $kat = new Kategorija($mysqli);
                  $kategorije = $kat->select();

                  foreach($kategorije as $k){

               ?>
               <option value="<?php echo $k['kategorijaID'] ?>"><?php echo $k['nazivKategorije'] ?></option>
               <?php
                      }

                ?>
            </select>
            <label for="vrsta">Vrsta </label>
            <select name="vrsta" class="form-control">
              <?php

                  $vr = new Vrsta($mysqli);
                  $vrste = $vr->select();

                  foreach($vrste as $v){

               ?>
               <option value="<?php echo $v['vrstaID'] ?>"><?php echo $v['nazivVrste'] ?></option>
               <?php
                      }

                ?>
            </select>
            <label for="dugme"></label>
            <input type="submit" name="unos" class="form-control btn-primary" value="Sacuvaj">
          </form>

      </div>

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Pregled podataka</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              Promene u karti pica
            </p>
            <?php

            include 'napitakModel.php';
            $napitak = new Napitak($mysqli);
            $napici = $napitak->select();

             ?>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Naziv</th>
                  <th>Cena</th>
                  <th>Kategorija</th>
                  <th>Vrsta</th>
                  <th>Izmena cene</th>
                  <th>Brisanje napitka</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    foreach($napici as $n){
                 ?>
                 <tr>
                   <td><?php echo $n['naziv']; ?></td>
                   <td><?php echo $n['cena']; ?> RSD</td>
                   <td><?php echo $n['nazivKategorije']; ?></td>
                   <td><?php echo $n['nazivVrste']; ?></td>
                   <td><a class="btn btn-info" href="izmeni.php?cena=<?php echo $n['cena']; ?>&id=<?php echo $n['napitakID']; ?>">Izmeni cenu</a></td>
                   <td><a class="btn btn-danger" href="delete.php?id=<?php echo $n['napitakID']; ?>">Obrisi napitak</a></td>
                 </tr>
                 <?php
                    }
               ?>
              </tbody>
            </table>


          </div>
        </div>
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

  <script src="assets/js/custom.js"></script>

</body>

</html>
