<?php
session_start();
unset($_SESSION['lang']);
$value = $_POST['value'];
$_SESSION['lang']=$value;

?>
