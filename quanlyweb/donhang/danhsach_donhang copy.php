<?php
require('db.php');
// Số đơn hàng mỗi trang
$limit = 20;

// Trang hiện tại
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

// Vị trí bắt đầu lấy dữ liệu
$offset = ($page - 1) * $limit;

// Tổng số đơn hàng để tính tổng số trang
$total_sql = "SELECT COUNT(*) as total FROM donhang";
$total_result = $link->query($total_sql);
$total_row = $total_result->fetch_assoc();
$total_orders = $total_row['total'];
$total_pages = ceil($total_orders / $limit);

// Lấy danh sách đơn hàng theo phân trang
$sql = "SELECT * FROM donhang ORDER BY id DESC LIMIT $limit OFFSET $offset";
$result = $link->query($sql);

// Cập nhật trạng thái đơn hàng
if (isset($_POST['update_status'])) {
    $id = (int)$_POST['id'];
    $trang_thai = $_POST['trang_thai'];

    $stmt = $link->prepare("UPDATE donhang SET trang_thai = ? WHERE id = ?");
    $stmt->bind_param("si", $trang_thai, $id);
    $stmt->execute();
    $stmt->close();

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    echo '<script>window.location.href = "quan_tri.php?p=danhsach_donhang&page=' . $page . '";</script>';
    exit; 
}

// Ngày hôm nay
$today = date('Y-m-d');
$month = date('m');
$year = date('Y');

// Đếm đơn hoàn thành trong ngày
$sql_ngay = "SELECT COUNT(*) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND DATE(ngaydat) = ?";
$stmt1 = $link->prepare($sql_ngay);
$stmt1->bind_param("s", $today);
$stmt1->execute();
$result1 = $stmt1->get_result()->fetch_assoc();
$don_ngay = $result1['total'];

// Đếm đơn hoàn thành trong tháng
$sql_thang = "SELECT COUNT(*) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND MONTH(ngaydat) = ? AND YEAR(ngaydat) = ?";
$stmt2 = $link->prepare($sql_thang);
$stmt2->bind_param("ii", $month, $year);
$stmt2->execute();
$result2 = $stmt2->get_result()->fetch_assoc();
$don_thang = $result2['total'];

// Đếm đơn hoàn thành trong năm
$sql_nam = "SELECT COUNT(*) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND YEAR(ngaydat) = ?";
$stmt3 = $link->prepare($sql_nam);
$stmt3->bind_param("i", $year);
$stmt3->execute();
$result3 = $stmt3->get_result()->fetch_assoc();
$don_nam = $result3['total'];

// Doanh thu ngày
$sql_doanhthu_ngay = "SELECT SUM(tongtien) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND DATE(ngaydat) = ?";
$stmt4 = $link->prepare($sql_doanhthu_ngay);
$stmt4->bind_param("s", $today);
$stmt4->execute();
$result4 = $stmt4->get_result()->fetch_assoc();
$doanhthu_ngay = $result4['total'] ?? 0;

// Doanh thu tháng
$sql_doanhthu_thang = "SELECT SUM(tongtien) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND MONTH(ngaydat) = ? AND YEAR(ngaydat) = ?";
$stmt5 = $link->prepare($sql_doanhthu_thang);
$stmt5->bind_param("ii", $month, $year);
$stmt5->execute();
$result5 = $stmt5->get_result()->fetch_assoc();
$doanhthu_thang = $result5['total'] ?? 0;

// Doanh thu năm
$sql_doanhthu_nam = "SELECT SUM(tongtien) as total FROM donhang WHERE trang_thai = 'hoàn thành' AND YEAR(ngaydat) = ?";
$stmt6 = $link->prepare($sql_doanhthu_nam);
$stmt6->bind_param("i", $year);
$stmt6->execute();
$result6 = $stmt6->get_result()->fetch_assoc();
$doanhthu_nam = $result6['total'] ?? 0;

?>



<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý đơn hàng</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
    .badge.cho {
    background-color: yellow;
    color: black;
    }
    .badge.xac-nhan {
        background-color: green;
        color: white;
        width: 100%;
    }
    .badge.dang-giao {
        background-color: blue;
        color: white;
        width: 100%;
    }
    .badge.hoan-thanh {
        background-color: lightgreen;
        color: black;
        width: 100%;
    }
    .badge.huy {
        background-color: red;
        color: white;
        width: 100%;
    }
    </style>
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="mb-4">Quản lý đơn hàng</h2>

    <table class="table table-bordered table-hover align-middle">
        <thead class="table-primary">
        <tr>
            <th>#ID</th>
            <th>Họ tên</th>
            <th>SĐT</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Thanh toán</th>
            <th>Tổng tiền</th>
            <th>Ngày đặt</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td style="color:#000"><?= $row['id'] ?></td>
                <td style="color:#000"><?= htmlspecialchars($row['hoten']) ?></td>
                <td style="color:#000"><?= htmlspecialchars($row['sdt']) ?></td>
                <td style="color:#000"><?= htmlspecialchars($row['email']) ?></td>
                <td style="color:#000"><?= htmlspecialchars($row['diachi']) ?></td>
                <td style="color:#000"><?= htmlspecialchars($row['thanhtoan']) ?></td>
                <td style="color:#000"><?= number_format($row['tongtien']) ?> đ</td>
                <td style="color:#000"><?= $row['ngaydat'] ?></td>
                <?php
                function khong_dau($str) {
                    $str = strtolower($str);
                    $str = preg_replace('/[áàảãạăắằẳẵặâấầẩẫậ]/u', 'a', $str);
                    $str = preg_replace('/[éèẻẽẹêếềểễệ]/u', 'e', $str);
                    $str = preg_replace('/[íìỉĩị]/u', 'i', $str);
                    $str = preg_replace('/[óòỏõọôốồổỗộơớờởỡợ]/u', 'o', $str);
                    $str = preg_replace('/[úùủũụưứừửữự]/u', 'u', $str);
                    $str = preg_replace('/[ýỳỷỹỵ]/u', 'y', $str);
                    $str = preg_replace('/đ/', 'd', $str);
                    $str = preg_replace('/[^a-z0-9]+/', '-', $str);
                    return trim($str, '-');
                }
                ?>
                <td>
                    <span class="badge <?= khong_dau($row['trang_thai']) ?>">
                        <?= htmlspecialchars($row['trang_thai']) ?>
                    </span>
                </td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <div class="d-flex flex-column gap-1 mt-2">
                            <select name="trang_thai" class="form-select form-control">
                                <option value="chờ" <?= $row['trang_thai'] == 'chờ' ? 'selected' : '' ?>>Chờ</option>
                                <option value="xác nhận" <?= $row['trang_thai'] == 'xác nhận' ? 'selected' : '' ?>>Xác nhận</option>
                                <option value="đang giao" <?= $row['trang_thai'] == 'đang giao' ? 'selected' : '' ?>>Đang giao</option>
                                <option value="hoàn thành" <?= $row['trang_thai'] == 'hoàn thành' ? 'selected' : '' ?>>Hoàn thành</option>
                                <option value="hủy" <?= $row['trang_thai'] == 'hủy' ? 'selected' : '' ?>>Hủy</option>
                            </select>
                            <button type="submit" name="update_status" class="btn btn-sm btn-primary mt-2">Cập nhật</button>
                            <a href="quan_tri.php?p=chitiet_donhang&id=<?= $row['id'] ?>" class="btn btn-sm btn-info mt-2">Chi tiết</a>
                            <a href="quan_tri.php?p=xoa_donhang&id=<?= $row['id'] ?>" class="btn btn-sm btn-danger mt-2" onclick="return confirm('Bạn chắc chắn muốn xóa đơn hàng này?')">Xóa</a>
                        </div>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
    <!-- PHÂN TRANG -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
    
    <div class="mt-4">
        <h4 style="color:blue">Thống kê đơn hoàn thành</h4>
        <ul class="list-group">
            <li class="list-group-item">Trong ngày hôm nay (<?= date('d/m/Y') ?>): <strong><?= $don_ngay ?></strong> đơn</li>
            <li class="list-group-item">Trong tháng <?= date('m/Y') ?>: <strong><?= $don_thang ?></strong> đơn</li>
            <li class="list-group-item">Trong năm <?= date('Y') ?>: <strong><?= $don_nam ?></strong> đơn</li>
        </ul>
    </div>
    <div class="mt-4">
        <h4 style="color:blue">Doanh thu</h4>
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Trong ngày hôm nay (<?= date('d/m/Y') ?>):</strong> 
                <?= $don_ngay ?> đơn | Doanh thu: <strong><?= number_format($doanhthu_ngay) ?> đ</strong>
            </li>
            <li class="list-group-item">
                <strong>Trong tháng <?= date('m/Y') ?>:</strong> 
                <?= $don_thang ?> đơn | Doanh thu: <strong><?= number_format($doanhthu_thang) ?> đ</strong>
            </li>
            <li class="list-group-item">
                <strong>Trong năm <?= date('Y') ?>:</strong> 
                <?= $don_nam ?> đơn | Doanh thu: <strong><?= number_format($doanhthu_nam) ?> đ</strong>
            </li>
        </ul>
    </div>

</div>
</body>
</html>