<?php
require_once( dirname(dirname(dirname(__FILE__))).'/models/TMImage.php');

$tm= new TMImage();
$idpro=$_GET['idp'];
$a=$tm->get_all($idpro);
echo json_encode($a);
?>
