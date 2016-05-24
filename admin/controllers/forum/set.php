<?php
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/libs/database.php');
if (!empty($_POST)) {
		extract($_POST);
                
	} else {
		extract($_GET);
	}
$dbClass= new Database();
$db=$dbClass->connect();

$sql="update forum set pass='1' where id='$id'; ";
mysql_query($sql);
 header("Location: /admin/views/forum/");
?>
