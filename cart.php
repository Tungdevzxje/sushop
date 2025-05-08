<?php
session_start();
require('db.php');

// Hàm thêm sản phẩm vào giỏ hàng
function addToCart($product)
{
    $id = $product['id'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$id] = [
            'tieude' => $product['tieude'],
            'hinhanh' => $product['hinhanh'],
            'giaban' => $product['giaban'],
            'quantity' => 1
        ];
    }
}

// Xử lý thêm sản phẩm vào giỏ hàng
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $product = [
        'id' => $_POST['id'],
        'tieude' => $_POST['tieude'],
        'hinhanh' => $_POST['hinhanh'],
        'giaban' => $_POST['giaban']
    ];
    addToCart($product);
    header('Location: index.php');
    exit();
}
