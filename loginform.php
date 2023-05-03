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

