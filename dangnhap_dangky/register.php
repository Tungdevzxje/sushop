<!-- Link SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Link SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.js"></script>

<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $fullname = trim($_POST['fullname']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $link->prepare("INSERT INTO users (username, fullname, password, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("sss", $username, $fullname, $password);

    if ($stmt->execute()) {
        // Đăng ký thành công, hiển thị thông báo SweetAlert2 và redirect
        echo "<script>
                Swal.fire({
                    title: 'Đăng ký thành công!',
                    text: 'Chúc mừng bạn đã đăng ký thành công.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'dang-nhap'; // Chuyển hướng về trang đăng nhập
                });
              </script>";
    } else {
        // Lỗi đăng ký, hiển thị thông báo lỗi
        echo "<script>
                Swal.fire({
                    title: 'Lỗi đăng ký!',
                    text: 'Có lỗi xảy ra: " . $link->error . "',
                    icon: 'error',
                    confirmButtonText: 'Thử lại'
                });
              </script>";
    }
}
?>

<style>
    form {
        max-width: 400px;
        margin: 50px auto;
        padding: 30px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
    }

    form input {
        width: 100%;
        padding: 12px 15px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        transition: border 0.3s ease;
    }

    form input:focus {
        border-color: #4a90e2;
        outline: none;
    }

    form button {
        width: 100%;
        padding: 12px;
        background: #4a90e2;
        color: white;
        font-size: 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    form button:hover {
        background: #357abd;
    }

    @media (max-width: 480px) {
        form {
            margin: 20px;
            padding: 20px;
        }

        form input, form button {
            font-size: 15px;
        }
    }
</style>

<form method="POST" style="margin-top: 77px;">
    <input type="text" name="username" placeholder="Tên đăng nhập" required>
    <input type="text" name="fullname" placeholder="Họ và tên" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <button type="submit">Đăng ký</button>
</form>
