<?php
$page = isset($_GET['go']) ? $_GET['go'] : 'home';

switch ($page) {
    
     case 'quangcao':
        include 'quangcao.php';
        break;
     case 'slideshow':
        include 'slideshow.php';
        break;
    case 'chat':
        include 'chat.php';
        break;
    case 'sanpham':
        include 'sanpham.php';
        break;
    default:
        include 'home.php';
        break;
}
?>