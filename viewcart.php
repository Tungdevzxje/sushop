<?php
session_start();
require('db.php');

// Hàm tính tổng số lượng sản phẩm trong giỏ hàng
function getCartCount()
{
    return isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'quantity')) : 0;
}

// Xử lý cập nhật giỏ hàng (tăng, giảm, xóa)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        $id = $_POST['id'];
        switch ($_POST['action']) {
            case 'increase':
                $_SESSION['cart'][$id]['quantity']++;
                break;
            case 'decrease':
                $_SESSION['cart'][$id]['quantity']--;
                if ($_SESSION['cart'][$id]['quantity'] <= 0) {
                    unset($_SESSION['cart'][$id]); // Xóa nếu số lượng về 0
                }
                break;
            case 'remove':
                unset($_SESSION['cart'][$id]); // Xóa sản phẩm khỏi giỏ
                break;
        }
    }
}

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

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        img {
            width: 50px;
        }

        .btn {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        .btn-increase {
            background: green;
            color: white;
        }

        .btn-decrease {
            background: orange;
            color: white;
        }

        .btn-remove {
            background: red;
            color: white;
        }

        .btn-checkout {
            background: blue;
            color: white;
            padding: 10px;
            font-size: 16px;
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h2>Giỏ hàng của bạn</h2>

    <?php if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])): ?>
        <p>Giỏ hàng trống.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thao tác</th>
            </tr>
            <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                <tr>
                    <td><img src="<?= $item['hinhanh']; ?>" alt="<?= $item['tieude']; ?>"></td>
                    <td><?= $item['tieude']; ?></td>
                    <td><?= number_format($item['giaban']); ?> đ</td>
                    <td><?= $item['quantity']; ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?= $id; ?>">
                            <button type="submit" name="action" value="increase" class="btn btn-increase">+</button>
                            <button type="submit" name="action" value="decrease" class="btn btn-decrease">-</button>
                            <button type="submit" name="action" value="remove" class="btn btn-remove">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h3>Tổng tiền: <?= number_format(getTotalPrice()); ?> đ</h3>
        <a href="checkout.php" class="btn-checkout">Thanh toán</a>

    <?php endif; ?>

</body>

</html>