<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đăng nhập - Shop Đồ Nướng BBQ</title>
    <link rel="stylesheet" href="./CSS/dangnhap.css">
</head>
<body>
    <div id="dangnhap">
        <h1>Đăng Nhập</h1>
        
       <?php
    if (isset($_GET['loi'])) {
        if ($_GET['loi'] == 1) {
            echo '<p class="thongbao-loi">Sai mật khẩu. Vui lòng thử lại!</p>';
        } elseif ($_GET['loi'] == 2) {
            echo '<p class="thongbao-loi">Tài khoản không tồn tại!</p>';
        }
    }
?>
        <form action="xlydn.php" method="post" id="dnhap">
            <h3>Tên Đăng Nhập</h3>
            <input type="text" name="tendk" id="nhap-ten" placeholder="Nhập Email hoặc Số điện thoại" required>
            
            <h3>Mật Khẩu</h3>
            <input type="password" name="mk" id="nhap-mk" placeholder="Nhập mật khẩu" required>
            
            <input type="submit" name="dangnhap" id="nut-dangnhap" value="ĐĂNG NHẬP">
        </form>
        
       <p class="chuyen-trang">
    Chưa có tài khoản? <a href="dangky.php" class="link-dangky">Đăng ký ngay</a>
</p>
    </div>
</body>
</html>