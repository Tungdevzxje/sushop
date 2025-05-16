<?php
session_start();
require('db.php'); // Kết nối database
require 'xulylienhe/PHPMailer.php';
require 'xulylienhe/SMTP.php';
require 'xulylienhe/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Hàm tính tổng tiền
function getTotalPrice()
{
    $total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['giaban'] * $item['quantity'];
        }
    }
    return $total;
}

// Nếu đã bấm “Xác nhận đặt hàng”
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hoten'])) {
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $ghichu = $_POST['ghichu'];
    $thanhtoan = $_POST['thanhtoan'];
    $tongtien = getTotalPrice();
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null; // lưu id user
    // 1. Thêm vào đơn hàng
    $stmt = $link->prepare("INSERT INTO donhang (hoten, sdt, email, diachi, ghichu, thanhtoan, tongtien, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssii", $hoten, $sdt, $email, $diachi, $ghichu, $thanhtoan, $tongtien, $user_id);
    $stmt->execute();
    $donhang_id = $stmt->insert_id;
    $stmt->close();

    // 2. Thêm chi tiết đơn hàng
    foreach ($_SESSION['cart'] as $item) {
        $stmt = $link->prepare("INSERT INTO chitiet_donhang (donhang_id, tieude, hinhanh, giaban, quantity) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issii", $donhang_id, $item['tieude'], $item['hinhanh'], $item['giaban'], $item['quantity']);
        $stmt->execute();
        $stmt->close();

        $chitiet_html = '<h4>Chi tiết đơn hàng:</h4>';
        $chitiet_html .= '<table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%;">';
        $chitiet_html .= '<thead><tr><th>Sản phẩm</th><th>Số lượng</th><th>Giá</th></tr></thead><tbody>';

        foreach ($_SESSION['cart'] as $item) {
            $chitiet_html .= "<tr>
                <td>" . htmlspecialchars($item['tieude']) . "</td>
                <td>" . (int) $item['quantity'] . "</td>
                <td>" . number_format($item['giaban']) . " đ</td>
            </tr>";
        }

        $chitiet_html .= '</tbody></table><br>';
        // Gửi email xác nhận
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'trananhtung77@gmail.com'; // Email gửi
            $mail->Password = 'clir yuik ivuc dfse'; // Mật khẩu ứng dụng
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';

            $mail->setFrom('trananhtung77@gmail.com', 'SU SHOP');
            $mail->addAddress($email, $hoten);

            $mail->isHTML(true);
            $mail->Subject = 'Xác nhận đơn hàng #' . $donhang_id;
            $mail->Body = '
        <div style="max-width:600px;margin:0 auto;font-family:sans-serif;border:1px solid #ddd;padding:20px;border-radius:10px;background-color:#fafafa;">
            <div style="text-align:center;border-bottom:1px solid #ccc;padding-bottom:10px;margin-bottom:20px;">
                <h2 style="color:#2b7cff;">SU SHOP</h2>
                <p style="color:#555;font-size:14px;">Xác nhận đơn hàng thành công</p>
            </div>

            <p>Xin chào <strong>' . htmlspecialchars($hoten) . '</strong>,</p>
            <p>Cảm ơn bạn đã đặt hàng tại <strong>SU SHOP</strong>.</p>

            <p><strong>Mã đơn hàng:</strong> #' . $donhang_id . '<br>
            <strong>Phương thức thanh toán:</strong> ' . $thanhtoan . '<br>
            <strong>Tổng tiền:</strong> ' . number_format($tongtien) . ' đ<br>
            <strong>Ghi chú:</strong> ' . nl2br(htmlspecialchars($ghichu)) . '</p>

            ' . $chitiet_html . '

            <p>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất để xác nhận đơn hàng.</p>

            <div style="text-align:center;margin-top:30px;color:#888;font-size:12px;border-top:1px solid #ddd;padding-top:10px;">
                <p>© ' . date('Y') . ' SU SHOP - Cảm ơn bạn đã mua sắm!</p>
            </div>
        </div>
        ';

            $mail->send();

            // Gửi email cho admin khi có đơn hàng mới
            $adminMail = new PHPMailer(true);
            try {
                $adminMail->isSMTP();
                $adminMail->Host = 'smtp.gmail.com';
                $adminMail->SMTPAuth = true;
                $adminMail->Username = 'trananhtung77@gmail.com'; // Email gửi
                $adminMail->Password = 'clir yuik ivuc dfse'; // Mật khẩu ứng dụng
                $adminMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $adminMail->Port = 587;
                $adminMail->CharSet = 'UTF-8';

                $adminMail->setFrom('trananhtung77@gmail.com', 'SU SHOP');
                $adminMail->addAddress('trananhtung77@gmail.com', 'Admin'); // Mail admin nhận

                $adminMail->isHTML(true);
                $adminMail->Subject = '🛒 Đơn hàng mới từ khách hàng #' . $donhang_id;
                $adminMail->Body = '
                <div style="font-family:sans-serif;padding:20px;">
                    <h3>Thông báo đơn hàng mới</h3>
                    <p><strong>Khách hàng:</strong> ' . htmlspecialchars($hoten) . '</p>
                    <p><strong>SĐT:</strong> ' . htmlspecialchars($sdt) . '</p>
                    <p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
                    <p><strong>Địa chỉ:</strong> ' . htmlspecialchars($diachi) . '</p>
                    <p><strong>Phương thức thanh toán:</strong> ' . $thanhtoan . '</p>
                    <p><strong>Tổng tiền:</strong> ' . number_format($tongtien) . ' đ</p>
                    <p><strong>Ghi chú:</strong> ' . nl2br(htmlspecialchars($ghichu)) . '</p>
                    ' . $chitiet_html . '
                </div>';

                $adminMail->send();
            } catch (Exception $e) {
                error_log("Gửi email admin thất bại: {$adminMail->ErrorInfo}");
            }

        } catch (Exception $e) {
            error_log("Gửi email thất bại: {$mail->ErrorInfo}");
        }

    }

    // 3. Xóa giỏ hàng
    unset($_SESSION['cart']);

    // 4. Hiện thông báo
    echo '<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đặt Hàng Thành Công</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="alert alert-success text-center">
            <h2 class="mb-3">🎉 Đặt hàng thành công!</h2>
            <p>Cảm ơn bạn, đơn hàng của bạn đã được ghi nhận.</p>
            <p>Mã đơn hàng: <strong>#' . $donhang_id . '</strong></p>';

    if ($thanhtoan === 'Chuyển khoản ngân hàng') {
        echo '
            <div class="mt-4">
                <h5>🔁 Vui lòng chuyển khoản theo thông tin bên dưới:</h5>
                <p>Ngân hàng: <strong>MB Bank</strong></p>
                <p>Số tài khoản: <strong>0935687375</strong></p>
                <p>Chủ tài khoản: <strong>TRAN ANH TUNG</strong></p>
                <p>Nội dung chuyển khoản: <strong>DH' . $donhang_id . '</strong></p>
                <p>Số tiền: <strong>' . number_format($tongtien) . ' đ</strong></p>
                <p><img src="https://img.vietqr.io/image/MB-0935687375-compact2.jpg?amount=' . $tongtien . '&addInfo=DH' . $donhang_id . '&accountName=TRAN%20ANH%20TUNG"
             alt="QR chuyển khoản" style="max-width:250px;"></p>
            </div>';
    }

    echo '
            <a href="index.php" class="btn btn-primary mt-3">Quay về trang chủ</a>
        </div>
    </div>
</body>
</html>';

    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thông Tin Nhận Hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">🛒 Thông tin nhận hàng</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="hoten" class="form-label">Họ tên</label>
                        <input type="text" class="form-control" name="hoten" required>
                    </div>

                    <div class="mb-3">
                        <label for="sdt" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" name="sdt" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email ( Vui lòng nhập đúng để nhận thông báo khi đặt
                            hàng)</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="diachi" class="form-label">Địa chỉ</label>
                        <textarea class="form-control" name="diachi" rows="2" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="ghichu" class="form-label">Ghi chú</label>
                        <textarea class="form-control" name="ghichu" rows="2"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thanhtoan" class="form-label">Phương thức thanh toán</label>
                        <select class="form-select" name="thanhtoan" id="thanhtoan-select" required onchange="hienThongBao()">
                            <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
                            <option value="Chuyển khoản ngân hàng">Chuyển khoản ngân hàng</option>
                        </select>
                        <div id="thongbao-chuyenkhoan" class="mt-2 text-danger" style="display: none;">
                            ⚠ Sau khi đặt hàng, bạn sẽ nhận được mã QR chuyển khoản với đúng số tiền và nội dung cần chuyển.
                        </div>
                    </div>

                    <script>
                    function hienThongBao() {
                        const select = document.getElementById('thanhtoan-select');
                        const thongbao = document.getElementById('thongbao-chuyenkhoan');
                        if (select.value === 'Chuyển khoản ngân hàng') {
                            thongbao.style.display = 'block';
                        } else {
                            thongbao.style.display = 'none';
                        }
                    }
                    </script>


                    <div class="mb-4">
                        <h5 class="text-end">Tổng tiền: <span class="text-danger"><?= number_format(getTotalPrice()); ?>
                                đ</span></h5>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg">✅ Xác nhận đặt hàng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>