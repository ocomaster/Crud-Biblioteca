<?php

class AutorModel{
  private  $PDO;

function __construct()
{
    require_once ('/wamp/www/Repaso/config/conexion.php');
    $Conectar = new Conexion();
        $this->PDO = $Conectar->Conectar();
}

public function insertar($nombre, $descripcion){
  $stament = $this->PDO->prepare("INSERT INTO autores VALUES (null, :nombre, :descripcion)");
  $stament->bindParam(":nombre", $nombre);
  $stament->bindParam(":descripcion",$descripcion);
  return ($stament->execute())? $this->PDO->lastInsertId(): false;

}

public function index(){
  $stament = $this->PDO->prepare("SELECT * FROM autores");
  return ($stament->execute()) ? $stament->fetchAll(): false;
}

public function show($id){
  $stament = $this->PDO->prepare("SELECT * FROM autores WHERE id = :id limit 1");
  $stament->bindParam(":id",$id);
  return($stament->execute()) ? $stament->fetch(): false;
}

public function update($id, $nombre, $descripcion){
  $stament = $this->PDO->prepare("UPDATE autores SET nombre = :nombre, descripcion = :descripcion WHERE id = :id");
  $stament->bindParam(":id",$id);
  $stament->bindParam(":nombre",$nombre);
  $stament->bindParam(":descripcion",$descripcion);
  return ($stament->execute()) ? $id : false;
}

public function delete($id){
$stament = $this->PDO->prepare("DELETE FROM autores WHERE id = :id");
$stament->bindParam(":id",$id);
return ($stament->execute())? true : false;
}

}