<?php
require_once "./models/SanPham.php";
require_once "./models/DanhMuc.php";

class SanPhamController {
    private $model;
    private $danhmucModel;

    public function __construct() {
        $this->model = new SanPham();
        $this->danhmucModel = new DanhMuc();
    }

    public function index() {
        $sanphams = $this->model->getAll();
        include './views/sanpham/index.php';
    }

    public function create() {
        $danhmucs = $this->danhmucModel->getAll();
        include './views/sanpham/create.php';
    }

    public function store() {
        $ten = $_POST['ten_sp'];
        $gia = $_POST['gia'];
        $mo_ta = $_POST['mo_ta'];
        $so_luong = $_POST['so_luong'];
        $ma_san_pham = $_POST['ma_san_pham'];
        $id_danh_muc = $_POST['id_danh_muc'];
        $this->model->add($ten, $gia, $mo_ta, $so_luong, $ma_san_pham, $id_danh_muc);
        header("Location: index.php?controller=sanpham&action=index");
    }

    public function edit() {
        $id = $_GET['id'];
        $sanpham = $this->model->getById($id);
        $danhmucs = $this->danhmucModel->getAll();
        include './views/sanpham/edit.php';
    }

    public function update() {
        $id = $_POST['id_san_pham'];
        $ten = $_POST['ten_sp'];
        $gia = $_POST['gia'];
        $mo_ta = $_POST['mo_ta'];
        $so_luong = $_POST['so_luong'];
        $ma_san_pham = $_POST['ma_san_pham'];
        $id_danh_muc = $_POST['id_danh_muc'];
        $this->model->update($id, $ten, $gia, $mo_ta, $so_luong, $ma_san_pham, $id_danh_muc);
        header("Location: index.php?controller=sanpham&action=index");
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->delete($id);
        header("Location: index.php?controller=sanpham&action=index");
    }
}
?> 