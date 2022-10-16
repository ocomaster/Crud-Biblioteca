<?php

class NombreLibros{

    function __construct()
    {
        require_once('/wamp/www/Repaso/config/conexion.php');
        $Conectar = new Conexion();
        $this->BD =   $Conectar->Conectar();
    }

    function Consultar(){
        $sql = "SELECT * FROM nombrelibros";
        $query = $this->BD->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    
}