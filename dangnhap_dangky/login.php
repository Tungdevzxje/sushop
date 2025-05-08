
<?php
session_start();
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $link->prepare("SELECT id, password, fullname FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $hashed_password, $fullname);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $fullname;

            // Hiển thị swal thông báo
            echo "
            <html>
            <head>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            </head>
            <body>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Đăng nhập thành công!',
                        text: 'Chào mừng bạn, $fullname',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(() => {
                        window.location.href = '/dongphuc/trangchu';
                    });
                    setTimeout(() => {
                        window.location.href = '/dongphuc/trangchu';
                    }, 2000);
                </script>
            </body>
            </html>";
            exit;
        } else {
            echo "Sai mật khẩu.";
        }
    } else {
        echo "Tài khoản không tồn tại.";
    }
}
?>

<!-- Responsive Login Form -->
<style>
    .login-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 40px 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 8px;
        background-color: #fff;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    input[type="text"],
    input[type="password"] {
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #007bff;
        outline: none;
    }

    button[type="submit"] {
        padding: 12px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }

    @media (max-width: 500px) {
        .login-container {
            padding: 30px 15px;
        }
    }
</style>

<div class="login-container" style="margin-top: 77px;">
    <form method="POST">
        <input type="text" name="username" placeholder="Tên đăng nhập" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit">Đăng nhập</button>
    </form>
</div>
