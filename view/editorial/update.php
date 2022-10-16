<?php
require_once('/wamp/www/Repaso/controller/editorialController.php');
$obj = new editorialController();
$obj->update($_POST['id'],$_POST['editorial']);

?>