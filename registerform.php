  <?php
  $email=$password=$confirm_password=$email_confirmed="";
  $error_set = "";

  if($_SERVER["REQUEST_METHOD"]== "POST"){
    if (empty($_POST["email"])) {
        $emailErr = "Name is required";
        $error_set = $error_set.$emailErr."<br>";
    } else{
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $error_set = $error_set.$emailErr."<br>";
        }else{
            $email_confirmed = $email;
        }
    }

    if(empty($_POST["password"])){
        $passwordErr = "Password is required";
        $error_set = $error_set.$passwordErr."<br>";
    }else{
        $password = test_input($_POST["password"]);
    }
    
    if(empty($_POST["confirmpassword"])){
        $confirmPasswordErr = "Password confirmation required";
        $error_set = $error_set.$confirmPasswordErr."<br>";
    }else{
        $confirm_password = test_input($_POST["confirmpassword"]);
    }

    if($password != $confirm_password){
        $passwordMismatchErr = "Two passwords provided are not same.";
        $error_set = $error_set.$passwordMismatchErr."<br>";
    }

  }
?>
<?php
  if(($email_confirmed !="") and ($password == $confirm_password) ){ ?>
  <?php
    include 'conn.php';
    include 'navbar.php';
    $sql = "INSERT INTO Users (email, password)
    VALUES ('$email_confirmed','$confirm_password')";

    if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    
    mysqli_close($conn);
    header("Location: http://localhost/php-blog/home.php?currentemail=" . urlencode($email_confirmed));
    exit();
  ?>
  <!-- echo "<script>
  alert("Registered Successfully!");
  window.location.href = "http://localhost/php-blog/home.php";
  </script>" -->
  
 <?php }else{
    ?>
    echo "<script>
    alert("Something went wrong! Please register again");
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


