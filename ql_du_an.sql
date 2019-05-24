-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2019 lúc 03:46 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_du_an`
--

DELIMITER $$
--
-- Thủ tục
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `after_detail_insert` (IN `google_sheet` VARCHAR(255), IN `host_line` INT(14), IN `Img_header` VARCHAR(255), IN `Name` VARCHAR(255), IN `tgian_bangiao` DATE, IN `Img` VARCHAR(255), IN `text_project` TEXT(600), IN `Stt` INT(1))  BEGIN
 DECLARE detailId int(11);
 INSERT INTO detail_project(google_sheet,host_line,Img_header,Name,tgian_bangiao) VALUES (google_sheet,host_line,Img_header,Name,tgian_bangiao);
 SET detailId = (SELECT LAST_INSERT_ID());
 INSERT INTO all_project(Img,text_project,Stt,detailId) VALUES (Img,text_project,Stt,detailId);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getProductId` (IN `google_sheet` VARCHAR(255), IN `host_line` INT(14), IN `Img_header` VARCHAR(255), IN `Name` VARCHAR(255), IN `tgian_bangiao` DATE, IN `Img` VARCHAR(255), IN `text_project` TEXT(666), IN `Stt` INT(1))  BEGIN
    /*Code*/
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SELECT_Detail` ()  BEGIN
   DECLARE minh int;
   SET minh=(SELECT Stt FROM sapxepbocuc WHERE detailId=5);
   SELECT minh;
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `all_project`
--

CREATE TABLE `all_project` (
  `id` int(11) NOT NULL,
  `Img` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `Stt` tinyint(4) DEFAULT NULL,
  `text_project` text,
  `detailId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bocuc_duan`
--

CREATE TABLE `bocuc_duan` (
  `id` int(6) NOT NULL,
  `Kieu_bocuc` varchar(255) DEFAULT NULL,
  `Thumuc_chua` varchar(255) DEFAULT NULL,
  `img` binary(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bocuc_duan`
--

INSERT INTO `bocuc_duan` (`id`, `Kieu_bocuc`, `Thumuc_chua`, `img`) VALUES
(4, 'thong tin dang chu', 'full-text-col-1-text.php', NULL),
(5, 'thong tin dang gach dau dong', 'text-col-1-text.php', NULL),
(6, 'dang hinh anh', 'text-img.php', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_project`
--

CREATE TABLE `detail_project` (
  `Id` int(11) NOT NULL,
  `Img_header` varchar(255) NOT NULL,
  `host_line` int(15) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `google_sheet` text,
  `tgian_bangiao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `detail_project`
--

INSERT INTO `detail_project` (`Id`, `Img_header`, `host_line`, `Name`, `google_sheet`, `tgian_bangiao`) VALUES
(5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRysGhE6STXdGLtUm9wlO9nGNM2_Rd1q7RxpAaRn0pwUflurssh', 347457117, 'Chung Cu Cao Cap Roman Plaza', 'https:thainguenshett', '2020-12-24'),
(6, 'hanoihomeland.jpg', 1698633772, 'du an nha o xa hoi khu vuc long bien', 'https:hihihanamxinclahoricersille', '2018-03-06'),
(10, 'romanplaza.jpg', 9876524, 'du an nha o cao cap tren truc duong to huu', 'https:romanplza.com', '2021-09-09'),
(11, 'thevesta.jpg', 94567891, 'nha o xa hoi tot nhat khu vuc ha dong', 'https:thevesta.com.vn', '2019-06-12');

--
-- Bẫy `detail_project`
--
DELIMITER $$
CREATE TRIGGER `before_detail_delete` BEFORE DELETE ON `detail_project` FOR EACH ROW DELETE FROM all_project WHERE detailId= OLD.Id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img_and_text`
--

CREATE TABLE `img_and_text` (
  `tt_cua_img` int(5) DEFAULT NULL,
  `text_thongtin` text CHARACTER SET utf8 COLLATE utf8_croatian_ci,
  `link_img` varchar(255) DEFAULT NULL,
  `color_fonsize` varchar(255) DEFAULT NULL,
  `Tieude` text,
  `Id_bocuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `img_and_text`
--

INSERT INTO `img_and_text` (`tt_cua_img`, `text_thongtin`, `link_img`, `color_fonsize`, `Tieude`, `Id_bocuc`) VALUES
(0, 'Roman Plaza là tổ hợp nhà ở khép kín, sang trọng được đầu tư xây dựng theo phong cách kiến trúc Tân cổ điển Châu Âu. Đến với Roman Plaza, bạn sẽ đươc trải nghiệm không gian sống tinh tế, đẳng cấp, không chỉ cung cấp các tiện ích nhằm thỏa mãn nhu cầu về vật chất mà còn là điểm tựa tinh thần, mang lại nguồn sinh khí dồi dào cho từng cư dân sinh sống tại đây.', '', 'white,10', '', 8),
(0, 'Tên dự án: Tổ hợp công trình thương mại, dịch vụ và căn hộ Roman Plaza.\r\nToạ lạc tại vị trí  vàng: Đường Tố Hữu, P. Đại Mỗ, Q. Nam Từ Liêm, TP. Hà Nội.\r\nChủ đầu tư uy tín: Công ty Cổ phần Đầu tư Hải Phát – Hải Phát INVEST.\r\nNgân hàng Bản Việt (Viet Capital Bank) hỗ trợ vay vốn lên đến 70% giá trị căn hộ.\r\nTư vấn thiết kế : Công ty CP Conicon 3D – Công ty CP Tư vấn và đầu tư Hà Sơn.\r\nĐơn vị thi công : Liên danh nhà thầu công ty CP TSQ Techco – Công ty CP Xây lắp Hải Phát.\r\nQuản lý vận hành: Công ty CP dịch vụ đô thị Hải Phát PSP.', '', 'white,10', '', 9),
(0, 'Dự án chung cư Roman Plaza có mặt tiền kéo dài 500m, tọa lạc ngay mặt đường Tố Hữu, vị trí cửa ngõ phường Đại Mỗ, nơi tập trung đông dân cư, hạ tầng giao thông đồng bộ và có tốc độ phát triển nhanh nhất quận Hà Đông. Đây là nơi giao thoa hài hòa của các trục đường giao thông chính yếu kết nối các quận Hà Đông, Thanh Xuân, Nam Từ Liêm, Bắc Từ Liêm.', '', 'white,10', '', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sapxepbocuc`
--

CREATE TABLE `sapxepbocuc` (
  `detailId` int(6) DEFAULT NULL,
  `bocucId` int(6) DEFAULT NULL,
  `Stt` int(3) DEFAULT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sapxepbocuc`
--

INSERT INTO `sapxepbocuc` (`detailId`, `bocucId`, `Stt`, `Id`) VALUES
(5, 4, 1, 8),
(5, 5, 2, 9),
(5, 4, 3, 10);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `view_select_detail`
-- (See below for the actual view)
--
CREATE TABLE `view_select_detail` (
`ID_Bo_Cuc` int(6)
,`ID_Du_An` int(6)
,`ViTri_BoCuc` int(3)
,`ID_SapXep` int(11)
,`tt_cua_img` int(5)
,`text_thongtin` text
,`link_img` varchar(255)
,`color_fonsize` varchar(255)
,`Tieude` text
,`Id_bocuc` int(11)
,`img` binary(255)
,`Kieu_bocuc` varchar(255)
,`Thumuc_chua` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc cho view `view_select_detail`
--
DROP TABLE IF EXISTS `view_select_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_select_detail`  AS  select `sapxepbocuc`.`bocucId` AS `ID_Bo_Cuc`,`sapxepbocuc`.`detailId` AS `ID_Du_An`,`sapxepbocuc`.`Stt` AS `ViTri_BoCuc`,`sapxepbocuc`.`Id` AS `ID_SapXep`,`img_and_text`.`tt_cua_img` AS `tt_cua_img`,`img_and_text`.`text_thongtin` AS `text_thongtin`,`img_and_text`.`link_img` AS `link_img`,`img_and_text`.`color_fonsize` AS `color_fonsize`,`img_and_text`.`Tieude` AS `Tieude`,`img_and_text`.`Id_bocuc` AS `Id_bocuc`,`bocuc_duan`.`img` AS `img`,`bocuc_duan`.`Kieu_bocuc` AS `Kieu_bocuc`,`bocuc_duan`.`Thumuc_chua` AS `Thumuc_chua` from ((`sapxepbocuc` join `img_and_text` on((`sapxepbocuc`.`Id` = `img_and_text`.`Id_bocuc`))) join `bocuc_duan` on((`sapxepbocuc`.`bocucId` = `bocuc_duan`.`id`))) ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `all_project`
--
ALTER TABLE `all_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_detail` (`detailId`);

--
-- Chỉ mục cho bảng `bocuc_duan`
--
ALTER TABLE `bocuc_duan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail_project`
--
ALTER TABLE `detail_project`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `img_and_text`
--
ALTER TABLE `img_and_text`
  ADD KEY `img_and_text` (`Id_bocuc`);

--
-- Chỉ mục cho bảng `sapxepbocuc`
--
ALTER TABLE `sapxepbocuc`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_bocuc_sapxep` (`bocucId`) USING BTREE,
  ADD KEY `FK_sapxep_detail` (`detailId`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `all_project`
--
ALTER TABLE `all_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bocuc_duan`
--
ALTER TABLE `bocuc_duan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `detail_project`
--
ALTER TABLE `detail_project`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `sapxepbocuc`
--
ALTER TABLE `sapxepbocuc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `all_project`
--
ALTER TABLE `all_project`
  ADD CONSTRAINT `FK_detail` FOREIGN KEY (`detailId`) REFERENCES `detail_project` (`Id`),
  ADD CONSTRAINT `FK_detail_project` FOREIGN KEY (`detailId`) REFERENCES `detail_project` (`Id`),
  ADD CONSTRAINT `all_project_ibfk_1` FOREIGN KEY (`detailId`) REFERENCES `detail_project` (`Id`);

--
-- Các ràng buộc cho bảng `img_and_text`
--
ALTER TABLE `img_and_text`
  ADD CONSTRAINT `img_and_text` FOREIGN KEY (`Id_bocuc`) REFERENCES `sapxepbocuc` (`Id`);

--
-- Các ràng buộc cho bảng `sapxepbocuc`
--
ALTER TABLE `sapxepbocuc`
  ADD CONSTRAINT `sapxepbocuc` FOREIGN KEY (`bocucId`) REFERENCES `bocuc_duan` (`id`),
  ADD CONSTRAINT `sapxepbocuc_detail` FOREIGN KEY (`detailId`) REFERENCES `detail_project` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
