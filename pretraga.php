<?php
$kategorija = $_GET['id'];

include 'konekcija.php';
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
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($napici as $n){
          if($n['kategorijaID'] == $kategorija || $kategorija == 0){
     ?>
     <tr>
       <td><?php echo $n['naziv']; ?></td>
       <td><?php echo $n['cena']; ?> RSD</td>
       <td><?php echo $n['nazivKategorije']; ?></td>
       <td><?php echo $n['nazivVrste']; ?></td>
     </tr>
     <?php
   }
  }
   ?>
  </tbody>
</table>
