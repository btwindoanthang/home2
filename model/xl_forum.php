<?php
require_once(dirname(dirname(__FILE__)) . '/libs/database.php');
if (!empty($_POST)) {
    extract($_POST);
} else {
    extract($_GET);
}
$dbClass = new Database();
$db = $dbClass->connect();
$pi1 = '';
$pi2 = '';
$pi3 = '';
$pi4 = '';
$pi5 = '';
if ($_FILES['pic1'] != null) {
    $pi1 = $_FILES['pic1']['name'];
    if (file_exists(dirname(dirname(__FILE__)) . "/img/product/" . $_FILES["pic1"]["name"])) {
        
    } else {
        move_uploaded_file($_FILES['pic1']['tmp_name'], dirname(dirname(__FILE__)) . "/img/product/" . $_FILES['pic1']['name']);
    }
}
if ($_FILES['pic2'] != null) {
    $pi2 = $_FILES['pic2']['name'];
    if (file_exists(dirname(dirname(__FILE__)) . "/img/product/" . $_FILES["pic2"]["name"])) {
        
    } else {
        move_uploaded_file($_FILES['pic2']['tmp_name'], dirname(dirname(__FILE__)) . "/img/product/" . $_FILES['pic2']['name']);
    }
}
if ($_FILES['pic3'] != null) {
    $pi3 = $_FILES['pic3']['name'];
    if (file_exists(dirname(dirname(__FILE__)) . "/img/product/" . $_FILES["pic3"]["name"])) {
        
    } else {
        move_uploaded_file($_FILES['pic3']['tmp_name'], dirname(dirname(__FILE__)) . "/img/product/" . $_FILES['pic3']['name']);
    }
}
if ($_FILES['pic4'] != null) {
    $pi4 = $_FILES['pic4']['name'];
    if (file_exists(dirname(dirname(__FILE__)) . "/img/product/" . $_FILES["pic4"]["name"])) {
        
    } else {
        move_uploaded_file($_FILES['pic4']['tmp_name'], dirname(dirname(__FILE__)) . "/img/product/" . $_FILES['pic4']['name']);
    }
}
if ($_FILES['pic5'] != null) {
    $pi5 = $_FILES['pic5']['name'];
    if (file_exists(dirname(dirname(__FILE__)) . "/img/product/" . $_FILES["pic5"]["name"])) {
        
    } else {
        move_uploaded_file($_FILES['pic5']['tmp_name'], dirname(dirname(__FILE__)) . "/img/product/" . $_FILES['pic5']['name']);
    }
}
$total = mysql_num_rows(mysql_query("select * from account where phone='$phone'"));

if ($total == 0) {
    $sql = "insert into account values('$phone','123456','$name','$email','$address')";
    //echo $sql; exit;
    mysql_query($sql);
} else {
    $sql = "update account set name='$name', email='$email',adress='$address' where phone='$phone'";
    //echo $sql; exit;
    mysql_query($sql);
}
$datepost = date('y/m/d');

$sql = "insert into forum values(NULL,'$phone','$forsale','$cate','$loca','$title','$detail','$datepost','$pi1','$price','$train','0');";
// echo $sql; exit;
$result = mysql_query($sql);
$sql = "select * from forum  order by id desc limit 1";
$idforum = '';
$query = mysql_query($sql);
while ($fetch = mysql_fetch_array($query)) {
    $idforum = $fetch[0];
}
if ($result) {
    if ($pi2 != "") {
        $sql = "insert into imageforum values(null,'$idforum','$pi2')";
        mysql_query($sql);
    }
    if ($pi3 != "") {
        $sql = "insert into imageforum values(null,'$idforum','$pi3')";
        mysql_query($sql);
    }
    if ($pi4 != "") {
        $sql = "insert into imageforum values(null,'$idforum','$pi4')";
        mysql_query($sql);
    }
    if ($pi5 != "") {
        $sql = "insert into imageforum values(null,'$idforum','$pi5')";
        mysql_query($sql);
    }
}
header("Location: /success.php");
?>
?>
