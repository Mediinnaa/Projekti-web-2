<!DOCTYPE html>
<html>
  <head>
    <title> Dashboard </title>
  </head>
</html>

<?php
include '../components/header.php'
?>
<link rel="stylesheet" href="../css/dashboard.css">

<div class="container">
    <h1>Dashboard</h1>
    <?php
    include '../components/contactformTable.php';
    include '../components/productsTable.php';
    ?>
</div>

<?php
include '../components/footer.php'
?>