<?php

include 'konekcija.php';
include 'napitakModel.php';
$napitak = new Napitak($mysqli);
$napici = $napitak->update($_POST['id']);
header("Location: index.php");

 ?>
