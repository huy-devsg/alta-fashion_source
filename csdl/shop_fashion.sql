-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 14, 2023 lúc 04:42 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_fashion`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id` int(11) NOT NULL,
  `tieu_de` longtext COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tac_gia` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id`, `tieu_de`, `anh`, `noi_dung`, `tac_gia`, `lien_ket`, `time`) VALUES
(1, 'Top áo thun Local Brand giá rẻ nổi tiếng tại Việt Nam', 'bai1.jpg', '<p>Mùa hè là sự lên ngôi của những chiếc áo phông đầy phong cách – item đặc trưng của Local Brand. Mỗi Local Brand thường sẽ có những nét cá tính đặc trưng riêng của thương hiệu và đó cũng là “điểm ghi nhớ” với người tiêu dùng, đặc biệt là giới trẻ. Ngoài ra, chính sự sáng tạo và phá cách không ngừng trong các thiết kế cũng góp phần tạo nên làn sóng mới, thay đổi hoàn toàn “cảm quan” về thời trang giới trẻ. Trong bài viết này, cùng tìm hiểu một số <a href=\"https://davies.vn/\">áo thun Local Brand giá rẻ</a> tại Việt Nam nhé. </p>\r\n\r\n\r\n\r\n<h2>Áo thun Local Brand DAVIES</h2>\r\n\r\n\r\n\r\n<p>Được biết đến như một<strong> Local Brand</strong> có chỗ đứng vững chắc tại Đà Nẵng, <a href=\"https://davies.vn/\"><strong>DAVIES</strong> </a>tạo ra một năng lượng mới dựa vào triết lý “ Unique- that we want you to be”. Chính vì thế mà brand đã sớm định hình phải đi đầu trong xu hướng giúp khách hàng làm chủ trong mọi cuộc chơi đồng thời mang đến những siêu phẩm bắt nguồn từ sự đột phá trong tư duy mới, áp dụng công nghệ sản xuất tiên tiến với chất liệu nguyên bản trong mỗi items. DAVIES luôn theo đuổi sự độc đáo qua các thiết kế Arkwork logo D ấn tượng. </p>\r\n<div style=\"text-align: center;\">\r\n<img  src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-thun-local-brand-gia-re-2.jpg\" >\r\n\r\n<img src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-thun-local-brand-gia-re-3.jpg\" alt=\"\">\r\n</div>\r\n\r\n<h2>Áo thun Local Brand giá rẻ CLICK CLUB</h2>\r\n\r\n\r\n\r\n<p>Xuất hiện vào năm 2018, Click Club ngay từ khi bắt đầu hướng sự phát triển theo phong cách thời trang Hàn Quốc. Vì vậy, những sản phẩm ở đây trông rất trẻ trung, dễ thương và phù hợp với cặp đôi. Những thiết kế đa dạng màu sắc, kể cả những màu khó mặc nhất cũng được Click Club “phù phép” trở thành item chất lượng. Có thể nói Click là nơi đáng để bạn tin tưởng mua áo thun Local Brand giá rẻ.</p>\r\n\r\n<div style=\"text-align: center;\">\r\n<img loading=\"lazy\" width=\"360\" height=\"436\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-thun-local-brand-gia-re-4.jpg\" alt=\"\" class=\"wp-image-25541\">\r\n</div>\r\n\r\n\r\n\r\n<h2>Áo thun Local Brand SWE</h2>\r\n\r\n\r\n\r\n<p>Sẽ là thiếu sót khi không kể đến SWE, được thành lập vào năm 2016 bởi 3 bạn trẻ tài năng với sứ mệnh mang phong cách đường phố đến gần hơn với cuộc sống. SWE luôn nằm trong top áo thun Local Brand giá rẻ được yêu thích nhất ở Việt Nam, luôn cố gắng từng ngày để thể hiện mình.</p>\r\n<div style=\"text-align: center;\">\r\n<img style=\"text-align:center\" loading=\"lazy\" src=\"https://localbrand.vn/shop/wp-content/uploads/2021/08/Asset-4.png\" width=\"728\" height=\"90\" alt=\"banner\">\r\n</div>\r\n<p>Các mẫu áo thun Local Brand SWE đặc biệt đầu tư vào các chi tiết nhỏ trên áo, các sticker, họa tiết trên áo đều đa dạng từ hình dáng cho đến màu sắc. Nhờ đó, những mẫu áo thun Local Brand SWE giúp người mặc giản dị nhưng không đơn điệu, vẫn giữ được những chất riêng của bản thân mà không đi quá ranh giới của sự lố lăng.</p>\r\n\r\n\r\n\r\n<p>Các mẫu áo ở đây đều có chất vải mềm mịn, độ dày vừa phải nhưng vẫn đủ thông thoáng, giúp người mặc năng động và thoải mái hơn. </p>\r\n<div style=\"text-align: center;\">\r\n\r\n<img style=\"text-align:center\"loading=\"lazy\" width=\"481\" height=\"640\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-thun-local-brand-gia-re-8.jpg\" alt=\"\" class=\"wp-image-25543\">\r\n\r\n<img style=\"text-align:center\" loading=\"lazy\" width=\"488\" height=\"488\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-thun-local-brand-gia-re-1.jpg\" alt=\"\" class=\"wp-image-25544\">\r\n</div>\r\n<h2>Áo thun Local Brand giá rẻ ONTOP</h2>\r\n\r\n\r\n\r\n<p>Giới thời trang đường phố “chao đảo” với các tên ONTOP. Với biểu tượng cảm hứng từ chìa khóa bất tử Ankh, ONTOP nhấn mạnh sự trường tồn trong phong cách. Bằng các phương pháp khác nhau, ONTOP đã tiếp cận với người dùng và lắng nghe trải nghiệm của họ để hoàn thiện hơn nữa. Với những chiếc áo thun Local Brand giá rẻ nhưng chất lượng mang lại vượt mong đợi của nhà Ontop</p>\r\n<div style=\"text-align: center;\">\r\n\r\n<img style=\"text-align:center\" loading=\"lazy\" width=\"600\" height=\"600\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-thun-local-brand-gia-re-6.jpg\" alt=\"\" class=\"wp-image-25545\" srcset=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-thun-local-brand-gia-re-6.jpg 600w, https://localbrand.vn/wp-content/uploads/2023/02/ao-thun-local-brand-gia-re-6-500x500.jpg 500w\" sizes=\"(max-width: 600px) 100vw, 600px\">\r\n</div>\r\n<p>Hi vọng với những chia sẻ giúp bạn có thêm một item áo thun Local Brand giá rẻ trong tủ đồ nhé. </p>', 'admin', '', 1634134851),
(4, 'Top Áo Polo Local Brand được giới trẻ ưa chuộng nhất', 'bai2.jpeg', '<p>Áo polo trở thành một món đồ thời trang được nhiều bạn trẻ yêu thích, là nét mang biểu tượng riêng của thời trang hiện đại. Sau đây là top những thương hiệu có các thiết kế <a href=\"https://ontop.com.vn/\">áo polo local brand</a> đang được giới trẻ ưa chuộng nhất.</p>\r\n\r\n\r\n\r\n<h2><span class=\"penci-toc-section\" id=\"penci-ONTOP\">ONTOP </span></h2>\r\n\r\n\r\n\r\n<p>Với định hướng phong cách Streetwear, thương hiệu ONTOP sẽ luôn mang đến cho bạn những chiếc áo polo local brand unisex, với form dáng basic và cả thiết kế họa tiết graphic sáng tạo, trẻ trung.</p>\r\n\r\n\r\n\r\n<p>Áo polo local brand ONTOP có 6 màu được phối rất tinh tế và đẹp mắt. Đây là những gam rất dễ mặc không quá kén da và rất dễ phối đồ sẽ là một items không thể thiếu trong tủ đồ của bạn. Cổ áo không chỉ được phối màu ấn tượng khác với thân áo thì cổ áo còn thiết kế theo hình chữ V kèm 2 nút giúp bạn dễ diều chỉnh sao cho thoải mái nhất.</p>\r\n\r\n\r\n\r\n<div class=\"wp-container-1 is-content-justification-center is-nowrap wp-block-group\">\r\n<figure class=\"wp-block-image size-full\"><img loading=\"lazy\" width=\"360\" height=\"449\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-polo-local-brand-1.jpg\" alt=\"\" class=\"wp-image-25625\"><figcaption>ao polo local brand</figcaption></figure>\r\n\r\n\r\n\r\n<figure class=\"wp-block-image size-full\"><img loading=\"lazy\" width=\"360\" height=\"360\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-polo-local-brand-8-1.jpg\" alt=\"\" class=\"wp-image-25634\"><figcaption>ao polo local brand</figcaption></figure>\r\n</div>\r\n\r\n\r\n\r\n<p>Chất vải cá sấu được làm từ cotton với đặc tính ưu việt là khả năng thấm hút tốt cho bạn tự tin khi tham gia chơi thể thao hay vận động ngoài trời.</p>\r\n\r\n\r\n\r\n\r\n<h2><span class=\"penci-toc-section\" id=\"penci-TEELAB\">TEELAB</span></h2>\r\n\r\n\r\n\r\n<p>Teelab đã trở thành một trong những cửa hàng thời trang được giới trẻ vô cùng yêu thích. Teelab mang phong cách trẻ trung, năng động, đồ unisex không chỉ cực chất mà còn phù hợp với số đông các bạn trẻ. Áo polo local brand Teelab có thiết kế đơn giản, dễ mặc và có mẫu mã đa dạng cho bạn thoái mái lựa chọn.</p>\r\n\r\n\r\n\r\n<div class=\"wp-container-2 wp-block-group\"><div class=\"wp-block-group__inner-container\"><div class=\"wp-block-image\">\r\n<figure class=\"aligncenter size-full\"><img loading=\"lazy\" width=\"512\" height=\"512\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-polo-local-brand-7-2.jpg\" alt=\"\" class=\"wp-image-25645\" srcset=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-polo-local-brand-7-2.jpg 512w, https://localbrand.vn/wp-content/uploads/2023/02/ao-polo-local-brand-7-2-500x500.jpg 500w\" sizes=\"(max-width: 512px) 100vw, 512px\"></figure></div></div></div>\r\n\r\n\r\n\r\n<h2><span class=\"penci-toc-section\" id=\"penci-OUTERITY\">OUTERITY</span></h2>\r\n\r\n\r\n\r\n<p>Phong cách của Outerity hướng tới là sự đơn giản nhưng cá tính. Những sản phẩm của Outerity ra mắt với thiết kế Logo không rườm rà, cầu kì với những nét vẽ tinh tế nhưng không kém phần nổi bật sản phẩm. Bên cạnh, các thiết kế của Outerity còn mang phong cách dễ thương và mới mẻ. </p>\r\n\r\n\r\n\r\n<p>Áo polo local brand Outerity  thiết kế kẻ sọc trắng chạy ngang mặt trước và sau áo đem đến một thiết kế mới lạ, cho bạn một items không thể thiếu trong tủ đồ được. Phần in chữ OUTERITY được cách điệu rất bắt mắt.</p>\r\n\r\n\r\n\r\n<div class=\"wp-container-3 is-content-justification-center is-nowrap wp-block-group\">\r\n<figure class=\"wp-block-image size-full is-resized\"><img loading=\"lazy\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-polo-local-brand-2-2.jpg\" alt=\"\" class=\"wp-image-25643\" width=\"350\" height=\"350\"><figcaption>ao polo local brand</figcaption></figure>\r\n\r\n\r\n\r\n<figure class=\"wp-block-image size-full is-resized\"><img loading=\"lazy\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-polo-local-brand-3-2.jpg\" alt=\"\" class=\"wp-image-25644\" width=\"350\" height=\"350\" srcset=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-polo-local-brand-3-2.jpg 512w, https://localbrand.vn/wp-content/uploads/2023/02/ao-polo-local-brand-3-2-500x500.jpg 500w\" sizes=\"(max-width: 350px) 100vw, 350px\"><figcaption>ao polo local brand</figcaption></figure>\r\n</div>\r\n\r\n\r\n\r\n<p>Hi vọng với những chia sẻ ở trên có thể giúp bạn có thêm một item mới là áo polo local brand trong tủ đồ của mình.</p>', 'admin', '', 1634134851),
(5, 'Top áo sơ mi Local Brand chất lượng', 'bai3.jpg', '<p><a href=\"https://ontop.com.vn/\"><strong>Áo sơ mi local brand</strong></a> ngày càng được nhiều tín đồ yêu thích thời trang ưa chuộng. Dù là brand áo sơ mi nam hay áo sơ mi nữ thì chúng đều mang những phong cách đặc trưng riêng của từng thương hiệu. Dưới đây là những thương hiệu có áo sơ mi Local Brand chất lượng.</p>\r\n\r\n\r\n\r\n<h2>REGODS</h2>\r\n\r\n\r\n\r\n<p>Regods nổi lên trong công động đồng Local Brand nhờ những mẫu thiết kế balo, túi mini đình đám. Chính vì thế, khi hãng cho ra mắt bộ sưu tập sơ mi Local Brand đã nhận được rất nhiều sự ủng hộ của các bạn trẻ Genz hiện nay.</p>\r\n\r\n\r\n\r\n<p>Áo được làm từ chất liệu kate chống nhăn co giãn với bề mặt vải mềm mại, thấm hút mồ hôi tốt tạo cảm giác thoải mái, thoáng mát cho người mặc. Bạn có thể phối áo sơ mi với quần short, với chân váy, yếm, blazer, quần legging hoặc phá cách hơn với phong cách giấu quần.</p>\r\n<div style=\"text-align:center\">\r\n<img loading=\"lazy\" width=\"360\" height=\"360\" data-id=\"25671\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-so-mi-local-brand-10.jpg\" alt=\"\" class=\"wp-image-25671\">\r\n\r\n<img loading=\"lazy\" width=\"360\" height=\"360\" data-id=\"25672\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-so-mi-local-brand-6.jpg\" alt=\"\" class=\"wp-image-25672\">\r\n\r\n<img loading=\"lazy\" width=\"360\" height=\"360\" data-id=\"25673\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-so-mi-local-brand-7.jpg\" alt=\"\" class=\"wp-image-25673\">\r\n</div>\r\n\r\n\r\n\r\n<h3>Mua hàng <a href=\"https://shopee.vn/regods?utm_campaign=-&utm_content=----&utm_medium=affiliates&utm_source=an_17071970013&utm_term=8jddtp7kkhc3\">tại đây</a></h3>\r\n\r\n\r\n\r\n<h2>DAVIES</h2>\r\n\r\n\r\n\r\n<p>Đơn giản nhưng không đơn điệu, áo sơ mi local brand Davies vẫn ghi điểm 10 với các đường cắt áo độc đáo, cũng như sử dụng tất cả bằng hình thêu tỉ mỉ tạo sự đắt giá cho sản phẩm.</p>\r\n\r\n<div style=\"text-align: center;\">\r\n<a style=\"display: inline-block; max-width: 728px;\" href=\"http://shopee.davies.vn\" target=\"_blank\">\r\n\r\n<img loading=\"lazy\" src=\"https://localbrand.vn/shop/wp-content/uploads/2021/08/Asset-4.png\" width=\"728\" height=\"90\" alt=\"banner\"></a>\r\n<img loading=\"lazy\" width=\"256\" height=\"256\" data-id=\"25675\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-so-mi-local-brand-5.jpg\" alt=\"\" class=\"wp-image-25675\">\r\n\r\n<img loading=\"lazy\" width=\"256\" height=\"256\" data-id=\"25676\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-so-mi-local-brand-3-1.jpg\" alt=\"\" class=\"wp-image-25676\">\r\n\r\n<img loading=\"lazy\" width=\"256\" height=\"256\" data-id=\"25677\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-so-mi-local-brand-4.jpg\" alt=\"\" class=\"wp-image-25677\">\r\n\r\n</div>\r\n\r\n<p>Davies sử dụng chất liệu Kaki dệt riêng nhằm đảm bảo độ bởi độ bền và lên form dáng sơ mi đẹp. Chất liệu Kaki mềm mại có khả năng thấm hút mồ hôi nhanh, sẽ khiến người mặc áo sơ mi trong một thời gian dài không cảm thấy khó chịu.</p>\r\n\r\n\r\n\r\n<h3>Mua hàng <a href=\"https://shopee.vn/%C3%81o-s%C6%A1-mi-nam-n%E1%BB%AF-d%C3%A0i-tay-form-r%E1%BB%99ng-nhi%E1%BB%81u-m%C3%A0u-local-brand-Davies-Long-Sleeve-Uni-Shirt-D27-S8-i.96065719.3218193690?sp_atk=b7069e7f-6adc-45e6-8b51-1aa03da79a9a&xptdk=b7069e7f-6adc-45e6-8b51-1aa03da79a9a?utm_campaign=-&utm_content=----&utm_medium=affiliates&utm_source=an_17071970013&utm_term=8jddtp7kkhc3\">tại đây</a></h3>\r\n\r\n\r\n\r\n<h2>BAD HABITS</h2>\r\n\r\n\r\n\r\n<p>Ra đời vào năm 2017, Bad Habits là Local Brand được nhắc đến đầu tiên vì các thiết kế ở brand này cực kì độc lạ, bắt mắt với chất lượng ngày càng được cải tiến và giá cả phù hợp với chất lượng. </p>\r\n\r\n<div style=\"text-align:center\">\r\n<img loading=\"lazy\" width=\"366\" height=\"512\" data-id=\"25678\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-so-mi-local-brand-9.jpg\" alt=\"\" class=\"wp-image-25678\">\r\n<img loading=\"lazy\" width=\"366\" height=\"512\" data-id=\"25679\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-so-mi-local-brand-1.jpg\" alt=\"\" class=\"wp-image-25679\">\r\n<img loading=\"lazy\" width=\"366\" height=\"512\" data-id=\"25680\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/ao-so-mi-local-brand-2.jpg\" alt=\"\" class=\"wp-image-25680\">\r\n</div>\r\n<h3>Mua hàng <a href=\"https://shopee.vn/badhabitsstore.vn?utm_campaign=-&utm_content=----&utm_medium=affiliates&utm_source=an_17071970013&utm_term=8jddtp7kkhc3\">tại đây</a></h3>\r\n\r\n\r\n\r\n<p>Hi vọng với những chia sẻ ở trên có thể giúp bạn có thêm một item áo sơ mi Local Brand chất lượng trong tủ đồ.</p>', 'admin', '', 1634134851),
(6, 'Những mẫu áo Varsity Jacket Local Brand chất lượng mà bạn không nên bỏ lỡ', 'bai4.png', '<p><strong>Varsity Jacket</strong> hay còn gọi là <strong>Letterman Jacket</strong> bắt nguồn từ đồng phục thể thao của các trường trung học phổ thông và đại học tại Mĩ. Varsity’ cũng là cách nói nhanh của từ ‘University’ trong tiếng Anh. Lúc đầu, Varsity Jacket có form tương tự với sweater và thường được thấy cùng chữ “H” to được may trước ngực, ghi dấu trường đại học danh tiếng Harvard, nơi được coi như khởi nguồn của mẫu áo này. Ngày nay, Varsity Jacket được nghiên cứu và sáng tạo sao cho phù hợp hơn với xu hướng thời trang hiện đại. Những năm gần đây, Varsity Jacket bất ngờ tạo nên cơn sốt khi dẫn đầu xu hướng và trở thành một item được lòng các tín đồ thời trang. Cùng điểm qua những mẫu <a href=\"https://davies.vn/\">Varsity Jacket Local Brand</a> chất lượng.</p>\r\n\r\n\r\n\r\n<h2><span class=\"penci-toc-section\" id=\"penci-Varsity-Jacket-Local-Brand-DAVIES\">Varsity Jacket Local Brand DAVIES</span></h2>\r\n\r\n\r\n\r\n<p>Davies là một Local Brand mang phong cách Steetwear được giới trẻ Việt Nam rất ưa chuộng. Những chiếc áo Varsity Jacket Local Brand Davies sử dụng chất liệu chính kaki tạo độ dày và bền trong sử dụng kết hợp với chất liệu đặc biệt lần đầu được Davies mang vào sản xuất áo khoác là chất liệu da dày dặn, phía trong lót lớp lót mỏng Polyester. Áo lên form cực chuẩn bởi các chất liệu kết hợp như len bo chun ở các vị trí như tay áo và thân áo.  Kết quả form áo dựa trên ý kiến chia sẻ các Davies fans để mang đến kích thước phù hợp với hầu hết người mang. Dễ dàng lựa chọn từ form vừa vặn cho đến rộng thoải mái.</p>\r\n\r\n\r\n<div style=\"text-align:center\">\r\n<img loading=\"lazy\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-2.jpg\" alt=\"\" class=\"wp-image-25571\" width=\"350\" height=\"350\"><figcaption>Varsity Jacket Local Brand </figcaption>\r\n\r\n<img loading=\"lazy\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-1.jpg\" alt=\"\" class=\"wp-image-25572\" width=\"350\" height=\"350\" srcset=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-1.jpg 512w, https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-1-500x500.jpg 500w\" sizes=\"(max-width: 350px) 100vw, 350px\"><figcaption>Varsity Jacket Local Brand </figcaption>\r\n</div>\r\n\r\n\r\n<h2>Varsity Jacket REGODS</h2>\r\n\r\n\r\n\r\n<p>Regods là Brand gây ấn tượng bởi sự chăm chút kĩ lưỡng về chất lượng cùng như kiểu dáng trong từng items nhưng lại có mức giá vô cùng tốt. Sản phẩm Varsity Jacket  được làm từ chất liệu PC Nhập co giãn với bề mặt vải mềm mại. Áo chống nhăn tốt, dễ giặt sạch, nhanh khô. Với thiết kế đơn giản nhưng rất tinh tế và cuốn hút.</p>\r\n\r\n\r\n<div style=\"text-align:center\">\r\n<img loading=\"lazy\" width=\"360\" height=\"450\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-8.jpg\" alt=\"\" class=\"wp-image-25573\"><figcaption>Varsity Jacket Local Brand </figcaption>\r\n\r\n<img loading=\"lazy\" width=\"360\" height=\"450\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-10.jpg\" alt=\"\" class=\"wp-image-25574\"><figcaption>Varsity Jacket Local Brand </figcaption>\r\n</div>\r\n\r\n\r\n<h2>Varsity Jacket Local Brand ONTOP</h2>\r\n\r\n\r\n\r\n<p>Chỉ sau vài năm có mặt trong làng thời trang Streetwear, ONTOP đã tạo nên cú bứt phá đầy ấn tượng cho một brand trẻ với sản phẩm Varsity Jacket. Cổ áo được đắp thun co giãn tốt với phối màu đen, trắng trông đơn giản, dễ phối đồ. Form áo rộng rãi, phù hợp với các bạn yêu thích phong cách streetwear. Điểm đặc biệt của các dòng sản phẩm Varsity Jacket Local Brand ONTOP chính nhờ mức giá siêu tốt, bạn khó có thể tìm được chiếc varsity nào giá rẻ mà chất lượng hơn ONTOP. Ngoài chất liệu vải dù kháng nước nhẹ quen thuộc, điểm nổi trội ở varsity jacket local brand ONTOP khiến chiếc áo trở nên khác biệt so với các sản phẩm khác chính ở phần logo được thêu trên 1 lớp da nằm ở mặt trước và trên cánh tay của áo. Từ logo đến tag áo hay nút bấm đều sở hữu màu đen đơn giản nhưng tinh tế.</p>\r\n\r\n\r\n<div style=\"text-align:center\">\r\n<img loading=\"lazy\" src=\"https://localbrand.vn/shop/wp-content/uploads/2021/08/Asset-4.png\" width=\"728\" height=\"90\" alt=\"banner\">\r\n\r\n<img loading=\"lazy\" width=\"512\" height=\"512\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-6.jpg\" alt=\"\" class=\"wp-image-25575\" srcset=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-6.jpg 512w, https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-6-500x500.jpg 500w\" sizes=\"(max-width: 512px) 100vw, 512px\"><figcaption>Varsity Jacket Local Brand </figcaption>\r\n</div>\r\n<div style=\"text-align:center\">\r\n\r\n<img loading=\"lazy\" width=\"512\" height=\"512\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-7.jpg\" alt=\"\" class=\"wp-image-25576\" srcset=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-7.jpg 512w, https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-7-500x500.jpg 500w\" sizes=\"(max-width: 512px) 100vw, 512px\"><figcaption>Varsity Jacket Local Brand </figcaption>\r\n</div>\r\n\r\n\r\n<h2>Varsity Jacket THE BAD GOD</h2>\r\n\r\n\r\n\r\n<p>Chiếc Varsity của nhà The Bad God. Được đầu tư tỉ mỉ từ chất lượng đến thiết kế, kết hợp giữa vải dạ và phần da lửa để đem lại cho khách hàng một trải nghiệm tốt nhất cũng như muốn gửi đến khách hàng nhà The Bad God thông điệp ” Keep The Fire Burning “.</p>\r\n\r\n\r\n<div style=\"text-align:center\">\r\n<img loading=\"lazy\" width=\"341\" height=\"455\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-4-edited.jpg\" alt=\"\" class=\"wp-image-25579\"><figcaption>Varsity Jacket Local Brand </figcaption>\r\n\r\n<img loading=\"lazy\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-3.jpg\" alt=\"\" class=\"wp-image-25578\" width=\"400\" height=\"400\" srcset=\"https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-3.jpg 512w, https://localbrand.vn/wp-content/uploads/2023/02/varsity-jacket-local-brand-3-500x500.jpg 500w\" sizes=\"(max-width: 400px) 100vw, 400px\"><figcaption>Varsity Jacket Local Brand </figcaption>\r\n</div>\r\n\r\n\r\n<p>Hi vọng những chia sẻ ở trên có thể giúp bạn có thêm những mấu áo Varsity Jacket Local Brand chất lượng.</p>', 'admin', '', 1634134851),
(10, '“Bỏ túi” ngay những TIPs phối đồ Loal Brand basic nhưng cực chất từ nàng @26thang6', 'Phoi-do-cung-26thang6-4.png', '<p>Cô nàng chủ nhân Instagram @26thang6 – đó là <strong>Nguyễn Thị Hằng</strong> (sinh năm 1994, quê Bắc Ninh). Cô nàng sở hữu trang cá nhân có tới 496k người theo dõi và có phong cách phối dù khá basic nhưng không kém nổi bật khiến vạn người mê.</p>\r\n\r\n\r\n\r\n<h2>Phối đồ với áo thun</h2>\r\n\r\n\r\n\r\n<p>Với những chiếc áo thun form rộng, cô nàng 26thang6 gợi ý bạn có thể kết hợp với chiếc <strong>quần ống suông</strong> hoặc mix với <strong>chân váy dài</strong>. Style này được ưa chuộng bởi sự tiện lợi, trẻ trung, năng động và thể hiện cá tính, phong cách người mặc. Vừa có thể mặc đi học, đi làm, đi chơi đều được. </p>\r\n<div style=\"text-align:center\">\r\n<img loading=\"lazy\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-4.png\" alt=\"\" class=\"wp-image-25375\" width=\"362\" height=\"441\">\r\n\r\n</div>\r\n<div style=\"text-align:center\">\r\n<img loading=\"lazy\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-1-1.png\" alt=\"\" class=\"wp-image-25386\" width=\"402\" height=\"440\" srcset=\"https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-1-1.png 560w, https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-1-1-500x549.png 500w\" sizes=\"(max-width: 402px) 100vw, 402px\">\r\n</div>\r\n    <h2>Phối đồ với Jacket</h2>\r\n\r\n\r\n\r\n<p>Chiếc áo khoác bomber jacket sẽ mang đến cá tính mạnh mẽ và vẻ ngoài khỏe khoắn khi phối cùng một chiếc quần<strong> </strong>ống suông basic. Bạn chỉ nên mặc thêm chiếc áo thun với họa tiết nhẹ nhàng bên trong để cảm thấy thoải mái.</p>\r\n<div style=\"text-align:center\">\r\n    <img loading=\"lazy\" width=\"529\" height=\"596\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-2-1.png\" alt=\"\" class=\"wp-image-25387\" srcset=\"https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-2-1.png 529w, https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-2-1-500x563.png 500w\" sizes=\"(max-width: 529px) 100vw, 529px\">\r\n</div>\r\n\r\n<p>Bạn có thể phối jacket cùng với chiếc áo thun freesize, kết hợp thêm chiếc quần ống rộng hoặc quần túi hộp.  Với outfit này sẽ khiến bạn trở nên tràn đầy năng lượng và cá tính. </p>\r\n\r\n<div style=\"text-align:center\">\r\n<img loading=\"lazy\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-7-1.png\" alt=\"\" class=\"wp-image-25388\" width=\"394\" height=\"421\">\r\n</div>\r\n\r\n\r\n<h2>Sweater kết hợp với chân váy</h2>\r\n\r\n\r\n\r\n<p>Dù là một sự kết hợp khá đơn giản, nhưng vẫn khiến bạn nổi bật cá tính khi mix cùng với đôi giày thể thao hay boot.</p>\r\n<div style=\"text-align:center\">\r\n    <img loading=\"lazy\" src=\"https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-8-1.png\" alt=\"\" class=\"wp-image-25390\" width=\"379\" height=\"392\" srcset=\"https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-8-1.png 570w, https://localbrand.vn/wp-content/uploads/2023/02/Phoi-do-cung-26thang6-8-1-500x517.png 500w\" sizes=\"(max-width: 379px) 100vw, 379px\">\r\n</div>\r\n\r\n\r\n\r\n<p>Hi vọng bài viết trên giúp bạn có những tips phối quần áo xinh xắn và năng động cùng nàng 26thang6.</p>\r\n', 'admin', '', 1634134851);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `rong` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `cao` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `hinh`, `rong`, `cao`) VALUES
(1, 'banner_2.png', '990px', '150px');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dia_chi`
--

CREATE TABLE `dia_chi` (
  `id` int(11) NOT NULL,
  `tinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `huyen` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `xa` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `duong` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `so_nha` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(255) NOT NULL,
  `mac_dinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dia_chi`
--

INSERT INTO `dia_chi` (`id`, `tinh`, `huyen`, `xa`, `duong`, `so_nha`, `id_user`, `mac_dinh`) VALUES
(3, 'TP HCM', 'Gò Vấp', 'Phường 17', 'Lê Đức Thọ', '193', 1, 'khong'),
(8, 'TP HCM', 'Gò Vấp', 'Phường 6', 'Nguyễn Oanh', '450', 25, 'co'),
(31, 'bình phước', 'lộc ninh', 'lộc thạnh', 'đường số 9', '123', 1, 'co');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `html` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `footer`
--

INSERT INTO `footer` (`id`, `html`) VALUES
(1, '© 2021 Alta Clothing. All rights reserved.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hang_duoc_mua` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(255) NOT NULL,
  `tinh_trang` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `ten_nguoi_mua`, `email`, `dia_chi`, `dien_thoai`, `noi_dung`, `hang_duoc_mua`, `id_user`, `tinh_trang`) VALUES
(30, 'nguyễn thanh huy', 'huy656363@gmail.com', 'hcm', '0382718489', 'giao nhanh', '62[|||]1[|||||]65[|||]1[|||||]60[|||]1[|||||]', 0, 'Chờ xử lý'),
(31, 'Nguyễn Thanh Huy', 'huy656363@gmail.com', '193 Lê Đức Thọ, Phường 17, Gò Vấp, TP HCM', '0375743633', 'giao vào hẻm', '66[|||]1[|||||]', 1, 'Đã giao hàng'),
(32, 'nguyễn thanh huy', 'huy666363@gmail.com', 'HCM', '0382718489', 'GIAO NHANH', '51[|||]1[|||||]71[|||]1[|||||]72[|||]1[|||||]', 0, 'Đang giao hàng'),
(33, 'Nguyễn Thanh Huy', 'huy656363@gmail.com', '255 Lê Đức Thọ, Phường 17, Gò Vấp, TP HCM', '0375743633', 'giao vào hẻm', '72[|||]1[|||||]', 1, 'Đã giao hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `ten`, `anh`) VALUES
(1, 'T-Shirt / Áo Thun', '1.jpg'),
(2, 'Jacket / Áo Khoác', '2.jpg'),
(3, 'Hoodie / Sweater', '3.jpg'),
(4, 'Quần thời trang', '4.jpg'),
(5, 'Túi / Balo', '5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_ngang`
--

CREATE TABLE `menu_ngang` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `loai_menu` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `ten`, `noi_dung`, `loai_menu`) VALUES
(2, 'SẢN PHẨM', '', 'san_pham'),
(4, 'BÀI VIẾT', '<p>Nội dung c&aacute;ch mua h&agrave;ng <br /><br /> Nội dung c&aacute;ch mua h&agrave;ng <br /><br /> Nội dung c&aacute;ch mua h&agrave;ng <br /><br /> Nội dung c&aacute;ch mua h&agrave;ng <br /><br /> Nội dung c&aacute;ch mua h&agrave;ng <br /><br /> Nội dung c&aacute;ch mua h&agrave;ng <br /><br /> Nội dung c&aacute;ch mua h&agrave;ng <br /><br /></p>', 'bai_viet'),
(5, 'GIỚI THIỆU', 'Nội dung giới thiệu <br><br>\r\nNội dung giới thiệu <br><br>\r\nNội dung giới thiệu <br><br>\r\nNội dung giới thiệu <br><br>\r\nNội dung giới thiệu <br><br>\r\nNội dung giới thiệu', ''),
(6, 'LIÊN HỆ', 'Nội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ', ''),
(17, 'TUYỂN DỤNG', 'TUYỂN DỤNG\r\n', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id` int(11) NOT NULL,
  `anh` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `vi_tri` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `anh`, `vi_tri`) VALUES
(1, 'qc_t_1.png', 'trai'),
(3, 'qc_p_1.png', 'phai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh_anh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `noi_bat` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `trang_chu` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `thuoc_menu`, `noi_bat`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(47, 'RESIDUAL BOXY TEE', 320000, 'dsc06833_b07e61b0500744359aff2e04e3b61346.webp', '', 1, 'co', 'co', 7),
(48, 'MAKE IT TEE', 320000, 'hades_18.webp', '', 1, 'co', 'co', 8),
(49, 'LEOPARD CLUB POLO', 320000, 'dsc06651_926d5e37a5224fa69e0edbdd50b86a7a.webp', '', 1, 'co', 'co', 9),
(50, 'RIOT MEOWS TEE', 320000, 'hades_18 (1).webp', '', 1, '', 'co', 10),
(51, 'GLOSSY TEE', 320000, 'glossy_tee_blue_c82607ea9dad4ee3a4afe797ffdf11d8.webp', '', 1, '', 'co', 11),
(52, 'SPECTRUM BOXY HOODIE', 750000, 'untitled_capture1361_6664944924e8466e9acd1b8732018365.webp', '', 3, 'co', 'co', 12),
(53, 'FEEL ALIVE JACKET', 750000, 'dsc06847_copy_2b565216a330490aa55ac91798b0506d.webp', '', 2, '', 'co', 13),
(54, 'METAL TRUNKS BOXY HOODIE', 750000, 'hades_18 (2).webp', '', 3, 'co', 'co', 14),
(55, 'TAWNY JACKET', 750000, 'dsc03094_e19acd9471764e6ba1306e757245585d.webp', '', 2, '', 'co', 15),
(56, 'MULTI ZIP HOODIE', 750000, 'multi_xam_97a746ffdac74e6dbad034c42168abd9.webp', '', 3, '', 'co', 16),
(59, 'BASIC CARGO PANTS - MINT GREEN', 750000, '1_188c6cd69d794e9ca53434e9a9739baf_1024x1024.webp', '', 4, 'co', 'co', 19),
(60, 'BASIC CARGO PANTS - BLACK', 750000, 'img_4505_1dd0d89025034d659a6e7d1663d60a35_1024x1024.webp', '', 4, 'co', 'co', 20),
(62, 'LOGOS TEE - BLACK', 320000, '2__2__502feecfed3f42d79c0e7b1a7b1c480d_grande.webp', '', 1, 'co', 'co', 22),
(63, 'DSW FOREST JACKET', 350000, 'ao-khoac-local-brand-dep-gia-re-mau-den-10-c142833a-207c-4bff-b411-51ac65da0477.webp', '', 2, 'co', 'co', 23),
(64, 'DSS PINKY VARSITY JACKET - LIMITED EDITION', 450000, 'ao-varsity-jacket-local-brand-mau-hong-nu-20.webp', '', 2, 'co', 'co', 24),
(65, 'DSW BMG LEATHER VARSITY JACKET', 400000, 'ao-khoac-bong-chay-nam-da-varsity-jacket-local-brand-1.webp', '', 2, 'co', 'co', 25),
(66, 'DSW VARSITY LEATHER JACKET', 400000, 'ao-khoac-bong-chay-nam-local-brand-davies-varsity-jacket-da-7.webp', '', 2, 'co', 'co', 26),
(67, 'DSS HOODIE ZIPPER-WHITE', 750000, 'zipper-hoodie.webp', '', 3, 'co', 'co', 27),
(68, 'DSS HOODIE D CARTOON', 750000, 'ao-khoac-mau-tim-hoodie-local-brand.webp', '', 3, 'co', 'co', 28),
(69, 'DSS JACKET DAVIES FARM', 750000, 'ao-khoac-du-nu-dep.webp', '', 3, 'co', 'co', 29),
(70, 'DSW HOODIE OLD SKULL', 750000, 'ao-khoac-hoodie-oversize-local-brand.webp', '', 3, '', 'co', 30),
(71, 'DSW HOODIE WARRIOR', 750000, 'ao-hoodie-co-mu-local-brand.webp', '', 3, '', 'co', 31),
(72, 'DSW HOODIE WARRIOR', 350000, 'warrior-short2.webp', '', 4, 'co', 'co', 32),
(73, 'D13-Q31 CULOTTES BOX PANT', 350000, 'quan-dai-tui-hop-nu.webp', '', 4, 'co', 'co', 33);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `lien_ket` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'a_1.jpg', '#'),
(5, 'a_2.jpeg', '#'),
(6, 'a_3.jpg', '#');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `avatar` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `ky_danh` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `avatar`, `ho_ten`, `email`, `phone`, `ky_danh`, `mat_khau`, `dia_chi`, `quyen`) VALUES
(1, '1.jpg', 'Nguyễn Thanh Huy', 'huy656363@gmail.com', '0375743633', 'admin', 'd7afde3e7059cd0a0fe09eec4b0008cd', '193 Lê Đức Thọ, Phường 17, Gò Vấp, TP HCM ', 'admin'),
(25, 'no_avatar.png', 'nguyễn văn a', 'aa', '', 'aa', 'ad79e2cd5fd5ae53547d991007344847', '450 Nguyễn Oanh, Phường 6, Gò Vấp, TP HCM ', ''),
(35, 'logo.png', 'okokoko', 'kokôko', 'kokokok', 'huy', 'c3284d0f94606de1fd2af172aba15bf3', '', ''),
(36, '', 'Nguyễn thanh huy', 'huhuhuhu@gmail.com', '032 611 8381', 'huhuuhuh', 'c3284d0f94606de1fd2af172aba15bf3', '<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsalta-fashionchuc_nangprofile	ai_khoansua_thong_tin.php</b> on line <b>50</b><br /><br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsalta-fashionchuc_nangprofile	ai_khoansua_thong_tin.php</b> on line <b>50</b><br /><br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsalta-fashionchuc_nangprofile	ai_khoansua_thong_tin.php', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dia_chi`
--
ALTER TABLE `dia_chi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dia_chi`
--
ALTER TABLE `dia_chi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
