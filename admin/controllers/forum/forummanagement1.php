<?php

require_once( dirname(dirname(dirname(__FILE__))) . '/models/TMForumManagement.php');

$tm = new TMForumManagement();

$a = $tm->get_all(1);
echo json_encode($a);
?>

