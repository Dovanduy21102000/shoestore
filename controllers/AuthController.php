<?php
require_once "./models/NguoiDung.php";
session_start();

class AuthController {
    private $model;
    public function __construct() {
        $this->model = new NguoiDung();
    }

    public function showLogin() {
        include './views/auth/login.php';
    }

    public function login() {
        $email = $_POST['email'];
        $mat_khau = $_POST['mat_khau'];
        $user = $this->model->findByEmail($email);
        if ($user && $user['mat_khau'] === $mat_khau) {
            $_SESSION['user'] = $user;
            header("Location: index.php");
        } else {
            $error = "Sai email hoặc mật khẩu!";
            include './views/auth/login.php';
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?controller=auth&action=showLogin");
    }

    public function showRegister() {
        include './views/auth/register.php';
    }

    public function register() {
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $tai_khoan = $_POST['tai_khoan'];
        $mat_khau = $_POST['mat_khau'];
        $mat_khau2 = $_POST['mat_khau2'];
        if ($mat_khau !== $mat_khau2) {
            $error = "Mật khẩu không khớp!";
            include './views/auth/register.php';
            return;
        }
        if ($this->model->findByEmail($email)) {
            $error = "Email đã tồn tại!";
            include './views/auth/register.php';
            return;
        }
        $this->model->add($ten, $email, $tai_khoan, $mat_khau);
        $success = "Đăng ký thành công! Vui lòng đăng nhập.";
        include './views/auth/login.php';
    }
}
?> 