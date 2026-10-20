<?php
session_start();

include 'connect.php';

if (isset($_POST['dangnhap'])) {

    $tendk = $_POST['tendk'];
    $mk = $_POST['mk'];

    $sql = "SELECT id, tendk, mk FROM taikhoan WHERE tendk = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $tendk);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if (password_verify($mk, $row['mk'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['tendk'];
            header("Location: index.php");
            exit(); 

        } else {
            header("Location: dangnhap.php?loi=1");
            exit();
        }
    } else {
        header("Location: dangnhap.php?loi=2");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>