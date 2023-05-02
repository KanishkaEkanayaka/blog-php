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
  include 'navbar.php';
  $postTitle=$postContent="";
  $error_set = "";

  if($_SERVER["REQUEST_METHOD"]== "POST"){
    if (empty($_POST["postTitle"])) {
        $emailErr = "title is required";
        $error_set = $error_set.$emailErr."<br>";
    } else{
            $postTitle = $_POST['postTitle'];
    }

    if(empty($_POST["postBody"])){
        $postErr = "body is required";
        $error_set = $error_set.$passwordErr."<br>";
    }else{
        $postContent = test_input($_POST["postBody"]);
    }

  }
?>
  <?php
    $myEmail = isset($_GET['currentemail']) ? $_GET['currentemail'] : '';
    include 'conn.php';
    $sql = "INSERT INTO Blogs (title,content,email)
    VALUES ('$postTitle','$postContent','$myEmail')";
?>
  <?php  if (mysqli_query($conn, $sql)) {?>
        echo "<script>
        alert("Blog article saved Successfully!");
        window.location.href = "http://localhost/php-blog/home.php";
        </script>"
     <?php } else {?>
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     <?php }?>
  <?php  
    mysqli_close($conn);
  ?>

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

