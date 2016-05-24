<?php
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/libs/database.php');
if (!empty($_POST)) {
		extract($_POST);
                
	} else {
		extract($_GET);
	}
$dbClass= new Database();
$db=$dbClass->connect();




 $sql="delete from image where id=$id ";

 mysql_query($sql);
  

  
  

 

  header("Location: /admin/views/product/image_management.php?id=$idp");

?>
