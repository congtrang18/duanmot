-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2023 lúc 08:56 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `locphucgewelry`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `thoigian` date NOT NULL,
  `idkh` int(11) NOT NULL,
  `idspct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_chitietdh` int(11) NOT NULL,
  `soluongchitiet` int(11) NOT NULL,
  `giasp` float NOT NULL,
  `tongtien` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `iddh` int(11) NOT NULL,
  `idspct` int(11) NOT NULL,
  `idmagiamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsize`
--

CREATE TABLE `chitietsize` (
  `id_chitietsize` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `bankinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsize`
--

INSERT INTO `chitietsize` (`id_chitietsize`, `idsize`, `bankinh`) VALUES
(1, 1, '10-15cm'),
(2, 1, '15-20cm'),
(3, 1, '20-25cm'),
(4, 2, '30-35cm'),
(5, 2, '35-40cm'),
(6, 2, '40-45cm'),
(7, 3, '50-55cm'),
(8, 3, '55-60cm'),
(9, 3, '60-65cm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_dm` int(11) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `tendm`, `hinhanh`) VALUES
(1, 'Trang Sức Vàng', ''),
(2, 'Trang Sức Kim Cương', ''),
(5, 'Trang Sức Đá Quý', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(11) NOT NULL,
  `diachinhan` varchar(255) NOT NULL,
  `sodienthoai` varchar(11) NOT NULL,
  `phuongthuctt` varchar(50) NOT NULL,
  `idkh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giamgia`
--

CREATE TABLE `giamgia` (
  `idgiamgia` int(11) NOT NULL,
  `magiamgia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giamgia`
--

INSERT INTO `giamgia` (`idgiamgia`, `magiamgia`) VALUES
(1, 'ph123$#'),
(2, 'ph123$#r'),
(3, 'ph123$#%');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

CREATE TABLE `gioitinh` (
  `id_gt` int(11) NOT NULL,
  `ten_gt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`id_gt`, `ten_gt`) VALUES
(1, 'nam'),
(2, 'Nữ'),
(3, 'cả hai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sodienthoai` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `matkhau` varchar(30) NOT NULL,
  `ngaysinh` date NOT NULL,
  `tentk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `tenkh`, `email`, `sodienthoai`, `diachi`, `matkhau`, `ngaysinh`, `tentk`) VALUES
(1, 'Nguyễn Văn A', '', '', '', '', '2002-11-12', ''),
(2, 'Nguyễn Văn B', '', '', '', '', '2003-11-12', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id_nv` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `tendangnhap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `vaitro` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `hinhanhnv` varchar(255) NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `luong` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id_nv`, `hoten`, `tendangnhap`, `email`, `sdt`, `diachi`, `vaitro`, `matkhau`, `role`, `hinhanhnv`, `ngaysinh`, `luong`) VALUES
(1, 'Nguyễn Thi Minh Nguyệt', 'nguyetntm', 'nguyetntm@fpt.edu.vn', '', '', '', 'ceo1234', 2, '', NULL, 0),
(2, 'Nguyễn công trang', 'trangnc', '', '', '', 'nhân viên', 'nv1234', 1, '', NULL, 0),
(3, 'Nguyễn Tiến Dũng', 'dungnt', '', '', '', '', 'nv1234', 1, '', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamct`
--

CREATE TABLE `sanphamct` (
  `id_spct` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` float NOT NULL,
  `mota` varchar(250) NOT NULL,
  `tenspchitiet` varchar(50) NOT NULL,
  `hinhanhchitiet` varchar(250) NOT NULL,
  `idsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphamct`
--

INSERT INTO `sanphamct` (`id_spct`, `soluong`, `gia`, `mota`, `tenspchitiet`, `hinhanhchitiet`, `idsp`) VALUES
(14, 12, 23709000, '', 'Nhẫn Vàng Trơn', 'upload_img/1699861582banner nhancuoi.jfif', 1),
(15, 12, 123457000, '', 'Vòng Vàng ý', 'upload_img/1699861630bong-tai-kim-cuong-loc-phuuc-essenza.jpg', 2),
(16, 0, 0, '', 'Vòng chân', 'upload_img/1699861665K1B-LPW0014R-YG-W-hover.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hinhanh` text NOT NULL,
  `luotxem` int(11) NOT NULL,
  `dacbiet` varchar(50) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `id_gt` int(11) NOT NULL,
  `id_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `tensp`, `hinhanh`, `luotxem`, `dacbiet`, `id_dm`, `id_gt`, `id_size`) VALUES
(1, 'Nhẫn Vàng', '', 124, 'Còn Hàng', 1, 3, 1),
(2, 'Vòng Vàng', '', 120, 'Còn Hàng', 1, 3, 2),
(3, 'Vòng Chân Vàng', '', 140, 'Còn Hàng', 1, 2, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id_size` int(11) NOT NULL,
  `tensptheosize` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id_size`, `tensptheosize`) VALUES
(1, 'size theo nhẫn vàng'),
(2, 'size theo vòng tay vàng'),
(3, 'size theo lắc chân vàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `idkh` (`idkh`,`idspct`),
  ADD KEY `idspct` (`idspct`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_chitietdh`),
  ADD KEY `iddh` (`iddh`),
  ADD KEY `chitietdonhang_ibfk_2` (`idspct`),
  ADD KEY `idmagiamgia` (`idmagiamgia`);

--
-- Chỉ mục cho bảng `chitietsize`
--
ALTER TABLE `chitietsize`
  ADD PRIMARY KEY (`id_chitietsize`),
  ADD KEY `idsize` (`idsize`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`),
  ADD KEY `idkh` (`idkh`);

--
-- Chỉ mục cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  ADD PRIMARY KEY (`idgiamgia`);

--
-- Chỉ mục cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`id_gt`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id_nv`);

--
-- Chỉ mục cho bảng `sanphamct`
--
ALTER TABLE `sanphamct`
  ADD PRIMARY KEY (`id_spct`),
  ADD KEY `idsp` (`idsp`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dm` (`id_dm`),
  ADD KEY `id_gt` (`id_gt`),
  ADD KEY `id_size` (`id_size`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id_chitietdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitietsize`
--
ALTER TABLE `chitietsize`
  MODIFY `id_chitietsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  MODIFY `idgiamgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id_nv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanphamct`
--
ALTER TABLE `sanphamct`
  MODIFY `id_spct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`id_kh`),
  ADD CONSTRAINT `binhluan_ibfk_3` FOREIGN KEY (`idspct`) REFERENCES `sanphamct` (`id_spct`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`iddh`) REFERENCES `donhang` (`id_dh`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`idspct`) REFERENCES `sanphamct` (`id_spct`),
  ADD CONSTRAINT `chitietdonhang_ibfk_3` FOREIGN KEY (`idmagiamgia`) REFERENCES `giamgia` (`idgiamgia`);

--
-- Các ràng buộc cho bảng `chitietsize`
--
ALTER TABLE `chitietsize`
  ADD CONSTRAINT `chitietsize_ibfk_1` FOREIGN KEY (`idsize`) REFERENCES `size` (`id_size`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `khachhang` (`id_kh`);

--
-- Các ràng buộc cho bảng `sanphamct`
--
ALTER TABLE `sanphamct`
  ADD CONSTRAINT `sanphamct_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `san_pham` (`id_sp`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danh_muc` (`id_dm`),
  ADD CONSTRAINT `san_pham_ibfk_2` FOREIGN KEY (`id_gt`) REFERENCES `gioitinh` (`id_gt`),
  ADD CONSTRAINT `san_pham_ibfk_3` FOREIGN KEY (`id_size`) REFERENCES `size` (`id_size`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
