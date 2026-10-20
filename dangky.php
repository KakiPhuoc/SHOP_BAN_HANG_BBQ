<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="./CSS/dangky.css">
</head>
<body>
   <div id="dangky">
    <h1>Đăng Ký</h1>
    <form action="xlydk.php" method="post" id="dky">
        <h3>Tên Đăng Ký</h3>
        <input type="text" name="tendk" id="nhap-ten" placeholder="Nhập Email hoặc Số điện thoại" required>
        
        <h3>Mật Khẩu</h3>
        <input type="password" name="mk" id="nhap-mk" placeholder="Nhập mật khẩu" required>
        
        <input type="submit" name="dangky" id="nut-dangky" value="ĐĂNG KÝ NGAY">
    </form>
</div>
</body>
</html>