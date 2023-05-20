<?php
// include necessary files and configurations

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $image = $_FILES['image'];
  $price = $_POST['price'];

  // Perform necessary validations and sanitization on $image and $price

  // Process the data and create the product
  include '../CRUD/Model.php';
  $model = new Model();
  $model->createProduct();

  // Return success response
  $response = array('status' => 'success', 'message' => 'Product created successfully');
  echo json_encode($response);
  exit; // Terminate the script
}
?>

<div>
  <h2>Create Product</h2>
  <form id="productForm" enctype="multipart/form-data">
    <label for="image">Product Image:</label><br>
    <input type="file" id="image" name="image"><br>
    <label for="price">Product Price:</label><br>
    <input type="text" id="price" name="price"><br>
    <input class="button" id="productSubmit" type="submit" value="Create Product">
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('#productForm').submit(function(e) {
      e.preventDefault(); // Prevent form submission
      
      var formData = new FormData(this);
      $.ajax({
        url: '',
        type: 'POST',
        data: formData,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(response) {
          // Handle success response
          console.log(response);
        },
        error: function(xhr, status, error) {
          // Handle error
          console.error(xhr.responseText);
        }
      });
    });
  });
</script>

