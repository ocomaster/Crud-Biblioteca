<?php
require_once('/wamp/www/Repaso/view/header/header.php');
require_once('/wamp/www/Repaso/controller/nombrelibrosController.php');
$obj = new nombrelibrosController();
  $libros =  $obj->index();


?>
<div class="mb-3">
  <a href="create.php" class="btn btn-primary">Agregar nuevo Usuario</a>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($libros) : ?>
      <?php foreach ($libros as $libro) : ?>
        <tr>
          <th><?= $libro["id"] ?></th>
          <th><?= $libro["nombre"] ?></th>
          <th>
            <a href="show.php?id=<?= $libro[0] ?>" class="btn btn-primary">ver</a>
            <a href="edit.php?id=<?= $libro[0] ?>" class="btn btn-success">Actualizar</a>
            <a href="delete.php?id=<?= $libro[0]  ?>" class="btn btn-danger">Eliminar ok</a>

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
                    <a href="delete.php?id=<?= $libro[0]  ?>" class="btn btn-danger">Eliminar</a>
                    <!--  <button type="button" class="btn btn-danger">Save changes</button> -->
                  </div>
                </div>
              </div>
            </div>
          </th>
        </tr>
      <?php endforeach ?>
    <?php else :  ?>
      <tr>
        <td colspan="3" class="text-center">No hay registros</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>

<?php 
require_once('/wamp/www/Repaso/view/header/footer.php')
?>