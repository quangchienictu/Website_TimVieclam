-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 06, 2020 lúc 06:59 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tim_viec_lam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanhnghiep`
--

CREATE TABLE `doanhnghiep` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doanhnghiep`
--

INSERT INTO `doanhnghiep` (`id`, `username`, `ten`, `anh`, `gioithieu`, `diachi`, `email`, `sdt`) VALUES
(1, 'chien', 'SVMC Hà Nội', '88089ec51099649_636674810099147_6861240474749894656_n.jpg', 'Công ty chuyên tư vấn tình cảm nam nữ', 'Xã quyết thắng - thái nguyên', 'quangchien.ictu@gmail.com', '096154845'),
(7, 'cnttk14d', 'VINA NQC', 'logo.jpg', 'Công ty sản xuất linh kiện điện tử ', 'Số 12 , đường z115 , xã Quyết Thắng ', 'cntt@gmail.com', '0981636928'),
(8, 'x', 'y', '80503a4avatar.jpg', 'y', 'y', 'y@g.n', 'y'),
(9, '1', 'SKY', '1cb9f45logo.png', 'd', 'Xã quyết thắng - thái nguyên', 'quangchienictu@gmail.com', '0123456'),
(10, 'svmc', 'SVMC', 'ec107082.jpg', 'Công ty phần mềm', 'Hà Nội', 'smvc@gmail.com', '0123456789'),
(11, 'fpt', 'FPT', 'logo.png', 'Công ty về viễn thông lớn nhất toàn quốc', 'Lô T2, Đường D1, Khu Công nghệ cao Quận 9,', 'tult3@fsoft.com.vn', '0837362323.'),
(12, 'cty', 'H&A', 'logo.png', 'hihihi', 'Xã quyết thắng - thái nguyên', 'junhi@gmail.com', '09658456444'),
(13, '1', '', 'logo.png', '', '', '', ''),
(14, 'hi', 'đấ', 'logo.png', 'a', 'a', 'admin@gmail.com', '232342342'),
(15, 'admin', '', 'logo.png', '', '', '', ''),
(16, 'admin', '', 'logo.png', '', '', '', ''),
(17, '2', '', 'logo.png', '', '', '', ''),
(18, 'admin', '', 'logo.png', '', '', '', ''),
(19, 'abc', 'SVM', '2a68c0451099649_636674810099147_6861240474749894656_n.jpg', 'abc', 'abc', 'admin@gmail.com', '0981636789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoigian` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `ten`, `sdt`, `email`, `noidung`, `thoigian`) VALUES
(16, 'google', '1234567', 'nsdijas@gmail.com', 'Về sự việc trên, tối 6/4, trả lời VTC News, lãnh đạo Cơ quan Cảnh sát điều tra Công an tỉnh Bắc Ninh khẳng định thông tin trên hoàn toàn sai sự thật.', '2019-04-07 08:21:41'),
(17, 'sd', '0981231', 'quangchien.ictu@gmail.com', 'Khi các bạn muốn điều hướng chuyển sang trang khác từ trang hiện tại thì có thể dùng PHP hoặc HTML, Javascript khá đơn giản. Tùy vào nhu cầu của bạn bạn có thể tham khảo những cách sau đây. Thường thấ', '2019-04-07 08:23:07'),
(18, '', '', '', '', '2019-04-08 10:34:00'),
(19, 'chien', '0981231', 'admin@gmail.com', 'Cần bổ sung nghề nghiệp : Phi công', '2019-04-11 14:46:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nghe_nghiep`
--

CREATE TABLE `nghe_nghiep` (
  `id` int(11) NOT NULL,
  `ma_nghe` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_nghe` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nghe_nghiep`
--

INSERT INTO `nghe_nghiep` (`id`, `ma_nghe`, `ten_nghe`) VALUES
(1, 'bs', 'Bác sĩ / Dược sĩ'),
(2, 'bh', 'Bán hàng'),
(3, 'btri', 'Bảo trì / Sửa chữa'),
(4, 'bds', 'Bất động sản'),
(5, 'ckhoan', 'Chứng khoán'),
(6, 'ckhi', 'Cơ khí'),
(7, 'cnc', 'Công nghệ cao'),
(8, 'dkhi', 'Dầu khí'),
(9, 'dmay', 'Dệt may'),
(10, 'gduc', 'Giáo dục / Đào tạo'),
(11, 'dlich', 'Du lịch'),
(12, 'ian', 'In ấn'),
(13, 'it1', 'IT phần mềm '),
(14, 'it2 ', 'IT phần cứng'),
(15, 'ktoan1', 'Kế toán'),
(16, 'ktoan2', 'Kiểm toán'),
(17, 'mkt', 'Marketing'),
(18, 'nhang', 'Ngân hàng'),
(19, 'ksan', 'Nhà hàng / Khách sạn'),
(20, 'ddt', 'Điện / Điện tử'),
(21, 'nvvp', 'Nhân viên văn phòng'),
(22, 'athuc', 'Ẩm thực (đầu bếp /phụ bếp)'),
(23, 'ctv', 'Cộng tác viên'),
(35, '66786fd', 'Khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `trangthai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `password`, `level`, `trangthai`) VALUES
(1, 'admin', 'admin', 2, 'on'),
(2, 'chien', 'admin', 1, 'on'),
(24, 'cnttk14d', '12345', 1, 'on'),
(27, 'svmc', 'admin', 1, 'on'),
(28, 'fpt', 'chien', 1, 'on'),
(29, 'cty', 'cty', 1, 'on'),
(33, 'admin2', 'admin', 1, 'on'),
(34, 'admin3', 'admin', 2, 'off'),
(35, 'abc', 'abc', 1, 'on');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinh`
--

CREATE TABLE `tinh` (
  `id` int(11) NOT NULL,
  `tenTinh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinh`
--

INSERT INTO `tinh` (`id`, `tenTinh`) VALUES
(1, 'An Giang'),
(2, 'Vũng Tàu'),
(3, 'Bạc Liêu'),
(4, 'Bắc Kạn'),
(5, 'Bắc Giang'),
(6, 'Bắc Ninh'),
(7, 'Bến Tre'),
(8, 'Bình Dương'),
(9, 'Bình Định'),
(10, 'Bình Phước'),
(11, 'Bình Thuận'),
(12, 'Cà Mau'),
(13, 'Cao Bằng'),
(14, 'Cần Thơ'),
(15, 'Đà Nẵng'),
(16, 'Đắk Lắk'),
(17, 'Đắk Nông'),
(18, 'Điện Biên'),
(19, 'Đồng Nai'),
(20, 'Đồng Tháp'),
(21, 'Gia Lai'),
(22, 'Hà Giang'),
(23, 'Hà Nam'),
(24, 'Hà Nội'),
(25, 'Hà Tây'),
(26, 'Hà Tĩnh'),
(27, 'Hải Dương'),
(28, 'Hải Phòng'),
(29, 'Hòa Bình'),
(30, 'Hồ Chí Minh'),
(31, 'Hậu Giang'),
(32, 'Hưng Yên'),
(33, 'Khánh Hòa'),
(34, 'Kiên Giang'),
(35, 'Kon Tum'),
(36, 'Lai Châu'),
(37, 'Lào Cai'),
(38, 'Lạng Sơn'),
(39, 'Lâm Đồng'),
(40, 'Long An'),
(41, 'Nam Định'),
(42, 'Nghệ An'),
(43, 'Ninh Bình'),
(44, 'Ninh Thuận'),
(45, 'Phú Thọ'),
(46, 'Phú Yên'),
(47, 'Quảng Bình'),
(48, 'Quảng Nam'),
(49, 'Quảng Ngãi'),
(50, 'Quảng Ninh'),
(51, 'Quảng Trị'),
(52, 'Sóc Trăng'),
(53, 'Sơn La'),
(54, 'Tây Ninh'),
(55, 'Thái Bình'),
(56, 'Thái Nguyên'),
(57, 'Thanh Hóa'),
(58, 'Thừa Thiên - Huế'),
(59, 'Tiền Giang'),
(60, 'Trà Vinh'),
(61, 'Tuyên Quang'),
(62, 'Vĩnh Long'),
(63, 'Vĩnh Phúc'),
(64, 'Yên Bái');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyen_dung`
--

CREATE TABLE `tuyen_dung` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diadiem` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_tinh` int(11) NOT NULL,
  `ma_nghe_nghiep` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vi_tri` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci,
  `yeucau` text COLLATE utf8mb4_unicode_ci,
  `mucluong` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_thuc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `sdt_cv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_cv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_gian_dang` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tuyen_dung`
--

INSERT INTO `tuyen_dung` (`id`, `username`, `hinhanh`, `diadiem`, `ma_tinh`, `ma_nghe_nghiep`, `vi_tri`, `mota`, `yeucau`, `mucluong`, `hinh_thuc`, `gioitinh`, `soluong`, `sdt_cv`, `email_cv`, `trangthai`, `thoi_gian_dang`) VALUES
(1, 'chien', 'a476855t1.jpg', 'Nga Bạch', 2, 'bs', 'nhân viên', 'Đứng bán hàng cho khách', 'Khỏe mạnh , tốt nghiệp cấp 3', '2-3 triệu', 'thoivu', 'Tất cả', 3, '096154845', 'quangchien.ictu@gmail.com', 'on', '2019-03-26 15:09:30'),
(56, 'svmc', 'job.jpg', 'Hà Nội', 24, 'it1', 'Join dev', 'Thiết kế và phá triển phần mềm', 'Tốt nghiệp bằng CNTT', '10-12 triệu', 'fulltime', 'Nam', 12, '0123456789', 'smvc@gmail.com', 'on', '2019-03-28 18:13:59'),
(57, 'fpt', 'job.jpg', 'Lô T2, Đường D1, Khu Công nghệ cao Quận 9,', 30, 'it1', 'Nhân viên', 'Phát triển mạng viễn thông', 'Tốt nghiệp với bằng công nghệ thông tin', '8-12 triệu', 'fulltime', 'Tất cả', 3, '0837362323.', 'tult3@fsoft.com.vn', 'off', '2019-03-28 18:18:27'),
(58, 'fpt', 'job.jpg', 'Lô T2, Đường D1, Khu Công nghệ cao Quận 9,', 1, 'ktoan1', 'Nhân viên', 'Kế toán cho công ty', 'Ngoại hình ưa nhìn , tốt nghiệp đại học bằng kế toán loại giỏi', '20-25 triệu', 'fulltime', 'Nữ', 1, '0837362323.', 'tult3@fsoft.com.vn', 'on', '2019-03-28 18:19:58'),
(59, 'fpt', '6fa99fat1.jpg', 'Lô T2, Đường D1, Khu Công nghệ cao Quận 9,', 1, 'cnc', 'Nhân viên', 'Vận hàng máy công nghệ cao', 'Tốt nghiệp cấp 3', '7-10 triệu', 'fulltime', 'Nam', 3, '0837362323.', 'tult3@fsoft.com.vn', 'on', '2019-03-28 18:24:59'),
(61, 'cty', 'job.jpg', 'Xã quyết thắng - thái nguyên', 4, 'athuc', 'Đầu bếp', 'Nấu ăn cho nhà hàng', 'Chăm chỉ , cần cù ', '6-8 triệu', 'fulltime', 'Tất cả', 5, '09658456444', 'junhi@gmail.com', 'on', '2019-03-28 18:28:48'),
(62, 'cty', 'job.jpg', 'Xã quyết thắng - thái nguyên', 4, 'btri', 'Nhân viên', 'Sửa chữa thiết bị cho công ty', 'Có bằng tốt nghiệp trung cấp trở lên', 'Thỏa thuận', 'parttime', 'Nam', 1, '09658456444', 'junhi@gmail.com', 'on', '2019-03-28 18:31:47'),
(63, 'cty', 'job.jpg', 'Xã quyết thắng - thái nguyên', 11, 'gduc', 'Gia sư', 'Dạy học cho các em nhỏ', 'Kiến thức tốt về 1 trong các môn : Toán , Ngoại Ngữ , Vật lý , Hóa Học lớp 10-12', 'Thỏa thuận', 'parttime', 'Tất cả', 50, '09658456444', 'junhi@gmail.com', 'on', '2019-03-28 18:34:22'),
(68, 'chien', '69ae9fdt5.jpg', 'Trung tâm học liệu ', 56, 'gduc', 'Gia sư tiếng anh', 'Giảng dạy tiếng anh cơ bản choTrung học phổ thông', 'Có bằng tiếng anh B1', 'Thỏa thuận', 'fulltime', 'Nữ', 1, '096154845', 'quangchien.ictu@gmail.com', 'on', '2019-04-08 07:52:55'),
(69, 'cnttk14d', 'aa64998cenland-tuyen-dung-5.jpg', 'Số 12 , đường z115 , xã Quyết Thắng ', 56, 'ddt', 'Nhân viên', 'Đứng lắp rắp linh kiện điện tử', 'Trên 18 tuổi', '4-6 triệu', 'thoivu', 'Tất cả', 20, '0981636928', 'cntt@gmail.com', 'on', '2019-04-11 12:25:12'),
(70, 'cnttk14d', '33b8766t3.jpg', 'Số 12 , đường z115 , xã Quyết Thắng ', 56, 'ddt', 'Tổ trưởng', 'Quản lý công nhân cho xưởng , báo cáo tình hình và thực hiện các đề mục công ty giao', 'Tốt nghiệp THPT , Tuổi >25', '10 triệu', 'fulltime', 'Tất cả', 5, '0981636928', 'cntt@gmail.com', 'on', '2019-04-11 12:29:03'),
(71, 'cnttk14d', '0f8c31bt5.jpg', 'Số 12 , đường z115 , xã Quyết Thắng ', 56, 'ktoan2', 'Nhân viên', 'Thực hiện kiểm tra chất lượng sản phẩm', 'Tốt nghiệp đại học chuyên ngành Kiểm toán', '12 triệu', 'fulltime', 'Nữ', 1, '0981636928', 'cntt@gmail.com', 'on', '2019-04-11 12:36:48'),
(72, 'cnttk14d', 'job.jpg', 'Số 12 , đường z115 , xã Quyết Thắng ', 56, 'ian', 'Nhân viên', 'Thực hiện công việc in ấn các giấy tờ cho công ty', 'Tốt nghiệp THPT , đã từng làm việc với máy in là 1 lợi thế', '7 triệu', 'fulltime', 'Nam', 2, '0981636928', 'cntt@gmail.com', 'on', '2019-04-11 12:40:06'),
(73, 'fpt', '9c40b20t1.jpg', 'Lô T2, Đường D1, Khu Công nghệ cao Quận 9,', 24, 'it1', 'DEV Java', 'Thực hiện các dự án Web cho công ty bằng ngôn ngữ java', 'Tốt nghiệp ĐH ngành CNTT', '15 -20 triệu', 'fulltime', 'Nam', 5, '0837362323.', 'tult3@fsoft.com.vn', 'on', '2019-04-11 12:45:01'),
(74, 'fpt', 'dd6133dt1.jpg', 'Lô T2, Đường D1, Khu Công nghệ cao Quận 9,', 24, 'cnc', 'Kỹ sư', 'Tham gia các dự án thiết kế thiết bị thông minh', 'Tốt nghiệp ĐH ngành CNTT', '20 - 25 triệu', 'fulltime', 'Nam', 1, '0837362323.', 'tult3@fsoft.com.vn', 'on', '2019-04-11 14:44:46'),
(75, 'abc', 'job.jpg', 'abc', 1, 'athuc', 'Gia sư tiếng anh', 'abc', 'abcv', '12 triệu', 'parttime', 'Tất cả', 2, '0981636789', 'admin@gmail.com', 'on', '2019-04-12 01:43:21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `doanhnghiep`
--
ALTER TABLE `doanhnghiep`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nghe_nghiep`
--
ALTER TABLE `nghe_nghiep`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tuyen_dung`
--
ALTER TABLE `tuyen_dung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `doanhnghiep`
--
ALTER TABLE `doanhnghiep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `nghe_nghiep`
--
ALTER TABLE `nghe_nghiep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tinh`
--
ALTER TABLE `tinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `tuyen_dung`
--
ALTER TABLE `tuyen_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
