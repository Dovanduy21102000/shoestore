<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa danh mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
<h2 class="mb-4">Sửa danh mục</h2>
<form method="post" action="index.php?controller=danhmuc&action=update" class="card p-4 shadow-sm" style="max-width: 500px;">
    <input type="hidden" name="id_danh_muc" value="<?= $danhmuc['id_danh_muc'] ?>">
    <div class="mb-3">
        <label class="form-label">Tên danh mục</label>
        <input type="text" name="ten_danh_muc" value="<?= $danhmuc['ten_danh_muc'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <input type="text" name="mo_ta" value="<?= $danhmuc['mo_ta'] ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
    <a href="index.php?controller=danhmuc&action=index" class="btn btn-secondary">Quay lại</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 