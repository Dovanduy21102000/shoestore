<?php
require_once "Database.php";

class DanhMuc extends Database {
    public function getAll() {
        $sql = "SELECT * FROM tb_danh_muc";
        $result = $this->getConnection()->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getById($id) {
        $sql = "SELECT * FROM tb_danh_muc WHERE id_danh_muc = ?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function add($ten, $mo_ta) {
        $sql = "INSERT INTO tb_danh_muc (ten_danh_muc, mo_ta) VALUES (?, ?)";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("ss", $ten, $mo_ta);
        return $stmt->execute();
    }

    public function update($id, $ten, $mo_ta) {
        $sql = "UPDATE tb_danh_muc SET ten_danh_muc=?, mo_ta=? WHERE id_danh_muc=?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("ssi", $ten, $mo_ta, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM tb_danh_muc WHERE id_danh_muc=?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?> 