<?php

require_once( dirname(dirname(dirname(__FILE__))) . '/models/TMForumManagement.php');

$tm = new TMForumManagement();

$a = $tm->get_all(2);
echo json_encode($a);
?>
