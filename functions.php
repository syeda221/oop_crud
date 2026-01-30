<?php
    class allfunc{
        private $db;
          public function __construct($db){
            $this->db = $db;
        }
        public function getall(){
           return $this->db->query("SELECT * FROM users");
        }
        public function insert($name, $age){
            $ins = $this->db->prepare("insert into users value(null,?,?)");
           return $ins->execute([$name,$age]);
        }
        public function delete($id){
            $dle = $this->db->prepare("delete from users where id=?");
           return $dle->execute([$id]);
        }

        }
   
?>