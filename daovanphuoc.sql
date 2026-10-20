-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2026 at 04:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daovanphuoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `anh_sp` varchar(100) NOT NULL,
  `gia_sp` double NOT NULL,
  `chitiet_sp` varchar(200) NOT NULL,
  `hang_sx` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `anh_sp`, `gia_sp`, `chitiet_sp`, `hang_sx`) VALUES
(1, 'Bít Tết Nướng BBQ', 'img/sp/BitTet.jpg', 399000, 'Bò bít tết nướng chuẩn vị cần chọn thịt thăn nội/ngoại dày 2-3cm, ướp muối, tiêu, tỏi, dầu oliu 30 p', 'BBQ'),
(2, 'Gà Cay Nướng BBQ', 'img/sp/GaCay.jpg', 499000, 'Ướp: Cánh gà ướp sốt gồm tương ớt Hàn Quốc (Gochujang), tương cà, xì dầu, mật ong, dầu mè, tỏi băm.\r', 'BBQ'),
(3, 'Xiên Nướng BBQ', 'img/sp/XienNuong.jpg', 299000, 'Thịt xiên nướng là món ăn phổ biến với nguyên liệu chính là thịt heo (nạc vai hoặc ba chỉ) thái mỏng', 'BBQ'),
(4, 'Xúc Xích Nướng BBQ', 'img/sp/XucXich.jpg', 199000, 'Xúc xích nướng là món ăn phổ biến, đặc trưng bởi vỏ ngoài giòn, bên trong mọng nước, mùi thơm đặc tr', 'BBQ');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id_sl` int(11) NOT NULL,
  `anh_sl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id_sl`, `anh_sl`) VALUES
(1, 'img/sl/Anhdong1.jpg'),
(2, 'img/sl/Anhdong2.jpg'),
(3, 'img/sl/Anhdong3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tt` int(11) NOT NULL,
  `tieude_tt` varchar(100) NOT NULL,
  `anh_tt` varchar(100) NOT NULL,
  `tomtat_tt` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `chitiet_tt` text NOT NULL,
  `chuyenmuc_tt` varchar(100) NOT NULL,
  `tacgia_tt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id_tt`, `tieude_tt`, `anh_tt`, `tomtat_tt`, `chitiet_tt`, `chuyenmuc_tt`, `tacgia_tt`) VALUES
(1, 'Ấn Độ bắn 21 loạt đại bác chào mừng Tổng Bí thư, Chủ tịch nước Tô Lâm', 'img/tintuc/1.jpg', 'Lễ đón cấp Nhà nước Tổng Bí thư, Chủ tịch nước Tô Lâm được tổ chức trọng thể tại Phủ Tổng thống Ấn Độ với 21 loạt đại bác chào mừng.', 'Sáng 25/2 (giờ địa phương), tại Thủ đô New Delhi, Thủ tướng Ấn Độ Narendra Modi đã chủ trì lễ đón chính thức Tổng Bí thư, Chủ tịch nước Tô Lâm thăm cấp Nhà nước tới Ấn Độ.\r\n\r\nKhi đoàn xe của Tổng Bí thư, Chủ tịch nước Tô Lâm tiến vào sân Phủ Tổng thống, 21 loạt đại bác đã vang lên rộn rã chào mừng. Đây là nghi thức trang trọng và cao quý nhất mà Chính phủ Ấn Độ dành để chào đón các nguyên thủ quốc gia, thể hiện sự coi trọng đặc biệt đối với mối quan hệ hữu nghị truyền thống Việt Nam - Ấn Độ.\r\n\r\nSau nghi lễ chào cờ và duyệt đội danh dự, Tổng Bí thư, Chủ tịch nước Tô Lâm và Thủ tướng Narendra Modi đã có cuộc hội đàm hẹp và hội đàm mở rộng. Tại đây, hai nhà lãnh đạo đã cùng nhau nhìn lại chặng đường phát triển của mối quan hệ Đối tác Chiến lược Toàn diện và đề ra những phương hướng hợp tác mới trong tương lai.\r\n\r\nCác lĩnh vực trọng điểm được thảo luận bao gồm: hợp tác quốc phòng - an ninh, thúc đẩy thương mại song phương hướng tới mục tiêu 20 tỷ USD, và tăng cường kết nối hàng không, hàng hải. Đặc biệt, hai bên cũng nhấn mạnh tầm quan trọng của việc hợp tác trong các ngành công nghệ cao như chíp bán dẫn, năng lượng sạch và kinh tế số.\r\n\r\nChuyến thăm lần này không chỉ củng cố sự tin cậy chính trị mà còn mở ra một chương mới trong quan hệ hai nước, đóng góp vào hòa bình, ổn định và thịnh vượng ở khu vực Ấn Độ Dương - Thái Bình Dương và trên thế giới.', 'Thế giới', 'Theo VnExpress'),
(2, 'Việt Nam xác định 10 nhóm công nghệ chiến lược', 'img/tintuc/2.jpg', 'Chính phủ vừa ban hành danh mục 10 nhóm công nghệ chiến lược nhằm thúc đẩy cuộc cách mạng công nghiệp lần thứ tư và phát triển kinh tế số tại Việt Nam.', 'Chính phủ đã chính thức xác định 10 nhóm công nghệ chiến lược ưu tiên nghiên cứu, phát triển và ứng dụng để chủ động tham gia cuộc Cách mạng công nghiệp lần thứ tư. Đây được xem là \"kim chỉ nam\" cho lộ trình phát triển khoa học công nghệ của quốc gia đến năm 2030.\r\n\r\nDanh mục này bao gồm các lĩnh vực then chốt như: Trí tuệ nhân tạo (AI), Internet vạn vật (IoT), Công nghệ chuỗi khối (Blockchain), Điện toán đám mây và Điện toán biên. Bên cạnh đó, các công nghệ về năng lượng sạch, công nghệ sinh học thế hệ mới và hàng không vũ trụ cũng được chú trọng đặc biệt.\r\n\r\nMục tiêu của việc xác định các nhóm công nghệ này là nhằm tạo bứt phá về năng suất lao động, đổi mới mô hình tăng trưởng và nâng cao năng lực cạnh tranh quốc gia. Chính phủ cũng khuyến khích các doanh nghiệp IT và các trường đại học tập trung nguồn lực để đào tạo nhân lực chất lượng cao trong các lĩnh vực này.\r\n\r\nViệc làm chủ các công nghệ chiến lược không chỉ giúp Việt Nam thoát khỏi bẫy thu nhập trung bình mà còn khẳng định vị thế của đất nước trên bản đồ công nghệ thế giới, đặc biệt là trong bối cảnh chuyển đổi số đang diễn ra mạnh mẽ toàn cầu.', 'Công nghệ', 'Theo VnExpress'),
(3, 'Ảo ảnh Mặt Trăng: Bí ẩn chưa được giải mã sau hàng nghìn năm', 'img/tintuc/3.jpg', 'Tại sao Mặt Trăng trông lớn hơn gấp nhiều lần khi ở gần đường chân trời so với lúc lên cao? Đây là một hiện tượng đánh lừa thị giác đã thách thức các nhà khoa học suốt hàng thế kỷ.', 'Suốt hàng nghìn năm qua, con người đã quan sát thấy một hiện tượng kỳ lạ: Mặt Trăng khi nằm sát đường chân trời trông lớn hơn rất nhiều so với khi nó lên cao trên đỉnh đầu. Hiện tượng này được gọi là \"ảo ảnh Mặt Trăng\".\r\n\r\nThực tế, các phép đo đạc khoa học và ảnh chụp thực tế đã chứng minh kích thước của Mặt Trăng không hề thay đổi. Điều này có nghĩa là sự khác biệt về kích thước hoàn toàn xảy ra trong bộ não và hệ thống thị giác của con người. Aristoteles và nhiều nhà tư tưởng cổ đại từng cho rằng bầu khí quyển làm phóng đại hình ảnh, nhưng giả thuyết này đã sớm bị bác bỏ.\r\n\r\nMột trong những giả thuyết phổ biến nhất hiện nay là \"ảo ảnh Ponzo\". Bộ não con người dựa vào các vật thể ở đường chân trời như cây cối, tòa nhà để so sánh kích thước. Khi Mặt Trăng ở gần các vật thể này, não bộ bị đánh lừa rằng nó ở rất xa và do đó phải có kích thước khổng lồ. Tuy nhiên, ngay cả các phi hành gia ngoài vũ trụ hay phi công trên biển không có vật mốc vẫn nhìn thấy ảo ảnh này.\r\n\r\nCho đến ngày nay, dù có nhiều cách giải thích về mặt tâm lý học và quang học, các nhà khoa học vẫn chưa thể đưa ra một lời giải duy nhất và tuyệt đối cho câu hỏi: Tại sao bộ não chúng ta lại nhìn thấy Mặt Trăng to đến thế khi nó mọc?', 'Thế giới', 'Theo VnExpress'),
(4, 'Thi lại tốt nghiệp THPT để tìm đường vào đại học', 'img/tintuc/4.jpg', 'Thay vì chọn đại một ngôi trường không yêu thích, nhiều thí sinh chấp nhận dành thêm một năm \"đèn sách\" để ôn tập, quyết tâm thi lại nhằm hiện thực hóa giấc mơ bước chân vào cánh cổng đại học mong muốn.', 'Sau mỗi kỳ tuyển sinh đại học, bên cạnh niềm vui của những người trúng tuyển, vẫn có không ít thí sinh ngậm ngùi lỡ hẹn với ngôi trường mơ ước. Tuy nhiên, thay vì chọn đi làm ngay hay học một ngành nghề khác, xu hướng \"gap year\" để ôn thi lại đang trở nên phổ biến hơn trong những năm gần đây.\r\n\r\nViệc thi lại không đơn thuần là tìm kiếm một tấm vé vào đại học, mà còn là hành trình thử thách bản lĩnh và sự kiên trì của các bạn trẻ. Nhiều thí sinh chia sẻ, việc học một ngành mình không thích sẽ dẫn đến sự chán nản và lãng phí thời gian trong tương lai. Do đó, dù phải chịu áp lực từ gia đình và xã hội khi thấy bạn bè đồng trang lứa đã ổn định việc học, họ vẫn quyết tâm dành 10-12 tiếng mỗi ngày tại các lò luyện thi hoặc tự học tại nhà.\r\n\r\nTheo các chuyên gia giáo dục, việc thí sinh thi lại để có cơ hội chọn đúng ngành, đúng nghề là một tín hiệu tích cực, cho thấy sự trưởng thành trong tư duy hướng nghiệp. Tuy nhiên, các bạn cũng cần chuẩn bị tâm lý vững vàng và một lộ trình ôn tập khoa học để tránh rơi vào tình trạng quá tải hoặc thất vọng nếu kết quả không như ý muốn lần thứ hai.\r\n\r\nCuộc đua vào các trường đại học top đầu vẫn luôn gay gắt, nhưng với những ai có ý chí, cánh cửa đại học không bao giờ đóng lại. Hành trình thi lại chính là một bước đệm quan trọng để các sĩ tử rèn luyện ý chí và xác định rõ ràng hơn con đường sự nghiệp sau này.', 'Thời sự', 'Theo VnExpress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id_sl`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id_sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
