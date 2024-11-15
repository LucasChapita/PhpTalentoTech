<h2>Editar Usuario</h2>
<form method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" value="<?php echo $user['username']; ?>" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
    <button type="submit">Actualizar Usuario</button>
</form>