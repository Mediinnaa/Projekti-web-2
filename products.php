<!DOCTYPE html>
<html>
  <head>
    <title> Products </title>
  </head>
</html>

<?php
include '../components/header.php'
?>

<section class="products">
  <?php
  include '../CRUD/Model.php';
  if (!empty($products)) {
    foreach ($products as $row) {
  ?>

      <div>
        <img src="<?php echo $row['image'] ?>" />
        <p>PRICE: <?php echo $row['price'] ?></p>
      </div>
  <?php
    }
  } else {
    echo "<h1>No products yet</h1>";
  }
  ?>
</section>

<?php
include '../components/footer.php'
?>