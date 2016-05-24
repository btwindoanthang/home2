<?php

require_once(dirname(dirname(dirname(__FILE__))).'/libs/database.php');
class TMUserManagement {
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
        public function get_all()
        {
            $query = mysql_query("select * from user");
                while($fetch = mysql_fetch_array($query))
                {
                   $output[] = array ($fetch[0],$fetch[1],$fetch[2],$fetch[3],$fetch[4]);
                }
             return $output;   
        }
}

?>
