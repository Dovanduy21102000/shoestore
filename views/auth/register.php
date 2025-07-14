<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm p-4">
            <h2 class="mb-4 text-center">Đăng ký</h2>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"> <?= $error ?> </div>
            <?php endif; ?>
            <?php if (!empty($success)): ?>
                <div class="alert alert-success"> <?= $success ?> </div>
            <?php endif; ?>
            <form method="post" action="index.php?controller=auth&action=register">
                <div class="mb-3">
                    <label class="form-label">Họ tên</label>
                    <input type="text" name="ten" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tài khoản</label>
                    <input type="text" name="tai_khoan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mật khẩu</label>
                    <input type="password" name="mat_khau" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nhập lại mật khẩu</label>
                    <input type="password" name="mat_khau2" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Đăng ký</button>
            </form>
            <div class="mt-3 text-center">
                <a href="index.php?controller=auth&action=showLogin">Đã có tài khoản? Đăng nhập</a>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 