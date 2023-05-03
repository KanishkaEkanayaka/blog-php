  <?php 
  $myEmail = isset($_GET['currentemail']) ? $_GET['currentemail'] : '';
  include 'navbar.php';
  ?>
  <body>

    <form class="" action="saveblog.php?currentemail=<?php echo $myEmail?>" method="post">
    <div class="form-group container">
    <h1 class="p-5 d-flex justify-content-center">Write a new article</h1>
    <div class="p-2">
      <label class="p-3 fw-bold">Title</label>
      <input class="form-control" type="text" name="postTitle">
    </div>
    <div class="p-2">
      <label class="p-3 fw-bold">Post</label>
      <textarea class="form-control" name="postBody" rows="5" cols="30"></textarea>
    </div>
    <div class="p-2">
      <button class="btn btn-primary" type="submit" name="button">Publish</button>
    </div>   

    </div>
    </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src=""></script>  

</body>
</html>