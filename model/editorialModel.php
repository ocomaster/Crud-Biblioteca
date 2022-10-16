<?php

class Editorial{
private $PDO;
function __construct()
{
    require_once('/wamp/www/Repaso/config/conexion.php');
    $Conectar = new Conexion();
    $this->PDO = $Conectar->Conectar();
}


public function insertar($editorial){
    $stament = $this->PDO->prepare("INSERT INTO editorial VALUES(null, :editorial)");
    $stament->bindParam(":editorial",$editorial);
    return ($stament->execute()) ? $this->PDO->lastInsertID() : false ; 
}

public function index(){
    $stament =  $this->PDO->prepare("SELECT * FROM editorial");
    return ($stament->execute()) ? $stament->fetchAll() : false ;
}

public function show($id){
    $stament = $this->PDO->prepare("SELECT * FROM editorial WHERE id = :id limit 1");
    $stament->bindParam(":id", $id);
    return ($stament->execute()) ? $stament->fetch() :false;
}

public function update($id, $editorial){
    $stament = $this->PDO->prepare("UPDATE editorial SET editorial = :editorial WHERE id= :id");
    $stament->bindParam(":editorial", $editorial);
    $stament->bindParam(":id", $id);
    return ($stament->execute()) ? $id : false;
}
public function delete($id){
    $stament = $this->PDO->prepare("DELETE FROM editorial WHERE id = :id");
    $stament->bindParam(":id",$id);
    return ($stament->execute()) ? true : false ;
}

}