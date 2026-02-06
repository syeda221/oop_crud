<?php
class crud{
    private $db;
    public function __construct($db){
        $this->db = $db;
    }
    public function getAll(){
        $get =$this->db->prepare("SELECT * FROM users");
        $get->execute();
        return $get;
    }
    public function insert($name,$age){
        $ins  = $this->db->prepare("INSERT INTO users (`name`,`age`) VALUES (?, ?)");
        $ins->execute([$name,$age]);
        return $ins->rowCount();
    }
    public function delete($id){
        $dlt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        $dlt->execute([$id]);
        return $dlt->rowCount();
    }
}
?>