<?php

require_once(dirname(dirname(dirname(__FILE__))) . '/libs/database.php');

class TMForumManagement {

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

        $sql = 'select p.id,c.name,l.name,p.title,p.description,p.datepost,p.image,p.price,p.train,p.pass';
        $sql.=' from forum p,category c, location l';
        $sql.=' where p.idlocation=l.id and p.idcategory=c.id';
        $sql.=" and p.pass='$a' ";
        //echo $sql; exit;
        $query = mysql_query("$sql");
        while ($fetch = mysql_fetch_array($query)) {

            $output[] = array($fetch[0], $fetch[1], $fetch[2], $fetch[3], $fetch[4], $fetch[5], $fetch[6], $fetch[7], $fetch[8], $fetch[9]);
        }
        return $output;
    }

}

?>
