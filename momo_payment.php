<?php
// momo_payment.php
$orderId = time();
$orderInfo = "Thanh toán đơn hàng #$orderId tại SU SHOP";
$amount = $_GET['amount'] ?? 10000; // số tiền cần thanh toán
$redirectUrl = "http://localhost/dongphuc/thankyou_momo.php";
$ipnUrl = "http://localhost/dongphuc/ipn_momo.php";
$extraData = ""; // thông tin thêm

$partnerCode = "MOMOxxxx";
$accessKey = "xxxx";
$secretKey = "xxxx";
$requestId = time();
$requestType = "captureWallet";

// Tạo chuỗi raw để ký
$rawHash = "accessKey=$accessKey&amount=$amount&extraData=$extraData&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$requestId&requestType=$requestType";

// Ký bằng HMAC SHA256
$signature = hash_hmac("sha256", $rawHash, $secretKey);

// Tạo mảng gửi sang Momo
$data = [
    'partnerCode' => $partnerCode,
    'accessKey' => $accessKey,
    'requestId' => $requestId,
    'amount' => $amount,
    'orderId' => $orderId,
    'orderInfo' => $orderInfo,
    'redirectUrl' => $redirectUrl,
    'ipnUrl' => $ipnUrl,
    'extraData' => $extraData,
    'requestType' => $requestType,
    'signature' => $signature,
    'lang' => 'vi'
];

// Gửi bằng curl
$ch = curl_init('https://test-payment.momo.vn/v2/gateway/api/create');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$result = curl_exec($ch);
$res = json_decode($result, true);

// Redirect đến Momo
if (isset($res['payUrl'])) {
    header('Location: ' . $res['payUrl']);
    exit;
} else {
    echo "Không thể kết nối Momo: ";
    print_r($res);
}
