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
    public function insert($name,$age,$image,$password){
        $password = password_hash($password ,PASSWORD_DEFAULT);
        $ins  = $this->db->prepare("INSERT INTO users (`name`,`age`,`image`, `password`) VALUES (?, ?,?,?)");
        $ins->execute([$name,$age,$image,$password]);
        return $ins->rowCount();
    }
    public function delete($id){
        $dlt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        $dlt->execute([$id]);
        return $dlt->rowCount();
    }

     public function edit_fetch($id){
        $fetch_id = $this->db->prepare("select * FROM users WHERE id = ?");
        $fetch_id->execute([$id]);
        return $fetch_id->fetch();
    }
     public function edit($id,$name,$age){
        $edi = $this->db->prepare("update users set name =? , age =? where id =?");
        $edi->execute([$name, $age,$id]);
        return $edi;
    }
}
?>