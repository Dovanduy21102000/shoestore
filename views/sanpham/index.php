<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
<h2 class="mb-4">Danh sách sản phẩm</h2>
<a href="index.php?controller=sanpham&action=create" class="btn btn-primary mb-3">Thêm mới</a>
<table class="table table-bordered table-hover">
    <thead class="table-light">
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th>Số lượng</th>
        <th>Mã sản phẩm</th>
        <th>ID danh mục</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($sanphams as $sp): ?>
    <tr>
        <td><?= $sp['id_san_pham'] ?></td>
        <td><?= $sp['ten_sp'] ?></td>
        <td><?= $sp['gia'] ?></td>
        <td><?= $sp['mo_ta'] ?></td>
        <td><?= $sp['so_luong'] ?></td>
        <td><?= $sp['ma_san_pham'] ?></td>
        <td><?= $sp['id_danh_muc'] ?></td>
        <td>
            <a href="index.php?controller=sanpham&action=edit&id=<?= $sp['id_san_pham'] ?>" class="btn btn-warning btn-sm">Sửa</a>
            <a href="index.php?controller=sanpham&action=delete&id=<?= $sp['id_san_pham'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Xóa?')">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 