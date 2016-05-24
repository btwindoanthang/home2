<?php
require_once(dirname(dirname(dirname(dirname(__FILE__)))).'/libs/database.php');
require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/libs/function.php');
if (!empty($_POST)) {
		extract($_POST);
                
	} else {
		extract($_GET);
	}
$dbClass= new Database();
$db=$dbClass->connect();

$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
if (!empty($_FILES['image']['name'])) {
    $image = $_FILES['image']['name'];
    if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . "/img/product/" . $_FILES["image"]["name"])) {
        
    } else {
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
		if (in_array($ext, $valid_exts)) {
			/* resize image */
			
				$files[] = resize(800, 515);
			

		} else {
			$msg = 'Unsupported file';
		}
	
        
    }
}
$pro=array();
 $i=0;
 $sql="select * from image";
 $query = mysql_query($sql);
  while($fetch = mysql_fetch_array($query))
  {
       $pro[$i]=$fetch;
       $i++;
  }
  $cou=count($pro);
  
  
 $sql="insert into image values('$cou','$idp','$image');";

 mysql_query($sql);
  header("Location: /admin/views/product/image_management.php?id=$idp");

?>
