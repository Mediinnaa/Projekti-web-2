<!DOCTYPE html>
<html>
  <head>
    <title> Home </title>
  </head>
</html>

<?php
include '../components/header.php'
?>

<div class="images">
  <img src="../images/photo1.webp" width="275" height="250" />
  <img src="../images/photo2.jpg" width="275" height="250" />
  <img src="../images/photo3.jpg" width="275" height="250" />
  <img src="../images/photo4.jpg" width="275" height="250" />
  <img src="../images/photo5.jpg" width="275" height="250" />
</div>

<h2 id="quote">SKIN first, MAKEUP second, SMILE always</h2>

<br />
<section class="products">
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