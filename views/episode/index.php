<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Episodios de Rick and Morty</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
    <h2>Lista de Episodios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha de Estreno</th>
            <th>Episodio</th>
        </tr>
        <?php foreach ($episodes as $episode): ?>
            <tr>
                <td><?php echo $episode['id']; ?></td>
                <td><?php echo $episode['name']; ?></td>
                <td><?php echo $episode['air_date']; ?></td>
                <td><?php echo $episode['episode']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php">Volver a la lista de usuarios</a>
</body>

</html>