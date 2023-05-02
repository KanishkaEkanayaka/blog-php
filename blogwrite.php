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
  <?php include 'navbar.php' ?>
  <h1>Compose</h1>
  <?php 
  $myEmail = isset($_GET['currentemail']) ? $_GET['currentemail'] : '';
  ?>
    <form class="" action="saveblog.php?currentemail=<?php echo $myEmail?>" method="post">
    <div class="form-group">
        <label>Title</label>
        <input class="form-control" type="text" name="postTitle">
        <label>Post</label>
        <textarea class="form-control" name="postBody" rows="5" cols="30"></textarea>
    </div>
    <button class="btn btn-primary" type="submit" name="button">Publish</button>
    </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src=""></script>  

</body>
</html>