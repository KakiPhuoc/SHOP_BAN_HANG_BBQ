<?php
include 'connect.php';

if (isset($_POST['dangky'])) {


    $tendk = $_POST['tendk'];
    $mk = $_POST['mk'];

    $mk_mahoa = password_hash($mk, PASSWORD_DEFAULT);

    $sql = "INSERT INTO taikhoan(tendk, mk) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("ss", $tendk, $mk_mahoa);

    if ($stmt->execute()) {
        echo "Đăng ký thành công!";
    } else {
        echo "Lỗi: " . $conn->error;
    }


    $stmt->close();
}
$conn->close();
?>