<?php
require_once "Database.php";

class SanPham extends Database {
    public function getAll() {
        $sql = "SELECT * FROM tb_san_pham";
        $result = $this->getConnection()->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getById($id) {
        $sql = "SELECT * FROM tb_san_pham WHERE id_san_pham = ?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function add($ten, $gia, $mo_ta, $so_luong, $ma_san_pham, $id_danh_muc) {
        $sql = "INSERT INTO tb_san_pham (ten_sp, gia, mo_ta, so_luong, ma_san_pham, id_danh_muc) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("sdsisi", $ten, $gia, $mo_ta, $so_luong, $ma_san_pham, $id_danh_muc);
        return $stmt->execute();
    }

    public function update($id, $ten, $gia, $mo_ta, $so_luong, $ma_san_pham, $id_danh_muc) {
        $sql = "UPDATE tb_san_pham SET ten_sp=?, gia=?, mo_ta=?, so_luong=?, ma_san_pham=?, id_danh_muc=? WHERE id_san_pham=?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("sdsisii", $ten, $gia, $mo_ta, $so_luong, $ma_san_pham, $id_danh_muc, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM tb_san_pham WHERE id_san_pham=?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?> 