<h2>Sửa sản phẩm</h2>
<form method="post" action="index.php?controller=sanpham&action=update">
    <input type="hidden" name="id_san_pham" value="<?= $sanpham['id_san_pham'] ?>">
    Tên sản phẩm: <input type="text" name="ten_sp" value="<?= $sanpham['ten_sp'] ?>" required><br>
    Giá: <input type="number" name="gia" value="<?= $sanpham['gia'] ?>" required><br>
    Mô tả: <input type="text" name="mo_ta" value="<?= $sanpham['mo_ta'] ?>"><br>
    Số lượng: <input type="number" name="so_luong" value="<?= $sanpham['so_luong'] ?>" required><br>
    Mã sản phẩm: <input type="text" name="ma_san_pham" value="<?= $sanpham['ma_san_pham'] ?>" required><br>
    Danh mục:
    <select name="id_danh_muc" required>
        <?php foreach ($danhmucs as $dm): ?>
            <option value="<?= $dm['id_danh_muc'] ?>" <?= $sanpham['id_danh_muc'] == $dm['id_danh_muc'] ? 'selected' : '' ?>><?= $dm['ten_danh_muc'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Cập nhật</button>
</form> 