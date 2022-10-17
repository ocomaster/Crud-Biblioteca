<?php
require_once('/wamp/www/Repaso/view/header/header.php');
require_once('/wamp/www/Repaso/controller/autorController.php');
$obj = new AutorController();
$autor = $obj->show($_GET['id']);
?>
<h2 class="text-center">Detalles de Registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $autor[0] ?>" class="btn btn-success">Actualizar</a>

    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podra recuperar el registro
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">cerrar</button>
                    <a href="delete.php?id=<?= $autor[0]  ?>" class="btn btn-danger">Eliminar</a>
                    <!--  <button type="button" class="btn btn-danger">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>

</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $autor[0] ?></td>
            <td scope="col"><?= $autor[1] ?></td>
            <td scope="col"><?= $autor[2] ?></td>
        </tr>
    </tbody>
</table>




<?php
require_once('/wamp/www/Repaso/view/header/footer.php')
?>