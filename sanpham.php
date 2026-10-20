<?php 
include("connect.php"); 

// --- XỬ LÝ LƯU ĐƠN HÀNG VÀO DATABASE KHI KHÁCH BẤM MUA ---
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'mua_hang') {
    $ten_sp = $_POST['ten_sp'];
    $gia_sp = $_POST['gia_sp'];

    // Lưu đơn hàng vào bảng donhang
    $sql_insert = "INSERT INTO donhang (ten_sp, gia_sp) VALUES ('$ten_sp', '$gia_sp')";
    
    if ($conn->query($sql_insert) === TRUE) {
        header("Location: " . $_SERVER['PHP_SELF'] . "?status=success");
        exit();
    } else {
        header("Location: " . $_SERVER['PHP_SELF'] . "?status=error");
        exit();
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>SHOP ĐỒ NƯỚNG BBQ</title>
    <link rel="stylesheet" href="./CSS/sanpham.css">
</head>

<body>
    <?php 
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            echo "<script>
                    alert('Đặt hàng thành công!');
                    window.history.replaceState(null, null, window.location.pathname);
                  </script>";
        } else if ($_GET['status'] == 'error') {
            echo "<script>
                    alert('Lỗi đặt hàng, vui lòng thử lại!');
                    window.history.replaceState(null, null, window.location.pathname);
                  </script>";
        }
    }
    ?>

    <h1 class="dmucsanpham"> SHOP ĐỒ NƯỚNG BBQ </h1>

<?php
// Sắp xếp sản phẩm mới nhất lên đầu và lấy tất cả sản phẩm ra
$sql = "SELECT id_sp, ten_sp, anh_sp, gia_sp FROM sanpham ORDER BY id_sp DESC";
$result = $conn->query($sql);
?>
    <div id="product-connect">
<?php
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        
        // Bọc ảnh và tên sản phẩm trong link sang trang chi tiết chitiet.php
        echo "<a href='chitiet.php?id=" . $row["id_sp"] . "' style='text-decoration: none; color: inherit;'>";
        echo "<img src='" . $row["anh_sp"] . "' alt='" . htmlspecialchars($row["ten_sp"]) . "'>";
        echo "<h3>" . htmlspecialchars($row["ten_sp"]) . "</h3>";
        echo "</a>";
        
        echo "<p>Giá: " . number_format($row["gia_sp"]) . " VNĐ</p>";
        
        // Form gửi dữ liệu ngầm lên chính trang này
        echo "<form method='POST' action=''>";
        echo "<input type='hidden' name='action' value='mua_hang'>";
        echo "<input type='hidden' name='ten_sp' value='" . htmlspecialchars($row["ten_sp"]) . "'>";
        echo "<input type='hidden' name='gia_sp' value='" . $row["gia_sp"] . "'>";
        echo "<button type='submit' class='btn-mua'>Mua ngay</button>";
        echo "</form>";
        
        echo "</div>";
    }
} else {
    echo "<p style='text-align:center;'>Không có sản phẩm nào</p>";
}
?>
    </div>
</body>
</html>