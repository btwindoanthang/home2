<?php
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/libs/database.php');
if (!empty($_POST)) {
		extract($_POST);
                
	} else {
		extract($_GET);
	}
$dbClass= new Database();
$db=$dbClass->connect();




 $sql="delete from image where idproduct='$id' ";

 mysql_query($sql);
 $sqll="delete from product where id='$id' ";

 mysql_query($sqll);
  

  
  



  header("Location: /admin/views/product/product_management.php");

?>
