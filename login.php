<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "astrology";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
$username = '';
    $password = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $username = $_POST['id'];
      $password = $_POST['pass'];
      $sql = "SELECT * FROM `admin`";
                    $result = mysqli_query($conn, $sql);
                    $logged = false;
                    while($row = mysqli_fetch_assoc($result)){
                      if($row['admin_id']  == $username && $row['admin_password'] == $password){
                        $logged = true;
                      }
                    }
                    if($logged){
                      setcookie("aminloggedin", true, time() + (86400 * 30), "/");
                      echo "Logged in succefully";
                      header("Location: adminpage.php");
                      
                      
                    }else{
                      echo "Wrong credential Try Again";
                    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="card.css">
</head>
<body><form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="from_bx">
        <div class="logo"><img src="git.png" alt="logo"></div>
        <!-- <div class="logo"><img src="fb.png" alt="logo"></div>
        <div class="logo"><img src="git.png" alt="logo"></div> -->
        <div class="name">Admin login</div>
        <div class="input1">
            <i class="bi bi-person"></i><input type="text" name="id" placeholder="Admin id"></div>
        <div class="input1"><i class="bi bi-key-fill"></i><input name="pass" type="password" placeholder="Enter password here"></div>
        <input type="submit"  class="button" value="submit">
        <!-- <h5><a href="#">Forget Password</a> or <a href="#">Sign Up</a></h5> -->
    </div>
  </form>
</body>
</html>