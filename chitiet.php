<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chi Tiết Sản Phẩm</title>
    <link rel="stylesheet" href="./CSS/chitiet.css">
    <link rel="stylesheet" href="./CSS/sanpham.css">
</head>

<body>

    <h1 class="dmucsanpham" style="text-align: center;"> CHI TIẾT SẢN PHẨM BBQ </h1>

<?php
$conn = new mysqli("localhost", "root", "", "daovanphuoc");
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM sanpham WHERE id_sp = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>
        <div class="chi-tiet-container">
            <div class="chi-tiet-img">
                <img src="<?php echo $row['anh_sp']; ?>" alt="<?php echo $row['ten_sp']; ?>">
            </div>
            <div class="chi-tiet-info">
                <h1><?php echo $row['ten_sp']; ?></h1>
                <p class="gia-chitiet">Giá: <?php echo number_format($row['gia_sp']); ?> VNĐ</p>
                <p><strong>Thương hiệu:</strong> <?php echo $row['hang_sx']; ?></p>
                <br>
                <p><strong>Mô tả chi tiết:</strong></p>
                <p><?php echo nl2br($row['chitiet_sp']); ?></p> 
                
                <a href="javascript:history.back()" class="btn-quaylai">Quay lại Trang Chủ</a>
            </div>
        </div>
<?php
    } else {
        echo "<p style='text-align:center;'>Sản phẩm không tồn tại!</p>";
    }
} else {
    echo "<p style='text-align:center;'>Lỗi: Không tìm thấy ID sản phẩm.</p>";
}

$conn->close();
?>

</body>
</html>