
<!DOCTYPE html>
<html>
  <head>
    <title> Contact us </title>
  </head>
</html>

<?php
include '../components/header.php'
?>

<link rel="stylesheet" href="../css/contact.css">

<div class="container">

    <h1>Contact us</h1>
    <?php
      include '../CRUD/Model.php';
      $model = new Model();
      $model->insertForm();
      ?>
    <form action="" method="post">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email.."><br>

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit" name="contactSubmit" id="contactSubmit">

    </form>
</div>

<?php
include '../components/footer.php'
?>