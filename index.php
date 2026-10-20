<?php
session_start();

// Nếu chưa đăng nhập, tự động chuyển sang trang đăng nhập ngay lập tức
if (!isset($_SESSION['user_id'])) {
    header("Location: dangnhap.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web-test</title>
</head>
<body>
    <div class="header"><?php include("header.php") ?></div>
    <div class="main"><?php include("url.php") ?></div>
    <div class="footer"><?php include("footer.php") ?></div>

</body>
</html>