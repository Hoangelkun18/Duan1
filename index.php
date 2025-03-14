<?php 
session_start();
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

require_once './controllers/HomeController.php';


// Route
$act = $_GET['act'] ?? '/';
match ($act) {
    // Trang chủ
    '/'=> (new HomeController())->index(),
};