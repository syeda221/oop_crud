<?php
class crud{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }
    public function getAll(){
        $get = $this->db->prepare("SELECT * FROM users");
        $get->execute();
        return $get;
    }
}
?>