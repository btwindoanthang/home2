<?php

require_once(dirname(dirname(dirname(__FILE__))) . '/libs/database.php');

class TMProductManagement {

    public $db;
    public $dbCreateFlg = false;

    public function __construct($db = null) {

        if ($db == null) {
            $this->db = Database::connect();
            $this->dbCreateFlg = true;
        } else {
            $this->db = $db;
        }
    }

    public function __destruct() {
        if ($this->dbCreateFlg) {
            //DB Close
            $this->db = null;
        }
    }

    public function get_all($a) {

        $sql = 'select p.id,c.name,l.name,p.name,p.adress,p.datepost,p.image,p.price,p.bathroom,p.bedroom,p.forsale,p.square,p.description';
        $sql.=' from product p,category c, location l';
        $sql.=' where p.idlocation=l.id and p.idcategory=c.id';
        if ($a == 0) {
            
        } elseif ($a == 1) {
            $sql.='and forsale="1"';
        } else {
            
        }
        mysql_query("SET character_set_results=utf8");
        $query = mysql_query("$sql");
        while ($fetch = mysql_fetch_array($query)) {
            if ($fetch[10] == '0') {
                $fetch[10] = 'For Rent';
            } else {
                $fetch[10] = 'For Sale';
            }
            $output[] = array($fetch[0], $fetch[1], $fetch[2], $fetch[3], $fetch[4], $fetch[5], $fetch[6], $fetch[7], $fetch[8], $fetch[9], $fetch[10], $fetch[11], $fetch[12]);
        }
        return $output;
    }

}

?>
