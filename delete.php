<?php

include 'konekcija.php';
include 'napitakModel.php';
$napitak = new Napitak($mysqli);
$napici = $napitak->delete($_GET['id']);
header("Location: index.php");

 ?>
