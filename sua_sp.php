<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql_get = "SELECT * FROM sanpham WHERE id_sp = $id";
    $res = $conn->query($sql_get);
    $data = $res->fetch_assoc();
}

if (isset($_POST['sua'])) {
    $ten_sp = $_POST['ten_sp'];
    $anh_sp = $_POST['anh_sp'];
    $gia_sp = $_POST['gia_sp'];
    $chitiet_sp = $_POST['chitiet_sp'];
    $hang_sx = $_POST['hang_sx'];

    $sql_update = "UPDATE sanpham SET 
                    ten_sp = '$ten_sp', 
                    anh_sp = '$anh_sp', 
                    gia_sp = '$gia_sp', 
                    chitiet_sp = '$chitiet_sp', 
                    hang_sx = '$hang_sx' 
                   WHERE id_sp = $id";

    if ($conn->query($sql_update) === TRUE) {
        header("Location: admin.php");
        exit();
    } else {
        $loi = "Cập nhật thất bại: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Sản Phẩm - Admin BBQ</title>
    <link rel="stylesheet" href="./CSS/admin.css">
</head>
<body>
    <div class="form-box form-box-sua">
        <h2>CẬP NHẬT SẢN PHẨM #<?php echo $id; ?></h2>
        <?php if (isset($loi)) echo "<p style='color:red; text-align:center;'>$loi</p>"; ?>
        <form action="" method="post">
            <div class="form-group">
                <label>Tên Sản Phẩm:</label>
                <input type="text" name="ten_sp" value="<?php echo htmlspecialchars($data['ten_sp']); ?>" required>
            </div>
            <div class="form-group">
                <label>Đường Dẫn Ảnh:</label>
                <input type="text" name="anh_sp" value="<?php echo htmlspecialchars($data['anh_sp']); ?>" required>
            </div>
            <div class="form-group">
                <label>Giá Sản Phẩm (VNĐ):</label>
                <input type="number" name="gia_sp" value="<?php echo $data['gia_sp']; ?>" required>
            </div>
            <div class="form-group">
                <label>Hãng Sản Xuất / Thương Hiệu:</label>
                <input type="text" name="hang_sx" value="<?php echo htmlspecialchars($data['hang_sx']); ?>" required>
            </div>
            <div class="form-group">
                <label>Mô Tả Chi Tiết:</label>
                <textarea name="chitiet_sp" rows="4" required><?php echo htmlspecialchars($data['chitiet_sp']); ?></textarea>
            </div>
            <button type="submit" name="sua" class="btn-submit btn-submit-sua">CẬP NHẬT THÔNG TIN</button>
            <div class="link-quaylai">
                <a href="admin.php">← Quay lại trang quản lý</a>
            </div>
        </form>
    </div>
</body>
</html>