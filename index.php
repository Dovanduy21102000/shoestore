<?php
$controller = $_GET['controller'] ?? 'danhmuc';
$action = $_GET['action'] ?? 'index';

require_once "./controllers/DanhMucController.php";
require_once "./controllers/SanPhamController.php";
require_once "./controllers/AuthController.php";

$controllerName = ucfirst($controller) . "Controller";
$controllerObj = new $controllerName();

$controllerObj->$action();
?> 