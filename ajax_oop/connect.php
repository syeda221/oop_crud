<?php
    class database{
        public function db(){
            return new PDO("mysql:host=localhost;dbname=ajax","root","");
        }
    }
?>