<?php 
require_once('/wamp/www/Repaso/controller/editorialController.php');
$obj = new editorialController();
$obj->delete($_GET['id'])
?>