-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2019 lúc 03:19 AM
-- Phiên bản máy phục vụ: 10.1.39-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cuahangnuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `donhang_id` bigint(10) UNSIGNED NOT NULL,
  `sanpham_id` bigint(10) UNSIGNED NOT NULL,
  `quantily_id` bigint(10) NOT NULL,
  `dongia` double NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `khachhang_id` bigint(10) UNSIGNED NOT NULL,
  `ngaydathang` date NOT NULL,
  `tongtien` double NOT NULL,
  `thanhtoan` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ghichu` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ghichu` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mota` text COLLATE utf8mb4_vietnamese_ci,
  `hinhanh` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`, `ten`, `mota`, `hinhanh`, `ngaytao`) VALUES
(1, 'Nước hoa nữ', NULL, 'valentinaMyrrhAssoluto.jpg', '2019-10-19 06:47:41'),
(2, 'Nước hoa nam', NULL, 'GucciPourHomm.jpg', '2019-10-19 06:49:48'),
(3, 'Nước hoa em bé', NULL, 'BarbieFashionGirl.jpg', '2019-10-19 06:48:35'),
(4, 'Nước hoa Unisex', NULL, 'Fahrenheit.jpg', '2019-10-19 06:50:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thuonghieu_id` bigint(10) UNSIGNED NOT NULL,
  `mota` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tongtien` float NOT NULL,
  `giakhuyenmai` float DEFAULT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `soluong` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten`, `thuonghieu_id`, `mota`, `tongtien`, `giakhuyenmai`, `hinhanh`, `soluong`, `ngaytao`) VALUES
(0, 'Chanel No.19', 1, 'Nước hoa Chanel No.19 được trình làng vào sinh nhật lần thứ 87 của Chanel và được đặt tên theo ngày sinh của nguời sáng lập ra thương hiệu danh giá này, ngày 19 tháng 8.\r\nNước hoa Chanel No.19 là sự kết hợp độc đáo của hương cỏ cây xanh mát kết hợp với hoa diên vĩ và gỗ mang đến sự thanh khiết, tinh tế, sảng khoái cho phái đẹp.', 3540000, 2500000, 'Chanelno19.jpg', '5', '2019-10-18 07:51:02'),
(1, 'Dior J’adore', 2, 'J’adore eau de toilette là mùi hương ngọt ngào mát rượi cho đám cưới ngoài trời mùa hè. Hương hoa nhài, hoa cam lãng mạn đến xiêu lòng cho điệu nhảy đầu tiên. Với J’adore Ea de toilette, Dior đã mang đến một món quà đong đầy hương thơm của tình yêu dành cho những ai yêu thích phong cách nữ tính, thuần khiết và thanh tao như một bông sen trắng.', 2350000, 2000000, 'DiorJadore.1.jpg', '3', '2019-10-18 07:54:24'),
(2, 'Miss Dior eau de toilette', 3, 'Những bông hồng dại bé xinh như những mặt trời tí hon lung linh tỏa nắng dưới cánh đồng. Từng bông bung nở, từng chùm chen chúc, rực rỡ như nắng xuân. Mỗi cành hồng dại có hàng chục bông chen chúc nhau khoe sắc tỏa hương. Miss Dior eau de toilette mang mùi hồng đặc trưng đến mức khiến người ta muốn ôm cả vào lòng những bông hoa tròn xoe rung rinh ấy.', 2350000, 0, 'Miss Dior.jpg', '3', '2019-10-18 07:53:19'),
(29, 'Dior Hypnotic Poison', 19, 'Thơm đậm chất phương Đông, bí ẩn và đầy lôi cuốn từ vani, hạt hạnh nhân và gỗ đàn hương mang đến sự mê hoặc không thể cưỡng lại được. Quả thật nước hoa Dior Hypnotic Posion là một “liều thuốc độc” kỳ diệu dành cho phái đẹp. Táo bạo nhưng lại vô cùng nữ tính. Mùi hương là sự pha trộn độc đáo, sự cân bằng kỳ diệu của những hương vị tương phản.', 3500000, 0, 'DiorHypnoticPoison.jpg', '5', '2019-10-18 06:27:07'),
(30, 'Very Sexy Sheer Mist', 3, 'Là nước hoa xịt thơm toàn thân của hãng Victioria’s Secret(Usa) với hương thơm chủ đạo đến từ tiêu đen, xạ hương và hoa phong lan cho hương thơm cuốn hút, nóng bỏng và cực kỳ quyến rũ.\r\nDùng Very Sexy Sheer Mist sau khi tắm sẽ khiến cơ thể bạn được phủ thơm toàn diện bằng một lớp hương thơm ngọt ấm, cuốn hút như một thỏi nam châm, nhẹ nhàng hấp dẫn và thu hút khứu giác đối phương,..\r\n', 4580000, 2500000, 'verysexy.jpg', '6', '2019-10-18 06:27:32'),
(31, 'Valentino Donna', 4, 'Chai nước hoa màu hồng phấn mang tên Valentino Donna của năm 2015 là một khu vườn ngày xuân với rất nhiều hoa diên vic hồng nồng nàn quyện trong gió có mùi phấn nữ tính và vanilla ấm áp. Nốt hương phấn trộn vani êm ả và mềm mịn như nhung. Đây là mùi hương của một mỹ nhân xinh đẹp, yên lặng và dịu dàng đến nao lòng.\r\nValentin Donna có thiết kế chai làm người ta không yêu không được. Nắp màu vàng phối với chai nước hoa màu hồng phấn, đúng kiểu nữ tính, đẹp đơn giản và nhẹ nhàng.\r\n', 2000000, 1500000, 'valentino donna.jpg', '5', '2019-10-18 06:29:06'),
(32, 'Valentina Assoluto Oud', 4, 'Là mùi hương sang trọng và trầm lắng với khói gỗ. Sự đẳng cấp vương vấn trên từng giọt hương đen hun hút như trời đêm của Valentina Assoluto Oud làm say đắm biết bao trái tim dù là gã trai trẻ dồi dào năng lượng hay các quý ông trầm tĩnh chững chạc.', 4580000, 0, 'Valentina AssolutoOud.jpg', NULL, '2019-10-18 06:29:22'),
(33, 'Valentina Myrrh Assoluto', 4, 'Hương thơm của Valentina Myrrh Assoluto lạ lẫm và hiếm hoi giữa vị vani quyện cùng da thuộc và mộc hương bao phủ. Hương thơm thăm thẳm ma mị tựa da dẻ nõn nà phô diễn, phảng phất quẩn quanh màn sương khói lẩn khuất tựa lớp vải lụa mênh mang che phủ. Hương thơm đưa đẩy người ta vào khoảng thời gian đêm đen tịch mịch. Da thịt trắng muốt lóe sáng thổn thức ẩn hiện, bốc hương khói đẻ mê dẫn dụ thôi miên.', 3478000, 2500000, 'valentinaMyrrhAssoluto.jpg', '5', '2019-10-18 06:29:43'),
(34, 'Ck Eternity Men ', 5, 'lL hương thơm tươi mát và cổ điển ghi dấu ấn sâu đậm cho thương hiệu Calsvin Klein kể từ khi ra mắt thị trường năm 1990 đến nay.\r\nHương thơm nam tính và phóng khoáng của Ck Eternity Men đến từ cam quýt tươi mát kết hợp với hoa oải hương mềm mại và gỗ đàn hương ấm áp, tạo ra một hương thơm nam tính, mạnh mẽ, tràn trề sinh lực.\r\n', 3540000, 2500000, 'CkEternityMen.jpg', '7', '2019-10-18 06:30:11'),
(36, 'Obsession', 5, 'Là dòng nước hoa làm nên tên tuổi cho thương hiệu Calvin Klein khi mang về giải thưởng danh giá của nghành nước hoa – Giải FIFI cho nước hoa nam xuất sắc nhất năm 1987.\r\nMang hương thơm nam tính, sâu ấm và quyến rũ từ hương quế, hỗ phách và vani tạo phong cách mạnh mẽ và táo bạo như đánh thức tất cả mọi giác quan trên cơ thể bạn.\r\n', 3978000, 2500000, 'Obsession.jpg', '3', '2019-10-18 06:31:03'),
(37, 'Issey Miyake Summer ', 6, 'Mang đậm mùi hoa quả nhiệt đới của kiwi, bưởi và dứa. Mùi hương gợi nên những ngày vùng nhiệt đới thiêu đốt mọi giấc mơ\r\nHương thơm của Issey Miyake Summer như những ly cocktail nhiệt đới nóng bỏng dưới ánh hoàng hôn phủ vàng trên những bãi cát. Khi lớp hương chạm vào da thịt, bạn sẽ ngay lập tức cảm nhận được một cảm giác du dương khi nhắm mắt lại và tưởng tượng ra trước mắt vẻ đẹp thiên thần của hòn đảo Panarea.\r\n', 4500000, 0, 'IsseyMiyakeSummer.jpg', '8', '2019-10-18 06:32:31'),
(38, 'Issey Miyake L’Eau Bleue d’lssey Pour Homme', 6, 'Là  nước hoa mang hương thơm của gỗ đặc trưng dành cho nam giới được giới thiệu vào năm 2004. Đây là một mùi hương bí ẩn, sâu lắng và nồng nàn với những rung động như kích thích từng giác quan của người dùng.', 3500000, 2000000, 'IsseyMiyakeL’EauBleued’lsseyPourHomme.jpg', '5', '2019-10-18 06:32:02'),
(39, 'L’Eau d’lssey Pour Homme Intense ', 6, 'Là một mùi hương đơn giản và chân thật của nhà Issey Miyake trình làng vào năm 2009.\r\nHương thơm vừa da thịt vừa tinh khôi với những nốt khí, nốt nước vừa gợi tình với rất nhiều trầm hương xuyên suốt. Trầm hương luôn gợi lên những gần gụi về thể xác. Khi lên da chàng sẽ như làn hương thứ hai của cơ thể, không thể tách bạch ra nổi mà hòa quyện như thể đây là hương thơm tự nhiên trên cơ thể chàng khi vừa từ phòng tắm bước ra chỉ có khăn bông trên người.\r\n', 1500000, 0, 'L’Eaud’lsseyPourHommeIntense.jpg', '5', '2019-10-18 06:32:57'),
(40, 'Dior Homme', 7, 'Khá ngọt với rất nhiều hoa diên vĩ, cacao và da thuộc. Chàng phải nam tính đến mức choáng ngợp mới có thể cân bằng với cái ngọt tràn ngập này. Mà sự nam tính không cần đến từ cơ bắp, đến từ sự vững vàng không gì lay chuyển được.', 4500000, 3000000, 'DiorHomme.jpg', '6', '2019-10-18 06:33:29'),
(41, 'Fahrenheit', 7, 'Thơm lịch lãm, tinh tế, được sáng tạo từ sự đối nghịch đầy lý thú giữa nước và lửa được bao trùm bởi hương da thuộc kết hợp với lá violet và cỏ hương bài tạo nên sự lịch lãm thuần chất của một quý ông tao nhã. Sự ấm áp của Fahrenheit đủ để chinh phục người phụ nữ của anh ấy an tâm tựa vào vòng tay của người đàn ông bản lĩnh, sang trọng và vô cùng ', 3120000, 0, 'Fahrenheit.jpg', '7', '2019-10-18 06:33:33'),
(42, 'Dior Homme Sport', 7, 'Mang đến sự bùng nổ, tràn đầy sức sống và năng lượng với hương thơm tươi mát. Mùi hương của nước hoa nổi bật với mùi vị của thanh yên kết hợp cùng hương thơm gừng tươi, hoa diên vĩ và hương gỗ tuyết tùng mãnh liệt, nam tính và mạnh mẽ.', 2960000, 10000000, 'DiorHommeSport.jpg', '8', '2019-10-18 06:33:46'),
(43, 'Gucci Pour Homm', 8, 'Mang những nốt thuốc lá, gỗ tùng và hoa violet. Một tổ hợp cám dỗ nhiều hiểm nguy. Các nguyên liệu nhưng được đan lát tài tình cho ra một mùi hương của những người đàn ông từng trải khiến ta muốn dựa dẫm và cùng phiêu lưu.  Người đàn ông dùng Gucci Pour Homme không thể là chàng sinh viên chân chất ít trải nghiệm cuộc đời, mà là người biết rõ phụ nữ và trải nghiệm trong cuộc sống.', 2720000, 0, 'GucciPourHomm.jpg', '', '2019-10-18 06:34:27'),
(44, 'Gucci Guilty Diamond', 8, 'Mang hương thơm hiện đại và độc đáo của cỏ lá thiên nhiên kết hợp với tinh dầu hoa cam và chanh Ý tạo thành một tổ hợp cám dỗ nhiều hiểm nguy.\r\n-Người đàn ông dùng Gucci Guilty Diamond là người có gu thẩm mỹ, sành điệu, thừa tự tin và nhất định là đủ đẹp trai để thu hút mọi giác quan của các mỹ nhân xung quanh mình. Liệu chàng của em có tự tin để mặc Gucci Guilty Diamond xuống phố đêm nay?\r\n', 3780000, 2000000, 'GucciGuiltyDiamond.jpg', '3', '2019-10-18 06:34:36'),
(45, 'Gucci Guilty Intense', 8, 'Mở ra bằng mùi hương đánh thức các giác quan của chanh và hoa oải hoa oải hương kết hợp cùng rau mùi tạo nên một cảm giác tươi mát đến lôi cuốn mãnh liệt. Hương giữa bằng sự kết hợp của tinh dầu hoa cam tăng cường nét nam tính mạnh mẽ. Hương cuối như mê hoặc bởi hoắc hương, tuyết tùng và hổ phách tạo ấn tượng, khiêu khích đến kì lạ.', 0, 1500000, 'GucciGuiltyIntense.jpg', '5', '2019-10-18 06:34:56'),
(46, 'Mickey Mouse', 9, 'Tươi mát dễ thương từ hương cam quýt kết hợp vơi các loại hoa trắng và xạ hương mượt mà sẽ cùng các chàng “hoàng tử bé” phát huy tinh thần nhiệt tình, tốt bụng và không ngại sáng tạo ra những “ ý tưởng điên rồ” để tiếp cận cô bạn gái Minnie của chính mình.', 2350000, 1500000, 'MickeyMouse.jpg', '3', '2019-10-18 06:35:57'),
(48, 'The Smurfs Vanity', 10, 'Là hương thơm hoa cỏ tươi mát, dùng được cho cả bé trai lẫn bé gái. Nhẹ nhàng với làn da nhạy cảm và khử được mùi hôi, mùi chua khi bé chơi đùa trong nhiều giờ.', 3478000, 2500000, 'XiTrumTiĐieuTheSmurfsVanity.jpg', '5', '2019-10-19 04:50:48'),
(49, 'The Smurfs Papa', 10, 'Là hương thơm hoa cỏ tươi mát, dùng được cho cả bé trai lẫn bé gái. Nhẹ nhàng với làn da nhạy cảm và khử được mùi hôi, mùi chua khi bé chơi đùa trong nhiều giờ.', 1500000, 0, 'TheSmurfsPapa.jpg', '5', '2019-10-19 04:50:40'),
(50, 'Barbie Fashion Girl ', 11, 'Là mùi hương mà cô nàng Barbie chọn dùng trong buổi diễn thời trang của mình. Hương thơm hoa trái tươi tắn của chai nước hoa sẽ giúp cô nàng tỏa sáng trọn vẹn trong các show diễn thời trang ấn tưởng của mình.', 2500000, 1500000, 'BarbieFashionGirl.jpg', '5', '2019-10-19 04:51:13'),
(51, 'The Smurfs Clumsy ', 10, 'Mang hương thơm hoa cỏ tươi mát, dùng được cho cả bé trai lẫn bé gái. Nhẹ nhàng với làn da nhạy cảm và khử mùi mồ hôi, mùi chua khi bé chơi đùa trong nhiều giờ.', 3500000, 0, 'TheSmurfsClumsy.jpg', '6', '2019-10-19 04:50:00'),
(52, 'Princess Aurora ', 21, 'Mang hương thơm cam quýt ngọt thanh, dùng cho bé gái trên 3 tuổi. Nhẹ nhàng với làn da nhảy cảm và khử mùi mồ hôi, mùi chua khi bé chơi đùa trong nhiều giờ.', 2000000, 1500000, 'PrincessAurora.jpg', '4', '2019-10-19 04:36:04'),
(53, 'Chergui', 12, 'Là mùi mà nam nữ đều có thể dùng được,.. Có mật ông, có thuốc lá, có gỗ, có mùi trầm… kết hợp khéo léo và hòa quyện đến mức nếu chỉ vài cái hít hà ban đầu, bạn khó có thể nhận ra bất kỳ một note mùi riêng lẻ. Hệt như một bản nhạc, Chergui có độ phức tạp vừa phải và đủ để người ta càng nghiện, càng nghe càng nhận ra từng nốt nhạc đều có cái duyên riêng của nó,..', 4650000, 2500000, 'Chergui.jpg', '5', '2019-10-19 04:35:57'),
(54, 'Gris Clair ', 12, 'Nghĩa là Xám Sáng. Một cái tên ngắn nhưng đẹp và gợi hình. Serge Lutens tiếp tục có một sáng tạo đẹp lạ lùng khi mang oải hương đốt chung với gia vị quyện cùng khói mờ ảo. Vị oải hương trong Gris Clair mát lạnh, đặc sắc, sang trọng và rất cuốn hút. Một hợp hương đơn giản mà lại cầu kì, ngòn  ngọt của hoa, trầm lắng của gỗ - thật làm say và thu hút lòng người.', 3400000, 0, 'GrisClair.jpg', '4', '2019-10-18 06:26:30'),
(55, 'Ck One (Unisex)', 13, 'Nước hoa Ck One (Unisex) là hương thơm nhẹ nhàng với chiết xuất cam quýt dành cho cả nam giới và nữ giới. Sản phẩm được sản xuất bởi Alberto Morillas và Harry Fremont.\r\nĐúng với tên gọi, mang đến sản phẩm chung nhất phù hợp cho cả nam và nữ, mang ý nghĩa của sự hòa hợp 2 tâm hồn đồng điệu, gắn kết lại với nhau thành một thể thống nhất. Sản phẩm rất phù hợp với các cặp tình nhân muốn tìm đến một mùi thơm chung phù hợp với cả hai giới tính.\r\n', 3478000, 0, 'CkOne(Unisex).jpg', '8', '2019-10-18 06:25:50'),
(56, 'Ck Be', 13, 'Mùi hương Ck Be toát lên vẻ tinh khiết, trong trẻo, mượt mà, nhưng ẩn chưa bên trong là một nét quyến rủ khó quên. Sản phẩm là một bản hợp ca các hương thơm độc đáo, dạo đầu là hương cây trái tươi mát với những trái cam Mandarin hoàn hảo nhất từ Trung Hoa và cam Bergamot, điểm thêm hương hoa laven der, bạc hà sảng khoái, sau đó kết thúc bằng hương vani, hổ phách và xạ hương.', 1500000, 1000000, 'CkBe.jpg', '3', '2019-10-19 04:32:52'),
(57, ' versace', 1, 'Những bông hồng dại bé xinh như những mặt trời tí hon lung linh tỏa nắng dưới cánh đồng. Từng bông bung nở, từng chùm chen chúc, rực rỡ như nắng xuân. Mỗi cành hồng dại có hàng chục bông chen chúc nhau khoe sắc tỏa hương. Miss Dior eau de toilette mang mùi hồng đặc trưng đến mức khiến người ta muốn ôm cả vào lòng những bông hoa tròn xoe rung rinh ấy.', 3540000, 1500000, 'versacexanh.jpg', '5', '2019-10-19 08:17:02'),
(58, 'Ck One (Unisex)', 1, 'Những bông hồng dại bé xinh như những mặt trời tí hon lung linh tỏa nắng dưới cánh đồng. Từng bông bung nở, từng chùm chen chúc, rực rỡ như nắng xuân. Mỗi cành hồng dại có hàng chục bông chen chúc nhau khoe sắc tỏa hương. Miss Dior eau de toilette mang mùi hồng đặc trưng đến mức khiến người ta muốn ôm cả vào lòng những bông hoa tròn xoe rung rinh ấy.', 3540000, 1500000, 'CkBe.jpg', '7', '2019-10-19 08:18:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` bigint(10) NOT NULL,
  `link` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `loai_id` bigint(10) UNSIGNED NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gioithieu` text COLLATE utf8mb4_vietnamese_ci,
  `hinhanh` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT 'download.png',
  `noibat` tinyint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`id`, `loai_id`, `ten`, `gioithieu`, `hinhanh`, `noibat`) VALUES
(1, 1, 'Chanel Perfume', NULL, 'chanel_nu.jpg', 1),
(2, 1, 'Christian Dior Perfumes', NULL, 'Hparfum.jpg', 1),
(3, 1, 'Victoria’s Secret', NULL, 'dior.png', 1),
(4, 1, 'Valentino Perfumes', NULL, 'download.png', 0),
(5, 2, 'Calvin Klein Perfumes', NULL, 'calvin.png', 1),
(6, 2, 'Issey Miyake Perfumes', NULL, 'download.png', 1),
(7, 2, 'Dior Perfumes', NULL, 'dior.png', 1),
(8, 2, 'Gucci Perfumes', NULL, 'gucci.jpg', 0),
(9, 3, 'Air-Val International Perfumes', NULL, 'Hparfum.jpg', 1),
(10, 3, 'FAB Perfumes', NULL, 'Hparfum.jpg', 1),
(11, 3, 'Mattel Perfumes', NULL, 'download.png', 1),
(12, 4, 'Serge Lutens Perfumes', NULL, 'download.png', 1),
(13, 4, 'Calvin Klein', NULL, 'calvin.png', 0),
(19, 1, 'Christian Dior Fragrances', NULL, 'dior.png', 0),
(21, 3, 'Disney Perfumes', NULL, 'versace.png', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `tieude` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaytao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fr_dh_id` (`donhang_id`) USING BTREE,
  ADD KEY `fr_sp_id` (`sanpham_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fr_kh_id` (`khachhang_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fr_sp_id` (`thuonghieu_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_loai_id` (`loai_id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`thuonghieu_id`) REFERENCES `thuonghieu` (`id`);

--
-- Các ràng buộc cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD CONSTRAINT `thuonghieu_ibfk_1` FOREIGN KEY (`loai_id`) REFERENCES `loaisanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
