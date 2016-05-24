<?php

require_once( dirname(dirname(dirname(__FILE__))) . '/models/TMProductManagement.php');

$tm = new TMProductManagement();

$a = $tm->get_all(3);
echo json_encode($a);
?>