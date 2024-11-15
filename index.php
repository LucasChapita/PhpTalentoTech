<?php
require_once 'controllers/UserController.php';
require_once 'controllers/EpisodeController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($action == 'create' || $action == 'edit' || $action == 'delete') {
    // Controlador de usuarios
    $userController = new UserController();

    if ($action == 'create') {
        $userController->create();
    } elseif ($action == 'edit') {
        $userController->edit($id);
    } elseif ($action == 'delete') {
        $userController->delete($id);
    }
} elseif ($action == 'episodes') {
    // Controlador de episodios
    $episodeController = new EpisodeController();
    $episodeController->index();
} else {
    // Vista de usuarios
    $userController = new UserController();
    $userController->index();
}
?>