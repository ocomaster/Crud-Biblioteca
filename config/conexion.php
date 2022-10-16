<?php

class Conexion{

    function Conectar(){

        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $database = "biblioteca2";


        try {
            $mbd = new PDO('mysql:host='.$servidor.';dbname='.$database, $usuario ,$password);
            //Ingreso con Foreach a consulta en BD he impresion de datos
            //foreach ($mbd->query('SELECT * from autores') as $fila) { //prueba de conexion
            // print_r($fila);
            return $mbd;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}


