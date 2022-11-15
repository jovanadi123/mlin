<?php

include 'konekcija.php';
include 'napitakModel.php';
$napitak = new Napitak($mysqli);
$napici = $napitak->save();
header("Location: index.php");

 ?>
