<?php
require_once(dirname(dirname(dirname(__FILE__))).'/libs/database.php');
require_once( dirname(dirname(dirname(__FILE__))).'/admin/models/TMUser.php');
?>
<?php 
session_start();
$json = array('status'=>'0', 'message'=>'');
		if ( !empty( $_POST ) ) {
			extract( $_POST );
		}

		$tmUser = new TMUser();
		$tmUserData = $tmUser->findLogonUser($log_on_nm, $psd);
		if( $tmUserData != 1 ){
			$json["status"] = "";
			$json["message"] = "Login ID or password is incorrect.";
		} else {
			

			$json["message"] = $tmUserData["log_on_nm"];

			
			
		}
		// Output in JSON format
		header("Content-Type: application/json; charset=utf-8");
		echo json_encode( $json );
		exit();
?>