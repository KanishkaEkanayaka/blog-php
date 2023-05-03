<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogger</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #AFD3E2;">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php?currentemail=<?php echo $myEmail?>">Blogger</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php?currentemail=<?php echo $myEmail?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myblogs.php?currentemail=<?php echo $myEmail?>">My blogs</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="blogwrite.php?currentemail=<?php echo $myEmail?>">Write an Article</a>
        </li>
      </ul>
      <div class="position-absolute top-0 end-0 pt-2 px-5">
        <form action="login.php">
          <button class="btn btn-danger">Log out</button></div>
        </form>
    </div>
  </div>
</nav>
</head>