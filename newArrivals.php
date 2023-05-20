<!DOCTYPE html>
<html>
  <head>
    <title> New Arrivals </title>
  </head>
</html>

<?php
include '../components/header.php'
?>

<div class="slide">
  <img src="" id="slider" />
</div>

<script src="../js/script.js"></script>

<h1 style="text-align: center">N E W A R R I V A L S</h1>
<section class="main">
<?php
  include '../CRUD/Model.php';
  if (!empty($products)) {
    $count = 0;
    foreach ($products as $row) {
      if ($count < 8) {
  ?>

      <div>
        <img src="<?php echo $row['image'] ?>" />
        <p>PRICE: <?php echo $row['price'] ?></p>
      </div>
  <?php
        $count++;
      } else {
        break;
      }
    }
  } else {
    echo "<h1>No products yet</h1>";
  }
?>
</section>

<?php
include '../components/footer.php'
?>