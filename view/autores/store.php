<?php
require_once('/wamp/www/Repaso/controller/autorController.php');
$obj = new AutorController();
$obj->guardar($_POST['nombre'],$_POST['descripcion'])
?>