<?php
require_once "./models/DanhMuc.php";

class DanhMucController {
    private $model;

    public function __construct() {
        $this->model = new DanhMuc();
    }

    public function index() {
        $danhmucs = $this->model->getAll();
        include './views/danhmuc/index.php';
    }

    public function create() {
        include './views/danhmuc/create.php';
    }

    public function store() {
        $ten = $_POST['ten_danh_muc'];
        $mo_ta = $_POST['mo_ta'];
        $this->model->add($ten, $mo_ta);
        header("Location: index.php?controller=danhmuc&action=index");
    }

    public function edit() {
        $id = $_GET['id'];
        $danhmuc = $this->model->getById($id);
        include './views/danhmuc/edit.php';
    }

    public function update() {
        $id = $_POST['id_danh_muc'];
        $ten = $_POST['ten_danh_muc'];
        $mo_ta = $_POST['mo_ta'];
        $this->model->update($id, $ten, $mo_ta);
        header("Location: index.php?controller=danhmuc&action=index");
    }

    public function delete() {
        $id = $_GET['id'];
        $this->model->delete($id);
        header("Location: index.php?controller=danhmuc&action=index");
    }
}
?> 