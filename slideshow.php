<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="./CSS/slideshow.css">
    
</head>
        <?php include("connect.php")?>
        <body>
        <div class="slideshow-container">
      
            <?php
            $sql = "SELECT  anh_sl FROM slideshow LIMIT 3";
            $result = $conn->query($sql);
            ?>

            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='mySlides fade'>";
                    echo "<img class='mySlides-img' src='" . $row["anh_sl"] . "' alt='Ảnh slideshow'>";
                    echo "</div>";
                }
            } else {
                echo "Không có slideshow nào";
            }

            $conn->close();
            ?>
            <a class="quaylai" onclick="plusSlides(-1)">❮</a>
            <a class="tieptheo" onclick="plusSlides(1)">❯</a>

    


    <div class="chamtron">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

 <script src="./JS/slideshow.js"></script>


</body>
</html>