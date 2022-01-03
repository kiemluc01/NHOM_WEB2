-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2021 lúc 06:34 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `docsach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsach`
--

CREATE TABLE `chitietsach` (
  `IdChitietsach` int(11) NOT NULL,
  `idSach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtatND` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Luotxem` int(11) DEFAULT NULL,
  `Feedback` int(11) DEFAULT NULL,
  `Favorite` int(11) DEFAULT NULL,
  `Sotrang` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsach`
--

INSERT INTO `chitietsach` (`IdChitietsach`, `idSach`, `tomtatND`, `Luotxem`, `Feedback`, `Favorite`, `Sotrang`) VALUES
(1, '1', 'Tác phẩm Truyện Kiều, nguyên tên là Đoạn trường tân thanh, từ khi ra đời đến nay (khoảng 200 năm), trong lịch sử Văn học Việt Nam chưa có công trình nào nghiên cứu sâu sắc về nó. Một trong nguyên nhân chính là vì bản gốc của Nguyễn Du sáng tác không còn nữa. Tuy nhiên, không phải vì vậy mà Truyện Kiều bị mai một. Truyện Kiều vẫn trường tồn với thời gian, những lời thơ, câu chữ đến nay vẫn còn nguyên giá trị:\r\n\"Trăm năm trong cõi người ta,\r\nChữ tài chữ mệnh khéo là ghét nhau.\r\nTrải qua một cuộc bể dâu,\r\nNhững điều trông thấy mà đau đớn lòng.\r\nLạ gì bỉ sắc tư phong,\r\nTrời xanh quen thói má hồng đánh ghen\".', 2, 4, 2, '200'),
(2, '2', '“Một con dế đã từ tay ông thả ra chu du thế giới tìm những điều tốt đẹp cho loài người. Và con dế ấy đã mang tên tuổi ông đi cùng trên những chặng đường phiêu lưu đến với cộng đồng những con vật trong văn học thế giới, đến với những xứ sở thiên nhiên và văn hóa của các quốc gia khác. Dế Mèn Tô Hoài đã lại sinh ra Tô Hoài Dế Mèn, một nhà văn trẻ mãi không già trong văn chươ” - Nhà phê bình Phạm Xuân Nguyên', 4, 2, 4, '200'),
(3, '3', 'Tắt đèn của nhà văn Ngô Tất Tố phản ánh rất chân thực cuộc sống khốn khổ của tầng lớp nông dân Việt Nam đầu thế kỷ XX dưới ách đô hộ của thực dân Pháp. Tác phẩm xoay quanh nhân vật chị Dậu và gia đình – một điển hình của cuộc sống bần cùng hóa sưu cao thuế nặng mà chế độ thực dân áp đặt lên xã hội Việt Nam. Trong cơn cùng cực chị Dậu phải bán khoai, bán bầy chó đẻ và bán cả đứa con để lấy tiền nộp sưu thuế cho chồng nhưng cuộc sống vẫn đi vào bế tắc, không lối thoát.\r\n\r\nTrong tác phẩm, cảnh đời tràn nước mắt của gia đình chị Dậu đã được tái hiện một cách sống động trong từng câu chữ, chi tiết văn học với nhiều cung bậc cảm xúc của tác giả khiến người đọc không khỏi xúc động. Tác phẩm không chỉ kích thích niềm đam mê văn học ở thanh thiếu niên, mà còn bồi đắp cho lớp trẻ những tìm cảm tốt đẹp và khơi dậy lòng trắc ẩn ở các em.', 4, 1, 4, '200'),
(4, '4', 'Một chuyến du hành đầy trí tuệ qua các vũ trụ, được dẫn dắt tài tình bởi \"thuyền trưởng\" Michio Kaku và độc giả có dịp chiêm ngưỡng vẻ đẹp kỳ vĩ của vũ trụ kể từ vụ nổ lớn, vượt qua những hố đen, lỗ sâu, bước vào các thế giới lượng tử từ muôn màu kỳ lạ nằm ngay trước mũi chúng ta, vốn dĩ tồn tại song song trên một màng bên ngoài không - thời gian bốn chiều, ngắm nhìn thực tại vật chất quen thuộc hoà quyện với thế giới của những điều kỳ diệu như năng lượng và vật chất tối, sự nảy chồi của các vũ trụ, những chiều không gian bí ẩn và sự biến ảo của các dây rung siêu nhỏ...\r\n\r\nDẫn chuyện lôi cuốn, kết hợp tường minh, sống động một lượng thông tin đồ sộ để khai mở những giới hạn tột cùng của trí  tưởng tượng, Kaku thực sự xứng đáng là \" nhà truyền giáo\" vĩ đại đã mang thế giới vật lý lý thuyết tới quảng đại quần chúng.', 4, 1, 4, '200'),
(5, '5', 'Sáng tạo nghệ thuật chỉ có thể nở rộ trong một xã hội hưng thịnh, phồn vinh, dưới sự cai trị của những ông hoàng giàu sang và nhờ vào một chế độ bảo trợ sáng suốt. Tất cả những điều đó đều thiếu vắng ở xứ An Nam, nơi đến cả những thú vui của cuộc sống thái bình cũng còn là điều hiếm. Ấy thế mà, các nghệ nhân xứ này, từ đời này sang đời khác, vẫn tạo ra được một dấu ấn riêng hết sức duyên dáng, thanh lịch, thậm chí quyến rũ, nhờ tài khéo léo đến hoàn hảo trong kỹ thuật chế tác.\r\n\r\nCuốn sách là cái nhìn khách quan và toàn cảnh của một người Pháp từng sinh sống và gắn bó với xứ An Nam một thời gian dài, được minh họa bằng 16 bức ảnh tư liệu quan trọng, giúp độc giả hình dung rõ hơn về bối cảnh chung của xã hội An Nam đầu thế kỷ 20, cũng như nghệ thuật kiến trúc, điêu khắc, hội họa và các ngành thủ công mỹ nghệ ở nước ta thời kỳ đó.', 4, 1, 4, '200'),
(6, '6', '\"Think and Grow Rich –Nghĩ giàu và Làm giàu là một trong những cuốn sách bán chạy nhất mọi thời đại. Đã hơn 60 triệu bản được phát hành với gần trăm ngôn ngữ trên toàn thế giới và được công nhận là cuốn sách tạo ra nhiều triệu phú, một cuốn sách truyền cảm hứng thành công nhiều hơn bất cứ cuốn sách kinh doanh nào trong lịch sử.\r\n\r\nTác phẩm này đã giúp tác giả của nó, Napoleon Hill, được tôn vinh bằng danh hiệu “người tạo ra những nhà triệu phú”. Đây cũng là cuốn sách hiếm hoi được đứng trong top của rất nhiều bình chọn theo nhiều tiêu chí khác nhau - bình chọn của độc giả, của giới chuyên môn, của báo chí. Lý do để Think and Grow Rich - Nghĩ giàu và làm giàu có được vinh quang này thật hiển nhiên và dễ hiểu: Bằng việc đọc và áp dụng những phương pháp đơn giản, cô đọng này vào đời sống của mỗi cá nhân mà đã có hàng ngàn người trên thế giới trở thành triệu phú và thành công bền vững.', 4, 2, 4, '200'),
(7, '7', 'Một quốc gia có thể tồn tại như thế nào nếu việc dạy trẻ con quản lý tiền bạc vẫn là trách nhiệm của phụ huynh, mà hầu hết họ không có nhiều kiến thức về vấn đề này?\r\n\r\nChúng ta phải làm gì để thay đổi số phận tiền bạc lận đận của mình? Nhà giàu đã làm giàu như thế nào từ hai bàn tay trắng? Cuốn sách Cha Giàu Cha Nghèo sẽ giúp bạn giải đáp được phần nào những thắc mắc trên.', 4, 1, 4, '200'),
(8, '8', 'Cuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp\r\nCuốn sách “Kinh doanh online” của Johnathan P. Allen còn được “ví von” là cuốn sách giáo khoa bổ ích cung cấp các kiến thức cơ bản cũng như những hướng dẫn thực tế cho các sinh viên việc sử dụng các nền tảng công nghệ để bắt tay vào khởi nghiệp', 4, 1, 4, '200'),
(9, '9', 'Với lối viết lôi cuốn, liên tục đan xen giữa thực tế, lý thuyết và lịch sử, Scott Galloway đã đem đến cho độc giả một cái nhìn sâu sắc về đại dịch Covid-19 đang diễn ra thông qua một lăng kính đầy màu sắc. Tác giả đã lột tả những mặt trái và khiếm khuyết về kinh tế-xã hội mà trước giờ chúng ta không nhận ra khi thế giới chưa xuất hiện đại dịch Covid-19 quái ác. Với Thời kỳ hậu Corona: Luôn có cơ hội trong khủng hoảng, độc giả sẽ thấy rõ hơn cách đại dịch ảnh hưởng và thay đổi môi trường kinh doanh nhiều như thế nào.\n\nThời kỳ hậu Corona: Luôn có cơ hội trong khủng hoảng là nỗ lực của tác giả Scott Galloway để nhìn xa hơn cái hiện tại chưa từng có của chúng ta và dự đoán tương lai bằng cách tạo ra nó, đối thoại và phân tích nó nhằm đưa ra các giải pháp tốt hơn. Khi đại dịch Covid-19 được kiểm soát, những khác biệt gì sẽ xảy ra trong việc kinh doanh, trong nền giáo dục và trong thế giới của chúng ta? Liệu nó sẽ nhân văn hơn và thịnh vượng hơn? Chúng ta có thể làm gì để định hình cho tươ', 7, 15, 3, '256'),
(10, '10', 'Lão Tử là người huyện Khổ, nước Sở, sống trong thời Xuân Thu Chiến Quốc. Tương truyền ông là người viết bộ sách Đạo Đức Kinh, chủ yếu bàn về Đạo học và cách sống để hòa hợp với Đạo. Ở Việt Nam, có rất nhiều nhà nghiên cứu đã dịch và bình chú về cuốn Đạo Đức Kinh của Lão Tử. Nhờ những cách hiểu và khám phá mới mẻ của mỗi nhà nghiên cứu mà nội dung quyển Đạo Đức Kinh ngày càng trở nên phong phú và nhiều màu sắc. Nhà xuất bản Trẻ xin giới thiệu đến quý độc giả hai cuốn sách Lão Tử Đạo Đức Kinh và Lão Tử tinh hoa. Lão Tử Đạo Đức Kinh được học giả Nguyễn Duy Cần dịch trực tiếp từ bản gốc tiếng Trung Quốc, có kèm theo phần chú giải để độc giả tiện theo dõi. Lão Tử tinh hoa là cuốn sách bàn rộng ra về những nội dung cốt lõi của Đạo Đức Kinh. Trân trọng giới thiệu đến quý độc giả cả nước.', 8, 12, 21, '218'),
(11, '11', 'Cuốn sách nghiên cứu về triết học của Trang Tử, trình bày học thuyết và nêu những điểm chủ chốt cấu thành nên triết học Trang Tử.', 7, 15, 4, '168'),
(12, '12', 'Cuốn sách trình bày những hệ thống tư tưởng cốt lõi của triết lý Đạo học Đông phương. Ngòi bút của dịch giả Nguyễn Duy Cần càng làm sáng rõ hơn những ý nghĩa thâm sâu vi diệu mà Trang Tử muốn truyền đến người đọc.', 7, 2, 21, '210'),
(13, '13', 'Tinh hoa Đạo học Đông phương là cuốn sách bàn về các hệ thống triết học Dịch, Lão – Trang và Phật. Quyển sách nêu bật lên được những giá trị tinh hoa cốt lõi của các hệ thống triết học và Đạo học phương Đông, cũng như thời kỳ hoàng kim và những giai đoạn lịch sử của triết học Đông phương. Tác giả Nguyễn Duy Cần viết cuốn sách nhằm mục tiêu xây dựng con người mới trên nền tảng tư tưởng triết học phi nhị nguyên, làm sáng tỏ những giá trị tinh túy của nền Đạo học và triết học Đông phương.', 4, 1, 21, '120'),
(14, '14', 'Thành công là học cách làm việc THÔNG MINH hơn chứ không phải CHĂM CHỈ hơn! Những người thành công thường chỉ tập trung thời gian của họ vào một vài ưu tiên và luôn nghĩ làm thế nào để mọi việc diễn ra suôn sẻ.\r\n\r\nMỗi người đều có 96 khối năng lượng mỗi ngày để làm những gì chúng ta muốn. Bạn luôn cần đảm bảo mình đang sử dụng mỗi khối năng lượng một cách khôn ngoan để đạt được tiến bộ nhanh nhất trên các mục tiêu quan trọng của bản thân. Đừng Làm Việc Chăm Chỉ Hãy Làm Việc Thông Minh để luôn duy trì nguồn năng lượng tích cực là cuốn sách Bizbooks xin trân trọng gửi đến quý độc giả.', 4, 1, 21, '492'),
(15, '15', 'Thế giới đang khiến tâm trí chúng ta căng thẳng và rối bời hơn bao giờ hết. Một hành tinh vội vã, âu lo đang kiến tạo nên những cuộc đời vội vã, âu lo. Con người chưa bao giờ được kết nối nhiều như vậy, nhưng cũng chưa bao giờ thấy cô đơn hơn thế.\r\nGhi chép về một hành tinh âu lo là những quan sát, suy ngẫm của Matt Haig về thế giới hiện đại cùng những tác động của nó tới chúng ta. Được coi là phần tiếp theo của cuốn tự truyện Những điều giữ tôi còn sống, nhưng câu hỏi đặt ra bây giờ không còn dừng lại ở “Tại sao ta nên tiếp tục sống?” Mà nó đã trở nên bao quát hơn: “Làm sao để chúng ta sống sót và không phát điên trong một thế giới đảo điên?”\r\n“Hãy sống thật. Chống lại các thuật toán trên mạng. Hãy trở thành một người mà máy tính sẽ không bao giờ hiểu hết được.”', 7, 12, 3, '272'),
(16, '16', 'Sự cạnh tranh trên thị trường ngày càng khốc liệt, trong khi nguồn lực cả về người lẫn vốn trong doanh nghiệp đều rơi vào tình trạng cạn kiệt. Chỉ một vài công ty có thực lực mới có thể vực dậy. Còn những công ty trên bờ vực sụp đổ sẽ phải làm sao?\r\n\r\nChỉ một vài giải pháp nhất thời không thể tạo ra sự thay đổi trong một chốc lác. Mọi việc dường như thật khó khăn. Vậy làm sao để nhận ra các nguy cơ ngầm ẩn trong doanh nghiệp và làm thế nào để vực dậy công ty trong thời kỳ khó khăn nhất?\r\n\r\nPhải có lối tư duy ưu việt hơn. Tư duy thiết kế chính là câu trả lời dành cho bạn để giải quyết các vấn đề hóc búa của doanh nghiệp.\r\n\r\nBạn đã sẵn sàng để tiếp cận lối tư duy này chưa?\r\n\r\nGiải quyết vấn đề bằng tư duy thiết kế sẽ giúp bạn đưa ra quyết định.', 4, 2, 17, '304'),
(17, '17', 'Hai Vạn Dặm Dưới Đáy Biển là một tiểu thuyết khoa học viễn tưởng kinh điển của nhà văn người Pháp – Jules Verne xuất bản vào năm 1870. Nó kể câu chuyện về Thuyền trưởng Nê-mô – một người thù ghét đất liền và con tàu ngầm Nau-ti-lux có một không hai của ông ta, từ quan điểm của giáo sư A-rô-nắc. Trong một chuyến đi khảo sát sinh vật biển bí ẩn trên chiếc tàu Lin-côn, giáo sư A-rô-nắc - một giáo sư giàu kiến thức ham mê tìm tòi; trợ lý Công-xây - anh phụ tá điềm tĩnh đến lạ thường, chung thành tuyệt đối, ham thích phân loại giống vật; và chàng thợ đánh bắt cá voi cừ khôi, nóng tính nhưng cũng trượng nghĩa - Nét Len, tất cả bị rơi khỏi tàu và vô tình bị bắt vào tàu ngầm Nau-ti-lux của thuyền trưởng Nê-mô. Từ đây họ bắt đầu một hành trình khám phá thế giới đại dương huyền ảo với thuyền trưởng Nê-Mô và các thủy thủ trên tàu Nau-ti-lux.', 20, 6, 15, '403'),
(18, '18', 'Tại sao một số người lại có sức thuyết phục đến mê hoặc và luôn là người làm chủ Trò chơi Thuyết phục? Đâu là những động lực vô hình đằng sau thứ sức mạnh thôi thúc chúng ta đồng thuận với người khác? Những thủ thuật được các bậc thầy thuyết phục sử dụng tài tình là gì, làm thế nào đánh bại các thủ thuật đó - đồng thời biến chúng thành của chính bạn?\r\n\r\nVới Những đòn tâm lý trong thuyết phục, bạn sẽ có lời giải đáp cho tất cả những câu hỏi ấy. Trong Những đòn tâm lý trong thuyết phục, nhà tâm lý học nổi tiếng Robert B. Cialdini tiết lộ 6 yếu tố gây ảnh hưởng đầy uy lực: cam kết và nhất quán, khan hiếm, đáp trả, bằng chứng xã hội, uy quyền và thiện cảm. Mỗi loại lại bị chi phối bởi một nguyên tắc tâm lý cơ bản điều khiển hành vi con người và nhờ đó mà tạo nên sức mạnh cho mỗi thủ thuật. Đặc biệt khi được kết hợp với nhau, chúng sẽ tạo ra ảnh hưởng vô cùng lớn.', 33, 5, 7, '256'),
(19, '19', '5 QUY LUẬT CỦA VÀNG của Người giàu nhất thành Babylon:\n\n1. Vàng sẽ đến ngày một nhiều với bất kì ai dành ra không ít hơn 1/10 thu nhập để tạo dựng gia sản cho tương lai của chính mình và gia đình.\n\n2. Vàng sẽ làm việc hăng say và hết lòng phục vụ cho người chủ khôn ngoan—người tìm được cho nó những khoản đầu tư sinh lợi; và sẽ sinh sôi nhanh như bầy gia súc ngoài đồng.\n\n3. Vàng sẽ tìm sự bảo trợ của người chủ cẩn trọng, biết đầu tư nó theo lời khuyên của những người giỏi quản lí tiền vàng.\n\n4. Vàng tránh xa những người thích đầu tư tiền vốn vào những dự án kinh doanh mà họ không nắm vững hoặc không có chuyên môn.\n\n5. Vàng tránh xa những người cố ép nó sinh lợi ở mức bất khả thi, hay những người mù quáng đi theo lời dụ dỗ ngon ngọt của bọn lừa đảo, hay phó thác vốn liếng cho những người đầu tư thiếu kinh nghiệm và mơ mộng hão.', 8, 12, 21, '168'),
(20, '20', 'Đạo đức kinh là một trong những tác phẩm cổ điển quan trọng nhất trong lịch sử văn hóa nhân loại. Đạo đức kinh tương truyền do Lão Tử biên soạn dưới thời Xuân thu - Chiến quốc.\r\n\r\nTừ lâu, tác phẩm đã không còn là một tác phẩm xa lạ với độc giả thế giới. Trong hàng ngàn năm qua, đã có rất nhiều học giả nghiên cứu, viết sách bình luận về quyển sách nhỏ này. Hiện nay đã có hơn 60 bản dịch Anh ngữ, hơn 50 bản dịch Pháp ngữ và nhiều bản dịch ra các ngôn ngữ khác.\r\n\r\nỞ Việt Nam hiện nay cũng có đến 4, 5 bản dịch Việt ngữ. Tuy nhiên, phần lớn độc giả không đọc thẳng vào văn bản mà chỉ đọc lời bàn của các dịch giả. Có lẽ vì thế nên nhiều người hiểu sai về Đạo đức kinh.\r\n\r\nĐạo đức kinh là một thi phẩm với các câu thơ ngắn gọn, thường có vần và nhịp điệu để tạo hứng thú cho người đọc. Quyển sách bao gồm 81 chương được chia thành hai phần chính là: Đạo kinh và Đức kinh. Nội dung cuốn sách xoay quanh cách vấn đề triết học phương Đông như \"Đạo\", \"Đức\", \"Vô vi\" và \"Phản phục\".', 16, 22, 98, '212'),
(21, '21', '“Hoa trôi trên sóng nước” là một câu chuyện đặc biệt. Đó là câu chuyện đi tìm “kiến tánh”, đạt được giác ngộ của ni sư Satomi Myodo – một trong những ni sư lỗi lạc nhất của Thiền tông Nhật Bản.\r\n\r\nCâu chuyện của ni sư Satomi Myodo đặc biệt ở chỗ, trước khi tu tập theo triết lý Phật Giáo, Satomi Myodo đã là vị thầy của Thần Đạo (một tôn giáo phổ biến ở Nhật Bản), được nhiều người kính nể. Hơn 40 tuổi, dù đã tu tập được nhiều công phu như nhìn được quá khứ vị lai và nhiều công phu khác, nhưng từ sâu trong thâm tâm Satomi Myodo vẫn phải chịu những nổi khổ đau dằn vặt của bản ngã, thứ mà bà “nghĩ rằng mình đã diệt được nó nhưng thực ra nó vẫn tiềm ẩn dưới một hình thức tinh tế không ngờ”.', 55, 12, 5, '220'),
(22, '22', 'Bạn đã bao giờ trở về nhà sau một ngày làm việc dài, mệt mỏi, áp lực, nằm dài trên ghế với bộ đồ công sở, bật thật lớn một bản nhạc deep house, át hết tất cả những âm thanh xung quanh và tự huyễn hoặc với chính mình rằng “Mình sẽ ổn thôi”?\r\nBạn đã có một ngày như thế chưa?\r\nKhi còn bé, chúng ta mong đến ngày làm người lớn, để rồi những ngày đã khôn lớn, chúng ta lại ước ao có một giây phút được trở về như những ngày thơ bé. Chính những người trẻ như chúng ta lại cứ ao ước, khát khao được tự do trong những tháng ngày tuổi trẻ của mình. Chúng ta cứ bắt bản thân sống o ép, phải xoay theo quy luật của xã hội, phải chiều theo miệng người đời.', 8, 1, 17, '216'),
(23, '23', 'Ai ở trên đời này mà không từng bị oan ức? Nhưng bị oan ức mà cứ để hận thù chế ngự thì nỗi đau biết đến ngày nào vơi? Bị oan ức nhưng làm thế nào để cởi mở, làm thế nào để giải oan? Ở đời, vì khổ đau người ta chỉ muốn nuôi ý hận thù, muốn trừng phạt kẻ kia bằng những biện pháp bạo động. Nhưng Bụt đã dạy: \"Hận thù không thể giải tỏa được bằng hận thù\". Suối giải oan là suối của từ và của bi. Từ bi là tâm vô lượng, tâm không biên giới, tâm không ngằn mé, có khả năng ôm lấy và dung chứa được mọi loài. Nếu không có chất liệu từ bi thì hận thù sẽ chồng chất từ kiếp này sang kiếp khác.\r\n\r\n\"Mẹ - Biểu Hiện Của Tình Thương\" giúp ta nuôi lớn tình thương, nuôi lớn tâm từ bi và giải tỏa được hận thù trong ta.', 22, 66, 87, '168'),
(24, '24', 'Bằng kinh nghiệm lâu năm làm trong ngành quảng cáo, Nobuyuki Takahashi sẽ chỉ ra cho chúng ta các quy tắc cụ thể để diễn giải các ý tưởng thành các thông điệp cốt lõi, nêu bật lên được sứ mệnh, tầm nhìn cũng như những giá trị căn bản của doanh nghiệp. Cùng với những gợi ý thực tế bao gồm khoảng 150 thông điệp, slogan, phương châm từ các doanh nghiệp thành công tại Nhật Bản và trên thế giới, chúng ta sẽ thấy được quan điểm, cách nhìn và quá trình diễn giải những ý tưởng lớn thành ngôn từ cụ thể.\r\n\r\nQua cuốn sách, chúng ta sẽ tự rút ra được cho mình phương pháp nhìn nhận vấn đề cũng như cách tiếp cận từng đối tượng khách hàng, từ đó nâng cao kỹ năng sử dụng ngôn từ như một chìa khóa quyền năng và đầy sáng tạo để mở ra cánh cửa kết nối đến người tiêu dùng.', 33, 5, 3, '172'),
(25, '25', '“Kỹ năng viết báo cáo hiệu quả” là một tác phẩm không thể thiếu đối với những nhân viên chuyên nghiệp. Sử dụng số liệu là công cụ hữu hiệu nhất để một người hình thành tư duy logic, phát triển kỹ năng tổng hợp, phân tích vấn đề để cuối cùng, tìm ra giải pháp hành động. Cuốn sách của Kashiwagi Yoshiki sẽ hướng dẫn bạn từng bước một để nhuần nhuyễn kỹ năng này. Các con số sẽ mở đường để bạn thấu suốt sâu sắc mọi hiện trạng, và cũng chính chúng sẽ gợi ý cho bạn những cách thức giải quyết vấn đề thông minh nhất. Đây là tác phẩm hướng đến mọi cá nhân muốn trở nên chuyên nghiệp hơn trong hành trình phát triển sự nghiệp, từ những doanh nhân, quản lý, người mong muốn start-up đến các nhân viên marketing, người phụ tráchnhân sự, tư vấn viên…', 4, 12, 17, '308'),
(26, '26', 'Thuật Đọc Nguội Làm thế nào để có thể áp dụng hiệu quả tâm lý học vào quan hệ giao tiếp? Nhà giáo Hiroyuki Ishii (Nhật Bản) đã phát triển một kỹ năng giao tiếp mang tính thực tế cao – thuật đọc nguội. Trong tình huống không có sự chuẩn bị trước, kỹ năng này dùng để nắm bắt tâm lý của đối phương và dự báo sự việc sẽ diễn ra trong tương lai, nhờ đó có thể nhanh chóng được đối phương tin tưởng. Trên các trang mạng và diễn đạt, người ta thảo luận sôi nổi về kỹ năng này. Kết quả thử nghiệm của một nhóm nghiên cứu phát triển kỹ năng thuật đọc nguội đã khiến nhiều người cảm thấy rất thú vị và hào hứng. Mặc dù vậy, mức độ phổ cập và phạm vi ứng dụng kỹ năng này trong xã hội còn rất hạn hẹp và khá xa lạ với số đông những người yêu thích tâm lý học, những người gặp khó khăn về giao tiếp xã hội, chưa nói đến chuyện ứng dụng thành thục. Trong các kỹ năng giao tiếp của con người, thuật đọc nguội chỉ là một cách gọi, còn bản chất của nó vẫn là ứng dụng những kiến thức tâm lý học như: đọc hiểu nội tâ', 33, 22, 3, '168'),
(27, '27', 'Theo các truyền thuyết của Tây Tạng, vào thuở xa xưa, đàn ông và đàn bà đều có thể sử dụng huệ nhãn. Sách Huệ nhãn của Lạc ma Đó là thời kỳ mà các vị thần xuống trần gian và sống lẫn giữa con người. Con người, do nghĩ rằng mình là những kẻ có thể kế vị thần linh nên tìm cách giết hại các thần, mà không nghĩ rằng điều mà con người có thể nhìn thấy, thì các thần còn có thể thấy rõ, tường tận hơn. Cho nên hình phạt dành cho con người là huệ nhãn của nó bị khép lại. Từ đó, theo dòng thời gian, chỉ có một số hiếm hoi người bẩm sinh được ban cho cái nhìn sáng suốt từ huệ nhãn (hay con mắt thứ ba). Đặc biệt, T. Lobsang Rampa – tác giả cuốn sách Huệ nhãn của Lạt ma này đã được thầy Linh hướng của mình khai mở huệ nhãn khi đang là tu sĩ tại một tu viện Lạt ma Tây Tạng.', 8, 12, 4, '336'),
(28, '28', 'Cuộc sống trôi qua thật quá nhanh. Và không có gì có làm trái tim bạn đau hơn là khi đã đi đến cuối cuộc đời và nhận ra bạn đã quên mất điều gì là quan trọng nhất - bởi bản thân bạn luôn quá bận rộn.\r\n\r\nAi sẽ khóc khi bạn lìa xa đã giúp hàng triệu người trên toàn cầu học lại cách tập trung vào những điều đáng giá và sống một cuộc sống giản đơn hơn với niềm vui, đam mê và mục đích. Cùng chứa đầy những cảm hứng và triết lý đã làm nên thành công trước đó của quyển The monk Who sold his Ferrari, cuốn cẩm nang này chia sẻ 101 ý tưởng mạnh mẽ để giúp bạn tạo nên thành công đích thực và ý nghĩa cuộc sống.', 33, 56, 14, '248'),
(29, '29', 'Nếu bạn vẫn chưa sử dụng được sức mạnh của tư duy hình ảnh thì tại sao không thử đọc sách này?\r\n Tư duy hình ảnh và vẽ sơ đồ đang ngày càng trở nên quan trọng trong môi trường làm việc ngày nay. “Một bức tranh đáng giá hơn ngàn lời nói” . Đó là công cụ không thể thiếu trong việc thúc đẩy sự phát triển của doanh nghiệp, tăng cường sự kết nối giữa nhân viên công ty và khách hàng.\r\nQuá trình tư duy hình ảnh có thể giúp giải quyết các vấn đề phức tạp, phát triển khả năng của các nhóm để cùng nhau xây dựng ý tưởng, thúc đẩy hợp tác, đồng sáng tạo và tạo ra sự đổi mới.\r\nTƯ DUY HÌNH ẢNH sẽ giúp bạn loại bỏ những quan niệm sai lầm vốn đã ngăn bạn sử dụng các phương pháp tư duy bằng hình ảnh tại nơi làm việc. Bạn không cần đến tài năng hội họa thiên bẩm của Van Gogh hay trí thông minh siêu việt của Einstein mà vẫn có thể giúp công ty ngày một đi lên. Đó chính là sức mạnh của tư duy hình ảnh.', 12, 26, 94, '256'),
(30, '30', 'Hoàng tử bé được viết ở New York trong những ngày tác giả sống lưu vong và được xuất bản lần đầu tiên tại New York vào năm 1943, rồi đến năm 1946 mới được xuất bản tại Pháp. Không nghi ngờ gì, đây là tác phẩm nổi tiếng nhất, được đọc nhiều nhất và cũng được yêu mến nhất của Saint-Exupéry. Cuốn sách được bình chọn là tác phẩm hay nhất thế kỉ 20 ở Pháp, đồng thời cũng là cuốn sách Pháp được dịch và được đọc nhiều nhất trên thế giới. Với 250 ngôn ngữ dịch khác nhau kể cả phương ngữ cùng hơn 200 triệu bản in trên toàn thế giới, Hoàng tử bé được coi là một trong những tác phẩm bán chạy nhất của nhân loại.', 65, 56, 32, '102'),
(31, '31', 'Cô hải âu Kengah bị nhấn chìm trong váng dầu – thứ chất thải nguy hiểm mà những con người xấu xa bí mật đổ ra đại dương. Với nỗ lực đầy tuyệt vọng, cô bay vào bến cảng Hamburg và rơi xuống ban công của con mèo mun, to đùng, mập ú Zorba. Trong phút cuối cuộc đời, cô sinh ra một quả trứng và con mèo mun hứa với cô sẽ thực hiện ba lời hứa chừng như không tưởng với loài mèo:\r\nKhông ăn quả trứng.\r\nChăm sóc cho tới khi nó nở.\r\nDạy cho con hải âu bay.\r\nLời hứa của một con mèo cũng là trách nhiệm của toàn bộ mèo trên bến cảng, bởi vậy bè bạn của Zorba bao gồm ngài mèo Đại Tá đầy uy tín, mèo Secretario nhanh nhảu, mèo Einstein uyên bác, mèo Bốn Biển đầy kinh nghiệm đã chung sức giúp nó hoàn thành trách nhiệm. Tuy nhiên, việc chăm sóc, dạy dỗ một con hải âu đâu phải chuyện đùa, sẽ có hàng trăm rắc rối nảy sinh và cần có những kế hoạch đầy linh hoạt được bàn bạc kỹ càng…', 65, 11, 4, '144');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblaccount`
--

CREATE TABLE `tblaccount` (
  `idMember` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IMG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-1.png',
  `Gioitinh` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tblaccount`
--

INSERT INTO `tblaccount` (`idMember`, `username`, `password`, `email`, `IMG`, `Gioitinh`, `Ngaysinh`) VALUES
(1, 'kiemluc', '161101', 'kiemluc@gmail.com', 'https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-6/247224275_951065242150688_4911589926309599867_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=VwyH_CrfnsgAX_3fbXz&_nc_ht=scontent.fdad3-5.fna&oh=e43e86dd41b64baed66542a785f9cde5&oe=61922516', NULL, NULL),
(2, 'hailong', '041112', 'hailong@gmail.com', 'https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-1.png', NULL, NULL),
(3, 'thanhhoa', '181101', 'ThanhHoa@gmail.com', 'https://scontent.fdad3-3.fna.fbcdn.net/v/t1.6435-9/242092272_3035470070107015_3856801447139456145_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=E0WuszrbwWAAX-vqX9T&_nc_ht=scontent.fdad3-3.fna&oh=8be05224f4acfdf9252b0d1ec9cb41c7&oe=61B07706', NULL, NULL),
(4, 'anhtan', '291100', 'tannguyen@gmail.com', 'https://scontent.fdad3-5.fna.fbcdn.net/v/t1.6435-9/86776606_2250126728615141_3293442173101408256_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=oNBO2r0N_a8AX_2JdrK&_nc_ht=scontent.fdad3-5.fna&oh=56fa9303a7ad0bdc8cf4863d38100653&oe=61B108C7', NULL, NULL),
(5, 'ahihi', 'abc123', 'chontennguoidungcuaban166@gmail.com', 'https://dvdn247.net/wp-content/uploads/2020/07/avatar-mac-dinh-1.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchitietchuong`
--

CREATE TABLE `tblchitietchuong` (
  `idChitietchuong` int(11) NOT NULL,
  `idChuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Noidung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblchuong`
--

CREATE TABLE `tblchuong` (
  `idChuong` int(11) NOT NULL,
  `idSach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenChuong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sotrang` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldanhgia`
--

CREATE TABLE `tbldanhgia` (
  `idMember` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDanhgia` int(11) NOT NULL,
  `Noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thoigian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbldanhgia`
--

INSERT INTO `tbldanhgia` (`idMember`, `idSach`, `idDanhgia`, `Noidung`, `Thoigian`) VALUES
('1', '1', 1, 'Toẹt vời ông mặt trời', '2021-11-10'),
('1', '2', 2, 'Giỏi lắm, đúng là con trai của ta', '2021-11-10'),
('1', '6', 3, 'Ở cái XH này, có làm thì mới có ăn, không làm mà đòi có ăn thì đọc ngay nghĩ giàu làm giàu', '2021-11-10'),
('2', '1', 4, 'tuỵt zời lắm', '2021-11-10'),
('3', '1', 5, 'hay hay hay', '2021-11-10'),
('2', '2', 6, 'đang đọc nữa chừng, tắt đi tém rửa cơm nác đã', '2021-11-10'),
('3', '4', 7, 'ulatr!!! sao hay thế này', '2021-11-10'),
('4', '6', 8, 'OMG lun á', '2021-11-10'),
('4', '5', 9, 'Quá được còn gì nữa', '2021-11-10'),
('4', '7', 10, '3 từ thôi, xuất sắc lắm', '2021-11-10'),
('4', '3', 11, 'Quá hayy!!!', '2021-11-10'),
('4', '8', 12, 'Quá hayy!!!', '2021-11-10');

--
-- Bẫy `tbldanhgia`
--
DELIMITER $$
CREATE TRIGGER `add_luotcmt` AFTER INSERT ON `tbldanhgia` FOR EACH ROW update chitietsach set Feedback = Feedback +1 where idSach = NEW.idSach
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_luotcmt` AFTER DELETE ON `tbldanhgia` FOR EACH ROW update chitietsach set Feedback = Feedback -1 where idSach = OLD.idSach
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbldanhmuc`
--

CREATE TABLE `tbldanhmuc` (
  `idDanhmuc` int(11) NOT NULL,
  `Tendanhmuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbldanhmuc`
--

INSERT INTO `tbldanhmuc` (`idDanhmuc`, `Tendanhmuc`) VALUES
(1, 'Sách Kinh Doanh'),
(2, 'Đời Sống - Xã Hội'),
(3, 'Thiếu Nhi'),
(4, 'Tác Phẩm Văn Học'),
(5, 'Khoa Học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblfavorite`
--

CREATE TABLE `tblfavorite` (
  `idSach` int(11) NOT NULL,
  `idMember` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblfavorite`
--

INSERT INTO `tblfavorite` (`idSach`, `idMember`) VALUES
(1, '3'),
(1, '4'),
(2, '1'),
(2, '2'),
(2, '3'),
(2, '4'),
(3, '1'),
(3, '2'),
(3, '3'),
(3, '4'),
(4, '1'),
(4, '2'),
(4, '3'),
(4, '4'),
(5, '1'),
(5, '2'),
(5, '3'),
(5, '4'),
(6, '1'),
(6, '2'),
(6, '3'),
(6, '4'),
(7, '1'),
(7, '2'),
(7, '3'),
(7, '4'),
(8, '1'),
(8, '2'),
(8, '3'),
(8, '4');

--
-- Bẫy `tblfavorite`
--
DELIMITER $$
CREATE TRIGGER `add_Favorite` AFTER INSERT ON `tblfavorite` FOR EACH ROW update chitietsach set Favorite = Favorite +1 where idSach = NEW.idSach
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_Favorite` AFTER DELETE ON `tblfavorite` FOR EACH ROW update chitietsach set Favorite = Favorite -1 where idSach = OLD.idSach
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblsach`
--

CREATE TABLE `tblsach` (
  `idSach` int(11) NOT NULL,
  `imgSach` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tensach` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tacgia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NXB` int(11) NOT NULL,
  `idDanhmuc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayDang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblsach`
--

INSERT INTO `tblsach` (`idSach`, `imgSach`, `Tensach`, `Tacgia`, `NXB`, `idDanhmuc`, `NgayDang`) VALUES
(1, 'Public\\images\\bookcover\\truyen-kieu.jpg', 'Truyện Kiều', 'Nguyễn Du', 2012, '4', '2021-11-03'),
(2, 'Public\\images\\bookcover\\de-men-phieu-luu-ky.jpg', 'Dế Mèn Phiêu Lưu Kí', 'Tô Hoài', 2016, '3', '2021-11-03'),
(3, 'Public\\images\\bookcover\\tat-den.jpg', 'Tắt Đèn', 'Ngô Tất Tố', 2010, '4', '2021-11-08'),
(4, 'Public\\images\\bookcover\\cac-the-gioi-song-song.jpg', 'Các Thế Giới Song Song', 'Michio Kaku', 2019, '5', '2021-11-07'),
(5, 'Public\\images\\bookcover\\nghe-thuat-xu-an-nam.jpg', 'Nghệ Thuật Xứ An Nam', 'Henri Gourdon', 2019, '2', '2021-11-07'),
(6, 'Public\\images\\bookcover\\nghi-giau-lam-giau.jpg', 'Nghĩ Giàu Làm Giàu', 'Napoleon Hill', 2019, '1', '2021-11-07'),
(7, 'Public\\images\\bookcover\\cha-giau-cha-ngheo.jpg', 'Cha Giàu Cha Nghèo', 'Robert Kiyosaki', 2019, '1', '2021-11-07'),
(8, 'Public\\images\\bookcover\\kinh-doanh-online.jpg', 'Kinh Doanh Online', 'Johnathan P. Allen', 2019, '1', '2021-11-09'),
(9, 'Public\\images\\bookcover\\thoi-ky-hau-corona-luon-co-co-hoi-trong-khung-hoang.png', 'Thời Kỳ Hậu Corona: Luôn Có Cơ Hội Trong Khủng Hoảng', 'Scott Galloway', 2021, '2', '2021-12-07'),
(10, 'Public\\images\\bookcover\\lao-tu-tinh-hoa.png', 'Lão Tử Tinh Hoa', 'Thu Giang, Nguyễn Duy Cần', 2020, '4', '2021-12-07'),
(11, 'Public\\images\\bookcover\\trang-tu-nam-hoa-kinh.jpg', 'Trang Tử Nam Hoa Kinh Tập 2', 'Thu Giang, Nguyễn Duy Cần', 2021, '4', '2021-12-07'),
(12, 'Public\\images\\bookcover\\trang-tu-tinh-hoa.jpg', 'Trang Tử Tinh Hoa', 'Thu Giang, Nguyễn Duy Cần', 2021, '4', '2021-12-07'),
(13, 'Public\\images\\bookcover\\tinh-hoa-dao-hoc-dong-phuong.jpg', 'Tinh Hoa Đạo Học Đông Phương', 'Thu Giang, Nguyễn Duy Cần', 2021, '5', '2021-12-07'),
(14, 'Public\\images\\bookcover\\dung-lam-viec-cham-chi-hay-lam-viec-thong-minh.jpg', 'Đừng Làm Việc Chăm Chỉ Hãy Làm Việc Thông Minh', 'Tony Schwartz, Jean Gomes, Catherine MC Carthy', 2020, '2', '2021-12-07'),
(15, 'Public\\images\\bookcover\\ghi-chep-ve-mot-hanh-tinh-au-lo.jpg', 'Ghi Chép Về Một Hành Tinh Âu Lo', 'Matt Haig', 2020, '4', '2021-12-07'),
(16, 'Public\\images\\bookcover\\giai-quyet-van-de-bang-tu-duy-thiet-ke.jpg', 'Giải Quyết Vấn Đề Bằng Tư Duy Thiết Kế', 'Nhiều Tác Giả', 2019, '1', '2021-12-07'),
(17, 'Public\\images\\bookcover\\hai-van-dam-duoi-bien.jpg', 'Hai Vạn Dặm Dưới Đáy Biển', 'Jules Verne', 2019, '3', '2021-12-07'),
(18, 'Public\\images\\bookcover\\nhung-don-tam-ly-trong-thuyet-phuc.jpg', 'Những Đòn Tâm Lý Trong Thuyết Phục', 'Robert B. Cialdini', 2021, '5', '2021-12-07'),
(19, 'Public\\images\\bookcover\\nguoi-giau-nhat-thanh-babilon.png', 'Người giàu nhất thành Babylon', 'George S. Clason', 2019, '1', '2021-12-07'),
(20, 'Public\\images\\bookcover\\dao-duc-kinh.jpg', 'Đạo Đức Kinh', 'Lão Tử', 2019, '4', '2021-12-07'),
(21, 'Public\\images\\bookcover\\hoa-troi-tren-song-nuoc.jpg', 'Hoa Trôi Trên Sóng Nước', 'Satomi Myodo', 2019, '5', '2021-12-07'),
(22, 'Public\\images\\bookcover\\chung-ta-la-nhung-dua-tre-co-don.jpg', 'Chúng Ta Là Những Đứa Trẻ Cô Đơn', 'Dưa Hấu Hạt Tím', 2019, '4', '2021-12-07'),
(23, 'Public\\images\\bookcover\\me-bieu-hien-cua-tinh-thuong.jpg', 'Mẹ - Biểu Hiện Của Tình Thương', 'Thích Nhất Hạnh', 2019, '2', '2021-12-07'),
(24, 'Public\\images\\bookcover\\de-ngon-tu-tro-thanh-suc-manh.jpg', 'Để Ngôn Từ Trở Thành Sức Mạnh', 'Takahashi Nobuyuki', 2019, '2', '2021-12-07'),
(25, 'Public\\images\\bookcover\\ky-nang-viet-bao-cao-hieu-qua.jpg', 'Kỹ Năng Viết Báo Cáo Hiệu Quả', 'Kashiwagi Yoshiki', 2010, '1', '2021-12-05'),
(26, 'Public\\images\\bookcover\\thuat-doc-nguoi.jpg', 'Thuật Đọc Nguội', 'Thạch Chân Ngữ', 2021, '2', '2021-12-01'),
(27, 'Public\\images\\bookcover\\hue-nhan-cua-dat-lai-dat-ma.jpg', 'Huệ Nhãn Của Đạt Lạt Ma', 'Tuesday Lobsang Rampa', 2021, '5', '2021-12-03'),
(28, 'Public\\images\\bookcover\\ai-se-khoc-khi-ban-lia-xa.jpg', 'Ai Sẽ Khóc Khi Bạn Lìa Xa', 'Robin Sharma', 2018, '2', '2021-12-04'),
(29, 'Public\\images\\bookcover\\tu-duy-hinh-anh.jpg', 'Tư Duy Hình Ảnh', 'Willemien Brend', 2010, '2', '2021-12-06'),
(30, 'Public\\images\\bookcover\\hoang-tu-be.jpg', 'Hoàng Tử Bé', 'Antoine De Saint-Exupéry', 2019, '3', '2021-12-05'),
(31, 'Public\\images\\bookcover\\chuyen-con-meo-day-hau-au-bay.jpg', 'Chuyện Con Mèo Dạy Hải Âu Bay', 'Luis Sepulveda', 2019, '3', '2021-12-07');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietsach`
--
ALTER TABLE `chitietsach`
  ADD PRIMARY KEY (`IdChitietsach`);

--
-- Chỉ mục cho bảng `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`idMember`);

--
-- Chỉ mục cho bảng `tblchitietchuong`
--
ALTER TABLE `tblchitietchuong`
  ADD PRIMARY KEY (`idChitietchuong`);

--
-- Chỉ mục cho bảng `tblchuong`
--
ALTER TABLE `tblchuong`
  ADD PRIMARY KEY (`idChuong`);

--
-- Chỉ mục cho bảng `tbldanhgia`
--
ALTER TABLE `tbldanhgia`
  ADD PRIMARY KEY (`idDanhgia`);

--
-- Chỉ mục cho bảng `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  ADD PRIMARY KEY (`idDanhmuc`);

--
-- Chỉ mục cho bảng `tblsach`
--
ALTER TABLE `tblsach`
  ADD PRIMARY KEY (`idSach`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietsach`
--
ALTER TABLE `chitietsach`
  MODIFY `IdChitietsach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `idMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tblchitietchuong`
--
ALTER TABLE `tblchitietchuong`
  MODIFY `idChitietchuong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tblchuong`
--
ALTER TABLE `tblchuong`
  MODIFY `idChuong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbldanhgia`
--
ALTER TABLE `tbldanhgia`
  MODIFY `idDanhgia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  MODIFY `idDanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tblsach`
--
ALTER TABLE `tblsach`
  MODIFY `idSach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
