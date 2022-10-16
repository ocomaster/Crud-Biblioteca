<?php

require_once('/wamp/www/Repaso/controller/autorController.php');
require_once('/wamp/www/Repaso/view/header/header.php');
//var_dump($resultado);
?>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php

   
    foreach ($resultadoAutor as $row) {
        ?>
    <tr>
      <th scope="row"><?= $row["id"] ?></th>
      <td><?= $row["id"] ?></td>
      <td><?= $row["nombre"] ?></td>
      <td><?= $row["descripcion"] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php
require_once('/wamp/www/Repaso/view/header/footer.php')
?>