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
  $currentBlog = isset($_GET['blogid']) ? $_GET['blogid'] : '';
  $myEmail = isset($_GET['currentemail']) ? $_GET['currentemail'] : '';

  include 'navbar.php';
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
          <h1><?php echo $row["title"] ?></h1>
          <p>
              <?php echo $row["content"] ?>
          </p>
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