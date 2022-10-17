<?php

require_once('/wamp/www/Repaso/controller/autorController.php');
$obj = new AutorController();
$obj->delete($_GET['id']);

?>