<?php
session_start();
require('db.php');

// Kiểm tra đăng nhập
if (!isset($_SESSION['user_id'])) {
    header("Location: dangnhap.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$query = $link->prepare("SELECT * FROM donhang WHERE user_id = ? ORDER BY id DESC");
$query->bind_param("i", $user_id);
$query->execute();
$result = $query->get_result();
?>

    <style>

        h2 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            border-radius: 6px;
            overflow: hidden;
        }

        .order-table th,
        .order-table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        .order-table th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        .order-table td {
            color: #333;
        }

        .order-table tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsive cho điện thoại */
        @media (max-width: 768px) {
            .order-table thead {
                display: none;
            }

            .order-table tr {
                display: block;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 10px;
                background-color: white;
            }

            .order-table td {
                display: flex;
                justify-content: space-between;
                padding: 8px 10px;
                border: none;
                border-bottom: 1px solid #eee;
            }

            .order-table td:last-child {
                border-bottom: none;
            }

            .order-table td::before {
                content: attr(data-label);
                font-weight: bold;
                color: #555;
            }
        }
    </style>


<h2 style="padding-top: 100px;">Lịch sử đơn hàng của bạn</h2>

<table class="order-table" style=" margin-bottom:30px">
    <thead>
        <tr>
            <th>Mã đơn</th>
            <th>Ngày đặt</th>
            <th>Thanh toán</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()){ ?>
            <tr>
                <td data-label="Mã đơn">#<?= $row['id'] ?></td>
                <td data-label="Ngày đặt"><?= $row['ngaydat'] ?></td>
                <td data-label="Thanh toán"><?= $row['thanhtoan'] ?></td>
                <td data-label="Tổng tiền"><?= number_format($row['tongtien']) ?> đ</td>
                <td data-label="Trạng thái"><?= $row['trang_thai'] ?? 'Chờ xử lý' ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>


