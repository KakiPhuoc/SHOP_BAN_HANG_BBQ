<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tin Tức</title>
    <link rel="stylesheet" href="./CSS/tintuc.css">
     <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>



 
    <div id="header"> 
        <img src="./IMG/AnhNen.jpg" width="100%" height="350px">
        <div class="menuchinh">
            <a href="Index.php">TRANG CHỦ</a>
            <a href="tintuc.php">TIN TỨC</a>
            <a href="#">PHỔ BIẾN</a>
            <a href="#">BÁN CHẠY</a>
            <a href="#">MỚI NHẤT</a>
        </div>
      




    <?php include("connect.php"); ?>

    <div id="trangchu-container">
        <?php 
        $sql = "SELECT id_tt, tieude_tt, anh_tt, tomtat_tt FROM tintuc LIMIT 4";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $dem = 1; 
            
            while($tt = $result->fetch_assoc()) {
                
                if ($dem == 1) {
                    echo "<div class='tin-to'>";
                        echo "<img src='" . $tt["anh_tt"] . "'>";
                        echo "<div class='chu-bai-to'>";
                            echo "<h1><a href='#'>" . $tt["tieude_tt"] . "</a></h1>";
                            echo "<p class='tomtat'>" . $tt["tomtat_tt"] . "</p>";
                        echo "</div>";
                    echo "</div>";
                } 
            
                else {
                    echo "<div class='tin-be'>";
                        echo "<h1><a href='#'>" . $tt["tieude_tt"] . "</a></h1>";
                        echo "<img src='" . $tt["anh_tt"] . "'>";
                        echo "<p class='tomtat'>" . $tt["tomtat_tt"] . "</p>";
                    echo "</div>";
                }
                
                $dem++;
            }
        }
        $conn->close();
        ?>
    </div>





 <div id="footer">
        <div id="footer-row">
            <div class="colum1">
            <h3 class="footer-colum-h3">Đồ Nướng BBQ BBQ</h3>
            <p class="footer-colum-p">Địa chỉ: Tọa độ X Vị Trí Y Sao Hỏa</p>
            <p class="footer-colum-p2">Chịu trách nhiệm: (Ông Cháu) Kaki Phước</p>
            </div>
            <div class="colum2">
            <h2 class="footer-colum2-h2">Cảm ơn mọi người đã ghé trang</h2>
            </div>
            <div class="colum3">
                <p class="footer-colum3-p">Liên hệ Sđt: 0*********(Đoán xem ^.^)</p>
                <p class="footer-colum3-p2">Emai:Kaki*****@gmail.com</p>
            </div>
        </div>
   </div>


</body>
</html>