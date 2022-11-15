<?php

$slike = glob("slike/*.jpg");

?>
 <div class="row">
<?php

foreach($slike as $slika){


    ?>
<div class="col-md-4">

<img src="<?= $slika;?>" class="img img-thumbnail">

</div>

<?php
}
?>

</div>