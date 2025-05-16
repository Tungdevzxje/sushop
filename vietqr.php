<?php
require_once 'phpqrcode/qrlib.php';

// Thông tin ngân hàng
$bankCode = 'MB';
$accountNumber = '0935687375';
$accountName = 'TRAN ANH TUNG';
$amount = $_GET['amount'] ?? 10000; // số tiền chuyển (ví dụ)
$orderId = $_GET['order_id'] ?? '0001';

// Nội dung QR theo chuẩn VietQR
$content = "https://img.vietqr.io/image/{$bankCode}-{$accountNumber}-compact2.jpg?amount={$amount}&addInfo=DH{$orderId}&accountName=" . urlencode($accountName);

// Nếu muốn dùng QR code tùy chỉnh bằng chuỗi dữ liệu thì:
QRcode::png($content);
?>