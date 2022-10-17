<?php 
require_once('/wamp/www/Repaso/view/header/header.php');
require_once('/wamp/www/Repaso/controller/autorController.php');
$obj = new autorController();
$autor =  $obj->show($_GET['id']);
?>

<form action="update.php" method="POST" autocomplete="off">
<h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $autor[0] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre Autor</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="nombre" id="inputPassword" value="<?= $autor[1] ?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="descripcion" id="inputPassword" value="<?= $autor[2] ?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $autor[0] ?>">Cancelar</a>
    </div>

</form>