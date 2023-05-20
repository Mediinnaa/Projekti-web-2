<script>
  var id = <?php echo $_GET['id']; ?>;

  // AJAX request
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "delete_product.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Redirect to dashboard.php after successful deletion
      window.location.href = "../pages/dashboard.php";
    }
  };
  xhr.send("id=" + id);
</script>
