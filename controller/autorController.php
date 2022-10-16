<?php

require_once('/wamp/www/Repaso/model/autorModel.php');

$Envio = new Envio();

$resultadoAutor = $Envio->Consultar();
//var_dump($resultadoAutor);