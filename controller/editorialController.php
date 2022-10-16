<?php
class editorialController{

private $model;
public function __construct()
{
    require_once('/wamp/www/Repaso/model/editorialModel.php');
    $this->model = new Editorial();
}

public function index(){
    return($this->model->index()) ? $this->model->index() : false ;
}

public function guardar($editorial){
    $id =  $this->model->insertar($editorial);
    return ($id!=false) ? header("Location:show.php?id=".$id): header("Location:create.php");
}

public function show($id){
    //Se retornará un arreglo
    return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
}



} 


