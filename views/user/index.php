<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
    <h2>Lista de Usuarios</h2>
    <a href="index.php?action=create">Crear Usuario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $user['id']; ?>">Editar</a> |
                    <a href="index.php?action=delete&id=<?php echo $user['id']; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2><a href="index.php?action=episodes">Ver Episodios</a></h2>
</body>

</html>