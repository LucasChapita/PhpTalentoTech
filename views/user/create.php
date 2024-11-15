<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
    <h2>Crear Nuevo Usuario</h2>
    <form action="index.php?action=create" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Crear Usuario</button>
    </form>
    <a href="index.php">Volver a la lista</a>
</body>

</html>