<?php

require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/libs/database.php');
require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/libs/function.php');
if (!empty($_POST)) {
    extract($_POST);
} else {
    extract($_GET);
}

$dbClass = new Database();
$db = $dbClass->connect();
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

$datepost = date('y/m/d');

$sql = "insert into product values(NULL,'$category','$location','$name','$namevi','$adress','$datepost','$image','$price','$bathroom','$bedroom','$forsale','$hot','$square','$description','$descriptionvi','$map');";
// echo $sql; exit;
mysql_query($sql);
header("Location: /admin/views/product/product_management.php");
?>
