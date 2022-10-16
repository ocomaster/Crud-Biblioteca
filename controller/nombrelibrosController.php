<?php
require_once('/wamp/www/Repaso/model/nombrelibrosModel.php');

$Nombrelibros = new NombreLibros();
$resultadoNLibros = $Nombrelibros->Consultar();

//var_dump($resultadoNLibros);