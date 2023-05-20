<?php
include '../CRUD/Model.php';
$id = $_POST['id'];
$model = new Model();
$model->deleteProduct($id);
?>
