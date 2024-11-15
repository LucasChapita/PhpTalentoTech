<?php
require_once 'models/User.php';

class UserController
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->getAll();
        include 'views/user/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $userModel = new User();
            $userModel->create($username, $password, $email);
            header('Location: index.php');
        } else {
            include 'views/user/create.php';
        }
    }

    public function edit($id)
    {
        $userModel = new User();
        $user = $userModel->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $userModel->update($id, $username, $password, $email);
            header('Location: index.php');
        } else {
            include 'views/user/edit.php';
        }
    }

    public function delete($id)
    {
        $userModel = new User();
        $userModel->delete($id);
        header('Location: index.php');
    }
}
?>