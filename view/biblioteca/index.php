<?php
    require_once('/wamp/www/Repaso/controller/autorController.php');
    require_once('/wamp/www/Repaso/controller/editorialController.php');
    require_once('/wamp/www/Repaso/controller/nombrelibrosController.php');
    //var_dump($resultado);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1> Prestamo de libros </h1>
    <form action="envioB.php" method="post" id="biblio">
        <label> Nombre del libro</label>
        <select name="nombref" id="">
            <option value="0">Seleccionar</option>
            <?php
            foreach ($resultadoNLibros as $row) {
                echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
            }
            ?>

        </select><br><br>

        <label>Nombre del Autor</label>
        <select name="autorf">
            <option value="0">Seleccionar</option>
            <?php 
            foreach ($resultadoAutor as  $row) {
                echo '<option value="'.$row['nombre'].'">'.$row['nombre'].'</option>';
            }
            ?>
        </select><br><br>

        <label>Editorial</label>
        <select name="editorialf" id="">
            <option value="0">Seleccione</option>
            <?php
            foreach($resultadoEditorial as $row){
                echo '<option value="'.$row['editorial'].'">'.$row['editorial'].'</option>';
            }
            ?>
        </select><br><br>
        <button type="submit">Enviar</button>
        <button><a href="consulta.php">Consultar</a></button>

    </form>


</body>

</html>