-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 08, 2025 lúc 05:27 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `maydo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_donhang`
--

CREATE TABLE `chitiet_donhang` (
  `id` int(11) NOT NULL,
  `donhang_id` int(11) DEFAULT NULL,
  `tieude` varchar(255) DEFAULT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `giaban` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_donhang`
--

INSERT INTO `chitiet_donhang` (`id`, `donhang_id`, `tieude`, `hinhanh`, `giaban`, `quantity`) VALUES
(1, 1, 'Quần Tây Nữ Đồng Phục Cấp 3 Màu Xanh Đen', 'HinhCTSP/HinhSanPham/quantaynu1.jpg', 200000, 1),
(2, 2, 'Quần Tây Nữ Đồng Phục Cấp 3 Màu Xanh Đen', 'HinhCTSP/HinhSanPham/quantaynu1.jpg', 200000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `thuocloai` int(11) NOT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noibat` int(3) NOT NULL,
  `tieude_en` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doi_tac`
--

CREATE TABLE `doi_tac` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doi_tac`
--

INSERT INTO `doi_tac` (`id`, `hinhanh`, `mota`, `tieude`) VALUES
(29, 'doitac6.png', '', ''),
(23, 'doitac5.png', '', ''),
(24, 'doitac001.png', '', ''),
(26, 'doitac4.png', '', ''),
(27, 'doitac3.png', '', ''),
(28, 'doitac.png', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `diachi` text DEFAULT NULL,
  `ghichu` text DEFAULT NULL,
  `thanhtoan` varchar(50) DEFAULT NULL,
  `tongtien` int(11) DEFAULT NULL,
  `ngaydat` datetime DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `trang_thai` varchar(50) DEFAULT 'Chờ xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `hoten`, `sdt`, `email`, `diachi`, `ghichu`, `thanhtoan`, `tongtien`, `ngaydat`, `user_id`, `trang_thai`) VALUES
(1, 'tùng', '0987678876', 'tungtapd09419@fpt.êdu.vn', 'quảng nam', 'ok', 'Thanh toán khi nhận hàng', 200000, '2025-05-08 10:02:05', NULL, 'Chờ xử lý'),
(2, 'tùng', '0987678876', 'trananhtung77@gmail.com', 'quang nam', 'ok', 'Thanh toán khi nhận hàng', 200000, '2025-05-08 10:03:26', NULL, 'xác nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `du_an`
--

CREATE TABLE `du_an` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `tieude` text NOT NULL,
  `mota` text NOT NULL,
  `noidung` text NOT NULL,
  `tieude_en` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `du_an`
--

INSERT INTO `du_an` (`id`, `hinhanh`, `tieude`, `mota`, `noidung`, `tieude_en`) VALUES
(14, 'KH.png', 'Chị Ngọc Trinh', 'Giải pháp tối ưu về chi phí, đảm bảo chất lượng và hiệu suất vượt trội.', '', 'Nhân Viên'),
(21, 'KH.png', 'Anh Nam Hải', 'Hỗ trợ nhanh chóng, bảo trì định kỳ hiệu quả, hệ thống luôn vận hành ổn định.', '', 'chủ doanh nghiệp'),
(15, 'KH.png', 'Chị Thu Hà', 'Đội ngũ kỹ thuật viên tận tâm, giàu kinh nghiệm, mang đến sự hài lòng tuyệt đối.', '', 'quản lý dự án'),
(20, 'KH.png', 'Anh Hoàng Minh', 'Dịch vụ chuyên nghiệp, hoàn thành đúng tiến độ, đáp ứng mọi yêu cầu.', '', 'giám đốc kĩ thuật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `du_lieu_1_tin`
--

CREATE TABLE `du_lieu_1_tin` (
  `id` int(11) NOT NULL,
  `noidung_en` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `du_lieu_1_tin`
--

INSERT INTO `du_lieu_1_tin` (`id`, `noidung_en`, `noidung`) VALUES
(1, 'tuyển dụng tiếng anh<br />', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465.63799566354777!2d108.20911908202152!3d16.05210562648356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b9947aa77f%3A0x6a97c7be14f57ee!2zODgsIDk5IE5ndXnhu4VuIEjhu691IFRo4buNLCBIw7JhIFRodeG6rW4gVMOieSwgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1596514489049!5m2!1svi!2s\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>'),
(2, '<img width=\"271\" height=\"380\" src=\"/hinhanh_fckeditor/hinh2.png\" alt=\"\" />', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.3975560295244!2d108.4845657146773!3d15.570393889190814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169dce63bac4bef%3A0x32f57fbd646311e6!2zOTUgUGhhbiBDaMOidSBUcmluaCwgUGjGsOG7m2MgSMOyYSwgVHAuIFRhbSBL4buzLCBRdeG6o25nIE5hbSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2sin!4v1509351944162\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>'),
(3, 'bản đồ tiếng anh<br />', '<div class=\"product-other-li\"><font face=\"Arial\" size=\"3\"><b>Hướng dẫn mua h&agrave;ng</b></font></div>'),
(4, '<div style=\"text-align: left;\"><img width=\"180\" height=\"176\" align=\"left\" alt=\"\" src=\"/demo1/tinhchi/hinhanh_fckeditor/truonglong(2).png\" style=\"MARGIN-RIGHT: 10px\" /><span style=\"font-size: larger;\"><span lang=\"en\" id=\"result_box\"><span style=\"font-family: Times New Roman;\"><span title=\"Trước hết, C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long xin gửi đến qu&yacute; kh&aacute;ch h&agrave;ng lời ch&agrave;o tr&acirc;n trọng.\">First of all, XLSX &amp; Co. Long TMDV School would like to send greetings customers.<br />\r\n<br />\r\n</span><span title=\"Được th&agrave;nh lập v&agrave;o năm 2004, C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long tự h&agrave;o l&agrave; một trong những c&ocirc;ng ty ng&agrave;y c&agrave;ng lớn mạnh trong lĩnh vực thi c&ocirc;ng x&acirc;y dựng c&ocirc;ng tr&igrave;nh, kinh doanh vật tư, thiết bị ng&agrave;nh Viễn th&ocirc;ng\">Established  in 2004, Trading and Service Co., XLSX &amp; Long School boasts one of  the growing company in the field of building construction, business  supplies and equipment Telecommunications Sector<br />\r\n<br />\r\n</span><span title=\"Qua 6 năm hoạt động v&agrave; ph&aacute;t triển, c&ocirc;ng ty đ&atilde; đạt được những th&agrave;nh tựu đ&aacute;ng kh&iacute;ch lệ, tạo dựng mối quan hệ l&acirc;u d&agrave;i, bền vững v&agrave; uy t&iacute;n với kh&aacute;ch h&agrave;ng v&agrave; đối t&aacute;c.\">Over  6 years of operation and development, the company has made encouraging  achievements, building long-term relationships, sustainability and  credibility with customers and partners. </span><span title=\"Từ nhiều năm nay, C&ocirc;ng ty Trường Long đ&atilde; v&agrave; đang nỗ lực kh&ocirc;ng ngừng để cải thiện cơ sở vật chất, chất lượng sản phẩm do c&ocirc;ng ty gia c&ocirc;ng sản xuất, c&ocirc;ng tr&igrave;nh thi c&ocirc;ng v&agrave; c&aacute;c sản phẩm thương mại ng&agrave;nh viễn th&ocirc;ng nhằm\">For  years, Long Truong has been constant efforts to improve facilities,  product quality by outsourcing manufacturing companies, construction  projects and commercial products for the telecommunications industry </span><span title=\"đ&aacute;p ứng nhu cầu ng&agrave;y c&agrave;ng cao của kh&aacute;ch h&agrave;ng.\">meet the increasing demands of customers.<br />\r\n<br />\r\n</span><span title=\"C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long với đội ngũ nh&acirc;n vi&ecirc;n gi&agrave;u kinh nghiệm, nhiệt t&igrave;nh v&agrave; chuy&ecirc;n nghiệp lu&ocirc;n đem đến cho kh&aacute;ch h&agrave;ng cảm gi&aacute;c h&agrave;i l&ograve;ng v&agrave; tin cậy khi thi c&ocirc;ng c&ocirc;ng tr&igrave;nh v&agrave; mua sản phẩm của ch&uacute;ng t&ocirc;i.\">XLSX  &amp; Trading and Service Co., Ltd. Long School with a staff of  experienced, enthusiastic and professional customer always brings  satisfaction and confidence when construction works and purchase of our  products. </span><span title=\"Lấy lợi &iacute;ch v&agrave; sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng l&agrave;m ti&ecirc;u ch&iacute; hoạt động.\">Get the benefits and satisfaction of customer performance criteria.<br />\r\n<br />\r\n</span><span title=\"Với định hướng v&agrave; chiến lược đ&uacute;ng đắn, C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long đang dần khẳng định chỗ đứng của m&igrave;nh tr&ecirc;n lĩnh vực x&acirc;y dựng thi c&ocirc;ng c&ocirc;ng tr&igrave;nh, kinh doanh sắt th&eacute;p x&acirc;y dựng v&agrave; c&aacute;c sản phẩm ng&agrave;nh Viễn th&ocirc;ng.\">With  the right strategy and direction, XLSX &amp; Co. Long TMDV School has  gradually asserted its position in the field of building construction,  steel construction business and Telecommunication products.<br />\r\n</span></span><span title=\"Với định hướng v&agrave; chiến lược đ&uacute;ng đắn, C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long đang dần khẳng định chỗ đứng của m&igrave;nh tr&ecirc;n lĩnh vực x&acirc;y dựng thi c&ocirc;ng c&ocirc;ng tr&igrave;nh, kinh doanh sắt th&eacute;p x&acirc;y dựng v&agrave; c&aacute;c sản phẩm ng&agrave;nh Viễn th&ocirc;ng.\"><br />\r\n</span></span></span></div>\r\n<div style=\"text-align: center;\"><span style=\"font-size: larger;\"><span lang=\"en\" id=\"result_box\"><span title=\"Với định hướng v&agrave; chiến lược đ&uacute;ng đắn, C&ocirc;ng ty TNHH XLSX &amp; TMDV Trường Long đang dần khẳng định chỗ đứng của m&igrave;nh tr&ecirc;n lĩnh vực x&acirc;y dựng thi c&ocirc;ng c&ocirc;ng tr&igrave;nh, kinh doanh sắt th&eacute;p x&acirc;y dựng v&agrave; c&aacute;c sản phẩm ng&agrave;nh Viễn th&ocirc;ng.\"><br />\r\n</span><span title=\"TỔNG SỐ LAO ĐỘNG HIỆN C&Oacute; : 115 người\">LABOR IS TOTAL: 115<br />\r\n</span><span title=\"- Nh&acirc;n sự khối quản l&yacute; : 20 người trong đ&oacute; :\">- Personnel management blocks: 20 people, including:<br />\r\n</span><span title=\"o Tr&igrave;nh độ đại học : 17 người\">o University degree: 17<br />\r\n</span><span title=\"o Tr&igrave;nh độ cao đẳng : 3 người\">o College Level: 3 people<br />\r\n</span><span title=\"- Nh&acirc;n sự khối sản xuất : 30 người trong đ&oacute; :\">- Personnel mass production: 30 people, including:<br />\r\n</span><span title=\"o Tr&igrave;nh độ đại học : 25 người\">o University degree: 25<br />\r\n</span><span title=\"o Tr&igrave;nh độ cao đẳng : 5 người\">o College Level: 5 people<br />\r\n</span><span title=\"- C&ocirc;ng nh&acirc;n l&agrave;nh nghề : 65 người\">- Skilled workers: 65</span></span></span></div>', '&nbsp;\r\n<div style=\"text-align: center;\"><img src=\"/demo1/tinhchi/hinhanh_fckeditor/Mitsubishi Mirage CVT.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br />\r\n<br />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE MIRAGE TẠI MITSUBISHI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n<br />\r\n<table width=\"90%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><span style=\"color: rgb(0, 0, 0);\"><strong><span style=\"font-size: medium;\">&nbsp;Phi&ecirc;n bản</span></strong></span></td>\r\n            <td style=\"text-align: center;\">&nbsp;<br />\r\n            <strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">Gi&aacute; đặc biệt th&aacute;ng 12<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><br />\r\n            &nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">MT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\">&nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">350.500.000</b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><br />\r\n            &nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">CVT Eco<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\">&nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">395.500.000</b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><br />\r\n            &nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">CVT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\">&nbsp;<b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">450.500.000</b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div style=\"text-align: center;\">&nbsp;</div>\r\n<div style=\"text-align: center;\"><span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\">Đơn vị gi&aacute;: VNĐ</span>&nbsp;</div>\r\n&nbsp;\r\n<div style=\"text-align: center;\"><img src=\"/demo1/tinhchi/hinhanh_fckeditor/Attrage CVT.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br />\r\n<br />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE ATTRAGE TẠI MITSUBISHI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n<table width=\"90%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            Phi&ecirc;n bản<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">Gi&aacute; đặc biệt Th&aacute;ng 12</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            MT Eco<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">375<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">.500.000</strong></b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            MT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">405<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">.500.000</strong></b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            CVT&nbsp;</b><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">Eco<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">425<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">.500.000</strong></b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            CVT&nbsp;<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">475<b>.500.000</b></strong></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div style=\"text-align: center;\"><span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\"><br />\r\nĐơn vị gi&aacute;: VNĐ</span>&nbsp;<br />\r\n<br />\r\n<br />\r\n<div><img src=\"/demo1/tinhchi/hinhanh_fckeditor/Outlander 2_4 CVT.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br style=\"text-align: start;\" />\r\n<br style=\"text-align: start;\" />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE OUTLANDER TẠI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n<table width=\"90%\" border=\"1\" cellpadding=\"0\" cellspacing=\"1\" align=\"center\">\r\n    <tbody>\r\n        <tr>\r\n            <td><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">\r\n            <div style=\"text-align: center;\"><br />\r\n            Phi&ecirc;n bản</div>\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">Gi&aacute; c&ocirc;ng bố</strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">Gi&aacute; đặc biệt th&aacute;ng 12</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            CVT 2.0<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">823.000.000</strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">807.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            CVT 2.0 Premium<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">942.000.000</strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">908.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            CVT 2.4 Premium<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">1.100.000.000</strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">1.048.500.000</strong></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div><span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\">Đơn vị gi&aacute;: VNĐ</span>&nbsp;<br />\r\n<br />\r\n<div><img src=\"/demo1/tinhchi/hinhanh_fckeditor/Pajero Sport 2018.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br style=\"text-align: start;\" />\r\n<br style=\"text-align: start;\" />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE PAJERO SPORT TẠI MITSUBISHI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n</div>\r\n<table width=\"90%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><span style=\"font-size: medium;\"><strong><br />\r\n            Phi&ecirc;n bản<br />\r\n            <br type=\"_moz\" />\r\n            </strong></span></td>\r\n            <td style=\"text-align: center;\"><span style=\"font-size: large;\">Gi&aacute; b&aacute;n lẻ th&aacute;ng 12</span></td>\r\n        </tr>\r\n        <tr>\r\n            <td>\r\n            <div style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            DIESEL 4&times;2 AT&nbsp;(mới)<br />\r\n            <br type=\"_moz\" />\r\n            </b></div>\r\n            </td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">1.062.<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">000.000</strong></b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            GASOLINE 4&times;2 AT (mới)<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">1.092.000.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\"><br />\r\n            GASOLINE 4&times;4 AT<br />\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">1.182.000.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            GASOLINE 4&times;2 AT PREMIUM<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">1.160<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">.000.000</strong></b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            GASOLINE 4&times;4 AT&nbsp;PREMIUM<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">1.250<strong style=\"border: 0px; font-family: inherit; font-style: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">.000.000</strong></b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div style=\"text-align: right;\"><span style=\"text-align: start;\">&nbsp;</span><br />\r\n<div style=\"text-align: center;\"><span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\">Đơn vị gi&aacute;: VNĐ</span>&nbsp;</div>\r\n<span style=\"text-align: start;\">&nbsp;</span>\r\n<div style=\"text-align: center;\"><img src=\"/demo1/tinhchi/hinhanh_fckeditor/TRITON 4&times;2 AT.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br style=\"text-align: start;\" />\r\n<br style=\"text-align: start;\" />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE TRITON TẠI MITSUBISHI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s; text-align: center;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n<div style=\"text-align: center;\">&nbsp;</div>\r\n<table width=\"90%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><span style=\"font-size: larger;\"><strong><br />\r\n            Phi&ecirc;n bản<br />\r\n            <br type=\"_moz\" />\r\n            </strong></span></td>\r\n            <td style=\"text-align: center;\"><span style=\"font-size: medium;\"><strong>Gi&aacute; Đặc Biệt Th&aacute;ng 12</strong></span></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4&times;4.AT MIVEC<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">&nbsp;770.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4X2.AT ATHLETE<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">725.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4&times;2.AT MIVEC<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">685.5</strong><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">0</strong><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">0.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4&times;4.MT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">646.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4&times;2.AT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">586.500.000</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            4&times;2.MT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">555.500.000</strong></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div style=\"text-align: center;\"><br />\r\n<br />\r\n<div><span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\">Đơn vị gi&aacute;: VNĐ</span>&nbsp;</div>\r\n<span style=\"text-align: start;\">&nbsp;</span>\r\n<div><img src=\"/demo1/tinhchi/hinhanh_fckeditor/Xpander AT.gif\" width=\"490\" height=\"257\" alt=\"\" /></div>\r\n<br style=\"text-align: start;\" />\r\n<br style=\"text-align: start;\" />\r\n<h3 class=\"price-title\" style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\"><span style=\"color: rgb(255, 0, 0);\">GI&Aacute; XE ALL NEW XPANDER TẠI MITSUBISHI QUẢNG NAM</span></h3>\r\n<h3 style=\"border: 0px; font-family: Montserrat, Helvetica, Arial; font-size: 20px; margin: 0px 0px 0.8em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(58, 57, 57); line-height: 1.8; transition: all 0.3s ease 0s;\">CHI TIẾT SẢN PHẨM&nbsp;|&nbsp;Y&Ecirc;U CẦU B&Aacute;O GI&Aacute;&nbsp;|&nbsp;ĐĂNG K&Yacute; L&Aacute;I THỬ&nbsp;</h3>\r\n<div>&nbsp;</div>\r\n<table width=\"90%\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">\r\n            <div style=\"text-align: center;\"><br />\r\n            Phi&ecirc;n bản</div>\r\n            <br type=\"_moz\" />\r\n            </strong></td>\r\n            <td style=\"text-align: center;\"><strong style=\"border: 0px; font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(118, 118, 118); text-align: center;\">Gi&aacute; b&aacute;n lẻ th&aacute;ng 12</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            Xpander MT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">550.000.000</b></td>\r\n        </tr>\r\n        <tr>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\"><br />\r\n            Xpander AT<br />\r\n            <br type=\"_moz\" />\r\n            </b></td>\r\n            <td style=\"text-align: center;\"><b style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px; text-align: center;\">620.000.000</b></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<div><br />\r\n<span style=\"color: rgb(118, 118, 118); font-family: &quot;Source Sans Pro&quot;, sans-serif; font-size: 16px;\">Đơn vị gi&aacute;: VNĐ</span>&nbsp;<br />\r\n<br />\r\n&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>'),
(8, 'nh&acirc;t an en<br />', '<font face=\"Arial\"><span style=\"line-height: 18px;\">hướng dẫn thanh to&aacute;n</span></font>'),
(5, '<input width=\"108\" type=\"image\" height=\"496\" src=\"http://localhost/hinhanh_fckeditor/image/lien8.gif\" />', '<iframe width=\"218\" height=\"218\" frameborder=\"0\" src=\"http://www.youtube.com/embed/EMrn_IcEYjo\" allowfullscreen=\"\"></iframe><br />\r\n<br />\r\n<iframe width=\"218\" height=\"218\" src=\"http://www.youtube.com/embed/YTS-0b0-sVw\" frameborder=\"0\" allowfullscreen></iframe>'),
(6, 'co lenen<br />\r\n<div id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', '<iframe width=\"100%\" height=\"350\" src=\"https://www.youtube.com/embed/6s5L3nLs1VA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');
INSERT INTO `du_lieu_1_tin` (`id`, `noidung_en`, `noidung`) VALUES
(9, 'Hỗ trợ', '<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><strong>GIAO NHẬN H&Agrave;NG</strong></span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">1. Khi n&agrave;o th&igrave; t&ocirc;i nhận được h&agrave;ng?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Th&ocirc;ng thường&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;sẽ giao h&agrave;ng cho bạn trong khoảng từ 2 đến 6 ng&agrave;y l&agrave;m việc kể từ khi bạn đăng k&yacute; mua (địa chỉ giao h&agrave;ng tại c&aacute;c quận c&agrave;ng gần trung t&acirc;m th&igrave; thời gian giao <br />\r\n<br />\r\nh&agrave;ng sẽ c&agrave;ng ngắn). Tuy nhi&ecirc;n, cũng c&oacute; trường hợp việc giao h&agrave;ng k&eacute;o d&agrave;i hơn 6 ng&agrave;y l&agrave;m việc, <br />\r\n<br />\r\nnhưng chỉ xảy ra trong những t&igrave;nh huống bất khả kh&aacute;ng sau:</span></span></p>\r\n<ul type=\"disc\" style=\"list-style: none; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\">\r\n    <li class=\"MsoNormal\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Nh&acirc;n vi&ecirc;n&nbsp;<a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a>&nbsp;li&ecirc;n lạc với bạn qua điện thoại kh&ocirc;ng được n&ecirc;n kh&ocirc;ng thể giao h&agrave;ng.</span></span></li>\r\n    <li class=\"MsoNormal\">&nbsp;</li>\r\n    <li class=\"MsoNormal\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Địa chỉ giao h&agrave;ng bạn cung cấp kh&ocirc;ng ch&iacute;nh x&aacute;c hoặc kh&oacute; t&igrave;m.</span></span></li>\r\n    <li class=\"MsoNormal\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Số lượng đơn h&agrave;ng của&nbsp;<a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a>&nbsp;tăng đột biến khiến đội giao nhận tăng theo chưa kịp.</span></span></li>\r\n    <li class=\"MsoNormal\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Đối t&aacute;c cung cấp h&agrave;ng cho&nbsp;<font color=\"#ff0000\"><b><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-weight: normal; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a>&nbsp;</b></font>chậm hơn dự kiến khiến việc giao h&agrave;ng bị chậm lại.</span></span></li>\r\n</ul>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">2. Ph&iacute; giao h&agrave;ng l&agrave; bao nhi&ecirc;u?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\"><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); text-align: justify; font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a>\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;giao h&agrave;ng&nbsp;<span style=\"color: black;\">miễn ph&iacute;</span>&nbsp;hoặc c&oacute; ph&iacute; t&ugrave;y theo deal (</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><font color=\"#ff0000\"><b>&nbsp;</b></font><i>sẽ c&oacute; th&ocirc;ng b&aacute;o cụ thể ở phần chi tiết trong mỗi deal</i>). Việc t&iacute;nh phụ ph&iacute; giao h&agrave;ng được hiểu để hỗ trợ t&agrave;i ch&iacute;nh cho nh&acirc;n vi&ecirc;n giao nhận. Phụ ph&iacute; giao h&agrave;ng sẽ được<font color=\"#ff0000\"><b>&nbsp;</b></font></span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;t&iacute;nh to&aacute;n v&agrave; b&aacute;o cho bạn biết ngay thời điểm bạn đăng k&yacute; mua h&agrave;ng.</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">3. L&agrave;m sao t&ocirc;i theo d&otilde;i đơn h&agrave;ng?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Bạn c&oacute; thể v&agrave;o xem đơn h&agrave;ng đ&atilde; đăng k&yacute; tại&nbsp;</span></span><a href=\"http://hangquocte.com/\"><span style=\"font-size: medium;\">http://hangquocte.com</span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;Tại đ&acirc;y, bạn sẽ biết được <br />\r\n<br />\r\ntrạng th&aacute;i đơn h&agrave;ng của m&igrave;nh.</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">4. Tại sao trạng th&aacute;i giao h&agrave;ng l&agrave; &quot;Đ&atilde; giao&quot; m&agrave; t&ocirc;i vẫn chưa nhận được h&agrave;ng?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"font-weight: normal;\">Bạn n&ecirc;n kiểm tra xem c&oacute; ai đ&oacute; đ&atilde; nhận h&agrave;ng gi&uacute;p bạn kh&ocirc;ng (đồng nghiệp, người nh&agrave;, bạn b&egrave;, <br />\r\n<br />\r\nh&agrave;ng x&oacute;m, v.v&hellip;). Nếu vẫn chưa t&igrave;m ra, bạn vui l&ograve;ng li&ecirc;n hệ số hotline: </span>0935.650057&nbsp;<span style=\"font-weight: normal;\">để th&ocirc;ng b&aacute;o cho&nbsp;</span></span></span><a href=\"http://hangquocte.com/\" style=\"font-weight: normal; margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-weight: normal; font-size: medium;\"><span style=\"font-family: Arial;\">.</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">5. Tại sao trạng th&aacute;i đơn h&agrave;ng của t&ocirc;i l&agrave; &quot;Chưa giao được&quot; hoặc &quot;Kh&ocirc;ng giao được&quot;?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Khi&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;giao h&agrave;ng cho bạn kh&ocirc;ng th&agrave;nh c&ocirc;ng, đơn h&agrave;ng của bạn sẽ được trả về v&agrave; ghi nhận l&agrave; &quot;Chưa giao được&quot;. L&yacute; do phổ biến nhất của việc n&agrave;y l&agrave; do nh&acirc;n vi&ecirc;n&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;kh&ocirc;ng thể li&ecirc;n lạc được với bạn qua điện thoại để hẹn thời gian giao h&agrave;ng.&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;sẽ tiến h&agrave;nh giao lại cho bạn th&ecirc;m 1 lần nữa. Nếu vẫn kh&ocirc;ng th&agrave;nh c&ocirc;ng, đơn h&agrave;ng sẽ được chuyển th&agrave;nh trạng th&aacute;i &quot;Kh&ocirc;ng giao được&quot;. Nếu bạn vẫn muốn nhận <br />\r\n<br />\r\nh&agrave;ng, bạn cần phải đăng k&yacute; mua lại.</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">6. Trạng th&aacute;i đơn h&agrave;ng của t&ocirc;i l&agrave; &quot;Đang giao&quot;, khi n&agrave;o t&ocirc;i nhận được h&agrave;ng?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Trạng th&aacute;i &quot;Đang giao&quot; c&oacute; nghĩa l&agrave; đơn h&agrave;ng đang được nh&acirc;n vi&ecirc;n&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;đi giao. Bạn sẽ nhận được h&agrave;ng trong v&ograve;ng 48 tiếng. (lưu &yacute;: đừng qu&ecirc;n mang theo điện thoại để nh&acirc;n vi&ecirc;n&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;c&oacute; thể li&ecirc;n hệ giao h&agrave;ng).</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">7. T&ocirc;i c&oacute; đặt nhiều h&agrave;ng c&ugrave;ng thời điểm, tất cả c&oacute; được giao c&ugrave;ng l&uacute;c?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\"><span style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(0, 0, 255); text-align: justify; font-family: Arial; font-size: medium; line-height: 48px;\"><strong style=\"margin: 0px; padding: 0px;\"><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); text-align: justify; font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"color: rgb(0, 0, 255);\">hangquocte.com</span></a>&nbsp;</strong></span><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; text-align: justify; font-size: medium;\"><span style=\"font-family: Arial;\">sẽ cố gắng gom tất cả đơn h&agrave;ng của bạn để giao c&ugrave;ng l&uacute;c. Tuy nhi&ecirc;n nếu sản phẩm n&agrave;o chưa c&oacute; h&agrave;ng th&igrave;&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"text-align: justify; margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; text-align: justify; font-size: medium;\"><span style=\"font-family: Arial;\"><font color=\"#ff0000\"><b>&nbsp;</b></font>sẽ t&aacute;ch ra để c&oacute; thể giao những sản phẩm c&ograve;n lại cho bạn c&agrave;ng sớm c&agrave;ng tốt.</span></span><strong style=\"color: rgb(0, 0, 255); font-family: Arial; font-size: medium; line-height: 48px; text-align: justify; margin: 0px; padding: 0px;\">&nbsp;<br />\r\n</strong><span style=\"font-family: Tahoma; font-size: medium;\"><span style=\"font-family: Arial;\">8. Phạm vi giao h&agrave;ng của&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-family: Tahoma; font-size: medium;\"><span style=\"font-family: Arial;\"><strong>&nbsp;</strong>l&agrave; những địa b&agrave;n n&agrave;o?</span></span></h1>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">Hiện tại,&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;c&oacute; thể giao h&agrave;ng tại c&aacute;c địa b&agrave;n sau:</span></span></p>\r\n<ul type=\"disc\" style=\"list-style: none; margin: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\">\r\n    <li class=\"MsoNormal\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><strong>HCM</strong>: Quận 1, 2, 3, 4, 5, 7, 8, 10, Quận T&acirc;n B&igrave;nh, Quận B&igrave;nh Thạnh, Quận Ph&uacute; Nhuận.</span></span></li>\r\n</ul>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><br />\r\nC&aacute;c khu vực c&ograve;n lại như:</span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n&nbsp; - Quận Thủ Đức: gồm c&aacute;c phường Linh Trung, Linh Chiểu, Linh Xu&acirc;n, B&igrave;nh Chiểu, Tam <br />\r\n<br />\r\nB&igrave;nh.</span></span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n&nbsp; - Quận 2: phường C&aacute;t L&aacute;i</span></span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp; &nbsp; &nbsp; &nbsp; <br />\r\n&nbsp; - Quận 6: Đường Hậu Giang, Metro B&igrave;nh Ph&uacute;</span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n&nbsp; - Quận 8: gồm phường 15 v&agrave; 16</span></span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\n&nbsp;&nbsp; - C&aacute;c Quận/ Huyện Củ Chi, H&oacute;c M&ocirc;n, B&igrave;nh Ch&aacute;nh, Quận 9, Nh&agrave; B&egrave;.<br />\r\n&nbsp; &nbsp; <br />\r\n&nbsp; &nbsp; &nbsp; - C&aacute;c tỉnh: B&igrave;nh Dương, Đồng Nai</span></span></span></p>\r\n<p style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\"><br />\r\nCh&uacute;ng t&ocirc;i sẽ giao h&agrave;ng đến tận tay qu&yacute; kh&aacute;ch v&agrave;o ng&agrave;y h&ocirc;m sau kể từ khi qu&yacute; kh&aacute;ch gửi đơn <br />\r\n<br />\r\nh&agrave;ng cho ch&uacute;ng t&ocirc;i v&igrave; l&yacute; do khoảng c&aacute;ch. Rất mong qu&yacute; kh&aacute;ch th&ocirc;ng cảm v&agrave; giữ li&ecirc;n lạc bằng điện <br />\r\n<br />\r\nthoại để nh&acirc;n vi&ecirc;n của ch&uacute;ng t&ocirc;i thuận lợi trong việc giao h&agrave;ng cho qu&yacute; khac&nbsp;<br />\r\n</span></span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">9. T&ocirc;i c&oacute; thể nhận h&agrave;ng tại Văn ph&ograve;ng&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">?</span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\">\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">C&oacute; thể. Thời gian nhận h&agrave;ng trong giờ l&agrave;m việc, từ 8h30 &ndash; 12h00 v&agrave; từ 13h30 &ndash; 17h30.</span></span></p>\r\n</h1>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">10. &nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><font color=\"#ff0000\">&nbsp;</font>c&oacute; giao h&agrave;ng ở những tỉnh th&agrave;nh kh&aacute;c.?</span></span></h4>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); text-align: justify;\"><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><font face=\"Arial\" size=\"3\">&nbsp;sẽ giao h&agrave;ng đến tận tay qu&yacute; kh&aacute;ch h&agrave;ng c&oacute; những đơn h&agrave;ng ở trung t&acirc;m những th&agrave;nh phố hoặc quận huyện m&agrave; đối t&aacute;c li&ecirc;n kết của ch&uacute;ng t&ocirc;i c&oacute; thể giao h&agrave;ng được, bằng <br />\r\n<br />\r\ndịch vụ li&ecirc;n kết của ch&uacute;ng t&ocirc;i. Ngay khi ch&uacute;ng t&ocirc;i nhận được th&ocirc;ng b&aacute;o về việc thanh to&aacute;n h&oacute;a <br />\r\n<br />\r\nđơn của qu&yacute; kh&aacute;ch đ&atilde; được thực hiện sẽ tiến h&agrave;nh gửi h&agrave;ng ngay cho qu&yacute; kh&aacute;ch.</font></h4>\r\n<h4 style=\"font-weight: normal; color: rgb(17, 17, 17); font-family: Arial, Helvetica, sans-serif; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">11. T&ocirc;i muốn g&oacute;p &yacute; về c&ocirc;ng t&aacute;c giao nhận của<span style=\"color: rgb(0, 0, 0);\">&nbsp;</span></span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(0, 0, 0);\">?</span></span></span></h4>\r\n<h1 class=\"news-title\" style=\"margin: 0px 0px 10px; padding: 0px; outline: none medium; font-family: Tahoma; font-size: 28px; font-weight: normal; line-height: 1.3;\"><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); text-align: justify; font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a>\r\n<p class=\"MsoNormal\" style=\"margin: 0px 0px 5px; color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: normal; text-align: justify;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;rất cảm ơn v&agrave; khuyến kh&iacute;ch bạn đ&oacute;ng g&oacute;p &yacute; kiến gi&uacute;p&nbsp;</span></span><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 255);\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\">&nbsp;ho&agrave;n thiện để phục vụ bạn tốt hơn. Bạn vui l&ograve;ng gửi c&aacute;c &yacute; kiến v&agrave;o địa chỉ<span style=\"color: rgb(255, 0, 0);\">&nbsp;</span></span></span><a href=\"http://hangquocte.com/\"><strong><span style=\"font-size: medium;\">http://hangquocte.com</span></strong></a><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"color: rgb(255, 0, 0);\">&nbsp;&nbsp;</span>&nbsp;&nbsp;<br />\r\n&nbsp;<br />\r\n</span></span><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-size: large;\"><a href=\"http://hangquocte.com/\" style=\"margin: 0px; padding: 0px; text-decoration: none; color: rgb(136, 136, 136); font-family: Arial; font-size: medium; line-height: 48px;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">hangquocte.com</strong></span></span></a><span style=\"font-family: Arial;\">&nbsp;rất h&acirc;n hạnh được phục vụ qu&yacute; kh&aacute;ch...!<br />\r\n<br />\r\n<img src=\"/demo1/tinhchi/hinhanh_fckeditor/panel ảnh b&igrave;a webside(4).jpg\" width=\"750\" height=\"350\" alt=\"\" /><br />\r\n<br />\r\n<br type=\"_moz\" />\r\n</span></span></span></p>\r\n<table width=\"100%\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td><span style=\"color: rgb(192, 192, 192); font-family: Arial; font-size: medium; line-height: 24px;\">Hang quoc te|H&agrave;ng Quốc Tế| H&agrave;ng gi&aacute; rẻ| Hang gia re | thuc pham chuc nang | thực phẩm chức năng | glucosamine | dau ca| sữa ensure| fish oil| dầu c&aacute; fish oil| l&agrave;m trắng da| l&agrave;m đẹp da| lam trang da| lam dep da| giam can| giảm c&acirc;n| thuoc giam can| thuốc giảm c&acirc;n| colagen | collagen| nhau thai cuu| nhau thai cừu| omega 3| xương khớp| xuong khop | tảo nhật| tao nhat| sụn c&aacute; mập| xun ca map| xụn c&aacute; mập| sun ca map| beautiful slim| pure white| tảo lục| tao luc| tảo v&agrave;ng| tao vang| omega 369| omega 3 6 9 | omega369 | l&agrave;m đẹp da | đẹp da | chống n&aacute;m | chống n&aacute;m da | sản phẩm | san pham | sản phẩm l&agrave;m đẹp | san pham lam dep | thực phẩm bổ sung | thuc pham bo sung | collagen chống l&atilde;o h&oacute;a | collagen l&agrave;m đẹp da | thuốc giảm c&acirc;n beautyful slim | power slim | collagen slim | giảm c&acirc;n slim | giảm c&acirc;n hiệu quả | giảm c&acirc;n nhanh ch&oacute;ng | h&agrave;ng nhập khẩu | thực phẩm chức năng nhập khẩu | thực phẩm bổ sung dinh dưỡng | thuc pham bo sung dinh duong | bổ sung dưỡng chất cho cơ thể | bo sung duong chat cho co the | vitamin | bổ sung vi ta min | bổ sung vitamin a | bổ sung vitamin b | kho&aacute;ng chất | trẻ khỏe | l&agrave;m đẹp | tăng cường sinh lực | tang cuong sinh luc | hỗ trợ tr&iacute; nhớ | &nbsp;hỗ trợ xương khớp | giảm c&acirc;n an to&agrave;n | giam can an toan | hangquocte | hangquocte.com | bổ mắt | hỗ trợ thị lực | tin tức | bổ gan | bổ t&ugrave;y | bổ thận | ph&aacute;i đẹp | thon gọn | trở n&ecirc;n đẹp hơn | sức khỏ | gia đ&igrave;nh | sức khỏe cho mọi người | ti&ecirc;u d&ugrave;ng th&ocirc;ng minh | dưỡng chất cần thiết | tảo nhật bản | tảo xoắn | tảo | tảo mặt trời | collagen &uacute;c | collagen mỹ | sụn vi c&aacute; mập &uacute;c | sụn vi c&aacute; mập mỹ | glucosamine &uacute;c| glucosamine mỹ | collagen nhật | collagen nhập khẩu | sản phẩm tin d&ugrave;ng | sản phẩm hiệu quả | bổ sung canxi | bổ sung kẽm | cần thiết | th&ocirc;ng tin | mới | hot | vip | mua ở đ&acirc;u | ở đ&acirc;u | h&igrave;nh ảnh | li&ecirc;n hệ | v&igrave; sao | như thế n&agrave;o | gi&aacute; rẻ | rẻ nhất | gi&aacute; tốt nhất | giảm mỡ bụng | giảm mỡ đ&ugrave;i | tan mỡ bụng | tan mỡ đ&ugrave;i | ti&ecirc;u hao mỡ thừa | đốt ch&aacute;y mỡ thừa |</span></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width=\"100%\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td><span style=\"color: rgb(192, 192, 192); font-family: Arial; font-size: medium; line-height: 24px;\">Hang quoc te|H&agrave;ng Quốc Tế| H&agrave;ng gi&aacute; rẻ| Hang gia re | thuc pham chuc nang | thực phẩm chức năng | glucosamine | dau ca| sữa ensure| fish oil| dầu c&aacute; fish oil| l&agrave;m trắng da| l&agrave;m đẹp da| lam trang da| lam dep da| giam can| giảm c&acirc;n| thuoc giam can| thuốc giảm c&acirc;n| colagen | collagen| nhau thai cuu| nhau thai cừu| omega 3| xương khớp| xuong khop | tảo nhật| tao nhat| sụn c&aacute; mập| xun ca map| xụn c&aacute; mập| sun ca map| beautiful slim| pure white| tảo lục| tao luc| tảo v&agrave;ng| tao vang| omega 369| omega 3 6 9 | omega369 | l&agrave;m đẹp da | đẹp da | chống n&aacute;m | chống n&aacute;m da | sản phẩm | san pham | sản phẩm l&agrave;m đẹp | san pham lam dep | thực phẩm bổ sung | thuc pham bo sung | collagen chống l&atilde;o h&oacute;a | collagen l&agrave;m đẹp da | thuốc giảm c&acirc;n beautyful slim | power slim | collagen slim | giảm c&acirc;n slim | giảm c&acirc;n hiệu quả | giảm c&acirc;n nhanh ch&oacute;ng | h&agrave;ng nhập khẩu | thực phẩm chức năng nhập khẩu | thực phẩm bổ sung dinh dưỡng | thuc pham bo sung dinh duong | bổ sung dưỡng chất cho cơ thể | bo sung duong chat cho co the | vitamin | bổ sung vi ta min | bổ sung vitamin a | bổ sung vitamin b | kho&aacute;ng chất | trẻ khỏe | l&agrave;m đẹp | tăng cường sinh lực | tang cuong sinh luc | hỗ trợ tr&iacute; nhớ | &nbsp;hỗ trợ xương khớp | giảm c&acirc;n an to&agrave;n | giam can an toan | hangquocte | hangquocte.com | bổ mắt | hỗ trợ thị lực | tin tức | bổ gan | bổ t&ugrave;y | bổ thận | ph&aacute;i đẹp | thon gọn | trở n&ecirc;n đẹp hơn | sức khỏ | gia đ&igrave;nh | sức khỏe cho mọi người | ti&ecirc;u d&ugrave;ng th&ocirc;ng minh | dưỡng chất cần thiết | tảo nhật bản | tảo xoắn | tảo | tảo mặt trời | collagen &uacute;c | collagen mỹ | sụn vi c&aacute; mập &uacute;c | sụn vi c&aacute; mập mỹ | glucosamine &uacute;c| glucosamine mỹ | collagen nhật | collagen nhập khẩu | sản phẩm tin d&ugrave;ng | sản phẩm hiệu quả | bổ sung canxi | bổ sung kẽm | cần thiết | th&ocirc;ng tin | mới | hot | vip | mua ở đ&acirc;u | ở đ&acirc;u | h&igrave;nh ảnh | li&ecirc;n hệ | v&igrave; sao | như thế n&agrave;o | gi&aacute; rẻ | rẻ nhất | gi&aacute; tốt nhất | giảm mỡ bụng | giảm mỡ đ&ugrave;i | tan mỡ bụng | tan mỡ đ&ugrave;i | ti&ecirc;u hao mỡ thừa | đốt ch&aacute;y mỡ thừa |</span></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width=\"100%\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td><span style=\"color: rgb(192, 192, 192); font-family: Arial; font-size: medium; line-height: 24px;\">Hang quoc te|H&agrave;ng Quốc Tế| H&agrave;ng gi&aacute; rẻ| Hang gia re | thuc pham chuc nang | thực phẩm chức năng | glucosamine | dau ca| sữa ensure| fish oil| dầu c&aacute; fish oil| l&agrave;m trắng da| l&agrave;m đẹp da| lam trang da| lam dep da| giam can| giảm c&acirc;n| thuoc giam can| thuốc giảm c&acirc;n| colagen | collagen| nhau thai cuu| nhau thai cừu| omega 3| xương khớp| xuong khop | tảo nhật| tao nhat| sụn c&aacute; mập| xun ca map| xụn c&aacute; mập| sun ca map| beautiful slim| pure white| tảo lục| tao luc| tảo v&agrave;ng| tao vang| omega 369| omega 3 6 9 | omega369 | l&agrave;m đẹp da | đẹp da | chống n&aacute;m | chống n&aacute;m da | sản phẩm | san pham | sản phẩm l&agrave;m đẹp | san pham lam dep | thực phẩm bổ sung | thuc pham bo sung | collagen chống l&atilde;o h&oacute;a | collagen l&agrave;m đẹp da | thuốc giảm c&acirc;n beautyful slim | power slim | collagen slim | giảm c&acirc;n slim | giảm c&acirc;n hiệu quả | giảm c&acirc;n nhanh ch&oacute;ng | h&agrave;ng nhập khẩu | thực phẩm chức năng nhập khẩu | thực phẩm bổ sung dinh dưỡng | thuc pham bo sung dinh duong | bổ sung dưỡng chất cho cơ thể | bo sung duong chat cho co the | vitamin | bổ sung vi ta min | bổ sung vitamin a | bổ sung vitamin b | kho&aacute;ng chất | trẻ khỏe | l&agrave;m đẹp | tăng cường sinh lực | tang cuong sinh luc | hỗ trợ tr&iacute; nhớ | &nbsp;hỗ trợ xương khớp | giảm c&acirc;n an to&agrave;n | giam can an toan | hangquocte | hangquocte.com | bổ mắt | hỗ trợ thị lực | tin tức | bổ gan | bổ t&ugrave;y | bổ thận | ph&aacute;i đẹp | thon gọn | trở n&ecirc;n đẹp hơn | sức khỏ | gia đ&igrave;nh | sức khỏe cho mọi người | ti&ecirc;u d&ugrave;ng th&ocirc;ng minh | dưỡng chất cần thiết | tảo nhật bản | tảo xoắn | tảo | tảo mặt trời | collagen &uacute;c | collagen mỹ | sụn vi c&aacute; mập &uacute;c | sụn vi c&aacute; mập mỹ | glucosamine &uacute;c| glucosamine mỹ | collagen nhật | collagen nhập khẩu | sản phẩm tin d&ugrave;ng | sản phẩm hiệu quả | bổ sung canxi | bổ sung kẽm | cần thiết | th&ocirc;ng tin | mới | hot | vip | mua ở đ&acirc;u | ở đ&acirc;u | h&igrave;nh ảnh | li&ecirc;n hệ | v&igrave; sao | như thế n&agrave;o | gi&aacute; rẻ | rẻ nhất | gi&aacute; tốt nhất | giảm mỡ bụng | giảm mỡ đ&ugrave;i | tan mỡ bụng | tan mỡ đ&ugrave;i | ti&ecirc;u hao mỡ thừa | đốt ch&aacute;y mỡ thừa |</span></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<table width=\"100%\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"font-family: Arial;\">\r\n    <tbody>\r\n        <tr>\r\n            <td><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><span style=\"line-height: 24px;\">&nbsp;</span><span style=\"color: rgb(192, 192, 192);\"><span style=\"line-height: 24px;\">Hang quoc te|H&agrave;ng Quốc Tế| H&agrave;ng gi&aacute; rẻ| Hang gia re | thuc pham chuc nang | thực phẩm chức năng | glucosamine | dau ca| sữa ensure| fish oil| dầu c&aacute; fish oil| l&agrave;m trắng da| l&agrave;m đẹp da| lam trang da| lam dep da| giam can| giảm c&acirc;n| thuoc giam can| thuốc giảm c&acirc;n| colagen | collagen| nhau thai cuu| nhau thai cừu| omega 3| xương khớp| xuong khop | tảo nhật| tao nhat| sụn c&aacute; mập| xun ca map| xụn c&aacute; mập| sun ca map| beautiful slim| pure white| tảo lục| tao luc| tảo v&agrave;ng| tao vang| omega 369| omega 3 6 9 | omega369 | l&agrave;m đẹp da | đẹp da | chống n&aacute;m | chống n&aacute;m da | sản phẩm | san pham | sản phẩm l&agrave;m đẹp | san pham lam dep | thực phẩm bổ sung | thuc pham bo sung | collagen chống l&atilde;o h&oacute;a | collagen l&agrave;m đẹp da | thuốc giảm c&acirc;n beautyful slim | power slim | collagen slim | giảm c&acirc;n slim | giảm c&acirc;n hiệu quả | giảm c&acirc;n nhanh ch&oacute;ng | h&agrave;ng nhập khẩu | thực phẩm chức năng nhập khẩu | thực phẩm bổ sung dinh dưỡng | thuc pham bo sung dinh duong | bổ sung dưỡng chất cho cơ thể | bo sung duong chat cho co the | vitamin | bổ sung vi ta min | bổ sung vitamin a | bổ sung vitamin b | kho&aacute;ng chất | trẻ khỏe | l&agrave;m đẹp | tăng cường sinh lực | tang cuong sinh luc | hỗ trợ tr&iacute; nhớ | &nbsp;hỗ trợ xương khớp | giảm c&acirc;n an to&agrave;n | giam can an toan | hangquocte | hangquocte.com | bổ mắt | hỗ trợ thị lực | tin tức | bổ gan | bổ t&ugrave;y | bổ thận | ph&aacute;i đẹp | thon gọn | trở n&ecirc;n đẹp hơn | sức khỏ | gia đ&igrave;nh | sức khỏe cho mọi người | ti&ecirc;u d&ugrave;ng th&ocirc;ng minh | dưỡng chất cần thiết | tảo nhật bản | tảo xoắn | tảo | tảo mặt trời | collagen &uacute;c | collagen mỹ | sụn vi c&aacute; mập &uacute;c | sụn vi c&aacute; mập mỹ | glucosamine &uacute;c| glucosamine mỹ | collagen nhật | collagen nhập khẩu | sản phẩm tin d&ugrave;ng | sản phẩm hiệu quả | bổ sung canxi | bổ sung kẽm | cần thiết | th&ocirc;ng tin | mới | hot | vip | mua ở đ&acirc;u | ở đ&acirc;u | h&igrave;nh ảnh | li&ecirc;n hệ | v&igrave; sao | như thế n&agrave;o | gi&aacute; rẻ | rẻ nhất | gi&aacute; tốt nhất | giảm mỡ bụng | giảm mỡ đ&ugrave;i | tan mỡ bụng | tan mỡ đ&ugrave;i | ti&ecirc;u hao mỡ thừa | đốt ch&aacute;y mỡ thừa |</span></span></span></span></td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</h1>\r\n<div class=\"news-content\" style=\"margin: 0px; padding: 0px; outline: none medium; font-size: 14px; line-height: 24px; font-family: Arial;\">\r\n<p style=\"margin: 6px 0px; padding: 0px; outline: none medium;\"><span style=\"font-size: medium;\"><span style=\"font-family: Arial;\"><br />\r\n&nbsp;</span></span></p>\r\n</div>'),
(10, 'Hoi dap', 'hoi dap'),
(11, 'Doi tra hang', '<h1 style=\"line-height: 3rem; margin-top: 0px; margin-right: 0px; margin-left: 0px; padding-bottom: 0px; margin-bottom: 10px !important;\">\r\n<p style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0px 0px 5px; color: rgb(34, 34, 34); font-weight: normal; line-height: normal; text-align: justify;\">&nbsp;đổi trả h&agrave;ng....</p>\r\n</h1>'),
(12, 'Hop tac', 'giới thiệu về ely'),
(13, 'huong dan xem hang', 'huong dan xem hang'),
(14, 'cau hoi thuong gap', '<div style=\"text-align: center;\"><font color=\"#ff0000\" size=\"6\"><b><br />\r\nBẢNG GI&Aacute; ĐANG CẬP NHẬT</b></font></div>'),
(15, 'giao hàng thu tiền', 'giao hàng thu tiền'),
(16, 'thanh toán trực tuyến', 'thanh toán trực tuyến'),
(17, 'h&igrave;nh thức thanh to&aacute;n', '<p class=\"MsoNormal\"><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sơn Aqua Nano</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">&nbsp;l&agrave; một sản phẩm chất lượng cao được ph&aacute;t triển bởi&nbsp;<b>Tập đo&agrave;n Green House</b>&nbsp;tại Việt Nam. Được thiết kế đặc biệt để mang lại bề mặt ho&agrave;n thiện tuyệt vời v&agrave; bảo vệ cho c&aacute;c bề mặt nội ngoại thất, Sơn Aqua Nano kh&ocirc;ng chỉ l&agrave; sự kết hợp ho&agrave;n hảo giữa c&ocirc;ng nghệ ti&ecirc;n tiến v&agrave; th&agrave;nh phần chất lượng, m&agrave; c&ograve;n l&agrave; lựa chọn h&agrave;ng đầu cho c&aacute;c dự &aacute;n x&acirc;y dựng v&agrave; trang tr&iacute;.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\"><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: red;\">Đặc Điểm Nổi Bật:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: red;\"><o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; text-indent: -0.25in;\"><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">C&ocirc;ng Nghệ Nano Hiện Đại:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">&nbsp;</span><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sơn Aqua Nano sử dụng c&ocirc;ng nghệ nano ti&ecirc;n tiến, gi&uacute;p tạo ra một lớp phủ mỏng nhẹ đồng đều v&agrave; mịn m&agrave;ng, mang lại vẻ đẹp tinh tế v&agrave; bề mặt mượt m&agrave;.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; text-indent: -0.25in;\"><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">Bảo Vệ Vượt Trội:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">&nbsp;</span><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Với khả năng chống thấm nước v&agrave; kh&aacute;ng khuẩn, Sơn Aqua Nano kh&ocirc;ng chỉ bảo vệ bề mặt khỏi ẩm ướt v&agrave; c&aacute;c t&aacute;c nh&acirc;n b&ecirc;n ngo&agrave;i, m&agrave; c&ograve;n gi&uacute;p ngăn chặn sự ph&aacute;t triển của vi khuẩn v&agrave; nấm mốc.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; text-indent: -0.25in;\"><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">Bền M&agrave;u v&agrave; Bền Bề Mặt:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">&nbsp;</span><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sơn Aqua Nano được chế tạo từ c&aacute;c th&agrave;nh phần chất lượng cao, đảm bảo độ bền m&agrave;u vượt trội v&agrave; khả năng chịu m&agrave;i m&ograve;n tốt, giữ cho bề mặt lu&ocirc;n mới mẻ v&agrave; bền đẹp theo thời gian.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; text-indent: -0.25in;\"><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">An To&agrave;n Cho Sức Khỏe:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">&nbsp;</span><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sản phẩm n&agrave;y tu&acirc;n thủ c&aacute;c ti&ecirc;u chuẩn an to&agrave;n cao nhất v&agrave; kh&ocirc;ng chứa c&aacute;c chất độc hại như ch&igrave;, thủy ng&acirc;n, hay VOC (Hợp chất hữu cơ bay hơi), đảm bảo an to&agrave;n cho sức khỏe của người sử dụng v&agrave; m&ocirc;i trường.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" style=\"margin-left: 0.5in; text-indent: -0.25in;\"><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;</span></span><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">Ứng Dụng Đa Dạng:</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif; color: rgb(33, 95, 154);\">&nbsp;</span><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sơn Aqua Nano ph&ugrave; hợp cho nhiều loại bề mặt nội ngoại thất, bao gồm tường, cửa, cửa sổ, tấm v&aacute;ch, v&agrave; nhiều hơn nữa. D&ugrave; l&agrave; cho c&ocirc;ng tr&igrave;nh x&acirc;y dựng mới hoặc l&agrave; qu&aacute; tr&igrave;nh trang tr&iacute; lại, Sơn Aqua Nano sẽ l&agrave; lựa chọn l&yacute; tưởng cho bất kỳ dự &aacute;n n&agrave;o.<o:p></o:p></span></p>\r\n<p><b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">Sơn Aqua Nano</span></b><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\">&nbsp;kh&ocirc;ng chỉ l&agrave; một lựa chọn chất lượng cho việc trang tr&iacute; v&agrave; bảo vệ bề mặt, m&agrave; c&ograve;n l&agrave; biểu tượng cho sự ti&ecirc;n tiến v&agrave; an to&agrave;n trong ng&agrave;nh c&ocirc;ng nghiệp sơn. Với khả năng bảo vệ, độ bền v&agrave; t&iacute;nh thẩm mỹ cao, sản phẩm n&agrave;y l&agrave; sự đầu tư th&ocirc;ng minh cho mọi dự &aacute;n x&acirc;y dựng v&agrave; trang tr&iacute;.<br />\r\n<br />\r\n</span><span style=\"color: rgb(0, 255, 0);\"><strong><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\"><span style=\"font-size: large;\"><span style=\"font-size: x-large;\">C&ocirc;ng Ty Cổ Phần Tập Đo&agrave;n GreenHouse</span></span><br />\r\n</span></strong></span></p>\r\n<p class=\"MsoNormal\"><span style=\"color: rgb(0, 255, 0);\"><strong><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\"><span style=\"color: rgb(0, 0, 0);\">Địa chỉ:</span></span></strong><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\"><span style=\"color: rgb(0, 0, 0);\"> 12 Ng&ocirc; Đức Kế, TP. Tam Kỳ, Quảng Nam<br />\r\n<strong>Hotline:</strong> 0943 1111 68</span></span><strong><span style=\"font-size: 13pt; line-height: 18.5467px; font-family: Arial, sans-serif;\"><br type=\"_moz\" />\r\n</span></strong></span></p>'),
(18, 'h&agrave;ng nhập khẩu', '<font size=\"3\">h&agrave;ng nhập khẩu</font>'),
(19, 'h&agrave;ng trong kho', '<iframe width=\"410\" height=\"300\" src=\"https://www.youtube.com/embed/TKutRsBM_1k\" frameborder=\"0\" allowfullscreen></iframe>'),
(20, 'th&ocirc;ng tin li&ecirc;n quan', ''),
(21, 'từ kh&oacute;a', '<a href=\"http://atvmedia.net\"><u><span style=\"font-size: x-large;\"><span style=\"color: rgb(255, 0, 0);\">từ kh&oacute;a&nbsp; </span></span></u></a><a href=\"http://hangquocte.com\"><u><span style=\"font-size: x-large;\"><span style=\"color: rgb(255, 0, 0);\">nh&acirc;t an htthth hksaj;lfj jf;lsdjf;lsd</span></span></u><strong><span style=\"font-size: medium;\"><span style=\"color: rgb(255, 0, 0);\"><br />\r\n</span></span></strong></a>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioi_thieu`
--

CREATE TABLE `gioi_thieu` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `linkurl` text NOT NULL,
  `tukhoa1` text NOT NULL,
  `tukhoa2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gioi_thieu`
--

INSERT INTO `gioi_thieu` (`id`, `hinhanh`, `noidung`, `trangchu`, `mota`, `tieude`, `linkurl`, `tukhoa1`, `tukhoa2`) VALUES
(20, 'main-trai.jpg', '<p>Tại<strong> Đồng Phục H&agrave; Thư</strong>, ch&uacute;ng t&ocirc;i tự h&agrave;o l&agrave; đơn vị chuy&ecirc;n thiết kế, sản xuất v&agrave; cung cấp đồng phục chất lượng cao tại Sơn Tr&agrave;, Đ&agrave; Nẵng. Với nhiều năm kinh nghiệm trong ng&agrave;nh, ch&uacute;ng t&ocirc;i đ&atilde; phục vụ h&agrave;ng ngh&igrave;n kh&aacute;ch h&agrave;ng l&agrave; doanh nghiệp, trường học, nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn, c&ocirc;ng ty, đội nh&oacute;m tr&ecirc;n khắp cả nước.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i cam kết mang đến sản phẩm đồng phục đẹp, bền, thoải m&aacute;i, gi&uacute;p kh&aacute;ch h&agrave;ng thể hiện sự chuy&ecirc;n nghiệp, gắn kết v&agrave; tạo dấu ấn thương hiệu mạnh mẽ.</p>\r\n\r\n<p><strong>Sản Phẩm Đồng Phục H&agrave; Thư Cung Cấp</strong></p>\r\n\r\n<p>Đồng phục học sinh (cấp 1, cấp 2, cấp 3)<br />\r\nĐồng phục c&ocirc;ng sở (&aacute;o sơ mi, quần t&acirc;y, vest, v&aacute;y c&ocirc;ng sở)<br />\r\nĐồng phục nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn (&aacute;o bếp, tạp dề, đồng phục phục vụ, lễ t&acirc;n)<br />\r\nĐồng phục bảo hộ lao động (quần &aacute;o kỹ sư, c&ocirc;ng nh&acirc;n, bảo hộ chuy&ecirc;n dụng)<br />\r\nĐồng phục &aacute;o thun, &aacute;o nh&oacute;m, &aacute;o lớp, &aacute;o sự kiện<br />\r\n&Aacute;o cờ đỏ sao v&agrave;ng &ndash; đồng phục y&ecirc;u nước cho mọi lứa tuổi</p>\r\n\r\n<p><strong>V&igrave; Sao N&ecirc;n Chọn Đồng Phục H&agrave; Thư?</strong></p>\r\n\r\n<p>Chất lượng vải cao cấp, tho&aacute;ng m&aacute;t, bền m&agrave;u<br />\r\nĐường may chắc chắn, tỉ mỉ, form d&aacute;ng đẹp<br />\r\nThiết kế đồng phục theo y&ecirc;u cầu, s&aacute;ng tạo, hợp xu hướng<br />\r\nGi&aacute; cả cạnh tranh, ưu đ&atilde;i tốt khi đặt số lượng lớn<br />\r\nGiao h&agrave;ng đ&uacute;ng tiến độ, hỗ trợ tận t&acirc;m</p>\r\n', '', '', 'Kết bài dịch vụ', 'ket-bai-dich-vu', 'đo may đồ đi học tại đà nẵng', 'đồng phục học sinh tiểu học sơn trà đà nẵng'),
(21, 'GIOITHIEU-HATHU.jpg', '<p><strong>Đồng Phục H&agrave; Thư</strong> l&agrave; đơn vị chuy&ecirc;n thiết kế, sản xuất v&agrave; cung cấp c&aacute;c loại đồng phục chất lượng cao tại <strong>Sơn Tr&agrave;, Đ&agrave; Nẵng</strong>. Với hơn <strong>10 năm kinh nghiệm</strong>, ch&uacute;ng t&ocirc;i đ&atilde; phục vụ h&agrave;ng ng&agrave;n kh&aacute;ch h&agrave;ng tr&ecirc;n khắp cả nước, từ <strong>c&aacute; nh&acirc;n, doanh nghiệp, trường học, nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn, c&ocirc;ng ty, tổ chức</strong> cho đến c&aacute;c sự kiện lớn.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i lu&ocirc;n đặt <strong>chất lượng sản phẩm, sự chuy&ecirc;n nghiệp v&agrave; sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng</strong> l&ecirc;n h&agrave;ng đầu. <strong>Cam kết mang đến những mẫu đồng phục đẹp, bền, thoải m&aacute;i</strong> gi&uacute;p kh&aacute;ch h&agrave;ng tự tin thể hiện h&igrave;nh ảnh thương hiệu của m&igrave;nh.</p>\r\n\r\n<p><strong>C&aacute;c d&ograve;ng sản phẩm tại Đồng Phục H&agrave; Thư</strong></p>\r\n\r\n<p><strong>Đồng phục học sinh</strong> (cấp 1, cấp 2, cấp 3, &aacute;o d&agrave;i nữ sinh)<br />\r\n<strong>Đồng phục c&ocirc;ng sở</strong> (&aacute;o sơ mi, vest, quần t&acirc;y, ch&acirc;n v&aacute;y, &aacute;o blazer)<br />\r\n<strong>Đồng phục nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn</strong> (&aacute;o bếp, đồng phục phục vụ, tạp dề, lễ t&acirc;n)<br />\r\n<strong>Đồng phục bảo hộ lao động</strong> (quần &aacute;o bảo hộ, đồng phục c&ocirc;ng nh&acirc;n, kỹ sư)<br />\r\n<strong>Đồng phục &aacute;o thun, &aacute;o nh&oacute;m, &aacute;o lớp, &aacute;o sự kiện</strong><br />\r\n<strong>&Aacute;o cờ đỏ sao v&agrave;ng &ndash; Đồng phục y&ecirc;u nước cho mọi lứa tuổi</strong></p>\r\n\r\n<p><strong>Thiết kế theo y&ecirc;u cầu &ndash; May đo theo size chuẩn &ndash; Nhận đơn h&agrave;ng số lượng lớn &amp; nhỏ</strong></p>\r\n\r\n<p><strong>V&igrave; sao n&ecirc;n chọn Đồng Phục H&agrave; Thư?</strong></p>\r\n\r\n<p><strong>Chất lượng vải cao cấp</strong>: Ch&uacute;ng t&ocirc;i sử dụng c&aacute;c loại vải <strong>cotton, kate, kaki, thun lạnh, thun c&aacute; sấu, oxford, linen</strong>... đảm bảo <strong>mềm mại, tho&aacute;ng m&aacute;t, bền m&agrave;u, chống nhăn, chống co r&uacute;t</strong>.</p>\r\n\r\n<p><strong>Kỹ thuật may sắc n&eacute;t</strong>: Đường may <strong>tỉ mỉ, chắc chắn</strong>, form d&aacute;ng chuẩn gi&uacute;p người mặc thoải m&aacute;i v&agrave; tự tin.</p>\r\n\r\n<p><strong>Thiết kế s&aacute;ng tạo, chuy&ecirc;n nghiệp</strong>: Đội ngũ thiết kế s&aacute;ng tạo, lu&ocirc;n cập nhật <strong>xu hướng thời trang mới nhất</strong>, gi&uacute;p đồng phục trở n&ecirc;n hiện đại, phong c&aacute;ch v&agrave; ph&ugrave; hợp với thương hiệu của bạn.</p>\r\n\r\n<p><strong>Gi&aacute; cả cạnh tranh &ndash; ưu đ&atilde;i số lượng lớn</strong>: Gi&aacute; cả hợp l&yacute;, <strong>chiết khấu cao</strong> khi đặt h&agrave;ng với số lượng lớn.</p>\r\n\r\n<p><strong>In &amp; th&ecirc;u logo sắc n&eacute;t</strong>: C&ocirc;ng nghệ <strong>in lụa, in chuyển nhiệt, in decal, th&ecirc;u vi t&iacute;nh</strong>&hellip; đảm bảo h&igrave;nh ảnh sắc n&eacute;t, bền đẹp.</p>\r\n\r\n<p><strong>Giao h&agrave;ng nhanh ch&oacute;ng, đ&uacute;ng hẹn</strong>: Nhận đơn h&agrave;ng <strong>to&agrave;n quốc</strong>, vận chuyển tận nơi, đ&uacute;ng tiến độ cam kết.</p>\r\n\r\n<p><strong>Dịch vụ tư vấn tận t&igrave;nh</strong>: Đội ngũ tư vấn lu&ocirc;n sẵn s&agrave;ng hỗ trợ, gi&uacute;p bạn lựa chọn mẫu m&atilde; ph&ugrave; hợp nhất với nhu cầu.</p>\r\n\r\n<p><strong>Đặt may đồng phục tại Đồng Phục H&agrave; Thư &ndash; Quy tr&igrave;nh đơn giản</strong></p>\r\n\r\n<p><strong>Bước 1</strong>: Kh&aacute;ch h&agrave;ng li&ecirc;n hệ để được tư vấn mẫu m&atilde;, chất liệu, b&aacute;o gi&aacute;.<br />\r\n<strong>Bước 2</strong>: Chốt thiết kế, may mẫu thử nếu cần.<br />\r\n<strong>Bước 3</strong>: Sản xuất, kiểm tra chất lượng.<br />\r\n<strong>Bước 4</strong>: Giao h&agrave;ng tận nơi, hỗ trợ đổi trả nếu c&oacute; lỗi từ nh&agrave; sản xuất.</p>\r\n\r\n<p><strong>Nhận đơn h&agrave;ng số lượng lớn &amp; nhỏ, phục vụ tận t&igrave;nh tất cả kh&aacute;ch h&agrave;ng</strong>.</p>\r\n', '', 'Đồng Phục Hà Thư – Chuyên may đồng phục tại Đà Nẵng: Đồng phục học sinh, công sở, nhà hàng – khách sạn, áo nhóm, áo lớp, áo cờ đỏ sao vàng. Uy tín – chất lượng – giá tốt! Lh ngay 0905 108 532!', 'ĐỒNG PHỤC HÀ THƯ', 'dong-phuc-ha-thu', 'may đồng phục học sinh tại Đà Nẵng', 'đồng phục học sinh tiểu học sơn trà đà nẵng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `he_thong`
--

CREATE TABLE `he_thong` (
  `id` int(11) NOT NULL,
  `tieude` text NOT NULL,
  `dis` text NOT NULL,
  `mota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `he_thong`
--

INSERT INTO `he_thong` (`id`, `tieude`, `dis`, `mota`) VALUES
(1, 'Chuyên May Đo Và Bán Sẵn Đồng Phục Học Sinh Đà Nẵng', 'LH ngay 0905108532 Hà Thư Chuyên may đo và cung cấp đồng phục học sinh tại Đà Nẵng với chất liệu vải cao cấp, bền đẹp, thoáng mát. Cam kết chuẩn form, giá cả hợp lý, nhận đặt may theo yêu cầu số lượng lớn. Giao hàng tận nơi, hỗ trợ khách hàng chu đáo! ', 'đồng phục học sinh cấp 1 đà nẵng, đồng phục may sẵn học sinh cấp 1 đà nẵng, đồng phục học sinh cấp 2 đà nẵng, đồng phục may sẵn học sinh cấp 2 đà nẵng, đồng phục học sinh cấp 3 đà nẵng, đồng phục học sinh may sẵn cấp 3 đà nẵng, đồng phục học sinh may sẵn size lớn , đồng phục học sinh size to đà nẵng, đồng phục trung học phổ thông đà nẵng, đồng phục trung học cơ sở đà nẵng, đồng phục tiểu học đà nẵng, may đồng phục học sinh giá rẻ đà nẵng, địa chỉ may đồng phục học sinh đẹp tại sơn trà đà nẵng, xưởng may đồng phục theo yêu cầu đà nẵng, may áo đồng phục giá rẻ tại Đà Nẵng, bộ quần áo học sinh cấp 1 sơn trà đà nẵng, bộ quần áo học sinh tiểu học sơn trà đà nẵng, bộ quần áo học sinh cấp 2 đà nẵng, bộ quần áo học sinh trung học cơ sở sơn trà đà nẵng, bộ quần áo học sinh cấp 3 đà nẵng, bộ quần áo học sinh trung học phổ thông đà nẵng, bộ quần áo thcs sơn trà đà nẵng, bộ quần áo học sinh thpt đà nẵng, đồng phục thcs đà nẵng, đồng phục thpt đà nẵng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `hoten` text NOT NULL,
  `diachi` text NOT NULL,
  `dt` text NOT NULL,
  `email` text NOT NULL,
  `fax` text NOT NULL,
  `tieude` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `hoten`, `diachi`, `dt`, `email`, `fax`, `tieude`, `noidung`) VALUES
(59, 'Df', 'Ndjxk', '0383949', 'Gnfod', '', '', 'Tl'),
(60, 'Minh', 'Đà Nẵng', '0914454348', 'kinhdoanhatv@gmail.com', '', '', 'Test website');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_ma_sanpham`
--

CREATE TABLE `loai_ma_sanpham` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `trangchu` int(3) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `noidung` text NOT NULL,
  `noidung_en` text NOT NULL,
  `name_url` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_ma_sanpham`
--

INSERT INTO `loai_ma_sanpham` (`id`, `thuocloai`, `thuocloai_en`, `trangchu`, `hinhanh`, `logo`, `noidung`, `noidung_en`, `name_url`) VALUES
(52, 'Đồng phục thể thao học sinh', '', 0, '', '', '', '', 'Dong-phuc-the-thao-hoc-sinh'),
(53, 'Phụ kiện đồng phục', '', 0, '', '', '', '', 'Phu-kien-dong-phuc'),
(55, 'Đồng phục cấp 1', '', 0, '', '', '', '', 'Dong-phuc-cap-1'),
(56, 'Đồng phục cấp 2', '', 0, '', '', '', '', 'Dong-phuc-cap-2'),
(57, 'Đồng phục cấp 3', '', 0, '', '', '', '', 'Dong-phuc-cap-3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_dichvu`
--

CREATE TABLE `loai_tin_dichvu` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `trangchu` int(3) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `noidung` text NOT NULL,
  `noidung_en` text NOT NULL,
  `name_url` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin_dichvu`
--

INSERT INTO `loai_tin_dichvu` (`id`, `thuocloai`, `thuocloai_en`, `trangchu`, `hinhanh`, `logo`, `noidung`, `noidung_en`, `name_url`) VALUES
(1, 'Đồng phục văn phòng', '', 0, '', '', '', '', 'Dong-phuc-van-phong'),
(2, 'Đồng phục công sở nữ', '', 0, '', '', '', '', 'Dong-phuc-cong-so-nu'),
(3, 'Đồng phục nhà hàng khách sạn', '', 0, '', '', '', '', 'Dong-phuc-nha-hang-khach-san'),
(4, 'Đồng phục bệnh viện', '', 0, '', '', '', '', 'Dong-phuc-benh-vien'),
(5, 'Đồng phục bảo hộ lao động', '', 0, '', '', '', '', 'Dong-phuc-bao-ho-lao-dong'),
(6, 'Đồng phục kỹ sư', '', 0, '', '', '', '', 'Dong-phuc-ky-su'),
(7, 'Đồng phục thể thao', '', 0, '', '', '', '', 'Dong-phuc-the-thao'),
(8, 'Đồng phục giáo viên', '', 0, '', '', '', '', 'Dong-phuc-giao-vien');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_dichvuu`
--

CREATE TABLE `loai_tin_dichvuu` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `trangchu` int(3) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `noidung` text NOT NULL,
  `noidung_en` text NOT NULL,
  `name_url` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_sanpham`
--

CREATE TABLE `loai_tin_sanpham` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin_sanpham`
--

INSERT INTO `loai_tin_sanpham` (`id`, `thuocloai`, `thuocloai_en`, `hinhanh`, `logo`) VALUES
(47, 'Bún bò huế', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_thicong`
--

CREATE TABLE `loai_tin_thicong` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin_thicong`
--

INSERT INTO `loai_tin_thicong` (`id`, `thuocloai`) VALUES
(1, 'Giới Thiệu'),
(2, 'Địa Chỉ'),
(3, 'Số Điện Thoại'),
(4, 'Email'),
(5, 'Liên Kết'),
(6, 'Chính Sách'),
(7, 'Copyright'),
(8, 'Từ Khoá Seo'),
(9, 'Domain'),
(10, 'Hình banner');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_tintuc`
--

CREATE TABLE `loai_tin_tintuc` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `trangchu` int(3) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `noidung` text NOT NULL,
  `noidung_en` text NOT NULL,
  `name_url` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin_tintuc`
--

INSERT INTO `loai_tin_tintuc` (`id`, `thuocloai`, `thuocloai_en`, `trangchu`, `hinhanh`, `logo`, `noidung`, `noidung_en`, `name_url`) VALUES
(32, 'tin tức đồng phục hà thư', '', 0, '', '', '', '', 'tin-tuc-dong-phuc-ha-thu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_tin_title`
--

CREATE TABLE `loai_tin_title` (
  `id` int(11) NOT NULL,
  `thuocloai` text NOT NULL,
  `thuocloai_en` text NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_tin_title`
--

INSERT INTO `loai_tin_title` (`id`, `thuocloai`, `thuocloai_en`, `hinhanh`, `logo`) VALUES
(1, 'About Us', '', '', ''),
(2, 'Links', '', '', ''),
(3, 'Home Page Title', '', '', ''),
(4, 'Menu Left', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ma_sanpham`
--

CREATE TABLE `ma_sanpham` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) DEFAULT NULL,
  `hinhanh` mediumtext NOT NULL,
  `mota` text DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `giagoc` float NOT NULL,
  `giaban` float NOT NULL,
  `tukhoa1` text DEFAULT NULL,
  `tukhoa2` text DEFAULT NULL,
  `ngay` mediumtext NOT NULL,
  `thuocloai` int(3) NOT NULL,
  `noibat` int(3) NOT NULL,
  `banchay` int(3) NOT NULL,
  `khuyenmai` int(3) NOT NULL,
  `sale` int(3) NOT NULL,
  `hot` int(3) NOT NULL,
  `new` int(3) NOT NULL,
  `linkurl` varchar(255) NOT NULL,
  `hinhanh_chitiet` mediumtext NOT NULL,
  `hinhanh1` mediumtext NOT NULL,
  `hinhanh2` mediumtext NOT NULL,
  `hinhanh3` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ma_sanpham`
--

INSERT INTO `ma_sanpham` (`id`, `tieude`, `hinhanh`, `mota`, `noidung`, `giagoc`, `giaban`, `tukhoa1`, `tukhoa2`, `ngay`, `thuocloai`, `noibat`, `banchay`, `khuyenmai`, `sale`, `hot`, `new`, `linkurl`, `hinhanh_chitiet`, `hinhanh1`, `hinhanh2`, `hinhanh3`) VALUES
(1, 'Quần Thể Thao Học Sinh', 'dotheduc1.jpg', 'Quần thể thể thao học sinh chất lượng cao, thoáng mát, bền đẹp. Chuyên may đo và bán sẵn đồng phục học sinh, thể thao theo yêu cầu, giá tốt, giao hàng nhanh tại Đà Nẵng.', '<p>Quần thể thao học sinh kh&ocirc;ng chỉ mang đến sự thoải m&aacute;i khi vận động m&agrave; c&ograve;n thể hiện tinh thần đo&agrave;n kết, chuy&ecirc;n nghiệp của mỗi trường học. Với thiết kế trẻ trung, năng động c&ugrave;ng chất liệu cao cấp, đồng phục thể thao l&agrave; sự lựa chọn ho&agrave;n hảo cho c&aacute;c buổi học thể dục, ngoại kh&oacute;a v&agrave; thi đấu thể thao.</p>\r\n\r\n<p><strong>Đặc Điểm Nổi Bật Của Đồng Phục Thể Thao Học Sinh</strong></p>\r\n\r\n<p>Chất liệu cao cấp: Vải thun cotton, polyester hoặc vải m&egrave; tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i tốt, gi&uacute;p học sinh lu&ocirc;n cảm thấy dễ chịu.</p>\r\n\r\n<p>Thiết kế năng động: Kiểu d&aacute;ng hiện đại, ph&ugrave; hợp với lứa tuổi học sinh, gi&uacute;p c&aacute;c em tự tin khi vận động.</p>\r\n\r\n<p>Độ bền cao: Đường may chắc chắn, chất liệu bền bỉ gi&uacute;p đồng phục sử dụng l&acirc;u d&agrave;i m&agrave; kh&ocirc;ng bị x&ugrave; l&ocirc;ng hay bạc m&agrave;u.</p>\r\n\r\n<p>Dễ d&agrave;ng bảo quản: &Iacute;t nhăn, dễ giặt, nhanh kh&ocirc;, tiết kiệm thời gian chăm s&oacute;c.</p>\r\n\r\n<p><strong>Lợi &Iacute;ch Khi Sử Dụng Đồng Phục Thể Thao Học Sinh</strong></p>\r\n\r\n<p>Tạo sự đồng bộ, đo&agrave;n kết: Học sinh mặc đồng phục thể thao gi&uacute;p tăng tinh thần tập thể, gắn kết học sinh trong c&aacute;c hoạt động chung.</p>\r\n\r\n<p>Thuận tiện khi vận động: Thiết kế chuy&ecirc;n biệt gi&uacute;p học sinh thoải m&aacute;i tham gia c&aacute;c hoạt động thể chất m&agrave; kh&ocirc;ng bị g&ograve; b&oacute;.</p>\r\n\r\n<p>Đại diện h&igrave;nh ảnh nh&agrave; trường: Đồng phục thể thao học sinh đẹp v&agrave; chuy&ecirc;n nghiệp gi&uacute;p tạo ấn tượng tốt với phụ huynh v&agrave; cộng đồng.</p>\r\n\r\n<p><strong>C&aacute;ch Chọn Đồng Phục Thể Thao Ph&ugrave; Hợp</strong></p>\r\n\r\n<p>Chọn chất liệu ph&ugrave; hợp: Ưu ti&ecirc;n vải thấm h&uacute;t mồ h&ocirc;i, co gi&atilde;n tốt.</p>\r\n\r\n<p>Chọn size vừa vặn: Kh&ocirc;ng qu&aacute; chật cũng kh&ocirc;ng qu&aacute; rộng để đảm bảo sự thoải m&aacute;i khi vận động.</p>\r\n\r\n<p>Thiết kế ph&ugrave; hợp: M&agrave;u sắc, kiểu d&aacute;ng phải ph&ugrave; hợp với quy định của trường học.</p>\r\n\r\n<p><strong>Đặt May V&agrave; Mua Đồng Phục Thể Thao Học Sinh Ở Đ&acirc;u?</strong></p>\r\n\r\n<p>Nếu bạn đang t&igrave;m kiếm địa chỉ cung cấp đồng phục thể thao học sinh chất lượng, h&atilde;y li&ecirc;n hệ ngay với <strong>H&agrave; Thư (0905108532)</strong>. Ch&uacute;ng t&ocirc;i chuy&ecirc;n may đo v&agrave; cung cấp đồng phục thể thao cho học sinh với gi&aacute; cả cạnh tranh, đảm bảo chất lượng v&agrave; dịch vụ tốt nhất.</p>\r\n', 0, 0, 'quần thể thao cấp 1 đà nẵng', 'quần thể thao cấp 2 đà nẵng', '31/03/2025', 52, 0, 1, 0, 0, 0, 0, 'quan-the-thao-hoc-sinh', '', 'dotheduc2.jpg', 'dotheduc3.jpg', 'dotheduc4.jpg'),
(5, 'Bộ Quần Áo Thể Dục Học Sinh Cấp 1', 'bodotheduccap1.jpg', 'Bộ đồ thể dục học sinh cấp 1 chất liệu thun cotton mềm mịn, thoáng mát, co giãn tốt. Thiết kế rộng rãi, thoải mái vận động, không gây kích ứng da. Đặt hàng ngay – Giá tốt!', '<p>Bộ đồ thể dục học sinh cấp 1 l&agrave; lựa chọn l&yacute; tưởng cho c&aacute;c b&eacute; khi tham gia c&aacute;c hoạt động thể chất tại trường. Sản phẩm được may từ chất liệu <strong>cotton cao cấp</strong>, tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i tốt, gi&uacute;p b&eacute; lu&ocirc;n cảm thấy dễ chịu khi vận động.</p>\r\n\r\n<p><strong>Chất liệu:</strong> Vải thun cotton co gi&atilde;n, mềm mại, kh&ocirc;ng g&acirc;y k&iacute;ch ứng da<br />\r\n<strong>Thiết kế:</strong> &Aacute;o thun cổ tr&ograve;n/cổ bẻ + quần lửng hoặc quần d&agrave;i theo y&ecirc;u cầu<br />\r\n<strong>M&agrave;u sắc:</strong> Trắng phối xanh/đỏ hoặc theo mẫu của từng trường<br />\r\n<strong>Form d&aacute;ng:</strong> Rộng r&atilde;i, ph&ugrave; hợp với v&oacute;c d&aacute;ng trẻ em, kh&ocirc;ng g&acirc;y kh&oacute; chịu khi mặc</p>\r\n\r\n<p><strong>Ưu điểm nổi bật</strong></p>\r\n\r\n<p><strong>Tho&aacute;ng m&aacute;t, dễ vận động</strong>: Vải thun co gi&atilde;n tốt, gi&uacute;p b&eacute; hoạt động thoải m&aacute;i suốt cả ng&agrave;y<br />\r\n<strong>Bền đẹp, kh&ocirc;ng phai m&agrave;u</strong>: Được may tỉ mỉ, đường chỉ chắc chắn, giữ form tốt sau nhiều lần giặt<br />\r\n<strong>An to&agrave;n cho l&agrave;n da trẻ nhỏ</strong>: Chất vải mềm mại, kh&ocirc;ng chứa h&oacute;a chất độc hại<br />\r\n<strong>Gi&aacute; cả hợp l&yacute;</strong>: Sản phẩm c&oacute; mức gi&aacute; cạnh tranh, ph&ugrave; hợp với nhu cầu của phụ huynh</p>\r\n\r\n<p><strong>C&aacute;ch bảo quản</strong></p>\r\n\r\n<p>Giặt tay hoặc giặt m&aacute;y với nước lạnh, tr&aacute;nh ng&acirc;m l&acirc;u<br />\r\nKh&ocirc;ng sử dụng chất tẩy mạnh để giữ m&agrave;u sắc sản phẩm bền đẹp<br />\r\nPhơi nơi tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp qu&aacute; gắt</p>\r\n', 0, 0, 'Bộ đồ thể dục học sinh cấp 1 đà nẵng', 'Bộ thể dục tiểu học giá rẻ đà nẵng', '31/03/2025', 55, 0, 0, 0, 0, 0, 0, 'bo-quan-ao-the-duc-hoc-sinh-cap-1', '', 'bodotheduccap1-2.jpg', 'bodotheduccap1-4.jpg', 'bodotheduccap1-3.jpg'),
(2, 'Áo Đầm Bé Gái Đồng Phục Học Sinh Tiểu Học', 'dongphuc-tieuhoc-nu1.jpg', 'Áo đầm bé gái đồng phục học sinh tiểu học với thiết kế thanh lịch, chất liệu cao cấp, mềm mại, thoáng mát giúp bé thoải mái cả ngày. Chuyên may đo và bán sẵn, đa dạng mẫu mã, form chuẩn, bền đẹp. Đặt hàng ngay để bé yêu luôn tự tin đến trường!', '<p>&Aacute;o đầm b&eacute; g&aacute;i đồng phục học sinh tiểu học l&agrave; lựa chọn ho&agrave;n hảo d&agrave;nh cho c&aacute;c b&eacute; g&aacute;i trong độ tuổi đến trường. Với thiết kế <strong>đơn giản nhưng tinh tế</strong>, sản phẩm kh&ocirc;ng chỉ gi&uacute;p b&eacute; thoải m&aacute;i vận động m&agrave; c&ograve;n mang đến vẻ ngo&agrave;i gọn g&agrave;ng, thanh lịch. Đồng phục ph&ugrave; hợp với c&aacute;c trường tiểu học y&ecirc;u cầu trang phục v&aacute;y đầm cho học sinh nữ.</p>\r\n\r\n<p><strong>Chất Liệu Cao Cấp &ndash; Mềm Mại, Tho&aacute;ng M&aacute;t</strong></p>\r\n\r\n<p><strong>Cotton 65/35</strong>: Chất vải phổ biến với khả năng thấm h&uacute;t mồ h&ocirc;i tốt, gi&uacute;p b&eacute; thoải m&aacute;i suốt ng&agrave;y d&agrave;i.<br />\r\n<strong>Kate Silk</strong>: Vải mềm, mịn, &iacute;t nhăn, dễ giặt v&agrave; bền m&agrave;u theo thời gian.<br />\r\n<strong>Kaki Thun</strong>: C&oacute; độ co gi&atilde;n nhẹ, tạo sự linh hoạt khi b&eacute; vận động.</p>\r\n\r\n<p><strong>Thiết Kế Hiện Đại &ndash; Thanh Lịch, Dễ Thương</strong></p>\r\n\r\n<p><strong>Kiểu d&aacute;ng x&ograve;e nhẹ</strong>: Mang đến sự nữ t&iacute;nh, duy&ecirc;n d&aacute;ng.<br />\r\n<strong>Cổ &aacute;o sơ mi hoặc cổ tr&ograve;n</strong>: Lịch sự, ph&ugrave; hợp với m&ocirc;i trường học đường.<br />\r\n<strong>Họa tiết đơn giản</strong>: Kết hợp nơ hoặc đường viền nhẹ tạo điểm nhấn tinh tế.<br />\r\n<strong>Đủ size cho b&eacute; từ 6 &ndash; 11 tuổi</strong>: Dễ d&agrave;ng lựa chọn theo chiều cao v&agrave; c&acirc;n nặng của b&eacute;.</p>\r\n\r\n<p><strong>Lợi &Iacute;ch Khi Mặc Đồng Phục &Aacute;o Đầm Học Sinh</strong></p>\r\n\r\n<p><strong>Tạo sự đồng bộ</strong>: Gi&uacute;p c&aacute;c b&eacute; c&oacute; vẻ ngo&agrave;i chỉn chu, đồng đều với bạn b&egrave;.<br />\r\n<strong>Gi&uacute;p b&eacute; tự tin hơn</strong>: Thiết kế thoải m&aacute;i, ph&ugrave; hợp với mọi hoạt động học tập v&agrave; vui chơi.<br />\r\n<strong>Tiện lợi cho phụ huynh</strong>: Kh&ocirc;ng cần lo lắng về việc phối đồ h&agrave;ng ng&agrave;y cho b&eacute;.<br />\r\n<strong>Chất liệu an to&agrave;n</strong>: Kh&ocirc;ng g&acirc;y k&iacute;ch ứng da, ph&ugrave; hợp với l&agrave;n da nhạy cảm của trẻ nhỏ.</p>\r\n\r\n<p><strong>Hướng Dẫn Bảo Quản Đồng Phục</strong></p>\r\n\r\n<p><strong>Giặt tay hoặc giặt m&aacute;y với nước lạnh để giữ m&agrave;u sắc tươi mới.</strong><br />\r\n<strong>Tr&aacute;nh sử dụng chất tẩy mạnh để bảo vệ chất liệu vải.</strong><br />\r\n<strong>Phơi dưới b&oacute;ng r&acirc;m để tr&aacute;nh bạc m&agrave;u do &aacute;nh nắng gắt.</strong><br />\r\n<strong>Ủi ở nhiệt độ thấp để giữ form d&aacute;ng tốt nhất.</strong></p>\r\n\r\n<p><strong>Đặt H&agrave;ng &amp; Ch&iacute;nh S&aacute;ch Giao H&agrave;ng</strong></p>\r\n\r\n<p><strong>Giao h&agrave;ng to&agrave;n quốc</strong> &ndash; Nhanh ch&oacute;ng, tiện lợi.<br />\r\n<strong>Thanh to&aacute;n linh hoạt</strong> &ndash; Chấp nhận nhiều phương thức thanh to&aacute;n.<br />\r\n<strong>Đổi trả dễ d&agrave;ng</strong> &ndash; Hỗ trợ đổi size nếu kh&ocirc;ng vừa.</p>\r\n\r\n<p><strong>Li&ecirc;n Hệ Ngay Để Được Tư Vấn &amp; Đặt H&agrave;ng</strong></p>\r\n\r\n<p><strong>Xưởng May Đồng Phục H&agrave; Thư</strong> &ndash; Chuy&ecirc;n cung cấp đồng phục học sinh chất lượng cao.<br />\r\n<strong>Hotline/Zalo: 0905 108 53</strong></p>\r\n', 0, 0, 'đồng phục học sinh tiểu học bé gái đà nẵng', 'đầm đồng phục học sinh nữ cấp 1 đà nẵng', '27/03/2025', 55, 1, 0, 0, 0, 0, 0, 'ao-dam-be-gai-dong-phuc-hoc-sinh-tieu-hoc', '', '6158dongphuc-tieuhoc-nu2.jpg', '6158dongphuc-tieuhoc-nu3.jpg', '6158dongphuc-tieuhoc-nu4.jpg'),
(3, 'Đồ Trắng Quần Đùi Bé Trai Tiểu Học', 'dongphuc-quandui1.jpg', 'Đồ trắng quần đùi bé trai tiểu học với chất vải thoáng mát, thấm hút mồ hôi tốt, giúp bé luôn dễ chịu khi vận động. Chuyên may đo và bán sẵn, form chuẩn, bền đẹp. LH ngay 0905108532 để được tư vấn.', '<p>Đồ trắng quần đ&ugrave;i b&eacute; trai tiểu học l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c b&eacute; trong m&ocirc;i trường học đường. Với thiết kế đơn giản, tinh tế c&ugrave;ng chất liệu cao cấp, sản phẩm mang lại sự thoải m&aacute;i, dễ chịu khi vận động suốt cả ng&agrave;y. Đ&acirc;y l&agrave; bộ đồng phục cần thiết gi&uacute;p b&eacute; lu&ocirc;n gọn g&agrave;ng, sạch sẽ v&agrave; tự tin khi đến trường.</p>\r\n\r\n<p><strong>Chất Liệu Cao Cấp &ndash; Mềm Mại, Tho&aacute;ng M&aacute;t</strong></p>\r\n\r\n<p>Sản phẩm được may từ chất liệu vải cotton cao cấp, c&oacute; đặc t&iacute;nh thấm h&uacute;t mồ h&ocirc;i tốt, nhanh kh&ocirc; v&agrave; tho&aacute;ng kh&iacute;, gi&uacute;p b&eacute; lu&ocirc;n cảm thấy dễ chịu ngay cả trong những ng&agrave;y h&egrave; n&oacute;ng bức. Bề mặt vải mềm mại, kh&ocirc;ng g&acirc;y k&iacute;ch ứng da, đảm bảo an to&agrave;n cho l&agrave;n da nhạy cảm của trẻ.</p>\r\n\r\n<p><strong>Thiết Kế Tiện Lợi &ndash; Vừa Vặn, Thoải M&aacute;i</strong></p>\r\n\r\n<p><strong>&Aacute;o trắng cổ tr&ograve;n hoặc cổ bẻ:</strong> Form &aacute;o rộng r&atilde;i nhưng vẫn giữ được vẻ gọn g&agrave;ng, gi&uacute;p b&eacute; vận động linh hoạt.</p>\r\n\r\n<p><strong>Quần đ&ugrave;i trắng d&aacute;ng su&ocirc;ng:</strong> Lưng thun co gi&atilde;n tốt, &ocirc;m vừa vặn, kh&ocirc;ng g&acirc;y cảm gi&aacute;c kh&oacute; chịu khi b&eacute; chạy nhảy.</p>\r\n\r\n<p><strong>Đường may chắc chắn:</strong> Từng đường chỉ được may tỉ mỉ, bền đẹp, đảm bảo kh&ocirc;ng bị bung sổ chỉ sau nhiều lần giặt.</p>\r\n\r\n<p><strong>Ưu Điểm Nổi Bật</strong></p>\r\n\r\n<p>Chất vải cao cấp, tho&aacute;ng kh&iacute;, kh&ocirc;ng g&acirc;y b&iacute; b&aacute;ch.<br />\r\nKiểu d&aacute;ng đơn giản, gọn g&agrave;ng, ph&ugrave; hợp với mọi m&ocirc;i trường học đường.<br />\r\nĐường may chắc chắn, bền đẹp theo thời gian.<br />\r\nM&agrave;u sắc trắng tinh kh&ocirc;i, dễ d&agrave;ng phối hợp với c&aacute;c phụ kiện học sinh.<br />\r\nDễ giặt, kh&ocirc;ng phai m&agrave;u, kh&ocirc;ng x&ugrave; l&ocirc;ng.</p>\r\n\r\n<p><strong>Hướng Dẫn Bảo Quản</strong></p>\r\n\r\n<p>Giặt bằng tay hoặc m&aacute;y ở chế độ nhẹ để giữ độ bền cho vải.</p>\r\n\r\n<p>Phơi nơi tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp để tr&aacute;nh l&agrave;m ố v&agrave;ng vải trắng.</p>\r\n\r\n<p>Kh&ocirc;ng d&ugrave;ng chất tẩy mạnh để bảo vệ m&agrave;u sắc v&agrave; chất lượng sợi vải.</p>\r\n\r\n<p>Ủi ở nhiệt độ thấp nếu cần.</p>\r\n', 0, 0, 'bộ đồng phục nam sinh tiểu học đà nẵng', 'quần đùi trắng bé trai cấp 1 đà nẵng', '31/03/2025', 55, 1, 0, 0, 0, 0, 0, 'do-trang-quan-dui-be-trai-tieu-hoc', '', 'dongphuc-quandui3.jpg', 'dongphuc-quandui4.jpg', 'dongphuc-quandui2.jpg'),
(4, 'Đồng Phục Học Sinh Nam Nữ Cấp 1', 'dongphucnamnu1.jpg', 'Đồng phục học sinh nam nữ cấp 1 với chất liệu cao cấp, thoáng mát, mềm mại. Thiết kế chuẩn form, bền đẹp, giúp bé tự tin đến trường. Đặt hàng ngay với giá tốt, giao hàng toàn quốc, hỗ trợ đổi size miễn phí. LH: 0905 108 532.', '<p>Bộ đồng phục học sinh nam nữ cấp 1 l&agrave; trang phục kh&ocirc;ng thể thiếu gi&uacute;p b&eacute; lu&ocirc;n gọn g&agrave;ng, chỉn chu khi đến trường. Với thiết kế ph&ugrave; hợp theo ti&ecirc;u chuẩn của c&aacute;c trường tiểu học, chất liệu cao cấp c&ugrave;ng form d&aacute;ng thoải m&aacute;i, bộ đồng phục mang lại sự tự tin cho b&eacute; y&ecirc;u suốt ng&agrave;y d&agrave;i học tập v&agrave; vui chơi.</p>\r\n\r\n<p><strong>Chất Liệu Cao Cấp &ndash; Thấm H&uacute;t Tốt, Mềm Mại</strong></p>\r\n\r\n<p><strong>Vải cotton cao cấp</strong>: Mềm mại, tho&aacute;ng kh&iacute;, thấm h&uacute;t mồ h&ocirc;i tốt, gi&uacute;p b&eacute; lu&ocirc;n dễ chịu ngay cả trong m&ugrave;a h&egrave;.</p>\r\n\r\n<p><strong>Co gi&atilde;n nhẹ, kh&ocirc;ng g&acirc;y b&iacute; b&aacute;ch</strong>: B&eacute; c&oacute; thể vận động thoải m&aacute;i m&agrave; kh&ocirc;ng bị g&ograve; b&oacute;.</p>\r\n\r\n<p><strong>Bền m&agrave;u, kh&ocirc;ng x&ugrave; l&ocirc;ng</strong>: Đồng phục giữ được độ bền đẹp sau nhiều lần giặt.</p>\r\n\r\n<p><strong>Thiết Kế Tiện Lợi &ndash; Form D&aacute;ng Chuẩn</strong></p>\r\n\r\n<p><strong>Đồng phục nam:</strong> &Aacute;o sơ mi trắng hoặc &aacute;o thun cổ tr&ograve;n kết hợp với quần short lưng thun co gi&atilde;n tốt.<br />\r\n<strong>Đồng phục nữ:</strong> &Aacute;o sơ mi trắng hoặc &aacute;o thun phối với v&aacute;y xếp ly hoặc quần short tiện lợi.<br />\r\n<strong>Đường may chắc chắn:</strong> Từng đường chỉ được may tỉ mỉ, đảm bảo bền chắc, kh&ocirc;ng bung sổ.<br />\r\n<strong>Kiểu d&aacute;ng hiện đại, đ&uacute;ng quy chuẩn c&aacute;c trường học.</strong></p>\r\n\r\n<p><strong>Ưu Điểm Nổi Bật</strong></p>\r\n\r\n<p>Chất liệu cao cấp, mềm mại, kh&ocirc;ng g&acirc;y k&iacute;ch ứng da.<br />\r\nThiết kế gọn g&agrave;ng, gi&uacute;p b&eacute; tự tin đến trường.<br />\r\nCo gi&atilde;n tốt, gi&uacute;p b&eacute; vận động thoải m&aacute;i.<br />\r\nĐường may chắc chắn, đảm bảo độ bền cao.<br />\r\nM&agrave;u sắc bền đẹp, kh&ocirc;ng phai sau nhiều lần giặt.</p>\r\n\r\n<p><strong>Hướng Dẫn Bảo Quản</strong></p>\r\n\r\n<p>Giặt tay hoặc giặt m&aacute;y ở chế độ nhẹ.<br />\r\nPhơi nơi tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp để kh&ocirc;ng l&agrave;m ố m&agrave;u vải.<br />\r\nKh&ocirc;ng d&ugrave;ng chất tẩy mạnh để tr&aacute;nh ảnh hưởng đến chất lượng vải.<br />\r\nỦi ở nhiệt độ thấp để tr&aacute;nh l&agrave;m hư vải.</p>\r\n', 0, 0, 'may đồng phục học sinh tiểu học đà nẵng', 'đồng phục tiểu học chất lượng cao đà nẵng', '27/03/2025', 55, 0, 0, 0, 0, 0, 0, 'dong-phuc-hoc-sinh-nam-nu-cap-1', '', 'dongphucnamnu2.jpg', 'dongphucnamnu3.jpg', 'dongphucnamnu4.jpg'),
(6, 'Áo Trắng Học Sinh Cấp 2', 'aotrang-hscap2.jpg', 'Áo trắng học sinh cấp 2 chuẩn đồng phục, chất vải thoáng mát, ít nhăn, dễ ủi. Thiết kế thanh lịch, đường may chắc chắn, giữ form đẹp. Giá tốt, đo may tận nơi và có sẵn tại Đà Nẵng.', '<p>&Aacute;o trắng học sinh cấp 2 l&agrave; trang phục kh&ocirc;ng thể thiếu đối với học sinh trung học cơ sở. Sản phẩm được thiết kế <strong>chuẩn form d&aacute;ng</strong>, chất liệu <strong>vải kate, cotton hoặc polyester cao cấp</strong>, gi&uacute;p thấm h&uacute;t mồ h&ocirc;i tốt, bền đẹp, kh&ocirc;ng nhăn v&agrave; dễ ủi.</p>\r\n\r\n<p><strong>Chất liệu:</strong> Kate Mỹ, Kate Silk, cotton pha &ndash; thấm h&uacute;t mồ h&ocirc;i, &iacute;t nhăn<br />\r\n<strong>Thiết kế:</strong> Cổ bẻ hoặc cổ tr&ograve;n, tay ngắn hoặc tay d&agrave;i theo y&ecirc;u cầu<br />\r\n<strong>M&agrave;u sắc:</strong> Trắng tinh kh&ocirc;i, dễ kết hợp với quần &acirc;u hoặc v&aacute;y đồng phục<br />\r\n<strong>Form d&aacute;ng:</strong> Chuẩn đồng phục học sinh, vừa vặn, lịch sự</p>\r\n\r\n<p><strong>Ưu điểm nổi bật</strong></p>\r\n\r\n<p><strong>Tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i tốt</strong>: Gi&uacute;p học sinh lu&ocirc;n thoải m&aacute;i trong cả ng&agrave;y học<br />\r\n<strong>Chống nhăn, giữ form tốt</strong>: Chất liệu vải cao cấp, bền đẹp sau nhiều lần giặt<br />\r\n<strong>Đường may chắc chắn, kh&ocirc;ng xổ chỉ</strong>: Đảm bảo t&iacute;nh thẩm mỹ v&agrave; độ bền cao<br />\r\n<strong>Gi&aacute; cả hợp l&yacute;, nhiều size cho mọi v&oacute;c d&aacute;ng</strong></p>\r\n\r\n<p><strong>C&aacute;ch bảo quản</strong></p>\r\n\r\n<p>Giặt tay hoặc giặt m&aacute;y với chế độ nhẹ, tr&aacute;nh ng&acirc;m l&acirc;u<br />\r\nKh&ocirc;ng sử dụng chất tẩy mạnh để giữ m&agrave;u sắc sản phẩm lu&ocirc;n trắng s&aacute;ng<br />\r\nPhơi nơi tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp qu&aacute; mạnh</p>\r\n', 0, 0, 'Áo trắng trung học cơ sở đà nẵng', 'áo trắng học sinh cấp 2 đà nẵng', '31/03/2025', 56, 1, 1, 0, 0, 0, 0, 'ao-trang-hoc-sinh-cap-2', '', 'aotrang-hscap2-1.jpg', 'aotrang-hscap2-2.jpg', 'aotrang-hscap2-3.jpg'),
(7, 'Quần 3 Sọc Thể Thao Ống Rộng Màu Đen', 'quan3soc3.jpg', 'Quần thể thao 3 sọc ống rộng màu đen – chất liệu cao cấp, co giãn thoải mái, không xù lông. Thiết kế trẻ trung, dễ phối đồ, phù hợp đi học, chơi thể thao. Hàng có sẵn hoặc đến nơi đo may.', '<p>Quần thể thao 3 sọc ống rộng m&agrave;u đen l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c bạn trẻ y&ecirc;u th&iacute;ch phong c&aacute;ch <strong>năng động, thoải m&aacute;i v&agrave; thời trang</strong>. Thiết kế <strong>ống rộng hiện đại</strong>, kết hợp với <strong>3 sọc dọc đặc trưng</strong> gi&uacute;p t&ocirc;n d&aacute;ng v&agrave; tạo cảm gi&aacute;c khỏe khoắn. Chất liệu <strong>thun co gi&atilde;n 4 chiều, mềm mại, thấm h&uacute;t mồ h&ocirc;i tốt</strong>, ph&ugrave; hợp cho cả <strong>đi học, tập luyện thể thao hay mặc h&agrave;ng ng&agrave;y</strong>.</p>\r\n\r\n<p><strong>Chất liệu:</strong> Thun lạnh, thun da c&aacute; hoặc nỉ co gi&atilde;n &ndash; tho&aacute;ng m&aacute;t, đ&agrave;n hồi tốt<br />\r\n<strong>Thiết kế:</strong> Ống rộng, lưng chun co gi&atilde;n, d&acirc;y r&uacute;t điều chỉnh tiện lợi<br />\r\n<strong>M&agrave;u sắc:</strong> Đen chủ đạo kết hợp 3 sọc trắng c&aacute; t&iacute;nh<br />\r\n<strong>Phong c&aacute;ch:</strong> Streetwear trẻ trung, unisex ph&ugrave; hợp cho cả nam &amp; nữ</p>\r\n\r\n<p><strong>Ưu điểm nổi bật</strong></p>\r\n\r\n<p><strong>Chất vải cao cấp:</strong> Co gi&atilde;n tốt, kh&ocirc;ng x&ugrave; l&ocirc;ng, thấm h&uacute;t mồ h&ocirc;i hiệu quả<br />\r\n<strong>Thiết kế ống rộng thời trang:</strong> Dễ phối đồ, gi&uacute;p đ&ocirc;i ch&acirc;n tr&ocirc;ng thon d&agrave;i hơn<br />\r\n<strong>Lưng chun + d&acirc;y r&uacute;t:</strong> Ph&ugrave; hợp với nhiều d&aacute;ng người, thoải m&aacute;i vận động<br />\r\n<strong>Dễ phối đồ:</strong> Kết hợp ho&agrave;n hảo với &aacute;o ph&ocirc;ng, hoodie, &aacute;o thể thao<br />\r\n<strong>Ứng dụng đa dạng:</strong> Đi học, đi chơi, tập thể dục, mặc ở nh&agrave; đều ph&ugrave; hợp</p>\r\n\r\n<p><strong>C&aacute;ch bảo quản</strong></p>\r\n\r\n<p>Giặt m&aacute;y hoặc giặt tay với nước lạnh để giữ m&agrave;u bền l&acirc;u<br />\r\nKh&ocirc;ng d&ugrave;ng chất tẩy mạnh để tr&aacute;nh phai m&agrave;u<br />\r\nỦi ở nhiệt độ thấp để tr&aacute;nh hỏng vải thun<br />\r\nPhơi nơi tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng gắt trực tiếp</p>\r\n', 0, 0, 'Quần thể thao 3 sọc nam nữ màu đen', 'Quần thể thao ống rộng đen đà nẵng', '31/03/2025', 52, 1, 0, 0, 0, 0, 0, 'quan-3-soc-the-thao-ong-rong-mau-den', '', 'quan3soc.jpg', 'quan3soc2.jpg', 'quan3soc1.jpg'),
(8, 'Quần Thể Dục 3 Sọc Poly Co Giãn 4 Chiều Màu Xanh Đen', 'quantheduc1.jpg', 'Quần thể dục 3 sọc poly màu xanh đen – vải co giãn 4 chiều, thoáng mát, thấm hút mồ hôi. Kiểu dáng thể thao hiện đại, phù hợp học sinh, người tập luyện. Đến lấy size đo may và hàng có sẵn.', '<p>Quần thể dục 3 sọc poly m&agrave;u xanh đen l&agrave; lựa chọn ho&agrave;n hảo cho học sinh v&agrave; những ai y&ecirc;u th&iacute;ch phong c&aacute;ch <strong>thể thao năng động</strong>. Chất liệu <strong>Polyester cao cấp</strong>, kết hợp với <strong>c&ocirc;ng nghệ co gi&atilde;n 4 chiều</strong>, gi&uacute;p quần <strong>tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i tốt</strong>, mang đến cảm gi&aacute;c thoải m&aacute;i khi vận động. Thiết kế <strong>3 sọc trắng chạy dọc theo th&acirc;n quần</strong>, tạo điểm nhấn trẻ trung, hiện đại.</p>\r\n\r\n<p><strong>Chất liệu:</strong> Vải Poly co gi&atilde;n 4 chiều &ndash; mềm mại, đ&agrave;n hồi tốt<br />\r\n<strong>Thiết kế:</strong> Lưng chun co gi&atilde;n + d&acirc;y r&uacute;t điều chỉnh vừa vặn<br />\r\n<strong>M&agrave;u sắc:</strong> Xanh đen thanh lịch, dễ phối với &aacute;o thể thao<br />\r\n<strong>Kiểu d&aacute;ng:</strong> Slim fit hoặc ống rộng, ph&ugrave; hợp với nhiều d&aacute;ng người</p>\r\n\r\n<p><strong>Ưu điểm nổi bật</strong></p>\r\n\r\n<p><strong>Chất vải cao cấp:</strong> Co gi&atilde;n tốt, kh&ocirc;ng nhăn, kh&ocirc;ng bai d&atilde;o sau thời gian d&agrave;i sử dụng<br />\r\n<strong>Thấm h&uacute;t mồ h&ocirc;i tốt:</strong> Th&iacute;ch hợp cho hoạt động thể dục, vận động ngo&agrave;i trời<br />\r\n<strong>Kiểu d&aacute;ng thể thao:</strong> Thiết kế &ocirc;m vừa phải, gi&uacute;p t&ocirc;n d&aacute;ng nhưng vẫn thoải m&aacute;i<br />\r\n<strong>Dễ phối đồ:</strong> Kết hợp ho&agrave;n hảo với &aacute;o thể dục, &aacute;o thun, hoodie, gi&agrave;y sneaker<br />\r\n<strong>Ứng dụng đa năng:</strong> Mặc đi học, tập luyện, mặc nh&agrave; đều rất tiện lợi</p>\r\n\r\n<p><strong>C&aacute;ch bảo quản</strong></p>\r\n\r\n<p>Giặt với nước lạnh để giữ m&agrave;u l&acirc;u phai<br />\r\nTr&aacute;nh sử dụng chất tẩy mạnh để bảo vệ sợi vải<br />\r\nỦi ở nhiệt độ thấp để tr&aacute;nh l&agrave;m chảy sợi Poly<br />\r\nPhơi nơi r&acirc;m m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp</p>\r\n', 0, 0, 'Quần thể dục học sinh 3 sọc đà nẵng', 'quần thể dục học sinh cấp 2 đà nẵng', '31/03/2025', 52, 1, 0, 0, 0, 0, 0, 'quan-the-duc-3-soc-poly-co-gian-4-chieu-mau-xanh-den', '', 'quantheduc2.jpg', 'quantheduc3.jpg', 'quantheduc4.jpg'),
(9, 'COMBO Áo Thun Thể Dục Màu Vàng Và Quần Thể Dục 2 Sọc ', 'COMBOtheduc1.jpg', 'Combo áo thun thể dục màu vàng và quần thể dục 2 sọc – chất vải cotton/poly co giãn 4 chiều, thấm hút tốt, thoáng mát. Kiểu dáng thể thao, bền đẹp, phù hợp học sinh.', '<p>Bộ đồng phục thể dục gồm <strong>&aacute;o thun m&agrave;u v&agrave;ng + quần thể dục 2 sọc</strong> l&agrave; lựa chọn ho&agrave;n hảo cho học sinh tiểu học, trung học. Chất liệu vải <strong>thun cotton/Poly co gi&atilde;n 4 chiều</strong>, thấm h&uacute;t mồ h&ocirc;i tốt, mang lại cảm gi&aacute;c <strong>tho&aacute;ng m&aacute;t, thoải m&aacute;i</strong> trong suốt qu&aacute; tr&igrave;nh vận động. Thiết kế đơn giản nhưng <strong>thể thao, năng động</strong>, ph&ugrave; hợp mặc đi học, tập thể dục hay sinh hoạt ngoại kh&oacute;a.</p>\r\n\r\n<p><strong>&Aacute;o thun</strong>: Cổ tr&ograve;n, tay ngắn, chất vải mềm mại, tho&aacute;ng kh&iacute;<br />\r\n<strong>Quần thể dục</strong>: Lưng thun co gi&atilde;n, 2 sọc chạy dọc theo th&acirc;n quần tạo điểm nhấn<br />\r\n<strong>M&agrave;u sắc</strong>: &Aacute;o v&agrave;ng tươi trẻ trung, quần xanh đen dễ phối đồ<br />\r\n<strong>Ứng dụng</strong>: Đồng phục thể dục, hoạt động ngo&agrave;i trời, thể thao</p>\r\n\r\n<p><strong>Ưu điểm nổi bật</strong></p>\r\n\r\n<p><strong>Chất liệu vải cao cấp</strong>: Mềm mịn, thấm h&uacute;t tốt, tho&aacute;ng kh&iacute;<br />\r\n<strong>Thoải m&aacute;i vận động</strong>: Kiểu d&aacute;ng rộng r&atilde;i, kh&ocirc;ng g&ograve; b&oacute;<br />\r\n<strong>Độ bền cao</strong>: Kh&ocirc;ng x&ugrave; l&ocirc;ng, kh&ocirc;ng phai m&agrave;u sau nhiều lần giặt<br />\r\n<strong>M&agrave;u sắc tươi s&aacute;ng</strong>: &Aacute;o v&agrave;ng nổi bật, quần sọc thời trang<br />\r\n<strong>Dễ bảo quản</strong>: Giặt m&aacute;y hay giặt tay đều kh&ocirc;ng bị co r&uacute;t</p>\r\n\r\n<p><strong>Hướng dẫn bảo quản</strong></p>\r\n\r\n<p>Giặt ri&ecirc;ng &aacute;o v&agrave;ng để tr&aacute;nh lem m&agrave;u<br />\r\nKh&ocirc;ng giặt với chất tẩy mạnh<br />\r\nPhơi nơi tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp<br />\r\nỦi ở nhiệt độ vừa để bảo vệ sợi vải</p>\r\n', 0, 0, 'Combo đồng phục thể dục học sinh đà nẵng', 'bộ quần áo thể dục học sinh cấp 2 đà nẵng', '31/03/2025', 52, 0, 0, 0, 0, 0, 0, 'combo-ao-thun-the-duc-mau-vang-va-quan-the-duc-2-soc-', '', 'COMBOtheduc2.jpg', 'COMBOtheduc3.jpg', 'COMBOtheduc4.jpg'),
(10, 'Quần Tây Nữ Đồng Phục Cấp 3 Màu Xanh Đen', 'quantaynu1.jpg', 'Quần tây nữ đồng phục cấp 3 màu xanh đen, form dáng thanh lịch, vải bền đẹp, ít nhăn, thoáng khí. Thiết kế lưng cao/lưng vừa, phù hợp với môi trường học đường. ', '<p>Quần t&acirc;y nữ m&agrave;u xanh đen l&agrave; mẫu <strong>đồng phục học sinh cấp 3</strong> được thiết kế theo phong c&aacute;ch <strong>trẻ trung, thanh lịch</strong>, ph&ugrave; hợp với m&ocirc;i trường học đường. Chất liệu <strong>vải cao cấp, co gi&atilde;n nhẹ, &iacute;t nhăn</strong>, gi&uacute;p c&aacute;c bạn nữ tự tin khi đến lớp. Kiểu d&aacute;ng <strong>&ocirc;m vừa vặn, đứng form, lưng cao hoặc lưng vừa</strong>, mang lại cảm gi&aacute;c thoải m&aacute;i suốt cả ng&agrave;y d&agrave;i.</p>\r\n\r\n<p><strong>Chất liệu</strong>: Vải Kaki/Poly/Cotton co gi&atilde;n nhẹ, tho&aacute;ng kh&iacute;<br />\r\n<strong>Kiểu d&aacute;ng</strong>: D&aacute;ng su&ocirc;ng/ống c&ocirc;n, lưng vừa hoặc lưng cao<br />\r\n<strong>M&agrave;u sắc</strong>: Xanh đen dễ phối đồ, ph&ugrave; hợp mọi v&oacute;c d&aacute;ng<br />\r\n<strong>Ứng dụng</strong>: Mặc đi học, đi chơi, tham gia c&aacute;c hoạt động ngoại kh&oacute;a</p>\r\n\r\n<p><strong>Ưu điểm nổi bật</strong></p>\r\n\r\n<p><strong>Form d&aacute;ng chuẩn</strong>: Gi&uacute;p t&ocirc;n d&aacute;ng, che khuyết điểm đ&ocirc;i ch&acirc;n<br />\r\n<strong>Vải bền đẹp</strong>: &Iacute;t nhăn, kh&ocirc;ng phai m&agrave;u, giặt dễ d&agrave;ng<br />\r\n<strong>Thiết kế đơn giản, dễ phối</strong>: Mặc c&ugrave;ng &aacute;o sơ mi, &aacute;o thun đều đẹp<br />\r\n<strong>Thoải m&aacute;i vận động</strong>: Đường may chắc chắn, ph&ugrave; hợp mọi hoạt động</p>\r\n\r\n<p><strong>Hướng dẫn bảo quản</strong></p>\r\n\r\n<p>Giặt m&aacute;y hoặc giặt tay với nước lạnh<br />\r\nKh&ocirc;ng d&ugrave;ng chất tẩy mạnh để tr&aacute;nh phai m&agrave;u<br />\r\nỦi ở nhiệt độ vừa để giữ form d&aacute;ng đẹp<br />\r\nPhơi nơi tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp</p>\r\n', 200000, 200000, 'Quần tây nữ học sinh cấp 3 đà nẵng', 'Quần tây nữ xanh đen đà nẵng', '08/05/2025', 57, 0, 1, 0, 0, 0, 0, 'quan-tay-nu-dong-phuc-cap-3-mau-xanh-den', '', 'quantaynu2.jpg', 'quantaynu3.jpg', 'quantaynu4.jpg'),
(11, 'Quần Tây Nam Xanh Đen', 'quantaynam1.jpg', 'Đồng phục học sinh quần tây nam xanh đen, thiết kế chuẩn form, vải bền đẹp, thoáng mát. Phù hợp cho học sinh trung học cơ sở và trung học phổ thông Đà Nẵng.', '<p>Quần t&acirc;y nam xanh đen l&agrave; lựa chọn ho&agrave;n hảo cho những qu&yacute; &ocirc;ng y&ecirc;u th&iacute;ch phong c&aacute;ch lịch l&atilde;m, sang trọng nhưng vẫn mang lại sự thoải m&aacute;i trong suốt cả ng&agrave;y. Với gam m&agrave;u xanh đen tinh tế, chiếc quần n&agrave;y ph&ugrave; hợp cho cả m&ocirc;i trường c&ocirc;ng sở lẫn c&aacute;c sự kiện quan trọng, gi&uacute;p bạn tự tin v&agrave; chuy&ecirc;n nghiệp hơn trong mọi ho&agrave;n cảnh.</p>\r\n\r\n<p><strong>Chất Liệu Cao Cấp &ndash; Tho&aacute;ng M&aacute;t &amp; Bền Đẹp</strong></p>\r\n\r\n<p><strong>Vải cao cấp</strong>: Được l&agrave;m từ chất liệu cotton pha polyester hoặc vải wool cao cấp, gi&uacute;p quần giữ form tốt, hạn chế nhăn v&agrave; lu&ocirc;n mềm mại khi mặc.<br />\r\n<strong>Tho&aacute;ng kh&iacute;, thấm h&uacute;t tốt</strong>: Đảm bảo sự thoải m&aacute;i ngay cả khi mặc trong thời gian d&agrave;i.<br />\r\n<strong>Độ co gi&atilde;n nhẹ</strong>: Hỗ trợ cử động linh hoạt, ph&ugrave; hợp cho cả d&acirc;n văn ph&ograve;ng v&agrave; những ai di chuyển nhiều.</p>\r\n\r\n<p><strong>Thiết Kế Hiện Đại &ndash; Đa Dụng</strong></p>\r\n\r\n<p><strong>Kiểu d&aacute;ng slim fit hoặc regular fit</strong>: T&ocirc;n d&aacute;ng nhưng vẫn mang lại sự thoải m&aacute;i.<br />\r\n<strong>Gam m&agrave;u xanh đen dễ phối đồ</strong>: Ph&ugrave; hợp với &aacute;o sơ mi trắng, &aacute;o polo hoặc &aacute;o vest tạo n&ecirc;n vẻ ngo&agrave;i lịch l&atilde;m.<br />\r\n<strong>Cạp quần chuẩn chỉnh, đường may chắc chắn</strong>: Gi&uacute;p quần giữ được độ bền theo thời gian.<br />\r\n<strong>T&uacute;i quần tiện lợi</strong>: Thiết kế t&uacute;i trước v&agrave; t&uacute;i sau c&oacute; kh&oacute;a hoặc khuy g&agrave;i, vừa thời trang vừa tiện dụng.</p>\r\n\r\n<p><strong>C&aacute;ch Phối Đồ Cực Chất Với Quần T&acirc;y Nam Xanh Đen</strong></p>\r\n\r\n<p><strong>C&ocirc;ng sở &amp; Lịch l&atilde;m</strong>: Kết hợp với &aacute;o sơ mi trắng/ xanh nhạt + gi&agrave;y t&acirc;y da.<br />\r\n<strong>Trẻ trung &amp; Hiện đại</strong>: Mặc với &aacute;o polo hoặc blazer + gi&agrave;y lười.<br />\r\n<strong>Dự tiệc &amp; Sự kiện</strong>: Mix c&ugrave;ng &aacute;o vest xanh navy hoặc đen, c&agrave; vạt ton-sur-ton.</p>\r\n', 0, 0, 'quần tây xanh nam đà nẵng', 'quần tây học sinh đà nẵng', ' 28/03/2025 ', 57, 1, 0, 0, 0, 0, 0, 'quan-tay-nam-xanh-den', '', '836quantaynam2.jpg', '836quantaynam3.jpg', '836quantaynam4.jpg'),
(12, 'Áo Dài Nữ Sinh Cấp 3', 'aodai1.jpg', 'Áo dài nữ sinh cấp 3 – thiết kế thanh lịch, chất liệu vải mềm mại, thoáng mát, giúp tôn dáng dịu dàng. Đường may tinh tế, phù hợp cho mọi dáng người.', '<p>&Aacute;o d&agrave;i nữ sinh cấp 3 l&agrave; trang phục kh&ocirc;ng thể thiếu đối với c&aacute;c bạn g&aacute;i trong những năm học cuối cấp. Được thiết kế theo phong c&aacute;ch truyền thống với m&agrave;u trắng tinh kh&ocirc;i, &aacute;o d&agrave;i mang đến vẻ đẹp dịu d&agrave;ng, thanh lịch v&agrave; đầy duy&ecirc;n d&aacute;ng.</p>\r\n\r\n<p><strong>Chất liệu cao cấp</strong>: Vải lụa, voan hoặc phi b&oacute;ng mềm mại, tho&aacute;ng m&aacute;t, gi&uacute;p người mặc cảm thấy thoải m&aacute;i cả ng&agrave;y d&agrave;i.<br />\r\n<strong>Thiết kế chuẩn form d&aacute;ng</strong>: Cổ cao thanh lịch, t&agrave; &aacute;o d&agrave;i thướt tha, &ocirc;m nhẹ cơ thể nhưng vẫn đảm bảo sự thoải m&aacute;i khi di chuyển.<br />\r\n<strong>Đường may tinh tế</strong>: Từng đường kim mũi chỉ được chăm ch&uacute;t kỹ lưỡng, gi&uacute;p &aacute;o d&agrave;i vừa vặn, t&ocirc;n l&ecirc;n v&oacute;c d&aacute;ng mềm mại của nữ sinh.<br />\r\n<strong>Dễ phối hợp</strong>: Kết hợp c&ugrave;ng quần lụa trắng hoặc quần phi b&oacute;ng tạo n&ecirc;n set đồ ho&agrave;n hảo cho những ng&agrave;y đến trường hoặc tham gia sự kiện quan trọng.</p>\r\n', 0, 0, 'áo dài học sinh nữ cấp 3 đà nẵng', 'áo dài học sinh cấp 3 đà nẵng', '28/03/2025', 57, 1, 1, 0, 0, 0, 0, 'ao-dai-nu-sinh-cap-3', '', '8184aodai2.jpg', '8184aodai-3.jpg', '8184aodai-4.jpg'),
(13, 'Áo Cờ Đỏ Sao Vàng', 'aovn1.jpg', 'Áo cờ đỏ sao vàng trẻ em - người lớn của Đồng Phục Hà Thư với chất liệu cao cấp, màu sắc bền đẹp. Phù hợp cho sự kiện quốc gia, cổ vũ thể thao, hội trại. Đặt hàng ngay để thể hiện niềm tự hào dân tộc!', '<p><strong>Tự h&agrave;o d&acirc;n tộc &ndash; Tỏa s&aacute;ng tinh thần Việt Nam</strong></p>\r\n\r\n<p>&Aacute;o cờ đỏ sao v&agrave;ng kh&ocirc;ng chỉ l&agrave; một bộ trang phục, m&agrave; c&ograve;n l&agrave; biểu tượng của l&ograve;ng y&ecirc;u nước, niềm tự h&agrave;o d&acirc;n tộc. Đ&acirc;y l&agrave; lựa chọn ho&agrave;n hảo cho c&aacute;c sự kiện quan trọng như ng&agrave;y Quốc kh&aacute;nh 2/9, ng&agrave;y Giải ph&oacute;ng 30/4, cổ vũ b&oacute;ng đ&aacute;, hội trại, hoặc c&aacute;c chương tr&igrave;nh ngoại kh&oacute;a. Đồng phục H&agrave; Thư h&acirc;n hạnh cung cấp những mẫu &aacute;o cờ đỏ sao v&agrave;ng chất lượng cao cho cả trẻ em v&agrave; người lớn, gi&uacute;p bạn thể hiện tinh thần Việt Nam mạnh mẽ nhất.</p>\r\n\r\n<p><strong>Thiết kế đơn giản nhưng đầy &yacute; nghĩa</strong></p>\r\n\r\n<p>Mẫu &aacute;o cờ đỏ sao v&agrave;ng c&oacute; thiết kế cổ tr&ograve;n hoặc cổ bẻ, m&agrave;u đỏ rực rỡ nổi bật với ng&ocirc;i sao v&agrave;ng ở giữa ngực &ndash; tượng trưng cho tinh thần đo&agrave;n kết v&agrave; &yacute; ch&iacute; vươn l&ecirc;n của d&acirc;n tộc Việt Nam. Chất liệu vải cao cấp gi&uacute;p &aacute;o lu&ocirc;n mềm mại, thấm h&uacute;t mồ h&ocirc;i tốt, mang lại sự thoải m&aacute;i khi mặc cả ng&agrave;y d&agrave;i.</p>\r\n\r\n<p><strong>Tại sao n&ecirc;n chọn &aacute;o cờ đỏ sao v&agrave;ng của Đồng Phục H&agrave; Thư?</strong></p>\r\n\r\n<p><strong>Chất liệu vải cao cấp:</strong> Co gi&atilde;n tốt, tho&aacute;ng m&aacute;t, kh&ocirc;ng x&ugrave; l&ocirc;ng hay phai m&agrave;u sau nhiều lần giặt.<br />\r\n<strong>M&agrave;u sắc tươi s&aacute;ng, bền đẹp:</strong> C&ocirc;ng nghệ in ấn hiện đại gi&uacute;p giữ nguy&ecirc;n m&agrave;u sắc bền l&acirc;u.<br />\r\n<strong>Size đa dạng:</strong> Ph&ugrave; hợp cho mọi lứa tuổi từ trẻ em đến người lớn.<br />\r\n<strong>Đặt h&agrave;ng số lượng lớn:</strong> Cung cấp đồng phục cho c&ocirc;ng ty, trường học, hội nh&oacute;m với gi&aacute; ưu đ&atilde;i.<br />\r\nGia c&ocirc;ng theo y&ecirc;u cầu: Nhận may theo k&iacute;ch thước ri&ecirc;ng, in logo hoặc slogan theo y&ecirc;u cầu.</p>\r\n\r\n<p><strong>Ứng dụng của &aacute;o cờ đỏ sao v&agrave;ng</strong></p>\r\n\r\n<p><strong>Cổ vũ thể thao:</strong> H&ograve;a chung kh&ocirc;ng kh&iacute; cuồng nhiệt c&ugrave;ng đội tuyển Việt Nam.<br />\r\n<strong>VN Sự kiện quốc gia:</strong> Quốc kh&aacute;nh, ng&agrave;y Thống nhất đất nước, c&aacute;c lễ hội truyền thống.<br />\r\n<strong>Hoạt động ngoại kh&oacute;a:</strong> Hội trại, du lịch, teambuilding, hoạt động thiện nguyện.<br />\r\n<strong>Đồng phục gia đ&igrave;nh:</strong> M&oacute;n qu&agrave; &yacute; nghĩa thể hiện t&igrave;nh y&ecirc;u đất nước ngay từ nhỏ.</p>\r\n\r\n<p><strong>Li&ecirc;n hệ đặt h&agrave;ng ngay h&ocirc;m nay</strong></p>\r\n\r\n<p>H&atilde;y để Đồng Phục H&agrave; Thư gi&uacute;p bạn c&oacute; những chiếc &aacute;o cờ đỏ sao v&agrave;ng chất lượng nhất với gi&aacute; tốt nhất. Ch&uacute;ng t&ocirc;i cam kết sản phẩm chuẩn đẹp, giao h&agrave;ng nhanh ch&oacute;ng tr&ecirc;n to&agrave;n quốc.</p>\r\n', 0, 0, 'áo cờ đỏ sao vàng trẻ em đà nẵng', 'đặt áo cờ đỏ sao vàng số lượng lớn đà nẵng', ' 29/03/2025 ', 53, 1, 0, 0, 0, 0, 0, 'ao-co-do-sao-vang', '', '7099aovn4.jpg', '7099aovn2.jpg', '7099aovn3.jpg'),
(14, 'Áo Sơ Mi Trắng Tay Dài', 'somi-taydai1.jpg', 'Áo sơ mi trắng tay dài – Sự lựa chọn thanh lịch, chuyên nghiệp cho học sinh, nhân viên văn phòng. Chất liệu cao cấp, thiết kế hiện đại, dễ phối đồ. Đặt hàng ngay tại Đồng Phục Hà Thư – Sơn Trà, Đà Nẵng.', '<p><strong>Đặc Điểm Nổi Bật:</strong></p>\r\n\r\n<p><strong>Chất liệu cao cấp</strong>: Vải cotton tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i tốt, gi&uacute;p người mặc lu&ocirc;n thoải m&aacute;i.<br />\r\n<strong>Thiết kế hiện đại</strong>: Form &aacute;o đứng d&aacute;ng, đường may tinh tế, ph&ugrave; hợp cho cả nam v&agrave; nữ.<br />\r\n<strong>Dễ d&agrave;ng phối đồ</strong>: C&oacute; thể kết hợp với quần t&acirc;y, ch&acirc;n v&aacute;y hoặc quần jeans để tạo n&ecirc;n phong c&aacute;ch lịch sự hoặc năng động.<br />\r\n<strong>Ứng dụng đa dạng</strong>: Ph&ugrave; hợp cho học sinh, nh&acirc;n vi&ecirc;n văn ph&ograve;ng, nh&acirc;n vi&ecirc;n phục vụ nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn hoặc diện trong c&aacute;c sự kiện quan trọng.</p>\r\n\r\n<p><strong>Tại sao n&ecirc;n chọn &aacute;o sơ mi trắng tay d&agrave;i tại Đồng Phục H&agrave; Thư?</strong></p>\r\n\r\n<p><strong>Cam kết chất lượng</strong> với đường may chắc chắn, form d&aacute;ng chuẩn.</p>\r\n\r\n<p><strong>Đa dạng mẫu m&atilde;</strong>, ph&ugrave; hợp với mọi nhu cầu của kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p><strong>Dịch vụ may đo theo y&ecirc;u cầu</strong>, đảm bảo vừa vặn v&agrave; thoải m&aacute;i.</p>\r\n\r\n<p><strong>Giao h&agrave;ng nhanh ch&oacute;ng</strong>, hỗ trợ đặt h&agrave;ng số lượng lớn với gi&aacute; ưu đ&atilde;i.</p>\r\n', 0, 0, 'áo trắng tay dài học sinh đà nẵng', 'áo sơ mi trắng học sinh tay dài đà nẵng', ' 31/03/2025 ', 57, 0, 0, 0, 0, 0, 0, 'ao-so-mi-trang-tay-dai', '', '2822somi-taydai2.jpg', '2822somi-taydai3.jpg', '2822somi-taydai4.jpg'),
(15, 'Áo sơ mi trắng dài tay đồng phục cấp 2', 'somi-daitay.jpg', 'Áo sơ mi trắng dài tay đồng phục cấp 2 – Thiết kế chuẩn form, chất liệu thoáng mát, dễ giặt ủi. Đường may tỉ mỉ, phù hợp cho cả nam và nữ. Nhận may đo theo yêu cầu trường học, giá tốt, giao hàng nhanh. Liên hệ ngay: 0905 108 532 (Đồng phục Hà Thư – Đà Nẵng).', '<p><strong>&Aacute;o sơ mi trắng d&agrave;i tay đồng phục cấp 2 l&agrave; trang phục kh&ocirc;ng thể thiếu của học sinh trung học cơ sở. Sản phẩm được thiết kế chuẩn form, ph&ugrave; hợp với mọi d&aacute;ng người, gi&uacute;p học sinh tr&ocirc;ng lịch sự v&agrave; chỉn chu khi đến trường.</strong></p>\r\n\r\n<p><strong>Chất liệu cao cấp: Sử dụng vải cotton, kate hoặc polyester pha, gi&uacute;p &aacute;o lu&ocirc;n tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i tốt, hạn chế nhăn nh&agrave;u v&agrave; dễ d&agrave;ng giặt ủi.<br />\r\nThiết kế tinh tế: Form &aacute;o đứng d&aacute;ng, cổ &aacute;o cứng c&aacute;p, tay d&agrave;i thanh lịch, c&oacute; thể phối c&ugrave;ng c&agrave; vạt hoặc &aacute;o kho&aacute;c đồng phục để tăng th&ecirc;m sự chuy&ecirc;n nghiệp.<br />\r\nBền đẹp, dễ bảo quản: Chất vải giữ form tốt, kh&ocirc;ng x&ugrave; l&ocirc;ng, kh&ocirc;ng phai m&agrave;u sau nhiều lần giặt. Đường may chắc chắn, ph&ugrave; hợp sử dụng l&acirc;u d&agrave;i.<br />\r\nNhận may theo y&ecirc;u cầu: May đo theo size chuẩn hoặc thiết kế theo y&ecirc;u cầu của từng trường học. Đ&aacute;p ứng số lượng lớn, cam kết gi&aacute; tốt v&agrave; giao h&agrave;ng nhanh.</strong></p>\r\n\r\n<p><strong>Ứng dụng: Ph&ugrave; hợp cho cả học sinh nam v&agrave; nữ, c&oacute; thể kết hợp với quần t&acirc;y, ch&acirc;n v&aacute;y hoặc &aacute;o len đồng phục.</strong></p>\r\n\r\n<p><strong>Li&ecirc;n hệ đặt h&agrave;ng ngay: 0905 108 532 (Đồng phục H&agrave; Thư &ndash; Đ&agrave; Nẵng)</strong></p>\r\n', 0, 0, 'Sơ mi dài tay học sinh cấp 2 đà nẵng', 'Đồng phục học sinh cấp 2 Đà Nẵng', '31/03/2025', 56, 0, 0, 0, 0, 0, 0, 'ao-so-mi-trang-dai-tay-dong-phuc-cap-2', '', '2339somi-daitay1.jpg', '2339somi-daitay2.jpg', '2339somi-daitay3.jpg'),
(16, 'Quần Tây Xanh Tím Than', 'quantayxanh.jpg', 'Quần tây xanh tím than – Thiết kế thanh lịch, chuẩn form, phù hợp cho học sinh, sinh viên và dân công sở. Chất liệu cao cấp, bền đẹp, ít nhăn, dễ phối đồ. Nhận may đo theo yêu cầu số lượng lớn. Lh ngay: 0905 108 532 (Đồng phục Hà Thư – Đà Nẵng). ', '<p><strong>Quần t&acirc;y m&agrave;u xanh t&iacute;m than</strong> l&agrave; lựa chọn phổ biến cho học sinh, sinh vi&ecirc;n v&agrave; d&acirc;n c&ocirc;ng sở nhờ v&agrave;o thiết kế thanh lịch, dễ phối đồ v&agrave; mang lại sự chỉn chu, chuy&ecirc;n nghiệp.</p>\r\n\r\n<p><strong>Chất liệu cao cấp</strong>: Sử dụng vải kate, tuyết mưa, hoặc polyester pha cotton, gi&uacute;p quần giữ d&aacute;ng tốt, &iacute;t nhăn, co gi&atilde;n nhẹ v&agrave; tho&aacute;ng kh&iacute;, tạo sự thoải m&aacute;i khi mặc.<br />\r\n<strong>Thiết kế tinh tế</strong>: Kiểu d&aacute;ng quần đứng form hoặc &ocirc;m nhẹ ph&ugrave; hợp cho cả nam v&agrave; nữ. Đai lưng chắc chắn, kh&oacute;a k&eacute;o bền bỉ, đường may tỉ mỉ, gi&uacute;p quần lu&ocirc;n đẹp v&agrave; sang trọng.<br />\r\n<strong>Dễ phối đồ</strong>: Quần t&acirc;y xanh t&iacute;m than c&oacute; thể kết hợp dễ d&agrave;ng với &aacute;o sơ mi trắng, &aacute;o polo hoặc &aacute;o kho&aacute;c đồng phục, tạo n&ecirc;n phong c&aacute;ch lịch sự, trang nh&atilde;.<br />\r\n<strong>Bền đẹp, dễ bảo quản:</strong> Chất vải &iacute;t nhăn, kh&ocirc;ng phai m&agrave;u, dễ giặt ủi v&agrave; ph&ugrave; hợp với m&ocirc;i trường học tập, l&agrave;m việc.<br />\r\nNhận may đo theo y&ecirc;u cầu: Đ&aacute;p ứng đơn h&agrave;ng số lượng lớn cho trường học, c&ocirc;ng ty, tổ chức với gi&aacute; cạnh tranh.</p>\r\n', 0, 0, 'Quần tây nam nữ Đà Nẵng', 'Quần tây đồng phục màu xanh tím than', '02/04/2025', 56, 0, 0, 0, 0, 0, 0, 'quan-tay-xanh-tim-than', '', '4028quantayxanh1.jpg', '4028quantayxanh2.jpg', '4028quantayxanh3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stats`
--

CREATE TABLE `stats` (
  `id` int(11) UNSIGNED NOT NULL,
  `s_time` int(10) NOT NULL,
  `s_id` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `stats`
--

INSERT INTO `stats` (`id`, `s_time`, `s_id`) VALUES
(45477, 1723172196, '3qs3232ucpengdf8fiu9bmjou0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin_quantri`
--

CREATE TABLE `thongtin_quantri` (
  `id` int(255) NOT NULL,
  `ky_danh` varchar(255) NOT NULL DEFAULT '',
  `mat_khau` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtin_quantri`
--

INSERT INTO `thongtin_quantri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_ke`
--

CREATE TABLE `thong_ke` (
  `id` int(255) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `so` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_ke`
--

INSERT INTO `thong_ke` (`id`, `mo_ta`, `so`) VALUES
(1, 'luot truy cap', 38680);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_lh`
--

CREATE TABLE `thong_tin_lh` (
  `id` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `phatsinh` text NOT NULL,
  `noidung_en` text NOT NULL,
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_lh`
--

INSERT INTO `thong_tin_lh` (`id`, `noidung`, `phatsinh`, `noidung_en`, `email`) VALUES
(2, '<div class=\"contact-title\" style=\"text-align: justify;\">\r\n<div class=\"contact-title\" style=\"margin: 0px; padding: 0px; font-family: Arial, Tahoma, Geneva, sans-serif; background-color: rgb(249, 249, 249);\"><strong style=\"margin: 0px; padding: 0px;\"><font color=\"#ff0000\" face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\">C</span><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">&Ocirc;NG TY TNHH MTV THIẾT KẾ &nbsp;- TRUYỀN TH&Ocirc;NG&nbsp;</span></font></strong><font color=\"#ff0000\" face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\"><br style=\"margin: 0px; padding: 0px;\" />\r\n</span></font>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br style=\"margin: 0px; padding: 0px;\" />\r\n<span style=\"margin: 0px; padding: 0px; font-size: large;\"><strong style=\"margin: 0px; padding: 0px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ATVMEDIA</strong></span><br style=\"margin: 0px; padding: 0px;\" />\r\n<br style=\"margin: 0px; padding: 0px;\" />\r\n<span style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: larger;\">Địa chỉ: &nbsp;19 L&ecirc; Quang Sung - P.An Mỹ - TP. Tam Kỳ</span><br style=\"margin: 0px; padding: 0px;\" />\r\n<font face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\">Email:</span></font><span style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: larger; color: rgb(255, 0, 0);\">&nbsp; &nbsp; &nbsp;</span><span style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: larger;\">hr@atvmedia.net</span><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\"><br style=\"margin: 0px; padding: 0px;\" />\r\n</span></span></span></div>\r\n<div class=\"contact-content\" style=\"margin: 0px; padding: 0px; font-family: Arial, Tahoma, Geneva, sans-serif; text-align: start; background-color: rgb(249, 249, 249);\">\r\n<div class=\"row\" style=\"margin: 0px; padding: 0px;\">\r\n<div style=\"margin: 0px; padding: 0px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\">Điện thoại : 05103 888 379 - 0914 45 43 48 - 0905 45 43 48</span></span></div>\r\n</div>\r\n<div class=\"row\" style=\"margin: 0px; padding: 0px;\">\r\n<div style=\"margin: 0px; padding: 0px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\"><a href=\"http://atvmedia.net/\" style=\"margin: 0px; padding: 0px;\">www.</a>&nbsp;<a href=\"http://atvmedia.net/\" style=\"margin: 0px; padding: 0px;\">atvmedia.net</a></span></span><span style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\" />\r\n</u></span><a href=\"http://doanhnghiepquangnam.net/\" style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: 14px;\">www.</a><span style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: 14px;\"><a href=\"http://doanhnghiepquangnam.net/\" style=\"margin: 0px; padding: 0px;\">&nbsp;</a><u style=\"margin: 0px; padding: 0px;\"><a href=\"http://doanhnghiepquangnam.net/\" style=\"margin: 0px; padding: 0px;\">doanhnghiepquangnam.net</a>&nbsp;<br style=\"margin: 0px; padding: 0px;\" />\r\n</u></span><u style=\"margin: 0px; padding: 0px;\"><font face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\"><a href=\"http://92online.vn/\" style=\"margin: 0px; padding: 0px;\">www.92online.vn</a></span></font><br style=\"margin: 0px; padding: 0px;\" />\r\n</u><font color=\"#0000ee\" face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: 14.4px;\"><u style=\"margin: 0px; padding: 0px;\"><a href=\"http://doanhnghiepquangnam.net/\" style=\"margin: 0px; padding: 0px;\">www.diemdenquangnam.com</a></u></span></font><a href=\"http://naima.vn/lien-he.html#\" style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: larger;\"><br style=\"margin: 0px; padding: 0px;\" />\r\n<br style=\"margin: 0px; padding: 0px;\" />\r\n</a>\r\n<div class=\"contact-title\" style=\"margin: 0px; padding: 0px;\"><u style=\"margin: 0px; padding: 0px; font-family: Tahoma; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\">Văn ph&ograve;ng l</span></u><font color=\"#ff0000\" face=\"Tahoma\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\">&agrave;m việc</u></span></font><br style=\"margin: 0px; padding: 0px;\" />\r\n<br style=\"margin: 0px; padding: 0px;\" />\r\n<span style=\"margin: 0px; padding: 0px; font-size: medium;\"><span style=\"margin: 0px; padding: 0px; font-family: Arial;\"><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Địa chỉ: &nbsp;</span><span style=\"margin: 0px; padding: 0px; font-size: small;\"><span style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Điện Bi&ecirc;n Phủ - Phường An Mỹ - TP .Tam Kỳ</span></span></span></span></span><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\"><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\"><br style=\"margin: 0px; padding: 0px;\" />\r\n</span></span></span>\r\n<div class=\"contact-title\" style=\"margin: 0px; padding: 0px;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\">Email:<span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\">&nbsp; &nbsp; &nbsp;</span>hr@atvmedia.net</span></span><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\"><br style=\"margin: 0px; padding: 0px;\" />\r\n</span></span></span></div>\r\n<div class=\"contact-content\" style=\"margin: 0px; padding: 0px; text-align: start;\">\r\n<div class=\"row\" style=\"margin: 0px; padding: 0px;\">\r\n<div style=\"margin: 0px; padding: 0px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\"><span style=\"margin: 0px; padding: 0px; font-family: Tahoma;\">Điện thoại : &nbsp;0914 45 43 48 - 0905 45 43 48</span></span></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"contact-content\" style=\"margin: 0px; padding: 0px; font-family: Arial, Tahoma, Geneva, sans-serif; text-align: start; background-color: rgb(249, 249, 249);\">\r\n<div class=\"row\" style=\"margin: 0px; padding: 0px;\">\r\n<h5 style=\"margin: 0px; padding: 0px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; font-size: larger;\">Hỗ trợ thanh to&aacute;n qua :</span></h5>\r\n</div>\r\n<div class=\"row\" style=\"margin: 0px; padding: 0px;\">T&agrave;i Khoản C&ocirc;ng ty - Ng&acirc;n H&agrave;ng Vietcombank<br style=\"margin: 0px; padding: 0px;\" />\r\n<br style=\"margin: 0px; padding: 0px;\" />\r\nSố t&agrave;i khoản : 0651000782025<br style=\"margin: 0px; padding: 0px;\" />\r\n<br style=\"margin: 0px; padding: 0px;\" />\r\nChủ t&agrave;i khoản : C&ocirc;ng Ty TNHH MTV TK V&Agrave; TT ATVMEDIA<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</div>\r\n</div>\r\n</div>', '', '<br />\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;Vo Nguyen Giap</span><span style=\"font-size: larger;\">&nbsp;St, Cam Chau Ward,&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Hoi An City, Quang Nam Province</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Tel &nbsp; &nbsp; &nbsp; &nbsp;: 0510.3963.555</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Fax &nbsp; &nbsp; &nbsp; &nbsp;: 0510.3938.387</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Hotline &nbsp;:&nbsp;</span><span style=\"font-size: 14.4px;\">0981 485 969</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Email &nbsp; &nbsp; :&nbsp;</span><span style=\"font-size: 14.4px;\">seasnailhomestay</span><span style=\"font-size: larger;\">@gmail.com</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: larger;\">Website :&nbsp;</span><span style=\"font-size: 14.4px;\">www.seasnailhomestay.com</span></p>\r\n<p class=\"MsoNormal\" style=\"text-align: justify; margin: 4.8pt 0in 4.8pt 14.2pt;\"><span style=\"font-size: 14.4px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; www.s​easnailhomestayhoian.com</span><span style=\"font-size: larger;\">&nbsp;</span></p>', 'thiennhatminh@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuong_mai`
--

CREATE TABLE `thuong_mai` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuong_mai`
--

INSERT INTO `thuong_mai` (`id`, `hinhanh`, `mota`, `tieude`) VALUES
(36, 'dong-phuc-ha-thu-002.jpg', '', 'Đồng phục học sinh Đà Nẵng'),
(35, 'dong-phuc-ha-thu-003.jpg', '', 'Đồng phục học sinh cấp 1 Đà Nẵng'),
(37, 'dong-phuc-ha-thu-001.jpg', '', 'Đồng phục Hà Thư');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_dichvu`
--

CREATE TABLE `tin_dichvu` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `hinhndab` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `title` text NOT NULL,
  `tukhoa` text NOT NULL,
  `tukhoa2` text NOT NULL,
  `ngay` text NOT NULL,
  `linkurl` text NOT NULL,
  `thuocloai` int(11) NOT NULL,
  `moi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_dichvu`
--

INSERT INTO `tin_dichvu` (`id`, `hinhanh`, `hinhndab`, `noidung`, `trangchu`, `mota`, `tieude`, `tieude_en`, `title`, `tukhoa`, `tukhoa2`, `ngay`, `linkurl`, `thuocloai`, `moi`) VALUES
(77, 'nhahang-khachsan.jpg', '', '<p>Trong ng&agrave;nh dịch vụ nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn, <strong>đồng phục chuy&ecirc;n nghiệp</strong> kh&ocirc;ng chỉ gi&uacute;p nh&acirc;n vi&ecirc;n l&agrave;m việc thoải m&aacute;i m&agrave; c&ograve;n tạo ấn tượng mạnh mẽ với kh&aacute;ch h&agrave;ng. Đồng phục kh&ocirc;ng đơn thuần l&agrave; trang phục m&agrave; c&ograve;n l&agrave; một phần nhận diện thương hiệu, thể hiện sự chuy&ecirc;n nghiệp v&agrave; đẳng cấp của doanh nghiệp.</p>\r\n\r\n<p><strong>Tại sao đồng phục nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn quan trọng?</strong></p>\r\n\r\n<p><strong>Tạo ấn tượng chuy&ecirc;n nghiệp</strong>: Nh&acirc;n vi&ecirc;n diện đồng phục gọn g&agrave;ng, lịch sự sẽ gi&uacute;p kh&aacute;ch h&agrave;ng cảm thấy tin tưởng v&agrave; an t&acirc;m hơn khi sử dụng dịch vụ.</p>\r\n\r\n<p><strong>Đồng bộ nhận diện thương hiệu</strong>: Thiết kế đồng phục thể hiện m&agrave;u sắc, logo v&agrave; phong c&aacute;ch ri&ecirc;ng của nh&agrave; h&agrave;ng, kh&aacute;ch sạn.</p>\r\n\r\n<p><strong>Tăng t&iacute;nh gắn kết đội ngũ</strong>: Khi to&agrave;n bộ nh&acirc;n vi&ecirc;n mặc đồng phục giống nhau, họ sẽ c&oacute; tinh thần tr&aacute;ch nhiệm cao hơn, tạo sự đo&agrave;n kết trong m&ocirc;i trường l&agrave;m việc.</p>\r\n\r\n<p><strong>Thuận tiện v&agrave; thoải m&aacute;i</strong>: Đồng phục được thiết kế chuy&ecirc;n biệt gi&uacute;p nh&acirc;n vi&ecirc;n dễ d&agrave;ng di chuyển, l&agrave;m việc trong nhiều giờ m&agrave; vẫn thoải m&aacute;i.</p>\r\n\r\n<p><strong>C&aacute;c loại đồng phục nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn phổ biến</strong></p>\r\n\r\n<p><strong>Đồng phục lễ t&acirc;n kh&aacute;ch sạn</strong></p>\r\n\r\n<p>Lễ t&acirc;n l&agrave; bộ mặt của kh&aacute;ch sạn, v&igrave; vậy đồng phục cần to&aacute;t l&ecirc;n vẻ sang trọng, chuy&ecirc;n nghiệp. Thường l&agrave; &aacute;o vest lịch sự, kết hợp với ch&acirc;n v&aacute;y hoặc quần t&acirc;y cho nữ, quần &acirc;u cho nam.</p>\r\n\r\n<p><strong>Đồng phục phục vụ nh&agrave; h&agrave;ng</strong></p>\r\n\r\n<p>Nh&acirc;n vi&ecirc;n phục vụ cần sự thoải m&aacute;i, linh hoạt khi di chuyển. Thiết kế phổ biến l&agrave; &aacute;o sơ mi, tạp dề phối c&ugrave;ng quần t&acirc;y hoặc v&aacute;y.</p>\r\n\r\n<p><strong>Đồng phục quản l&yacute; nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn</strong></p>\r\n\r\n<p>Thường l&agrave; vest sang trọng, lịch sự, thể hiện vị thế v&agrave; phong th&aacute;i l&atilde;nh đạo.</p>\r\n\r\n<p><strong>Đồng phục bếp nh&agrave; h&agrave;ng</strong></p>\r\n\r\n<p>Đầu bếp cần trang phục đảm bảo vệ sinh an to&agrave;n thực phẩm, chống n&oacute;ng, tho&aacute;ng m&aacute;t, thường gồm &aacute;o bếp, quần bếp v&agrave; mũ bếp.</p>\r\n\r\n<p><strong>Đồng phục buồng ph&ograve;ng kh&aacute;ch sạn</strong></p>\r\n\r\n<p>Đồng phục cho nh&acirc;n vi&ecirc;n dọn ph&ograve;ng đơn giản, thoải m&aacute;i, dễ di chuyển v&agrave; l&agrave;m việc.</p>\r\n\r\n<p><strong>Lựa chọn xưởng may đồng phục nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn uy t&iacute;n</strong></p>\r\n\r\n<p>Khi chọn đơn vị may đồng phục, bạn cần lưu &yacute;:</p>\r\n\r\n<p><strong>Chất liệu vải cao cấp, tho&aacute;ng m&aacute;t</strong> ph&ugrave; hợp với từng vị tr&iacute; nh&acirc;n vi&ecirc;n.</p>\r\n\r\n<p><strong>Thiết kế tinh tế, hiện đại</strong>, t&ocirc;n l&ecirc;n h&igrave;nh ảnh chuy&ecirc;n nghiệp của doanh nghiệp.</p>\r\n\r\n<p><strong>Độ bền cao, dễ giặt ủi, kh&ocirc;ng nhăn, kh&ocirc;ng phai m&agrave;u.</strong></p>\r\n\r\n<p><strong>Gi&aacute; cả hợp l&yacute;, chiết khấu tốt cho đơn h&agrave;ng lớn.</strong></p>\r\n\r\n<p><strong>Đồng Phục H&agrave; Thư &ndash; Giải ph&aacute;p đồng phục chuy&ecirc;n nghiệp</strong></p>\r\n\r\n<p>Với nhiều năm kinh nghiệm trong lĩnh vực may đo đồng phục, <strong>Đồng Phục H&agrave; Thư</strong> cam kết mang đến những bộ đồng phục chất lượng cao, gi&uacute;p doanh nghiệp n&acirc;ng tầm thương hiệu.</p>\r\n\r\n<p><strong>Cam kết của ch&uacute;ng t&ocirc;i:</strong><br />\r\nThiết kế đa dạng &ndash; chuẩn phong c&aacute;ch nh&agrave; h&agrave;ng, kh&aacute;ch sạn.<br />\r\nChất liệu vải cao cấp, tho&aacute;ng m&aacute;t, dễ chịu.<br />\r\nMay đo theo y&ecirc;u cầu &ndash; Ph&ugrave; hợp với mọi v&oacute;c d&aacute;ng.<br />\r\nGi&aacute; th&agrave;nh cạnh tranh &ndash; Chiết khấu hấp dẫn cho đơn h&agrave;ng lớn.<br />\r\nGiao h&agrave;ng nhanh ch&oacute;ng tr&ecirc;n to&agrave;n quốc.</p>\r\n\r\n<p><strong>Bạn đang t&igrave;m kiếm đồng phục chuy&ecirc;n nghiệp cho nh&agrave; h&agrave;ng, kh&aacute;ch sạn?</strong> H&atilde;y li&ecirc;n hệ ngay với <strong>Đồng Phục H&agrave; Thư</strong> để nhận tư vấn v&agrave; b&aacute;o gi&aacute; tốt nhất!</p>\r\n', '', 'Bạn đang tìm đồng phục nhà hàng khách sạn chuyên nghiệp, sang trọng? Đồng Phục Hà Thư chuyên thiết kế và may đo đồng phục nhà hàng, khách sạn cao cấp với chất liệu bền đẹp, thoáng mát, giúp tạo ấn tượng chuyên nghiệp cho thương hiệu.', '', 'Đồng Phục Nhà Hàng Khách Sạn', '', 'đồng phục nhân viên khách sạn đà nẵng', 'đồng phục nhân viên nhà hàng đà nẵng', ' 28/03/2025 ', 'dong-phuc-nha-hang-khach-san', 3, 0),
(78, 'dong-phuc-benhvien.jpg', '', '<p>Đồng phục bệnh viện kh&ocirc;ng chỉ đảm bảo yếu tố thẩm mỹ, chuy&ecirc;n nghiệp m&agrave; c&ograve;n gi&uacute;p ph&acirc;n biệt r&otilde; r&agrave;ng c&aacute;c bộ phận trong ng&agrave;nh y tế, tạo sự đồng nhất v&agrave; n&acirc;ng cao h&igrave;nh ảnh của cơ sở y tế. Đồng Phục H&agrave; Thư tự h&agrave;o l&agrave; đơn vị chuy&ecirc;n cung cấp <strong>đồng phục bệnh viện chất lượng cao</strong> với thiết kế tối ưu, chất liệu tho&aacute;ng m&aacute;t, ph&ugrave; hợp với mọi điều kiện l&agrave;m việc.</p>\r\n\r\n<p><strong>1. C&aacute;c Loại Đồng Phục Bệnh Viện Phổ Biến</strong></p>\r\n\r\n<p><strong>&Aacute;o blouse b&aacute;c sĩ:</strong> Thiết kế d&agrave;i tay hoặc ngắn tay, form chuẩn, chất liệu bền đẹp, dễ giặt ủi.<br />\r\n<strong>Đồng phục y t&aacute;, điều dưỡng:</strong> &Aacute;o quần đồng bộ, kiểu d&aacute;ng gọn g&agrave;ng, dễ di chuyển.<br />\r\n<strong>Đồng phục phẫu thuật:</strong> Vải kh&aacute;ng khuẩn, dễ vệ sinh, đảm bảo an to&agrave;n trong m&ocirc;i trường ph&ograve;ng mổ.<br />\r\n<strong>Đồng phục bệnh nh&acirc;n:</strong> Thiết kế thoải m&aacute;i, mềm mại, tạo cảm gi&aacute;c dễ chịu khi mặc.<br />\r\n<strong>Đồng phục hộ l&yacute;, nh&acirc;n vi&ecirc;n y tế:</strong> Đa dạng mẫu m&atilde;, m&agrave;u sắc, ph&ugrave; hợp với từng vị tr&iacute; l&agrave;m việc.</p>\r\n\r\n<p><strong>2. L&yacute; Do N&ecirc;n Chọn Đồng Phục H&agrave; Thư</strong></p>\r\n\r\n<p><strong>Chất liệu cao cấp:</strong> Vải cotton, kate, kaki thun co gi&atilde;n, thấm h&uacute;t mồ h&ocirc;i, bền m&agrave;u.<br />\r\n<strong>Thiết kế chuy&ecirc;n nghiệp:</strong> Đường may chắc chắn, form d&aacute;ng ph&ugrave; hợp với từng bộ phận trong bệnh viện.<br />\r\n<strong>Gi&aacute; th&agrave;nh hợp l&yacute;:</strong> Cung cấp gi&aacute; tốt nhất cho bệnh viện, ph&ograve;ng kh&aacute;m, cơ sở y tế với số lượng lớn.<br />\r\n<strong>Nhận may đo theo y&ecirc;u cầu:</strong> Đ&aacute;p ứng mọi nhu cầu về k&iacute;ch thước, kiểu d&aacute;ng, logo theo thương hiệu bệnh viện.</p>\r\n\r\n<p><strong>Li&ecirc;n hệ ngay:</strong> 0905 108 532 (Đồng phục H&agrave; Thư &ndash; Đ&agrave; Nẵng) để được tư vấn v&agrave; đặt h&agrave;ng!</p>\r\n', '', 'Đồng phục bệnh viện chất lượng cao – Thiết kế thoáng mát, chuẩn y tế, mang lại sự chuyên nghiệp và thoải mái cho bác sĩ, y tá, điều dưỡng. Nhận may đo theo yêu cầu, số lượng lớn với giá tốt. Lh ngay: 0905 108 532 (Đồng phục Hà Thư – Đà Nẵng).', '', 'Đồng Phục Bệnh Viện', '', 'Đồng phục bệnh viện giá rẻ Đà Nẵng', 'Đồng phục bệnh viện cao cấp', ' 31/03/2025 ', 'dong-phuc-benh-vien', 4, 0),
(79, 'dong-phuc-congso.jpg', '', '<p>Đồng phục c&ocirc;ng sở nữ kh&ocirc;ng chỉ thể hiện sự chuy&ecirc;n nghiệp, thanh lịch m&agrave; c&ograve;n gi&uacute;p doanh nghiệp x&acirc;y dựng h&igrave;nh ảnh thương hiệu. Đồng Phục H&agrave; Thư cung cấp <strong>c&aacute;c mẫu đồng phục c&ocirc;ng sở nữ đẹp, sang trọng</strong>, ph&ugrave; hợp với nhiều ng&agrave;nh nghề kh&aacute;c nhau, mang đến sự thoải m&aacute;i khi l&agrave;m việc.</p>\r\n\r\n<p><strong>1. C&aacute;c Loại Đồng Phục C&ocirc;ng Sở Nữ Phổ Biến</strong></p>\r\n\r\n<p><strong>&Aacute;o sơ mi c&ocirc;ng sở nữ:</strong> Kiểu d&aacute;ng hiện đại, tay d&agrave;i hoặc ngắn, dễ phối với ch&acirc;n v&aacute;y, quần t&acirc;y.<br />\r\n<strong>Vest c&ocirc;ng sở nữ:</strong> Thiết kế chuẩn form, lịch sự, t&ocirc;n d&aacute;ng, ph&ugrave; hợp với m&ocirc;i trường văn ph&ograve;ng.<br />\r\n<strong>Ch&acirc;n v&aacute;y b&uacute;t ch&igrave;:</strong> Sang trọng, gọn g&agrave;ng, gi&uacute;p t&ocirc;n l&ecirc;n vẻ đẹp thanh lịch.<br />\r\n<strong>Quần t&acirc;y nữ c&ocirc;ng sở:</strong> Chất liệu mềm mại, thoải m&aacute;i, dễ d&agrave;ng di chuyển suốt ng&agrave;y d&agrave;i.<br />\r\n<strong>Đầm c&ocirc;ng sở:</strong> Thiết kế tinh tế, gi&uacute;p chị em phụ nữ tự tin, chuy&ecirc;n nghiệp hơn.</p>\r\n\r\n<p><strong>2. L&yacute; Do N&ecirc;n Chọn Đồng Phục H&agrave; Thư</strong></p>\r\n\r\n<p><strong>Chất liệu cao cấp:</strong> Vải cotton, kate, lụa, kaki mềm, tho&aacute;ng m&aacute;t, kh&ocirc;ng nhăn, dễ bảo quản.<br />\r\n<strong>Thiết kế thanh lịch:</strong> Đa dạng kiểu d&aacute;ng, ph&ugrave; hợp với xu hướng thời trang c&ocirc;ng sở.<br />\r\n<strong>May đo theo y&ecirc;u cầu:</strong> Đ&aacute;p ứng mọi y&ecirc;u cầu về k&iacute;ch thước, logo, m&agrave;u sắc theo bộ nhận diện doanh nghiệp.<br />\r\n<strong>Gi&aacute; cả hợp l&yacute;:</strong> Ch&iacute;nh s&aacute;ch ưu đ&atilde;i cho đơn h&agrave;ng số lượng lớn.</p>\r\n\r\n<p><strong>Li&ecirc;n hệ ngay:</strong> 0905 108 532 (Đồng phục H&agrave; Thư &ndash; Đ&agrave; Nẵng) để được tư vấn v&agrave; đặt h&agrave;ng!</p>\r\n', '', 'Đồng phục công sở nữ cao cấp – Thiết kế hiện đại, sang trọng, tôn dáng. Chất liệu thoáng mát, mềm mại, phù hợp với môi trường làm việc. Nhận may theo yêu cầu, số lượng lớn với giá tốt. Lh ngay: 0905 108 532 (Đồng phục Hà Thư – Đà Nẵng).', '', 'Đồng Phục Công Sở Nữ', '', 'Áo sơ mi công sở nữ', 'May đồng phục công sở theo yêu cầu', ' 31/03/2025 ', 'dong-phuc-cong-so-nu', 2, 0),
(76, 'giaovien.jpg', '', '<p>Đồng phục văn ph&ograve;ng kh&ocirc;ng chỉ l&agrave; trang phục hằng ng&agrave;y của nh&acirc;n vi&ecirc;n m&agrave; c&ograve;n thể hiện sự chuy&ecirc;n nghiệp, tinh thần đồng đội v&agrave; h&igrave;nh ảnh thương hiệu của doanh nghiệp. Tại <strong>Đồng Phục H&agrave; Thư</strong>, ch&uacute;ng t&ocirc;i cung cấp c&aacute;c mẫu đồng phục văn ph&ograve;ng <strong>đẹp, sang trọng v&agrave; thoải m&aacute;i</strong>, gi&uacute;p doanh nghiệp tạo dựng ấn tượng tốt với kh&aacute;ch h&agrave;ng v&agrave; đối t&aacute;c.</p>\r\n\r\n<p><strong>Tại sao doanh nghiệp n&ecirc;n chọn đồng phục văn ph&ograve;ng?</strong></p>\r\n\r\n<p><strong>Thể hiện sự chuy&ecirc;n nghiệp</strong>: Một bộ đồng phục lịch sự gi&uacute;p tạo dựng phong th&aacute;i chuy&ecirc;n nghiệp, chỉnh chu, gi&uacute;p kh&aacute;ch h&agrave;ng c&oacute; c&aacute;i nh&igrave;n thiện cảm về doanh nghiệp.<br />\r\n<strong>X&acirc;y dựng h&igrave;nh ảnh thương hiệu</strong>: Đồng phục với thiết kế ri&ecirc;ng, m&agrave;u sắc nhận diện c&ugrave;ng logo doanh nghiệp gi&uacute;p tăng độ nhận diện thương hiệu trong mắt kh&aacute;ch h&agrave;ng.<br />\r\n<strong>Tạo sự gắn kết nội bộ</strong>: Đồng phục văn ph&ograve;ng gi&uacute;p nh&acirc;n vi&ecirc;n cảm thấy tự h&agrave;o v&agrave; tăng t&iacute;nh đo&agrave;n kết, x&acirc;y dựng một m&ocirc;i trường l&agrave;m việc thống nhất.<br />\r\n<strong>Thuận tiện v&agrave; tiết kiệm thời gian</strong>: Kh&ocirc;ng cần mất nhiều thời gian chọn trang phục mỗi ng&agrave;y, đồng phục gi&uacute;p nh&acirc;n vi&ecirc;n lu&ocirc;n ăn mặc lịch sự v&agrave; đồng bộ.</p>\r\n\r\n<p><strong>C&aacute;c mẫu đồng phục văn ph&ograve;ng tại Đồng Phục H&agrave; Thư</strong></p>\r\n\r\n<p><strong>&Aacute;o sơ mi c&ocirc;ng sở</strong> &ndash; Thiết kế thanh lịch, chất liệu cao cấp, đứng form, ph&ugrave; hợp cho cả nam v&agrave; nữ.<br />\r\n<strong>Vest c&ocirc;ng sở</strong> &ndash; Kiểu d&aacute;ng hiện đại, sang trọng, thể hiện đẳng cấp của nh&acirc;n vi&ecirc;n v&agrave; doanh nghiệp.<br />\r\n<strong>&Aacute;o thun c&ocirc;ng sở</strong> &ndash; Đơn giản nhưng vẫn lịch sự, thoải m&aacute;i khi l&agrave;m việc, ph&ugrave; hợp cho c&aacute;c doanh nghiệp trẻ trung, năng động.<br />\r\n<strong>Quần &acirc;u, ch&acirc;n v&aacute;y c&ocirc;ng sở</strong> &ndash; T&ocirc;n d&aacute;ng, dễ phối với c&aacute;c loại &aacute;o sơ mi hoặc &aacute;o vest.</p>\r\n\r\n<p><strong>Tại sao n&ecirc;n chọn Đồng Phục H&agrave; Thư?</strong></p>\r\n\r\n<p><strong>Thiết kế đa dạng, theo y&ecirc;u cầu</strong>: Ch&uacute;ng t&ocirc;i c&oacute; đội ngũ thiết kế chuy&ecirc;n nghiệp, tư vấn mẫu m&atilde; ph&ugrave; hợp với từng doanh nghiệp.<br />\r\n<strong>Chất liệu cao cấp</strong>: Vải tho&aacute;ng m&aacute;t, kh&ocirc;ng nhăn, kh&ocirc;ng x&ugrave; l&ocirc;ng, gi&uacute;p người mặc thoải m&aacute;i suốt ng&agrave;y d&agrave;i.<br />\r\n<strong>Gia c&ocirc;ng tỉ mỉ, đường may sắc n&eacute;t</strong>: Cam kết mang đến sản phẩm chất lượng cao, bền đẹp theo thời gian.<br />\r\n<strong>Gi&aacute; cả cạnh tranh, ưu đ&atilde;i lớn</strong>: Hỗ trợ đặt may số lượng lớn với mức gi&aacute; tốt nhất tr&ecirc;n thị trường.<br />\r\n<strong>Giao h&agrave;ng nhanh ch&oacute;ng, đ&uacute;ng hẹn</strong>: Giao h&agrave;ng to&agrave;n quốc, đảm bảo đ&uacute;ng tiến độ v&agrave; chất lượng như cam kết.</p>\r\n', '', 'Bạn đang tìm kiếm đồng phục văn phòng chuyên nghiệp, cao cấp cho doanh nghiệp? Đồng phục Hà Thư chuyên thiết kế và may đo đồng phục công sở đẹp, sang trọng, chất liệu bền bỉ, thoáng mát. Chúng tôi cung cấp đa dạng mẫu mã: áo sơ mi, vest, áo thun công sở, quần âu, chân váy...', '', 'Đồng Phục Văn Phòng', '', 'chỗ may đồng phục văn phòng ở đà nẵng', 'đồng phục nhân viên văn phòng đà nẵng', ' 28/03/2025 ', 'dong-phuc-van-phong', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_dichvuu`
--

CREATE TABLE `tin_dichvuu` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `hinhndab` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `title` text NOT NULL,
  `tukhoa` text NOT NULL,
  `tukhoa2` text NOT NULL,
  `ngay` text NOT NULL,
  `linkurl` text NOT NULL,
  `thuocloai` int(11) NOT NULL,
  `moi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_sanpham`
--

CREATE TABLE `tin_sanpham` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `hinhndab` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `tukhoa` text NOT NULL,
  `linkurl` text NOT NULL,
  `thuocloai` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_sanpham`
--

INSERT INTO `tin_sanpham` (`id`, `hinhanh`, `hinhndab`, `noidung`, `trangchu`, `mota`, `tieude`, `tieude_en`, `tukhoa`, `linkurl`, `thuocloai`) VALUES
(1, 'banner-aodoi-001_7_11zon.webp', '', '', '', '', '', 'shop love studio sale1', '', 'shop-love-studio-sale1', 0),
(2, 'banner-aodoi-002_8_11zon.webp', '', '', '', '', '', 'shop love studio sale2', '', 'shop-love-studio-sale2', 0),
(3, 'banner-dogiadinh-001_1_11zon.webp', '', '', '', '', '', 'shop love studio sale3', '', 'shop-love-studio-sale3', 0),
(4, 'banner-dogiadinh-002_2_11zon.webp', '', '', '', '', '', 'shop love studio sale4', '', 'shop-love-studio-sale4', 0),
(5, 'banner-aoformrong-001_9_11zon.webp', '', '', '', '', '', 'shop love studio sale5', '', 'shop-love-studio-sale5', 0),
(6, 'banner-aoformrong-002_10_11zon.webp', '', '', '', '', '', 'shop love studio sale6', '', 'shop-love-studio-sale6', 0),
(7, 'banner-aothunnu-001_11_11zon.webp', '', '', '', '', '', 'shop love studio sale7', '', 'shop-love-studio-sale7', 0),
(8, 'banner-aothunnu-002_12_11zon.webp', '', '', '', '', '', 'shop love studio sale8', '', 'shop-love-studio-sale8', 0),
(9, 'banner-quanshort-001_5_11zon.webp', '', '', '', '', '', 'shop love studio sale7', '', 'shop-love-studio-sale7', 0),
(10, 'banner-quanshort-002_6_11zon.webp', '', '', '', '', '', 'shop love studio sale8', '', 'shop-love-studio-sale8', 0),
(11, 'banner-quandai-001_3_11zon.webp', '', '', '', '', '', 'shop love studio sale9', '', 'shop-love-studio-sale9', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_thicong`
--

CREATE TABLE `tin_thicong` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `thuocloai` int(11) NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `linkurl` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_thicong`
--

INSERT INTO `tin_thicong` (`id`, `hinhanh`, `thuocloai`, `mota`, `tieude`, `linkurl`) VALUES
(1, '7938', 2, 'Massage Foot Ngọc Ánh tại Thành phố Hồ Chí Minh là liệu pháp thư giãn hiệu quả, giúp giảm mệt mỏi, cải thiện tuần hoàn và mang lại cảm giác thoải mái cho đôi chân sau những ngày dài làm việc.', 'Giới Thiệu', ''),
(2, '8312', 2, '33G Tân Hoà Đông, Phường 13, Q.6, TP.HCM', 'Địa chỉ', ''),
(3, '3633', 2, '0919003498', 'Số Điện Thoại', ''),
(4, '5786', 2, 'hongthuyphan1980@gmail.com', 'email', ''),
(5, '4209', 2, '      ', 'Chi nhánh tại thành phố Đà Nẵng', ''),
(6, '5870', 2, 'a ', 'Chi nhánh tại thành phố Đà Lạt', 'chi-nhanh-tai-thanh-pho-da-lat'),
(7, '5927', 2, '    ', 'Chi nhánh tại tỉnh Quảng Nam', ''),
(8, '4890', 2, '   ', 'Chi nhánh tại tỉnh Quảng Ngãi', ''),
(9, '5265', 2, '  ', 'Chi nhánh tại Hà Nội', ''),
(10, '5396', 2, '  ', 'Chi nhánh tại Đà Lạt', ''),
(11, '9169', 2, ' ', 'Tin Tức', ''),
(12, '6034', 2, '  ', 'GIỚI THIỆU', ''),
(13, '3885', 2, ' ', 'CHÍNH SÁCH BẢO MẬT THÔNG TIN', ''),
(14, '2510', 2, ' ', 'ĐIỀU KIỆN ĐIỀU KHOẢN', ''),
(15, '6839', 2, ' ', 'LIÊN HỆ', ''),
(16, '9038', 2, '  ', 'TÁC GIẢ', ''),
(17, '5472', 2, '  ', 'Copyright 2024 © worlddecoranl.com', ''),
(23, '9702', 2, ' ', 'worlddecoranl.com', ''),
(25, 'hinha-ads-1.gif', 2, '   ', 'ads bottom', ''),
(26, '1895hinhads-2.gif', 2, '  ', 'ads content', ''),
(27, '9874ads-phai.png', 2, '  ', 'ads menuleft', ''),
(28, '9437ads-phai778.png', 2, '', 'hình sp 2', ''),
(29, '1.png', 2, '  ', 'Hình logo', ''),
(30, 'LOGO.jpg', 2, '     555', 'ads top', 'ads-top'),
(33, 'LOGO.jpg', 2, '11111', '222', '222');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tintuc`
--

CREATE TABLE `tin_tintuc` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `hinhndab` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext NOT NULL,
  `trangchu` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `tieude_en` text NOT NULL,
  `title` text NOT NULL,
  `tukhoa` text NOT NULL,
  `tukhoa2` text NOT NULL,
  `ngay` text NOT NULL,
  `linkurl` text NOT NULL,
  `thuocloai` int(11) NOT NULL,
  `moi` int(11) NOT NULL,
  `noidung_en` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tintuc`
--

INSERT INTO `tin_tintuc` (`id`, `hinhanh`, `hinhndab`, `noidung`, `trangchu`, `mota`, `tieude`, `tieude_en`, `title`, `tukhoa`, `tukhoa2`, `ngay`, `linkurl`, `thuocloai`, `moi`, `noidung_en`) VALUES
(1, 'ao-lop.jpg', '', '<p>&Aacute;o lớp kh&ocirc;ng chỉ l&agrave; đồng phục m&agrave; c&ograve;n l&agrave; <strong>dấu ấn kỷ niệm thời học sinh</strong>, thể hiện tinh thần đo&agrave;n kết của một tập thể. V&igrave; vậy, việc lựa chọn một đơn vị may &aacute;o lớp uy t&iacute;n, chất lượng l&agrave; điều v&ocirc; c&ugrave;ng quan trọng. Nếu bạn đang t&igrave;m một <strong>địa chỉ l&agrave;m &aacute;o lớp tại Đ&agrave; Nẵng</strong>, Đồng Phục H&agrave; Thư ch&iacute;nh l&agrave; sự lựa chọn ho&agrave;n hảo!</p>\r\n\r\n<p>Với nhiều năm kinh nghiệm trong lĩnh vực may đồng phục, ch&uacute;ng t&ocirc;i tự h&agrave;o mang đến những mẫu &aacute;o lớp đẹp, <strong>độc quyền, c&aacute; t&iacute;nh, thoải m&aacute;i</strong> v&agrave; gi&aacute; cả hợp l&yacute;.</p>\r\n\r\n<p><strong>V&igrave; Sao N&ecirc;n Chọn Đồng Phục H&agrave; Thư Để May &Aacute;o Lớp?</strong></p>\r\n\r\n<p><strong>Thiết Kế Độc Quyền &ndash; Đa Dạng Phong C&aacute;ch</strong></p>\r\n\r\n<p>Tại Đồng Phục H&agrave; Thư, ch&uacute;ng t&ocirc;i sở hữu <strong>đội ngũ thiết kế chuy&ecirc;n nghiệp</strong>, lu&ocirc;n cập nhật xu hướng mới nhất để tạo ra những mẫu &aacute;o lớp độc đ&aacute;o, ph&ugrave; hợp với phong c&aacute;ch ri&ecirc;ng của từng tập thể. <strong>Bạn c&oacute; thể y&ecirc;u cầu thiết kế theo &yacute; tưởng ri&ecirc;ng</strong> hoặc chọn từ c&aacute;c mẫu c&oacute; sẵn.</p>\r\n\r\n<p>Một số phong c&aacute;ch &aacute;o lớp phổ biến tại H&agrave; Thư:<br />\r\n<strong>&Aacute;o lớp oversize năng động</strong><br />\r\n<strong>&Aacute;o lớp cổ tr&ograve;n, cổ polo thanh lịch</strong><br />\r\n<strong>&Aacute;o lớp phản quang ấn tượng</strong><br />\r\n<strong>&Aacute;o lớp tie-dye loang m&agrave;u c&aacute; t&iacute;nh</strong><br />\r\n<strong>&Aacute;o lớp c&oacute; slogan độc đ&aacute;o, in h&igrave;nh s&aacute;ng tạo</strong></p>\r\n\r\n<p><strong>Chất Liệu Cao Cấp &ndash; Đảm Bảo Thoải M&aacute;i</strong></p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i sử dụng <strong>vải cotton 100% hoặc vải thun c&aacute; sấu cao cấp</strong>, gi&uacute;p &aacute;o:<br />\r\n<strong>Thấm h&uacute;t mồ h&ocirc;i tốt</strong> &ndash; Giữ cảm gi&aacute;c tho&aacute;ng m&aacute;t, dễ chịu suốt cả ng&agrave;y d&agrave;i.<br />\r\n<strong>Co gi&atilde;n tốt, độ bền cao</strong> &ndash; Kh&ocirc;ng bị x&ugrave; l&ocirc;ng, gi&atilde;n vải sau nhiều lần giặt.<br />\r\n<strong>Đường may chắc chắn</strong> &ndash; Cẩn thận đến từng chi tiết, đảm bảo &aacute;o lu&ocirc;n bền đẹp.</p>\r\n\r\n<p><strong>C&ocirc;ng Nghệ In Hiện Đại &ndash; Độ Bền M&agrave;u Cao</strong></p>\r\n\r\n<p>&Aacute;o lớp tại Đồng Phục H&agrave; Thư được in bằng c&aacute;c c&ocirc;ng nghệ ti&ecirc;n tiến như:<br />\r\n<strong>In lụa</strong> &ndash; Ph&ugrave; hợp cho &aacute;o m&agrave;u s&aacute;ng, độ b&aacute;m mực cao.<br />\r\n<strong>In decal chuyển nhiệt</strong> &ndash; M&agrave;u sắc nổi bật, sắc n&eacute;t.<br />\r\n<strong>In phản quang</strong> &ndash; Tỏa s&aacute;ng khi c&oacute; &aacute;nh s&aacute;ng chiếu v&agrave;o.<br />\r\n<strong>In kỹ thuật số DTG</strong> &ndash; In h&igrave;nh ảnh ch&acirc;n thực, ph&ugrave; hợp với c&aacute;c thiết kế phức tạp.</p>\r\n\r\n<p>Nhờ c&ocirc;ng nghệ in hiện đại, <strong>m&agrave;u sắc lu&ocirc;n tươi s&aacute;ng, kh&ocirc;ng bong tr&oacute;c hay phai m&agrave;u sau nhiều lần giặt</strong>.</p>\r\n', '', 'Tìm địa chỉ làm áo lớp đẹp, chất lượng tại Đà Nẵng? Đồng Phục Hà Thư chuyên thiết kế, in và may áo lớp theo yêu cầu với nhiều mẫu độc đáo, vải cao cấp, giá tốt. Nhận đơn số lượng lớn, giao hàng tận nơi. Lhngay: 0905 108 532.', '', 'Địa Điểm Làm Áo Lớp Uy Tín Tại Đà Nẵng', '', 'May áo lớp theo yêu cầu Đà Nẵng', 'Địa điểm may đồng phục lớp uy tín đà nẵng', ' 31/03/2025 ', 'dia-diem-lam-ao-lop-uy-tin-tai-da-nang', 32, 0, ''),
(2, 'diem-may-dong-phuc.jpg', '', '<p>Đồng phục học sinh kh&ocirc;ng chỉ l&agrave; trang phục m&agrave; c&ograve;n thể hiện tinh thần đo&agrave;n kết, phong c&aacute;ch v&agrave; sự chuy&ecirc;n nghiệp của mỗi trường học. Tại Đ&agrave; Nẵng, <strong>Đồng Phục H&agrave; Thư</strong> l&agrave; đơn vị chuy&ecirc;n cung cấp đồng phục học sinh đẹp, chất lượng cao, ph&ugrave; hợp với từng cấp học v&agrave; y&ecirc;u cầu ri&ecirc;ng của từng trường.</p>\r\n\r\n<p><strong>Tại Sao N&ecirc;n Chọn Đồng Phục H&agrave; Thư?</strong></p>\r\n\r\n<p><strong>Chất liệu vải cao cấp</strong> &ndash; Đảm bảo mềm mại, thấm h&uacute;t mồ h&ocirc;i tốt, mang lại cảm gi&aacute;c thoải m&aacute;i khi mặc.<br />\r\n<strong>Thiết kế đẹp, đa dạng</strong> &ndash; Nhiều mẫu đồng phục ph&ugrave; hợp với từng cấp học từ tiểu học, THCS đến THPT.<br />\r\n<strong>Gia c&ocirc;ng tỉ mỉ, đường may chắc chắn</strong> &ndash; Đảm bảo bền đẹp sau nhiều lần giặt.<br />\r\n<strong>Nhận thiết kế theo y&ecirc;u cầu</strong> &ndash; T&ugrave;y chỉnh mẫu m&atilde;, m&agrave;u sắc, logo theo đặc trưng của từng trường.<br />\r\n<strong>Gi&aacute; cả hợp l&yacute; &ndash; Đảm bảo cạnh tranh</strong> với c&aacute;c xưởng may kh&aacute;c tr&ecirc;n thị trường.<br />\r\n<strong>Giao h&agrave;ng nhanh ch&oacute;ng, đ&uacute;ng tiến độ</strong> &ndash; Nhận đơn h&agrave;ng số lượng lớn v&agrave; giao tận nơi tr&ecirc;n to&agrave;n quốc.</p>\r\n\r\n<p><strong>C&aacute;c Mẫu Đồng Phục Học Sinh Tại H&agrave; Thư</strong></p>\r\n\r\n<p><strong>&Aacute;o sơ mi học sinh</strong> &ndash; Trắng tinh kh&ocirc;i, kiểu d&aacute;ng thanh lịch, ph&ugrave; hợp với cả nam v&agrave; nữ.<br />\r\n<strong>Quần t&acirc;y &ndash; V&aacute;y đồng phục</strong> &ndash; Kiểu d&aacute;ng chuẩn form, ph&ugrave; hợp với từng cấp học.<br />\r\n<strong>&Aacute;o d&agrave;i nữ sinh</strong> &ndash; Thiết kế thướt tha, t&ocirc;n vinh n&eacute;t đẹp học đường Việt Nam.<br />\r\n<strong>Đồng phục thể dục</strong> &ndash; Co gi&atilde;n, tho&aacute;ng m&aacute;t, th&iacute;ch hợp cho c&aacute;c hoạt động ngo&agrave;i trời.<br />\r\n<strong>&Aacute;o kho&aacute;c đồng phục</strong> &ndash; Bảo vệ học sinh khỏi thời tiết lạnh, in logo trường chuy&ecirc;n nghiệp.</p>\r\n\r\n<p><strong>Quy Tr&igrave;nh Đặt May Đồng Phục Tại H&agrave; Thư</strong></p>\r\n\r\n<p><strong>Bước 1:</strong> Tư vấn mẫu m&atilde;, chọn chất liệu vải theo y&ecirc;u cầu của trường.<br />\r\n<strong>Bước 2:</strong> Thiết kế demo theo y&ecirc;u cầu, điều chỉnh trước khi sản xuất.<br />\r\n<strong>Bước 3:</strong> Tiến h&agrave;nh may đo với số lượng lớn theo đ&uacute;ng ti&ecirc;u chuẩn.<br />\r\n<strong>Bước 4:</strong> Kiểm tra chất lượng từng sản phẩm trước khi giao h&agrave;ng.<br />\r\n<strong>Bước 5:</strong> Giao h&agrave;ng tận nơi, đ&uacute;ng tiến độ cam kết.</p>\r\n\r\n<p><strong>Đặt May Đồng Phục Học Sinh Ở Đ&acirc;u Uy T&iacute;n Tại Đ&agrave; Nẵng?</strong></p>\r\n\r\n<p>Nếu bạn đang t&igrave;m kiếm <strong>địa chỉ may đồng phục học sinh đẹp ở Đ&agrave; Nẵng</strong>, h&atilde;y li&ecirc;n hệ ngay với <strong>Đồng Phục H&agrave; Thư</strong> để được tư vấn v&agrave; b&aacute;o gi&aacute; chi tiết:</p>\r\n', '', 'Tìm địa chỉ may đồng phục học sinh đẹp, chất lượng tại Đà Nẵng? Đồng Phục Hà Thư chuyên thiết kế, sản xuất áo sơ mi, quần tây, váy đồng phục, áo dài nữ sinh, đồng phục thể dục theo yêu cầu. Cam kết vải đẹp, đường may chắc chắn, giá tốt, giao hàng nhanh.', '', 'Địa Chỉ May Đồng Phục Học Sinh Đẹp Ở Đà Nẵng', '', 'Địa chỉ may đồng phục học sinh Đà Nẵng', 'Đo may đồng phục học sinh đẹp sơn trà đà nẵng', ' 31/03/2025 ', 'dia-chi-may-dong-phuc-hoc-sinh-dep-o-da-nang', 32, 0, ''),
(3, 'do-maydongphuc.jpg', '', '<p>Đồng phục kh&ocirc;ng chỉ gi&uacute;p x&acirc;y dựng h&igrave;nh ảnh chuy&ecirc;n nghiệp m&agrave; c&ograve;n thể hiện tinh thần đo&agrave;n kết trong tổ chức, doanh nghiệp, trường học hay c&aacute;c tập thể. Nếu bạn đang t&igrave;m kiếm <strong>địa chỉ may đồng phục uy t&iacute;n tại Đ&agrave; Nẵng</strong>, <strong>Đồng Phục H&agrave; Thư</strong> l&agrave; sự lựa chọn l&yacute; tưởng d&agrave;nh cho bạn. Với nhiều năm kinh nghiệm trong lĩnh vực may mặc, ch&uacute;ng t&ocirc;i cam kết mang đến những sản phẩm đồng phục chất lượng cao, kiểu d&aacute;ng đẹp, ph&ugrave; hợp với từng nhu cầu ri&ecirc;ng biệt.</p>\r\n\r\n<p><strong>Tại Sao N&ecirc;n Chọn Đồng Phục H&agrave; Thư?</strong></p>\r\n\r\n<p><strong>Chất Lượng Sản Phẩm Đảm Bảo</strong></p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i sử dụng chất liệu vải cao cấp, đảm bảo sự thoải m&aacute;i khi mặc v&agrave; độ bền cao. C&aacute;c loại vải phổ biến như <strong>kate, cotton, kaki, thun lạnh</strong> đều c&oacute; độ co gi&atilde;n tốt, thấm h&uacute;t mồ h&ocirc;i hiệu quả, gi&uacute;p người mặc lu&ocirc;n dễ chịu trong suốt ng&agrave;y d&agrave;i l&agrave;m việc hoặc học tập.</p>\r\n\r\n<p><strong>Thiết Kế Đồng Phục Theo Y&ecirc;u Cầu</strong></p>\r\n\r\n<p>Kh&ocirc;ng chỉ cung cấp c&aacute;c mẫu đồng phục c&oacute; sẵn, <strong>H&agrave; Thư</strong> c&ograve;n nhận <strong>tư vấn v&agrave; thiết kế theo y&ecirc;u cầu</strong> của kh&aacute;ch h&agrave;ng. D&ugrave; bạn cần đồng phục học sinh, đồng phục c&ocirc;ng sở, nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn, bệnh viện hay &aacute;o lớp, &aacute;o nh&oacute;m, ch&uacute;ng t&ocirc;i đều c&oacute; thể tạo ra mẫu thiết kế ri&ecirc;ng, đảm bảo sự kh&aacute;c biệt v&agrave; độc đ&aacute;o.</p>\r\n\r\n<p><strong>May Đo Chuẩn Form, Đảm Bảo Sự Thoải M&aacute;i</strong></p>\r\n\r\n<p>Mỗi bộ đồng phục được may theo số đo ch&iacute;nh x&aacute;c, gi&uacute;p người mặc cảm thấy tự tin, thoải m&aacute;i. Đặc biệt, đồng phục c&ocirc;ng sở hay đồng phục học sinh cần sự vừa vặn để tạo phong th&aacute;i chuy&ecirc;n nghiệp nhưng vẫn đảm bảo sự linh hoạt khi vận động.</p>\r\n\r\n<p><strong>Gi&aacute; Cả Cạnh Tranh &ndash; Đặt H&agrave;ng Số Lượng Lớn Gi&aacute; Tốt</strong></p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i lu&ocirc;n cung cấp <strong>gi&aacute; cả hợp l&yacute;</strong> đi k&egrave;m với chất lượng tốt nhất. Kh&aacute;ch h&agrave;ng đặt h&agrave;ng với số lượng lớn sẽ được hưởng <strong>ưu đ&atilde;i đặc biệt</strong>.</p>\r\n\r\n<p><strong>Thời Gian Giao H&agrave;ng Nhanh Ch&oacute;ng</strong></p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i cam kết ho&agrave;n th&agrave;nh đơn h&agrave;ng đ&uacute;ng tiến độ, thậm ch&iacute; c&oacute; thể <strong>may gấp theo y&ecirc;u cầu</strong> m&agrave; vẫn đảm bảo chất lượng sản phẩm.</p>\r\n\r\n<p><strong>C&aacute;c Loại Đồng Phục Ch&uacute;ng T&ocirc;i Cung Cấp</strong></p>\r\n\r\n<p><strong>Đồng phục học sinh</strong>: &Aacute;o sơ mi, quần t&acirc;y, ch&acirc;n v&aacute;y, &aacute;o thể dục, &aacute;o kho&aacute;c đồng phục&hellip;<br />\r\n<strong>Đồng phục c&ocirc;ng sở</strong>: &Aacute;o sơ mi nam nữ, vest, quần &acirc;u, ch&acirc;n v&aacute;y c&ocirc;ng sở&hellip;<br />\r\n<strong>Đồng phục nh&agrave; h&agrave;ng &ndash; kh&aacute;ch sạn</strong>: &Aacute;o bếp, tạp dề, đồng phục phục vụ&hellip;<br />\r\n<strong>Đồng phục bệnh viện</strong>: &Aacute;o blouse b&aacute;c sĩ, đồng phục y t&aacute;, hộ l&yacute;&hellip;<br />\r\n<strong>&Aacute;o lớp, &aacute;o nh&oacute;m, &aacute;o team building</strong>: Thiết kế độc quyền, in th&ecirc;u logo theo y&ecirc;u cầu.</p>\r\n\r\n<p><strong>Địa Chỉ May Đồng Phục Uy T&iacute;n Ở Đ&agrave; Nẵng</strong></p>\r\n\r\n<p><strong>Đồng Phục H&agrave; Thư</strong> tự h&agrave;o l&agrave; xưởng may đồng phục chuy&ecirc;n nghiệp tại Đ&agrave; Nẵng, phục vụ nhiều đối tượng kh&aacute;ch h&agrave;ng kh&aacute;c nhau từ doanh nghiệp, nh&agrave; h&agrave;ng, kh&aacute;ch sạn đến trường học v&agrave; c&aacute; nh&acirc;n.<br />\r\n<strong>Hotline</strong>: 0905 108 532</p>\r\n', '', 'Bạn đang tìm địa điểm đo may đồng phục uy tín tại Đà Nẵng? Đồng Phục Hà Thư chuyên thiết kế, may đo đồng phục học sinh, công sở, nhà hàng, bệnh viện chất lượng cao. Vải đẹp, bền, thoáng mát, giá tốt, giao hàng nhanh. Liên hệ ngay để được tư vấn!', '', 'Địa điểm đo may đồng phục học sinh Đà Nẵng', '', 'May đồng phục theo yêu cầu Đà Nẵng', 'Địa điểm đo may quần áo học sinh đà nẵng', ' 31/03/2025 ', 'dia-diem-do-may-dong-phuc-hoc-sinh-da-nang', 32, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_title`
--

CREATE TABLE `tin_title` (
  `id` int(11) NOT NULL,
  `hinhanh` text NOT NULL,
  `mota` text NOT NULL,
  `tieude` text NOT NULL,
  `linkurl` text NOT NULL,
  `thuocloai` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_title`
--

INSERT INTO `tin_title` (`id`, `hinhanh`, `mota`, `tieude`, `linkurl`, `thuocloai`) VALUES
(1, '283', 'TopService is a leading online platform, providing diverse professional services to meet customer needs in many different fields.', 'Giới Thiệu', '', '1'),
(2, '9636', '26 Nguyen Duy, Cam Le, Da Nang', 'Địa Chỉ', '', '1'),
(3, '300', '0379097853', 'Số Điện Thoại', '', '1'),
(4, '2189', 'kinhdoanhatv@gmail.com\r\n', 'Email', '', '1'),
(5, '5003', 'INSURANCE  ', 'FOOTER 1', '', '2'),
(6, '2682', 'LAW   ', 'FOOTER 2', '', '2'),
(7, '8966', 'EDUCATION  ', 'FOOTER 3', '', '2'),
(8, '3824', 'FINANCE  ', 'FOOTER 4', '', '2'),
(9, '1219', 'BUSINESS ', 'FOOTER 5', '', '2'),
(10, '7508', 'NEWS ', 'FOOTER 6', '', '2'),
(11, '1188', 'MASSAGE NAM', 'TÊN TIÊU ĐỀ 1', '', '3'),
(12, '4304', 'MASSAGE NỮ', 'TÊN TIÊU ĐỀ 2', '', '3'),
(13, '4614', 'MASSAGE NAM NỮ', 'TÊN TIÊU ĐỀ 3', '', '3'),
(14, '348', 'MASSAGE BODY', 'TÊN TIÊU ĐỀ 4', '', '3'),
(15, '8950', 'MASSAGE FOOT', 'TÊN TIÊU ĐỀ 5', '', '3'),
(16, '6493', 'TIN TỨC NỔI BẬT', 'TÊN TIÊU ĐỀ 6', '', '3'),
(17, '4374', 'TOPSERVICE ', 'NAME LOGO', '', '3'),
(18, '9453', 'FEATURED NEWS  ', 'MENU LEFT 1', '', '4'),
(19, '1771', 'CATEGORY  ', 'MENU LEFT 2', 'menu-left-2', '4'),
(20, '1203', '', 'Https://www.thongtinwwebsite.com', '', '4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `PASSWORD`, `created_at`) VALUES
(1, 'tungahh22', 'anh tung', '$2y$10$50gk6onmRl7ZPCs80pAicu/YcBZQW5AIvFa/0vk3JD8orInjMFyyO', '2025-04-04 02:16:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_online`
--

CREATE TABLE `users_online` (
  `visitor` varchar(15) NOT NULL,
  `lastvisit` int(14) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users_online`
--

INSERT INTO `users_online` (`visitor`, `lastvisit`, `username`) VALUES
('127.0.0.1', 1308542022, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_id` (`donhang_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `doi_tac`
--
ALTER TABLE `doi_tac`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `du_an`
--
ALTER TABLE `du_an`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `du_lieu_1_tin`
--
ALTER TABLE `du_lieu_1_tin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gioi_thieu`
--
ALTER TABLE `gioi_thieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `he_thong`
--
ALTER TABLE `he_thong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_ma_sanpham`
--
ALTER TABLE `loai_ma_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_dichvu`
--
ALTER TABLE `loai_tin_dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_dichvuu`
--
ALTER TABLE `loai_tin_dichvuu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_sanpham`
--
ALTER TABLE `loai_tin_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_thicong`
--
ALTER TABLE `loai_tin_thicong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_tintuc`
--
ALTER TABLE `loai_tin_tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_tin_title`
--
ALTER TABLE `loai_tin_title`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ma_sanpham`
--
ALTER TABLE `ma_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtin_quantri`
--
ALTER TABLE `thongtin_quantri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_ke`
--
ALTER TABLE `thong_ke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_lh`
--
ALTER TABLE `thong_tin_lh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuong_mai`
--
ALTER TABLE `thuong_mai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_dichvu`
--
ALTER TABLE `tin_dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_dichvuu`
--
ALTER TABLE `tin_dichvuu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_sanpham`
--
ALTER TABLE `tin_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_thicong`
--
ALTER TABLE `tin_thicong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_tintuc`
--
ALTER TABLE `tin_tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin_title`
--
ALTER TABLE `tin_title`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT cho bảng `doi_tac`
--
ALTER TABLE `doi_tac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `du_an`
--
ALTER TABLE `du_an`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `du_lieu_1_tin`
--
ALTER TABLE `du_lieu_1_tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `gioi_thieu`
--
ALTER TABLE `gioi_thieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `he_thong`
--
ALTER TABLE `he_thong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `loai_ma_sanpham`
--
ALTER TABLE `loai_ma_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `loai_tin_dichvu`
--
ALTER TABLE `loai_tin_dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `loai_tin_dichvuu`
--
ALTER TABLE `loai_tin_dichvuu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `loai_tin_sanpham`
--
ALTER TABLE `loai_tin_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `loai_tin_thicong`
--
ALTER TABLE `loai_tin_thicong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `loai_tin_tintuc`
--
ALTER TABLE `loai_tin_tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `loai_tin_title`
--
ALTER TABLE `loai_tin_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `ma_sanpham`
--
ALTER TABLE `ma_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45478;

--
-- AUTO_INCREMENT cho bảng `thongtin_quantri`
--
ALTER TABLE `thongtin_quantri`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thong_ke`
--
ALTER TABLE `thong_ke`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thong_tin_lh`
--
ALTER TABLE `thong_tin_lh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thuong_mai`
--
ALTER TABLE `thuong_mai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `tin_dichvu`
--
ALTER TABLE `tin_dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `tin_dichvuu`
--
ALTER TABLE `tin_dichvuu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `tin_sanpham`
--
ALTER TABLE `tin_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tin_thicong`
--
ALTER TABLE `tin_thicong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `tin_tintuc`
--
ALTER TABLE `tin_tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tin_title`
--
ALTER TABLE `tin_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiet_donhang`
--
ALTER TABLE `chitiet_donhang`
  ADD CONSTRAINT `chitiet_donhang_ibfk_1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
