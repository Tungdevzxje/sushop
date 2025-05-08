<?php
require('db.php');

if (!isset($_GET['id'])) {
    echo "Không tìm thấy đơn hàng.";
    exit;
}

$donhang_id = (int) $_GET['id'];

// Lấy thông tin đơn hàng
$stmt = $link->prepare("SELECT * FROM donhang WHERE id = ?");
$stmt->bind_param("i", $donhang_id);
$stmt->execute();
$donhang = $stmt->get_result()->fetch_assoc();
$stmt->close();

// Lấy chi tiết đơn hàng
$stmt = $link->prepare("SELECT * FROM chitiet_donhang WHERE donhang_id = ?");
$stmt->bind_param("i", $donhang_id);
$stmt->execute();
$chitiet = $stmt->get_result();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết đơn hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2>📝 Chi tiết đơn hàng #<?= $donhang['id'] ?></h2>
        <p><strong>Khách hàng:</strong> <?= htmlspecialchars($donhang['hoten']) ?></p>
        <p><strong>Điện thoại:</strong> <?= htmlspecialchars($donhang['sdt']) ?></p>
        <p><strong>Điện thoại:</strong> <?= htmlspecialchars($donhang['email']) ?></p>
        <p><strong>Địa chỉ:</strong> <?= htmlspecialchars($donhang['diachi']) ?></p>
        <p><strong>Phương thức thanh toán:</strong> <?= htmlspecialchars($donhang['thanhtoan']) ?></p>
        <p><strong>Ghi chú:</strong> <?= htmlspecialchars($donhang['ghichu']) ?></p>
        <p><strong>Ngày đặt:</strong> <?= $donhang['ngaydat'] ?></p>
        <p><strong>Trạng thái:</strong> <?= htmlspecialchars($donhang['trang_thai']) ?></p>

        <h4 class="mt-4">Sản phẩm đã đặt</h4>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Tiêu đề</th>
                    <th>Hình ảnh</th>
                    <th>Giá bán</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php $tong = 0; while ($item = $chitiet->fetch_assoc()): 
                    $thanhtien = $item['giaban'] * $item['quantity'];
                    $tong += $thanhtien;
                ?>
                <tr>
                    <td><?= htmlspecialchars($item['tieude']) ?></td>
                    <td><img src="../<?= htmlspecialchars($item['hinhanh']) ?>" width="60"></td>
                    <td><?= number_format($item['giaban']) ?> đ</td>
                    <td><?= $item['quantity'] ?></td>
                    <td><?= number_format($thanhtien) ?> đ</td>
                </tr>
                <?php endwhile; ?>
                <tr class="table-success">
                    <td colspan="4" class="text-end"><strong>Tổng cộng:</strong></td>
                    <td><strong><?= number_format($tong) ?> đ</strong></td>
                </tr>
                <tr class="table-success">
                    <td colspan="4" class="text-end"><strong>Trạng thái đơn:</strong></td>
                    <td><strong><?= htmlspecialchars($donhang['trang_thai']) ?></strong></td>
                </tr>
            </tbody>
        </table>

        <a href="quan_tri.php?p=danhsach_donhang" class="btn btn-secondary mt-3">⬅️ Quay lại danh sách</a>
    </div>
</body>
</html>