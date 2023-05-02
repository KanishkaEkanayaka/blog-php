<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogger</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <?php
  $email="";
  $pword="";
  $email_confirmed="";
  $error_set = "";

  if($_SERVER["REQUEST_METHOD"]== "POST"){
    if (empty($_POST["emaillog"])) {
        $emailErr = "Name is required";
        $error_set = $error_set.$emailErr."<br>";
    } else{
        $email = test_input($_POST["emaillog"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $error_set = $error_set.$emailErr."<br>";
        }else{
            $email_confirmed = $email;
        }
    }

    if(empty($_POST["pword"])){
        $passwordErr = "Password is required";
        $error_set = $error_set.$passwordErr."<br>";
    }else{
        $pword = test_input($_POST["pword"]);
    }
    

  }
?>
  <?php
    include 'navbar.php';
    include 'conn.php';
    $sql = "SELECT count(*) as count FROM Users where email='$email_confirmed'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_fetch_assoc($result)['count'];

    $sql = "SELECT * FROM Users where email='$email_confirmed'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    mysqli_close($conn);

?>

<?php 
    if($count==1 && ($user['password']==$pword)){
      header("Location: http://localhost/php-blog/home.php?currentemail=" . urlencode($email_confirmed));
      exit();
      ?>
        
    <?php
    }else{?>
        echo "<script>
        alert("Something went wrong! Please Sign In again");
        window.location.href = "http://localhost/php-blog/login.php";
  </script>"
    <?php
    }?>
    

<?php
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src=""></script>  

</body>
</html>

