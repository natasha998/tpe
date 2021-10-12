<?php

class userModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }

    function obtenerUser($userIns){
        $userAdmi = $this->db->prepare("SELECT * FROM user WHERE = ?");
        $userAdmi->execute(array($userIns));
        return $userAdmi->fetch(PDO::FETCH_OBJ);
        // si tengo que buscar usuarios no admi tengo que cambiarle el nombre
    }

 
   function registrar($userEmail,$userPassword){
    $query = $this->db->prepare('INSERT INTO user (user, password) VALUES (? , ?)');
    $query->execute(array($userEmail,$userPassword));
   }
}