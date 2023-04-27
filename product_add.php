<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Uplaod</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="card.css">

  <style>
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
    }
  </style>
</head>
<body>
    <div class="from_bx">
    <div class="name mx-4">Upload Image</div>
    <?php  if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
      <?php endif ?>
      <form action="upload.php"
            method="post"
            enctype="multipart/form-data">
          
            <input class="mx-5" type="file"
                   name="my_image">
            <input type="submit" name="submit"
                   value="Upload" class="button">
          
          </form>
        
        
    </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
    
  <!-- <?php  if (isset($_GET['error'])): ?>
    <p><?php echo $_GET['error']; ?></p>
  <?php endif ?>
  <form action="upload.php"
        method="post"
        enctype="multipart/form-data">
      
        <input type="file"
               name="my_image">
        <input type="submit" name="submit"
               value="Upload">
      
      </form> -->
</body>
</html>

