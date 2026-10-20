<?php
include("connect.php");

// Xử lý XÓA sản phẩm
if (isset($_GET['xoa'])) {
    $id_xoa = intval($_GET['xoa']);
    $sql_xoa = "DELETE FROM sanpham WHERE id_sp = $id_xoa";
    if ($conn->query($sql_xoa) === TRUE) {
        header("Location: admin.php");
        exit();
    } else {
        echo "<script>alert('Lỗi khi xóa sản phẩm!');</script>";
    }
}

// Lấy danh sách sản phẩm
$sql = "SELECT * FROM sanpham ORDER BY id_sp DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản Lý Sản Phẩm - Admin BBQ</title>
    <link rel="stylesheet" href="./CSS/admin.css">
</head>
<body>
    <div class="admin-container">
        <div class="admin-header">
            <h1>QUẢN LÝ SẢN PHẨM BBQ</h1>
            <div>
                <a href="them_sp.php" class="btn-them">+ Thêm Món Mới</a>
                <a href="Index.php" class="btn-trangchu">Về Trang Chủ</a>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá (VNĐ)</th>
                    <th>Hãng SX</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id_sp']; ?></td>
                            <td><img src="<?php echo $row['anh_sp']; ?>" class="img-admin" alt="<?php echo $row['ten_sp']; ?>"></td>
                            <td><strong><?php echo $row['ten_sp']; ?></strong></td>
                            <td><span class="gia-tien"><?php echo number_format($row['gia_sp']); ?></span></td>
                            <td><?php echo $row['hang_sx']; ?></td>
                            <td>
                                <a href="sua_sp.php?id=<?php echo $row['id_sp']; ?>" class="btn-sua">Sửa</a>
                                <a href="admin.php?xoa=<?php echo $row['id_sp']; ?>" class="btn-xoa" onclick="return confirm('Bạn có chắc chắn muốn xóa món này?');">Xóa</a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>Chưa có sản phẩm nào trong CSDL!</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>