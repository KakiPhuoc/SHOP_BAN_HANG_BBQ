<?php
include("connect.php");

if (isset($_POST['them'])) {
    $ten_sp = $_POST['ten_sp'];
    $anh_sp = $_POST['anh_sp'];
    $gia_sp = $_POST['gia_sp'];
    $chitiet_sp = $_POST['chitiet_sp'];
    $hang_sx = $_POST['hang_sx'];

    $sql = "INSERT INTO sanpham (ten_sp, anh_sp, gia_sp, chitiet_sp, hang_sx) 
            VALUES ('$ten_sp', '$anh_sp', '$gia_sp', '$chitiet_sp', '$hang_sx')";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
        exit();
    } else {
        $loi = "Thêm thất bại: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Món Mới - Admin BBQ</title>
    <link rel="stylesheet" href="./CSS/admin.css">
</head>
<body>
    <div class="form-box">
        <h2>THÊM MÓN NƯỚNG MỚI</h2>
        <?php if (isset($loi)) echo "<p style='color:red; text-align:center;'>$loi</p>"; ?>
        <form action="" method="post">
            <div class="form-group">
                <label>Tên Sản Phẩm:</label>
                <input type="text" name="ten_sp" required placeholder="Ví dụ: Lẩu Thái BBQ">
            </div>
            <div class="form-group">
                <label>Đường Dẫn Ảnh:</label>
                <input type="text" name="anh_sp" required placeholder="img/sp/ten_anh.jpg">
            </div>
            <div class="form-group">
                <label>Giá Sản Phẩm (Số nguyên):</label>
                <input type="number" name="gia_sp" required placeholder="Ví dụ: 299000">
            </div>
            <div class="form-group">
                <label>Hãng Sản Xuất / Thương Hiệu:</label>
                <input type="text" name="hang_sx" value="BBQ" required>
            </div>
            <div class="form-group">
                <label>Mô Tả Chi Tiết:</label>
                <textarea name="chitiet_sp" rows="4" required></textarea>
            </div>
            <button type="submit" name="them" class="btn-submit">LƯU SẢN PHẨM</button>
            <div class="link-quaylai">
                <a href="admin.php">← Quay lại quản lý</a>
            </div>
        </form>
    </div>
</body>
</html>