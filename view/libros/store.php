<?php
require_once('/wamp/www/Repaso/controller/nombrelibrosController.php');
$obj = new nombrelibrosController();
$obj->guardar($_POST['nombre']);