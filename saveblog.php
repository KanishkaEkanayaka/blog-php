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

