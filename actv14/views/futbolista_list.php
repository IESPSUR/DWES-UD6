<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Lista elementos</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="create.php">Nuevo elemento</a></li>
            <li><a class="active" href="list.php">Lista elementos</a></li>
            <li><a href="import.php">Importar elementos</a></li>
        </ul>
    </nav>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Número de goles</th>
                <th>Fecha Nacimiento</th>
                <th>Detalle</a>Detalle</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
           <?php
            
            $todos[]=obtenerTodos();
            $longitud = count($todos);
            
            

            foreach($todos as $futbolista){
                
            foreach($datos as $jugador)
            {
                echo "<tr>";
                echo "<td>", $jugador['nombre'],"</td> ";
                echo "<td>", $jugador['nacionalidad'],"</td> ";
                echo "<td>", $jugador['ngoles'],"</td> ";
                echo "<td>", $jugador['fnacimiento'],"</td> ";
                $id=$jugador['id'];
                echo "<td><a href='index.php?controller=futbolista&action=mostrarJugador&id=$id'>DETALLE</td>";
                echo "<td><a href='futbolista_edit.php?id=$id'>EDITAR</td>";
                echo "<td><a href='futbolista_delete.php?id=$id'>BORRAR</td>";
                echo "</tr>";
            }
            
            }

           ?>
        </tbody>
    </table>
</body>
</html>