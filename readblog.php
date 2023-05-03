  <body>
    <?php
      include 'navbar.php'; 
      $currentBlog = isset($_GET['blogid']) ? $_GET['blogid'] : '';
      $myEmail = isset($_GET['currentemail']) ? $_GET['currentemail'] : '';
     ?>
  <?php 
  include 'conn.php';
    
    $sql = "SELECT * FROM Blogs where blogId='$currentBlog'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $xml = new DOMDocument("1.0");
        $xml->formatOutput=true;
        $articles=$xml->createElement("articles");
        $xml->appendChild($articles);
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          //echo "title: " . $row["title"]. " - content: " . $row["content"]. "<br>";
?>
          <h1></h1>
          <p>
              
          </p>

    <div class="form-group container">
      <h1 class="p-5 d-flex justify-content-center"><?php echo $row["title"] ?></h1>
      <div class="p-2">
        <label class="p-3"><?php echo $row["content"] ?></label>
      </div>
    </div>

<?php
          $article=$xml->createElement("article");
          $articles->appendChild($article);

          $title=$xml->createElement("title", $row['title']);
          $article->appendChild($title);
     
          $content=$xml->createElement("content", $row['content']);
          $article->appendChild($content);
        }
        //echo "<xmp>".$xml->saveXML()."</xmp>";
        $xml->save("blogdata.xml");
      } else {
        echo "0 results";
      }

    mysqli_close($conn);
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src=""></script>  



</body>
</html>