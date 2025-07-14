<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách danh mục</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
<h2 class="mb-4">Danh sách danh mục</h2>
<a href="index.php?controller=danhmuc&action=create" class="btn btn-primary mb-3">Thêm mới</a>
<table class="table table-bordered table-hover">
    <thead class="table-light">
    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($danhmucs as $dm): ?>
    <tr>
        <td><?= $dm['id_danh_muc'] ?></td>
        <td><?= $dm['ten_danh_muc'] ?></td>
        <td><?= $dm['mo_ta'] ?></td>
        <td>
            <a href="index.php?controller=danhmuc&action=edit&id=<?= $dm['id_danh_muc'] ?>" class="btn btn-warning btn-sm">Sửa</a>
            <a href="index.php?controller=danhmuc&action=delete&id=<?= $dm['id_danh_muc'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Xóa?')">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 