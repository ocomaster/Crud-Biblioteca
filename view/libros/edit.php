<?php
require_once('/wamp/www/Repaso/view/header/header.php');
require_once('/wamp/www/Repaso/controller/nombrelibrosController.php');
$obj = new nombrelibrosController();
  $libro =  $obj->show($_GET['id']);
?>

<form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $libro[0] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  name="nombre" id="inputPassword" value="<?= $libro[1] ?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $libro[0] ?>">Cancelar</a>
    </div>
</form>



<?php
require_once('/wamp/www/Repaso/view/header/footer.php');

?>