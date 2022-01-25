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
                <td><?php echo $valor['Nombre']; ?></td>
                <td><?php echo $valor['Fecha']; ?></td>
            </tr>
            
        <?php endforeach; ?>
</html>