<?php

class NombreLibrosModel{
    private $PDO;
    function __construct()
    {
        require_once('/wamp/www/Repaso/config/conexion.php');
        $Conectar = new Conexion();
        $this->PDO =   $Conectar->Conectar();
    }

    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM nombrelibros");
        return ($stament->execute()) ? $stament->fetchAll(): false;
    }

    public function insertar($nombre){
        $stament = $this->PDO->prepare("INSERT INTO nombrelibros VALUES (null, :nombre)");
        $stament->bindParam(":nombre",$nombre);
        return($stament->execute()) ? $this->PDO->lastInsertId(): false;
    }

    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM nombrelibros WHERE id = :id limit 1");
        $stament->bindParam(":id",$id);
        return($stament->execute()) ? $stament->fetch(): false;
    }

    public function update($id,$nombre){
        $stament = $this->PDO->prepare("UPDATE nombrelibros SET  nombre = :nombre WHERE id = :id");
        $stament->bindParam(":id",$id);
        $stament->bindParam(":nombre",$nombre);
        return($stament->execute())? $id : false ;
    }

    public function delete(){
        $stament = $this->PDO->prepare("DELETE FROM nombrelibros WHERE id = :id");
        $stament->bindParam(":id",$id);
        return($stament->execute()) ? true :  false;
    }




    
}