# 🛒 Hệ thống Đặt Hàng Không Cần Đăng Nhập

> Website đặt hàng đơn giản, hỗ trợ gửi email xác nhận cho khách và admin, quản lý đơn hàng không cần tài khoản người dùng.

## 🚀 Tính năng chính

- 🧾 Gửi email xác nhận đơn hàng bằng PHPMailer (khách + admin)
- 📦 Quản lý đơn hàng và chi tiết sản phẩm
- 🔍 Bộ lọc đơn hàng cho admin (tìm theo tên, SĐT, ngày, trạng thái)
- 💾 Lưu đơn hàng vào MySQL
- 📧 Form liên hệ gửi email

## 🛠️ Công nghệ sử dụng

- PHP (thuần)
- MySQL
- PHPMailer
- HTML, CSS, JavaScript
- PhpSpreadsheet (xuất Excel, không dùng Composer)

## ⚙️ Cài đặt

```bash
# Clone project
git clone https://github.com/Tungdevzxje/sushop.git
cd ten-repo

# Cấu hình
- Import file `database.sql` vào MySQL
- Sửa file cấu hình DB trong `config.php`
- Cấu hình SMTP trong `checkout.php` & `contact.php`
