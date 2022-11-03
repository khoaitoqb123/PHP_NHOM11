-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2022 lúc 04:10 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_quanaonam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethd`
--

CREATE TABLE `chitiethd` (
  `MaHD` varchar(5) NOT NULL,
  `MaMH` varchar(5) NOT NULL,
  `SoLuong` int(4) NOT NULL,
  `DonGia` int(10) NOT NULL,
  `ThanhTien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethd`
--

INSERT INTO `chitiethd` (`MaHD`, `MaMH`, `SoLuong`, `DonGia`, `ThanhTien`) VALUES
('HD001', 'MH001', 1, 784000, 784000),
('HD002', 'MH005', 1, 686000, 686000),
('HD003', 'MH016', 1, 784000, 784000),
('HD004', 'MH027', 1, 127000, 127000),
('HD005', 'MH018', 1, 588000, 588000),
('HD006', 'MH070', 1, 1100000, 1100000),
('HD007', 'MH080', 1, 2500000, 2500000),
('HD008', 'MH054', 1, 489000, 489000),
('HD009', 'MH072', 1, 1500000, 1500000),
('HD010', 'MH066', 1, 850000, 850000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hdban`
--

CREATE TABLE `hdban` (
  `MaHD` varchar(5) NOT NULL,
  `MaNV` varchar(5) NOT NULL,
  `NgayBan` date NOT NULL,
  `MaKH` varchar(5) NOT NULL,
  `TongTien` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hdban`
--

INSERT INTO `hdban` (`MaHD`, `MaNV`, `NgayBan`, `MaKH`, `TongTien`) VALUES
('HD001', 'NV001', '2022-10-11', 'KH001', 0),
('HD002', 'NV001', '2022-10-11', 'KH002', 0),
('HD003', 'NV002', '2022-10-20', 'KH003', 0),
('HD004', 'NV002', '2022-10-12', 'KH004', 0),
('HD005', 'NV003', '2022-10-19', 'KH005', 0),
('HD006', 'NV003', '2022-10-21', 'KH006', 0),
('HD007', 'NV004', '2022-10-07', 'KH007', 0),
('HD008', 'NV004', '2022-10-28', 'KH008', 0),
('HD009', 'NV005', '2022-11-09', 'KH009', 0),
('HD010', 'NV005', '2022-11-22', 'KH010', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(5) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `DienThoai` int(10) NOT NULL,
  `username` varchar(5) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `DiaChi`, `DienThoai`, `username`, `password`) VALUES
('KH001', 'Lê Trung Dũng', '25 Hà Huy Tập', 914111111, 'KH001', 11111),
('KH002', 'Lê Trung Hiếu', '25 Hà Huy Tập', 914111112, 'KH002', 11111),
('KH003', 'Lê Trung Chính', '26 Hà Huy Tập', 914111113, 'KH003', 11111),
('KH004', 'Nguyễn Gia Bảo', '10 Lê Lợi', 914111114, 'KH004', 11111),
('KH005', 'Nguyễn Thành Đạt', '12 Quang Trung', 914111115, 'KH005', 11111),
('KH006', 'Võ Thành Tài', '1 Lê Thánh Tôn', 914111116, 'KH006', 11111),
('KH007', 'Trần Công Quyền', '20 Bạch Đằng', 914111117, 'KH007', 11111),
('KH008', 'Nguyễn Huỳnh Thanh Hải', '3 Nguyễn Du', 914111118, 'KH008', 11111),
('KH009', 'Nguyễn Thị Minh Châu', '7 Đinh Tiên Hoàng', 914111119, 'KH009', 11111),
('KH010', 'Nguyễn Hoàng Dũng', '3 Lê Lai', 914111110, 'KH010', 11111);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `MaLH` varchar(5) NOT NULL,
  `TenLH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`MaLH`, `TenLH`) VALUES
('LH001', 'Sơ mi'),
('LH002', 'Quần'),
('LH003', 'Áo thun'),
('LH004', 'Len dệt'),
('LH005', 'Áo khoác'),
('LH006', 'Quần short'),
('LH007', 'Đồ thể thao'),
('LH008', 'Hoodies');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mathang`
--

CREATE TABLE `mathang` (
  `MaMH` varchar(5) NOT NULL,
  `TenMH` varchar(50) NOT NULL,
  `MaLH` varchar(5) NOT NULL,
  `Soluong` int(4) NOT NULL,
  `GiaBan` int(10) NOT NULL,
  `Anh` varchar(255) NOT NULL,
  `GhiChu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mathang`
--

INSERT INTO `mathang` (`MaMH`, `TenMH`, `MaLH`, `Soluong`, `GiaBan`, `Anh`, `GhiChu`) VALUES
('MH001', 'Nhẹ nhàng hơn đồng nghĩa với tự do hơn trên đường ', 'LH001', 50, 784000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/455808/item/vngoods_67_455808.jpg?width=1600&impolicy=quality_75', 'Áo sơ mi vải dạ mềm mại và thoải mái. Mẫu caro đặc trưng theo phong cách JW Anderson'),
('MH002', 'Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay', 'LH001', 50, 784000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/455807/item/vngoods_16_455807.jpg?width=1600&impolicy=quality_75', 'Áo sơ mi vải dạ mềm mại và thoải mái. Họa tiết caro kết hợp với phong cách JW Anderson đặc trưng'),
('MH003', 'Áo Sơ Mi Vải Dạ Kẻ Caro Dáng Rộng Dài Tay', 'LH001', 50, 784000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/455659/item/vngoods_30_455659.jpg?width=1600&impolicy=quality_75', 'Vải dạ dày và ấm trong kiểu caro thời trang. Sản phẩm có thể tạo kiểu như một lớp áo bên ngoài'),
('MH004', 'Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay', 'LH001', 50, 686000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/453172/item/vngoods_69_453172.jpg?width=1600&impolicy=quality_75', 'Vải dạ dày, vừa vặn, sản phẩm có thể mặc riêng lẻ hoặc như một lớp áo bên ngoài'),
('MH005', 'Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay', 'LH001', 50, 686000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/453171/item/vngoods_57_453171.jpg?width=1600&impolicy=quality_75', 'Vải dạ dày, vừa vặn, sản phẩm có thể mặc riêng lẻ hoặc như một lớp áo bên ngoài'),
('MH006', 'Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay', 'LH001', 50, 784000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/452710/item/vngoods_69_452710.jpg?width=1600&impolicy=quality_75', 'Áo sơ mi vải dạ mềm mại và thoải mái. Túi trước ngực và chi tiết thêu logo JW Anderson tạo điểm nhấn đặc trưng'),
('MH007', 'Áo Sơ Mi Flannel Kẻ Caro Dài Tay Dáng Rộng', 'LH001', 50, 784000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/452705/item/vngoods_68_452705.jpg?width=1600&impolicy=quality_75', 'Vải dạ dày và ấm trong kiểu caro thời trang. Sản phẩm có thể tạo kiểu như một lớp áo bên ngoài'),
('MH008', 'Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay', 'LH001', 50, 686000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/451303/item/vngoods_18_451303.jpg?width=1600&impolicy=quality_75', 'Dựa trên phản hồi của khách hàng, chúng tôi đã cập nhật chất liệu thành loại vải dày hơn. Có thể mặc riêng lẻ hoặc làm một lớp áo bên ngoài nhẹ'),
('MH009', 'Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay', 'LH001', 50, 686000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/451302/item/vngoods_31_451302.jpg?width=1600&impolicy=quality_75', 'Dựa trên phản hồi của khách hàng, chúng tôi đã cập nhật chất liệu thành loại vải dày hơn. Có thể mặc riêng lẻ hoặc làm một lớp áo bên ngoài nhẹ'),
('MH010', 'Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay', 'LH001', 50, 686000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/451301/item/vngoods_67_451301.jpg?width=1600&impolicy=quality_75', 'Dựa trên phản hồi của khách hàng, chúng tôi đã cập nhật chất liệu thành một loại vải dày hơn. Có thể mặc riêng lẻ hoặc như một lớp áo bên ngoài nhẹ'),
('MH011', 'Quần Smart Pants Dài Đến Mắt Cá', 'LH002', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/452541/item/vngoods_07_452541.jpg?width=1600&impolicy=quality_75', 'Kiểu dáng đẹp phù hợp. Quần dài đến mắt cá chân linh hoạt cho mọi phong cách'),
('MH012', 'Quần Smart Pants Dài Đến Mắt Cá', 'LH002', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/452112/item/vngoods_35_452112.jpg?width=1600&impolicy=quality_75', 'Dễ dàng phù hợp với hiệu ứng tôn dáng cho đôi chân. Quần dài đến mắt cá chân linh hoạt cho mọi phong cách'),
('MH013', 'Quần Smart Pants Dài Đến Mắt Cá', 'LH002', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/451818/item/vngoods_07_451818.jpg?width=1600&impolicy=quality_75', 'Chất liệu vải co giãn nhanh khô vượt trội dễ vận động. Quần kiểu dáng đẹp cho bất kỳ dịp nào'),
('MH014', 'Quần Smart Pants Dài Đến Mắt Cá', 'LH002', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/451817/item/vngoods_30_451817.jpg?width=1600&impolicy=quality_75', 'Kiểu dáng đẹp vừa vặn. Phong cách linh hoạt cho ngoại hình từ kiểu dáng thông minh đến giản dị'),
('MH015', 'Quần Smart Pants Dài Đến Mắt Cá', 'LH002', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/450275/item/vngoods_69_450275.jpg?width=1600&impolicy=quality_75', 'Kiểu dáng đẹp phù hợp. Quần dài đến mắt cá chân linh hoạt cho mọi phong cách'),
('MH016', 'Quần Smart Pants Vải Cotton Dài Đến Mắt Cá Co Giãn', 'LH002', 50, 784000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/448661/item/vngoods_07_448661.jpg?width=1600&impolicy=quality_75', 'Chiếc quần dài đến mắt cá chân, nhẹ, thanh lịch và thoải mái'),
('MH017', 'Quần Smart Pants Dài Đến Mắt Cá Co Giãn 2 Chiều Họ', 'LH002', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/448486/item/vngoods_05_448486.jpg?width=1600&impolicy=quality_75', 'Dễ mặc, dáng suông dài đến mắt cá chân nhẹ nhàng và thanh lịch'),
('MH018', 'Quần Smart Pants Vải Cotton Dài Đến Mắt Cá', 'LH002', 50, 588000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/442533/item/goods_69_442533.jpg?width=1600&impolicy=quality_75', 'Sử dụng vải cotton trong mẫu thiết kế đã được cập nhật. Chiếc quần đa năng phù hợp với bất kỳ dịp nào'),
('MH019', 'Quần Smart Pant Cotton Dài Đến Mắt Cá Co Giãn Hai', 'LH002', 50, 784000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/436878/item/goods_33_436878.jpg?width=1600&impolicy=quality_75', 'Vải cotton tự nhiên dễ phối đồ. Vải tuy nhìn có vẻ sắc nét, nhưng lại mang đến cảm giác thoải mái không gây khó chịu'),
('MH020', 'Quần Dài Đến Mắt Cá Co Giãn 2 Chiều', 'LH002', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/434844/item/goods_06_434844.jpg?width=1600&impolicy=quality_75', 'Chất liệu vải và thiết kế đẹp mắt giúp sản phẩm có kiểu dáng thanh lịch. Thời trang không cầu kỳ và thoải mái trong bất kỳ hoàn cảnh nào'),
('MH021', 'Áo Thun Cổ Tròn Ngắn Tay', 'LH003', 50, 244000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/431599/item/goods_69_431599.jpg?width=1600&impolicy=quality_75', 'Sản phẩm với độ hoàn thiện cao, đơn giản nhưng có thiết kế và độ bền vượt trội'),
('MH022', 'AIRism Cotton Áo Thun Cổ Tròn Dáng Rộng', 'LH003', 50, 391000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/425974001/item/goods_37_425974001.jpg?width=1600&impolicy=quality_75', 'The look of cotton with \\\"AIRism\\\" performance. Narrower neckline for a clean, neat style'),
('MH023', 'AIRism Cotton Áo Thun Cổ Tròn Dáng Rộng', 'LH003', 50, 391000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/425974/item/vngoods_32_425974.jpg?width=1600&impolicy=quality_75', 'Chất liệu với bề mặt của cotton cùng hiệu năng mát mẻ của \\\"AIRism\\\". Đường viền cổ áo hẹp tạo phong cách gọn gàng, sạch sẽ'),
('MH024', 'Áo Thun Cổ Tròn Ngắn Tay', 'LH003', 50, 244000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/422992/item/vngoods_07_422992.jpg?width=1600&impolicy=quality_75', 'Phong cách đơn giản được khách hàng yêu thích. Được thiết kế hiện đại và tận tâm'),
('MH025', 'Áo Thun Supima Cotton Cổ Tròn Ngắn Tay', 'LH003', 50, 391000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/422990/item/vngoods_13_422990.jpg?width=1600&impolicy=quality_75', 'Áo sơ mi Supima® cotton 100% siêu mượt mà! Cổ tròn đa năng'),
('MH026', 'Áo Thun Supima Cotton Cổ V Ngắn Tay', 'LH003', 50, 391000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/422989/item/goods_59_422989.jpg?width=1600&impolicy=quality_75', '100% Supima® Chất liệu cotton được làm bằng phương pháp kéo sợi đặc biệt mang lại kết cấu chất lượng cao với độ xước tối thiểu'),
('MH027', 'Áo Thun Dry Cổ Tròn Ngắn Tay', 'LH003', 50, 146000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/427917/item/vngoods_56_427917.jpg?width=1600&impolicy=quality_75', 'Một sản phẩm đa năng rất cần thiết cho tủ quần áo của bạn. Khô nhanh và tạo sự thoải mái lâu dài'),
('MH028', 'Áo Thun Dry Cổ V Ngắn Tay', 'LH003', 50, 146000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/427916/item/vngoods_07_427916.jpg?width=1600&impolicy=quality_75', 'Một món đồ cần thiết cho tủ quần áo của bạn. Mang lại cảm giác mịn màng, thoáng mát'),
('MH029', 'Áo Chui Đầu Giả Lông Cừu Cài Nút Dài Tay', 'LH003', 50, 686000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/453779/item/vngoods_31_453779.jpg?width=1600&impolicy=quality_75', 'Thiết kế phối màu đẹp mắt. Các nút ở cổ áo cho phép dễ dàng tạo kiểu'),
('MH030', 'Áo Chui Đầu Gài Nút Dài Tay', 'LH003', 50, 686000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/453738/item/vngoods_69_453738.jpg?width=1600&impolicy=quality_75', 'Phối màu đẹp mắt giúp tạo kiểu dễ dàng. Các nút ở cổ dễ phối đồ với nhiều kiểu khác nhau'),
('MH031', 'Áo Len Extra Fine Merino Cổ Tròn Dài Tay', 'LH004', 50, 391000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/429066/item/goods_03_429066.jpg?width=1600&impolicy=quality_75', 'Chất liệu 100 ％ len Merino cao cấp. Một sản phẩm đan cao cấp với các chi tiết được cải tiến'),
('MH032', 'Áo Chui Đầu Vải Lambswool Cao Cấp Cổ V', 'LH004', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/452649/item/vngoods_30_452649.jpg?width=1600&impolicy=quality_75', 'Được đan bằng chất liệu vải len cao cấp. Mang lại cảm giác ấm áp và dày'),
('MH033', 'Áo Len Lông Cừu Cao Cấp Cổ Tròn Dài Tay', 'LH004', 50, 784000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/450541/item/vngoods_62_450541.jpg?width=1600&impolicy=quality_75', 'Chất liệu vải len cao cấp 100% mềm mịn và ấm áp. Thiết kế đan gân quanh vai tạo thêm điểm nhấn'),
('MH034', 'Áo Len Vải Crape Cổ Tròn', 'LH004', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/450552/item/vngoods_29_450552.jpg?width=1600&impolicy=quality_75', 'Một chiếc áo len với chất liệu vải cao cấp, kiểu dáng đặc biệt. Đường cắt thoải mái'),
('MH035', 'Áo Len Sợi Souffle Dệt 3D Dài Tay', 'LH004', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/453221/item/vngoods_06_453221.jpg?width=1600&impolicy=quality_75', 'Vải dệt kim 3D co giãn dạng sợi soufflé mềm mại, không ngứa'),
('MH036', 'Áo Len Vải Sợi Souffle Đan Họa Tiết Cổ Tròn Dài Ta', 'LH004', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/451614/item/vngoods_32_451614.jpg?width=1600&impolicy=quality_75', 'Không bị đổ lông và không gây ngứa. Họa tiết Fair Isle vui vẻ'),
('MH037', 'Áo Len Sợi Souffle Dệt 3D Dài Tay', 'LH004', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/450548/item/vngoods_01_450548.jpg?width=1600&impolicy=quality_75', 'Dựa trên phản hồi của khách hàng, chúng tôi đã cập nhật cổ áo ít co giãn hơn và dễ phối đồ hơn'),
('MH038', 'Áo Khoác Giả Lông Cừu Loại Dày Kéo Khóa Dài Tay', 'LH004', 50, 686000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/450198/item/vngoods_59_450198.jpg?width=1600&impolicy=quality_75', 'Dựa trên phản hồi của khách hàng, chúng tôi đã cập nhật phần thân áo sang loại vải polyester tái chế 100% mềm mại, ấm hơn'),
('MH039', 'Áo Khoác Giả Lông Cừu Kéo Khóa Dài Tay', 'LH004', 50, 686000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/450195/item/vngoods_19_450195.jpg?width=1600&impolicy=quality_75', 'Dựa trên phản hồi của khách hàng, chúng tôi đã cập nhật phần thân áo sang loại vải polyester tái chế 100% mềm mại, ấm hơn'),
('MH040', 'Áo Cardigan Extra Fine Merino Cổ V Dài Tay', 'LH004', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/438786/item/goods_03_438786.jpg?width=1600&impolicy=quality_75', '100 ％ len Merino cao cấp. Kiểu đan tinh xảo với các chi tiết tỉ mỉ'),
('MH041', 'Áo Khoác Kiểu Sơ Mi Dáng Rộng', 'LH005', 5, 1471000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/449618001/sub/goods_449618001_sub14.jpg?width=1600&impolicy=quality_75', 'Đường cắt thoải mái cho một phong cách giản dị. Các túi rất linh hoạt và thiết thực.'),
('MH042', 'Áo Khoác Thoải Mái 2B', 'LH005', 50, 1650000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/452734/sub/goods_452734_sub14.jpg?width=1600&impolicy=quality_75', 'Áo khoác thoải mái bằng vải jersey mềm mại với lớp lót tay áo được cải tiến.'),
('MH043', 'Áo khoác đa năng', 'LH005', 50, 1275000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/456744/sub/goods_456744_sub14.jpg?width=1600&impolicy=quality_75', 'Vải denim nhẹ và các chi tiết áo khoác công sở truyền thống. Với nhiều túi.'),
('MH044', 'Áo Khoác Co Giãn Dáng Slim Fit', 'LH005', 50, 3435000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/433076/item/goods_05_433076.jpg?width=1600&impolicy=quality_75', 'Một chiếc áo khoác chất lượng, bền kết hợp với sự thoải mái.'),
('MH045', 'Áo Khoác Kiểu Sơ Mi Vải Len Pha', 'LH005', 50, 2453000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/452851/sub/goods_452851_sub14.jpg?width=1600&impolicy=quality_75', 'Một chiếc áo khoác sơ mi mềm để dễ dàng tạo kiểu.'),
('MH046', 'Áo khoác Gió', 'LH005', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/452608/sub/goods_452608_sub14.jpg?width=1600&impolicy=quality_75', 'Thiết kế theo phong cách JW Anderson tinh tế. Đường cắt thoải mái dễ dàng tạo kiểu.\r\n\r\n\r\n'),
('MH047', 'Ultra Light Down Áo Khoác Siêu Nhẹ (3D Cut)', 'LH005', 50, 1668000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/456570/sub/goods_456570_sub14.jpg?width=1600&impolicy=quality_75', 'Thiết kế giảm đường cắt để dễ dàng di chuyển. Thiết kế những khối màu.'),
('MH048', 'Áo Khoác Nỉ Lót Lông', 'LH005', 50, 1275000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/452937/sub/goods_452937_sub14.jpg?width=1600&impolicy=quality_75', 'Chiếc áo khoác có khóa kéo giúp bảo vệ cổ của bạn khỏi thời tiết lạnh. Sản phẩm có thể mặc như áo khoác ngoài.'),
('MH049', 'Áo Khoác Ultra Light Siêu Nhẹ (Wool Like)', 'LH005', 50, 1471000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/448034/item/goods_08_448034.jpg?width=1600&impolicy=quality_75', 'Áo khoác đa năng cực kỳ nhẹ, co giãn và nhanh khô. Có thể mặc trong môi trường công sở hoặc trong những dịp hằng ngày.'),
('MH050', 'Áo Vest Giữ Ấm Chần Bông', 'LH005', 50, 980000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/449628/sub/goods_449628_sub15.jpg?width=1600&impolicy=quality_75', 'Lớp phủ bền, không thấm nước.'),
('MH051', 'Quần Short In Họa Tiết Dáng Slim Fit Co Giãn', 'LH006', 50, 391000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/448490/sub/goods_448490_sub14.jpg?width=1600&impolicy=quality_75', 'Vẻ ngoài tinh tế với kiểu dáng và chất liệu vải đẹp mắt.'),
('MH052', 'Quần Short Chino', 'LH006', 50, 489000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/444602/sub/goods_444602_sub14.jpg?width=1600&impolicy=quality_75', 'Quần với thiết kế rộng rãi, gọn gàng và thoải mái.'),
('MH053', 'Quần Short Vải Nylon', 'LH006', 50, 489000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/444603/item/vngoods_09_444603.jpg?width=1600&impolicy=quality_75', 'Quần short bền và đa năng. Hoàn hảo cho các hoạt động ngoài trời.'),
('MH054', 'Quần Short Dry-EX', 'LH006', 50, 489000, 'https://image.uniqlo.com/UQ/ST3/vn/imagesgoods/445175/item/vngoods_03_445175.jpg?width=1600&impolicy=quality_75', 'Quần short được thiết kế biểu diễn sự thoải mái mát mẻ. Một go-to đa năng.'),
('MH055', 'Quần Easy Short Vải Jersey', 'LH006', 50, 391000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/451331/sub/goods_451331_sub14.jpg?width=1600&impolicy=quality_75', 'Quần short được xử lí giặt để có kết cấu thô.'),
('MH056', 'NK Quần Short Dry', 'LH006', 50, 784000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/438279/item/goods_09_438279.jpg?width=1600&impolicy=quality_75', 'Bản sao của trang phục thi đấu của Roger Federer. Quần short kết hợp phong cách và hiệu suất.'),
('MH057', 'Quần Short Vải Linen Pha', 'LH006', 50, 489000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/446827/sub/goods_446827_sub13.jpg?width=1600&impolicy=quality_75', 'Quần short vải linen pha thanh lịch, mát mẻ. Thích hợp cho mọi phong cách.'),
('MH058', 'Quần Short Siêu Nhẹ', 'LH006', 50, 784000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/451086/item/goods_00_451086.jpg?width=1600&impolicy=quality_75', 'Dáng ngắn theo kiểu quần Kando tiện dụng của chúng tôi. Vải chất lượng cao tuyệt vời cho hoạt động chơi gôn và các môn thể thao khác.'),
('MH059', 'Quần Easy Short Co Giãn', 'LH006', 50, 391000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/447907/sub/goods_447907_sub13.jpg?width=1600&impolicy=quality_75', 'Co giãn để dễ dàng di chuyển. Quần short mang đến cảm giác tươi mới, bạn có thể mặc ở bất cứ đâu.'),
('MH060', 'AIRism Cotton Quần Easy Shorts', 'LH006', 50, 391000, 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/451332/item/goods_08_451332.jpg?width=1600&impolicy=quality_75', 'Luôn mới mẻ với AIRism có vẻ ngoài giản dị bằng vải cotton. Thắt lưng co giãn thoải mái.'),
('MH061', 'Áo Đấu Sân Khách Authentic Đội Tuyển Argentina 22', 'LH007', 100, 3000000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/66630004e41a47a0b822aef90115289e_9366/Ao_DJau_San_Khach_Authentic_DJoi_Tuyen_Argentina_22_Mau_xanh_da_troi_HB9657_HM30.jpg', 'Kiểu dáng mới cho trang phục bóng đá. Thiết kế hiệu năng và giống hệt bộ trang phục đồng hành cùng các cầu thủ trong các trận đấu chính thức.'),
('MH062', 'Áo Đấu Sân Nhà Manchester United 22-23', 'LH007', 100, 2150000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/693f5fb49f4c45078f9aae6f00d4c19e_9366/Ao_DJau_San_Nha_Manchester_United_22-23_DJo_H13881_01_laydown.jpg', 'Khi dựng lên cũng như khi bẻ xuống, chiếc cổ áo polo khiêm tốn luôn đóng vai trò nổi bật trong rất nhiều những khoảnh khắc huy hoàng nhất của Manchester United. Tái xuất trên chiếc áo đấu bóng đá adidas này, thiết kế cổ áo ấy kết hợp cùng huy hiệu hình ch'),
('MH063', 'Áo Đấu Sân Nhà Juventus 22-23', 'LH007', 100, 2150000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/3075faec56ed43dca4e1ae8a009dc0b4_9366/Ao_DJau_San_Nha_Juventus_22-23_trang_H38907_01_laydown.jpg', 'Trong suốt lịch sử ngập tràn cúp vô địch của mình, các ngôi sao đã trở thành một dấu ấn đặc trưng của Juventus không kém gì các đường sọc. Chiếc áo đấu bóng đá adidas này kết hợp hai yếu tố ấy, tạo nên các đường sọc đen huyền thoại của CLB từ các biểu tượ'),
('MH064', 'Áo Tank Top Harden Vol.6', 'LH007', 100, 850000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/2ee81532acef44b2a024ae60017f4fbe_9366/Ao_Tank_Top_Harden_Vol._6_Ch._3_trang_HG4430_01_laydown.jpg', 'James Harden thường lui tới những địa điểm lý tưởng để thư giãn sau một mùa giải cam go kéo dài. Họa tiết graphic hình la bàn trên chiếc áo tank top bóng rổ adidas này tượng trưng cho sở trường của anh trong việc khám phá các hòn đảo hay resort nghỉ dưỡng'),
('MH065', 'Áo Thun D.O.N. Issue #4 Future Of Pass', 'LH007', 100, 850000, 'https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/e20cca86c96244bcbc22ae3d01752153_9366/Ao_Thun_D.O.N._Issue_4_Future_of_Fast_trang_HG4418_01_laydown.jpg', 'Tôn vinh phong cách một trong những cầu thủ bóng rổ trẻ nhất sân chơi. Chiếc áo thun adidas Basketball này làm từ vải single jersey cotton mềm mại giúp bạn luôn thoải mái trên sân hay bất kỳ đâu. Logo Spida táo bạo trước ngực thể hiện lòng hâm mộ của bạn '),
('MH066', 'Áo Thun Dame D.O.L.L. EXT PLY 2', 'LH007', 100, 850000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/ef268a4e387b4a9eb151ae20001b4883_9366/Ao_Thun_Dame_D.O.L.L.A._Ext_Ply_2_DJen_HG4424_01_laydown.jpg', 'Diện phong cách Damian Lillard cả trong và ngoài sân bóng rổ. Chiếc áo thun bóng rổ adidas này có logo Dame D.O.L.L.A. ở mặt trước áo cùng họa tiết Lillard táo bạo sau lưng. Chất liệu vải single jersey làm từ cotton giúp bạn luôn thoải mái bất kể bạn đang'),
('MH067', 'Quần Short Harden Avatar', 'LH007', 100, 850000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7233aa6623734bf5b8cdadaf0169a9af_9366/Quan_Short_Harden_Avatar_DJen_H62290_01_laydown.jpg', 'Bạn không nhìn nhầm đâu. Logo James Harden trên chiếc quần short adidas này có hiệu ứng phai màu mang đến nét độc đáo cho thiết kế. Nghệ sĩ LA Tracy Tubera hợp tác cùng adidas tạo nên phiên bản mới ngập tràn năng lượng cho logo này. Công nghệ AEROREADY th'),
('MH068', 'Quần Short Dame 8 Innovation ', 'LH007', 100, 950000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d41c8060cccb45a6a23eadcd017e1d07_9366/Quan_Short_Dame_8_Innovation_DJen_HE5463_01_laydown.jpg', 'Lên đồ đúng chất Damian Lillard. Bất kể bạn đang nghỉ ngơi sau trận đấu hay thực hiện vài cú lên rổ trong buổi tập, chiếc quần short bóng rổ adidas này đều là lựa chọn số một. Với thiết kế lấy cảm hứng từ họa tiết thêu móc xích trên trang phục boxing, quầ'),
('MH069', 'Quần Short Bóng Rổ Pro Madness 3.0', 'LH007', 100, 650000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/9028770661814fcb804fae60001408db_9366/Quan_Short_Bong_Ro_Pro_Madness_3.0_Mau_xanh_da_troi_HK7068_01_laydown.jpg', 'Thể hiện phong độ đỉnh cao với chiếc quần short bóng rổ adidas này. Chất vải nỉ mềm mại cho cảm giác dễ chịu. Công nghệ AEROREADY giúp bạn luôn khô ráo, bất kể khi dốc sức trên sân hay hoạt động thường ngày. Đường xẻ hai bên giúp bạn vận động thoải mái. C'),
('MH070', 'Quần Short Donovan Mitchell', 'LH007', 100, 1100000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/bd6c1649894949249d58ae3d013548a3_9366/Quan_Short_Donovan_Mitchell_DJen_HI5822_01_laydown.jpg', 'Uyển chuyển như Donovan Mitchell trong trận bóng rổ sắp tới của bạn. Chiếc quần short adidas này làm từ chất vải AEROREADY thấm hút ẩm, để bạn bật nhảy đầy nhiệt huyết nhưng lại luôn khô ráo. Dây rút bên trong và bên ngoài cho độ ôm chắc chắn cùng chất li'),
('MH071', 'Áo Hoodies Ba Lá Classic', 'LH008', 50, 2000000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/217268f179434427ace7ae920135542c_9366/Ao_Hoodie_Ba_La_Classics_Adicolor_mau_xanh_la_HK7270_01_laydown.jpg', 'Kể từ khi logo Ba Lá ra mắt vào thập niên 70, biểu tượng ấy đã xuất hiện cùng các vận động viên chuyên nghiệp, các ngôi sao hip hop, các nghệ sĩ và các nhà kiến tạo trên khắp thế giới. Vậy nên khi diện chiếc áo hoodie adidas này là bạn đang sánh vai cùng '),
('MH072', 'Áo Hoodies Nỉ Giant Logo Essentials', 'LH008', 80, 1500000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d03c1fde41964b26802aae4a012e7a9b_9366/Ao_Hoodie_Ni_Giant_Logo_Essentials_DJen_HL6925_01_laydown.jpg', 'Dành cho những ai thích cảm giác thật mềm mại và thật nhiều logo. Chiếc áo hoodie nỉ adidas này phù hợp làm lớp áo khoác ngoài trước và sau buổi tập, cũng như những ngày nhẹ nhàng thảnh thơi.\r\n'),
('MH073', 'Áo Hoodies Khóa Kéo 3 Sọc Future Icons', 'LH008', 60, 1800000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/2248cb3cc10e405a8f52aea400dc8dd3_9366/Ao_Hoodie_Khoa_Keo_3_Soc_Future_Icons_Be_HK4570_01_laydown.jpg', 'Nghỉ ngơi, tập gym, ăn trưa, đi làm, nghỉ ngơi. Thêm phần phong cách cho lịch trình của bạn bằng cách quấn 3 Sọc quanh vai. Chất vải dệt kim đôi mang lại cảm giác dày dặn và đứng dáng cho chiếc áo hoodie này, hoàn hảo để làm lớp áo khoác ngoài.'),
('MH074', 'Áo Khoác Dệt Thoi Biểu Tượng Chính Thức FIFA World', 'LH008', 80, 2000000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/ae7b45e7936a4a448e3eaebd00bc4a92_9366/Ao_Khoac_Det_Thoi_Bieu_Tuong_Chinh_Thuc_FIFA_World_Cup_2022tm_DJen_HC3450_01_laydown.jpg', 'FIFA World Cup 2022™ là nơi quy tụ tất cả những ngôi sao sáng giá nhất của thế giới. Hãy thể hiện tình yêu với giải đấu lớn nhất trong làng túc cầu bằng chiếc áo khoác adidas này. Kiểu dáng ôm sát vừa khít trên cơ thể, giúp bạn luôn ấm áp trong khi thưởng'),
('MH075', 'Áo Gió Reclaim Adidas RIFTA', 'LH008', 50, 3000000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/04612b57e4eb4116a0ecae88014448fa_9366/Ao_Gio_Reclaim_adidas_RIFTA_Xam_HK2774_01_laydown.jpg', 'Thành phố là sân chơi của bạn. Nơi bạn sáng tạo và khám phá. Thế nên, hãy khoác ngay chiếc áo gió adidas này vào và tìm thấy nhịp bước riêng trên những con phố tấp nập người và xe. Chất vải trơn láng cho vẻ ngoài mượt mà, còn lớp lưới bên trong cho cảm gi'),
('MH076', 'Áo Khoác Chần Lông Vũ Khóa Kéo Dọc Thân', 'LH008', 50, 5100000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/0f872e7c781646e8b9f7acd20127813a_9366/Ao_Khoac_Chan_Long_Vu_Khoa_Keo_Doc_Than_Xam_GT3335_01_laydown.jpg', 'Giữ ấm suốt những vòng golf lạnh căm để giảm dần số gậy trên thẻ điểm. Chiến áo khoác golf adidas này có chần lông vũ giữ ấm cho bạn từ cú tee đầu tiên tới cú putt cuối cùng. Thiết kế khóa kéo dọc thân và cổ đứng tăng cường khả năng che chắn. Bề mặt chống'),
('MH077', 'Áo Khoác Nỉ Phản Quang', 'LH008', 100, 1500000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d1bad10e2bd74db7aa1aae8c00d96e1b_9366/Ao_Hoodie_Ni_Phan_Quang_Essentials_DJen_HL6913_01_laydown.jpg', 'Chiếc áo hoodie adidas linh hoạt thích ứng này được thiết kế dành cho các hoạt động thể thao hàng ngày. Chất vải nỉ mềm mại kết hợp cùng lớp phủ dệt thoi chính là lựa chọn lý tưởng cho những hành trình vào sáng sớm se lạnh. Chiếc áo lưu giữ hơi ấm khi bạn'),
('MH078', 'Áo Khoác Ngoài PRSVE', 'LH008', 50, 3000000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/9f8e9ee6392946daa6afae30000eb056_9366/Ao_Khoac_Ngoai_PRSVE_Be_HM2708_01_laydown.jpg', 'Chiếc áo khoác ấm áp mà không hề nặng nề. Chiếc áo khoác adidas này là lựa chọn tuyệt vời cho những buổi hiking, đạp xe và hòa mình vào thiên nhiên. Dáng áo suông rộng cho phép bạn kết hợp nhiều layer bên trong. Mũ áo có dây rút kết hợp cùng gấu áo có chu'),
('MH079', 'Áo Hoodies Reveal ESS ', 'LH008', 50, 2400000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/b28d7437735a4c5cbc3dae8301256b85_9366/Ao_Hoodie_Reveal_ESS_Xam_HK2725_01_laydown.jpg', 'Chiếc áo hoodie adidas này có lý do để bạn luôn muốn mặc đi mặc lại. Giặt áo xong bạn sẽ treo vào tủ hay chỉ muốn mặc luôn? (Có lẽ là lựa chọn thứ hai) Bởi chất vải thun da cá thoải mái vô cùng này thực sự sẽ giúp bạn tận hưởng mọi hành trình trong ngày —'),
('MH080', 'Áo Khoác Gió Chạy Trail Họa Tiết Terrex', 'LH008', 50, 2500000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/157859713254422cbf30ae140119fdb3_9366/Ao_Khoac_Gio_Chay_Trail_Hoa_Tiet_Terrex_trang_HA7537_01_laydown.jpg', 'Nhẹ nhàng hơn đồng nghĩa với tự do hơn trên đường địa hình. Chính vì vậy chúng tôi đã thiết kế chiếc áo khoác chạy trail adidas này làm lớp áo ngoài siêu nhẹ che chắn cho bạn khi trời nổi gió và có thể gấp gọn lại khi trời nóng lên. Công nghệ WIND.RDY chắ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(5) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `Gioitinh` tinyint(1) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `DienThoai` int(10) NOT NULL,
  `NgaySinh` date NOT NULL,
  `username` varchar(5) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `Gioitinh`, `DiaChi`, `DienThoai`, `NgaySinh`, `username`, `password`) VALUES
('NV001', 'Hoàng Quốc Nam', 1, '26 Lê Hồng Phong', 911395126, '2001-01-25', 'NV001', 11111),
('NV002', 'Võ Gia Huy', 1, '30 Hà Huy Tập', 912098502, '2001-01-26', 'NV002', 11111),
('NV003', 'Phạm Ngọc Ẩn', 1, '27 Hà Huy Tập', 914341559, '2001-02-28', 'NV003', 11111),
('NV004', 'Nguyễn Hoàng Minh Phúc', 1, '1 Đặng Tất', 916160396, '2001-05-15', 'NV004', 11111),
('NV005', 'Nguyễn Đình Khải', 0, '15 Lê Lợi', 945478421, '2001-11-11', 'NV005', 11111);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`MaHD`,`MaMH`),
  ADD KEY `MaHD` (`MaHD`),
  ADD KEY `MaMH` (`MaMH`);

--
-- Chỉ mục cho bảng `hdban`
--
ALTER TABLE `hdban`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`MaLH`);

--
-- Chỉ mục cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`MaMH`),
  ADD KEY `MaLH` (`MaLH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `chitiethd_ibfk_1` FOREIGN KEY (`MaMH`) REFERENCES `mathang` (`MaMH`),
  ADD CONSTRAINT `chitiethd_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hdban` (`MaHD`);

--
-- Các ràng buộc cho bảng `hdban`
--
ALTER TABLE `hdban`
  ADD CONSTRAINT `hdban_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `hdban_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Các ràng buộc cho bảng `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `mathang_ibfk_2` FOREIGN KEY (`MaLH`) REFERENCES `loaihang` (`MaLH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
