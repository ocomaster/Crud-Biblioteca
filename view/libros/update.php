<?php

require_once('/wamp/www/Repaso/controller/nombrelibrosController.php');
$obj = new nombrelibrosController();
$obj->update($_POST['id'], $_POST['nombre']);
?>  