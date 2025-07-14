<?php
require_once "Database.php";

class NguoiDung extends Database {
    public function findByEmail($email) {
        $sql = "SELECT * FROM tb_nguoi_dung WHERE email = ?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function add($ten, $email, $tai_khoan, $mat_khau) {
        $sql = "INSERT INTO tb_nguoi_dung (ten, email, tai_khoan, mat_khau) VALUES (?, ?, ?, ?)";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("ssss", $ten, $email, $tai_khoan, $mat_khau);
        return $stmt->execute();
    }
}
?> 