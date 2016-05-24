<?php
require_once(dirname(dirname(dirname(__FILE__))).'/libs/database.php');
class TMUser {
    	 public $db;
	public $dbCreateFlg=false;
	public function __construct($db = null){

		if( $db == null ){
			$this->db = Database::connect();
			$this->dbCreateFlg=true;
		} else {
			$this->db = $db;
		}
	}
	public function __destruct() {
		if($this->dbCreateFlg){
			//DB Close
			$this->db = null;
		}
	}
    public function findLogonUser($log_on_nm, $psd){
         $db = $this->db;
         
        $sql="select * from user where id='$log_on_nm'and pass='$psd'";
        $result= mysql_query($sql);
        if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$_SESSION['id'] = $row['id'];	
	}
}
        if(mysql_num_rows($result)<>0)
        {
        return 1;  
        }
    }
}

?>
