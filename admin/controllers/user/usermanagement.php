<?php
require_once( dirname(dirname(dirname(__FILE__))).'/models/TMUserManagement.php');

$tm= new TMUserManagement();

$a=$tm->get_all();
echo json_encode($a);
?>
