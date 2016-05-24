<?php
session_start();
include('./includes/config.php');

$query="select * from user  "; 
$query.=" where id="."'".$_POST['log_on_nm']."'"." and pass="."'".$_POST['psd']."'" ;
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

 
if($result->num_rows > 0) {
	if($row = $result->fetch_assoc()) {
		$_SESSION['id']=$_POST['log_on_nm'];
	}
        header('Location: ./admin.php');
        
}else{
    header('Location: ./index.php');
}


?>
