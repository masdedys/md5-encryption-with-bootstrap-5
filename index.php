<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <title>Enkripsi md5 - by mas_dedys</title>
</head>

<body>
  <h1 align="center">Enkripsi md5</h1>
  <form method="POST">
    <div class="mb-3">
      <label class="form-label">Tulis Text Asli:</label>
      <input type="text" class="form-control" name="pass">
    </div>
    <div class="d-grid gap-2 col-6 mx-auto mb-3 row">
      <input type="submit" name="send" class="btn btn-primary" value="kirim">
    </div>

    <?php
    if (isset($_POST['send'])) {
      $pass = $_POST['pass'];
      $text = md5($_POST['pass']);
      echo "
	  <div class=\"mb-3\">
      <label class=\"form-label\">Text asli anda:</label>
      	<input type=\"text\" class=\"form-control\" value=\"$pass\" disabled>
  	  </div>
	  <div class=\"mb-3\">
      <label class=\"form-label\">Tersandi sebagai:</label>
      	<input type=\"text\" class=\"form-control\" value=\"$text\" disabled>
  	  </div>
  ";
    }
    ?>
  </form><br>
  
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
</body>

</html>