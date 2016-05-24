<?php

include('../includes/config.php');
extract($_POST);

$image_name = null;
$height=515;
$width=800;
$path = "/img/product/";
$image = $_FILES['file'];

if($image['name'][0]==null){
    
    echo '100';exit;
}
for($i=0;$i<count($image['name']);$i++) {
    $ext = pathinfo($image['name'][$i], PATHINFO_EXTENSION);
    $image_name = "product_" . date("Ymdhis") . "." . $ext;
    $valid_exts = array('jpeg', 'jpg', 'png', 'gif');
    if (!in_array($ext, $valid_exts)) {
        echo '101';
        exit;
    }else{
        list($w, $h) = getimagesize($image['tmp_name'][$i]);
	/* calculate new image size with ratio */
	$ratio = max($width/$w, $height/$h);
	$h = ceil($height / $ratio);
	$x = ($w - $width / $ratio) / 2;
	$w = ceil($width / $ratio);
	/* new file name */
	//$path1 = ;
	/* read binary data from image file */
	$imgString = file_get_contents($image['tmp_name'][$i]);
	/* create image from string */
	$image1 = imagecreatefromstring($imgString);
	$tmp = imagecreatetruecolor($width, $height);
	imagecopyresampled($tmp, $image1,
  	0, 0,
  	$x, 0,
  	$width, $height,
  	$w, $h);
	/* Save image */
	switch ($image['type'][$i]) {
		case 'image/jpeg':
                    
			imagejpeg($tmp, dirname(dirname(dirname(dirname(dirname(__FILE__))))).$path.$image_name, 100);
			break;
		case 'image/png':
			imagepng($tmp, dirname(dirname(dirname(dirname(dirname(__FILE__))))).$path.$image_name, 0);
			break;
		case 'image/gif':
			imagegif($tmp, dirname(dirname(dirname(dirname(dirname(__FILE__))))).$path.$image_name);
			break;
		default:
			exit;
			break;
	}
	//return $path;
	/* cleanup memory */
	imagedestroy($image1);
	imagedestroy($tmp);
    }
    
    //move_uploaded_file($image['tmp_name'][$i], dirname(dirname(dirname(dirname(dirname(__FILE__))))) . $path . $image_name);
     $query = "insert into image (id,idproduct,name,delete_flg) values(";
    $query.="null,";
    $query.="'" . $idproduct . "',";
    $query.="'" . $image_name . "',";
    $query.="'0'";
    $query.=")";

    $result = $mysqli->query($query) or die($mysqli->error . __LINE__);
    $result = $mysqli->affected_rows;
}






$json_response = json_encode($result);



