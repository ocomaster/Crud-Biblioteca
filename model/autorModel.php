<?php

class Envio{

function __construct()
{
    require_once ('/wamp/www/Repaso/config/conexion.php');
    $Conectar = new Conexion();
        $this->BD = $Conectar->Conectar();
}
    function Consultar(){
    $sql = "SELECT * FROM autores";
    $query = $this->BD->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    return $results;


    }



}