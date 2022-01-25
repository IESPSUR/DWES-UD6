<html>
<head>
    <title>Catálogo libros</title>
</head>
<body>
    <h1>Libros dados de alta en nuestra libreria</h1>
    <table border="1">
        <tr>
            <th>NOMBRE</th>
            <th>FECHA</th>
        </tr>
        <?php foreach ($datos as $valor) : ?>

            <tr>
                <td><?php echo $valor['nombre']; ?></td>
                <td><?php echo $valor['club']; ?></td>
                <td><?php echo $valor['nacionalidad']; ?></td>
                <td><?php echo $valor['ngoles']; ?></td>
                <td><?php echo $valor['npartidos']; ?></td>
                <td><?php echo $valor['fnacimiento']; ?></td>
                <td><?php echo $valor['foto']; ?></td>
            </tr>
            
        <?php endforeach; ?>
</html>