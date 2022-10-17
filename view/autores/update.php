<?php 
require_once('/wamp/www/Repaso/controller/autorController.php');
$obj = new autorController();
$obj->update($_POST['id'], $_POST['nombre'], $_POST['descripcion']);

?>