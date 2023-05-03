  <?php
    $myEmail = isset($_GET['currentemail']) ? $_GET['currentemail'] : '';
    include 'navbar.php';
  ?> 
  <body>
  <?php 
  
  include 'conn.php';
    
    $sql = "SELECT * FROM Blogs where email='$myEmail'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          //echo "title: " . $row["title"]. " - content: " . $row["content"]. "<br>";
   ?>     
          
   <section id="details" class="details container-fluid">

    <hr class="featurette-divider">

    <div class="row featurette d-2">
      <div class="col-md-7 col-lg-9 order-md-2">
        <h2 class="featurette-heading"><?php echo $row["title"] ?></h2>
          <p class="lead">
          <?php echo substr($row["content"],0,1000); ?>
          <a href="readblog.php?blogid=<?php echo $row['blogId']?>&currentemail=<?php echo $row['email']?>">Read More</a>
          </p>
      </div>
      <div class="col-md-5 col-lg-3 order-md-1">
        <img class="featurette-image img-fluid mx-auto ps-5" src="public/images/reading.jpeg" alt="Generic placeholder image">
      </div>
    </div>

  <hr class="featurette-divider">
</section>
  <?php
        }
      } else {
        echo "0 results";
      }

    mysqli_close($conn);
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src=""></script>  

<?php include 'footer.php'; ?>

</body>
</html>