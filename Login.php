<?php
include '../CRUD/Model.php';

class Login
{
    private $name;
    private $password;
    private $model;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
        $this->model = new Model();
    }

    public function login()
    {
        if (empty($this->name) || empty($this->password)) {
            echo "Fill all fields";
        } else {
            $allUsers = $this->model->fetchData('users');
            foreach ($allUsers as $user) {
                if ($this->name === $user['name'] && $this->password === $user['password']) {
                    session_start();
                    $_SESSION['name'] = $this->name;
                    $_SESSION['password'] = $this->password;
                    $_SESSION['role'] = $user['role'];
                    header("Location: ../pages/index.php");
                    exit();
                }
            }
        }
    }
}

if (isset($_POST['loginSubmit'])) {
    $user = new Login($_POST['name'], $_POST['password']);
    $user->login();
}
