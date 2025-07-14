<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
<h2 class="mb-4">Thêm sản phẩm</h2>
<form method="post" action="index.php?controller=sanpham&action=store" class="card p-4 shadow-sm" style="max-width: 600px;">
    <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" name="ten_sp" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="number" name="gia" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <input type="text" name="mo_ta" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Số lượng</label>
        <input type="number" name="so_luong" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Mã sản phẩm</label>
        <input type="text" name="ma_san_pham" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Danh mục</label>
        <select name="id_danh_muc" class="form-select" required>
            <?php foreach ($danhmucs as $dm): ?>
                <option value="<?= $dm['id_danh_muc'] ?>"><?= $dm['ten_danh_muc'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Lưu</button>
    <a href="index.php?controller=sanpham&action=index" class="btn btn-secondary">Quay lại</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 