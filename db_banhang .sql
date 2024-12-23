-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2024 at 06:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int UNSIGNED NOT NULL,
  `id_customer` int DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(6, 5, '2024-11-18', 60000, 'Chuyển khoản ', '', '2024-11-18 13:50:32', '2017-03-11 13:40:00'),
(5, 1, '2024-11-18', 5000, 'Tiền mặt ', '', '2024-11-18 13:55:00', '2017-03-11 13:52:00'),
(9, 3, '2024-11-18', 10000, 'Tiền mặt ', '', '2024-11-18 13:55:00', '2017-03-11 13:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int UNSIGNED NOT NULL,
  `id_bill` int NOT NULL,
  `id_product` int NOT NULL,
  `quantity` int NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 2, 5000, '2024-11-18 13:00:10', '2024-11-18 13:30:12'),
(3, 9, 12, 1, 10000, '2024-11-18 13:50:50', '2024-11-18 13:50:50'),
(5, 6, 14, 6, 60000, '2024-11-18 13:51:13', '2024-11-18 13:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `note` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(5, 'Đinh Lê Quỳnh Phương', 'Nữ', '2211090031@studenthuph.edu.vn', 'Hà Nội', '0382665916', '55555555555555', '2024-11-18 13:30:00', '2024-11-18 13:39:17'),
(1, 'Nguyễn Thị Thanh Nga', 'Nữ', '2211090027@studenthuph.edu.vn', 'Thái Bình ', '0973445255', '33333', '2024-11-18 13:38:56', '2024-11-18 13:40:00'),
(3, 'Dương Mai Thu Hiền', 'Nữ', '2211090012@studenthuph.edu.vn', 'Thái Nguyên', '0915568367', '111111', '2024-11-18 13:38:37', '2024-11-18 13:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `content` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL COMMENT 'hình',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `create_at`, `update_at`) VALUES
(1, 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', 'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất.', 'sample1.jpg', '2017-03-10 23:20:23', '2024-11-18 14:03:55'),
(2, 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất.', 'sample2.jpg', '2016-10-19 19:07:14', '2024-11-18 14:03:55'),
(3, 'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', 'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà', 'sample3.jpg', '2016-10-19 19:07:14', '2024-11-18 14:03:55'),
(4, 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu', 'sample4.jpg', '2016-10-19 19:07:14', '2024-11-18 14:03:55'),
(5, 'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình', 'Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu hết là...', 'sample5.jpg', '2016-10-19 19:07:14', '2024-11-18 14:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `id_type` int UNSIGNED DEFAULT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `new` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `created_at`, `updated_at`) VALUES
(1, 'Bánh Crepe Sầu riêng', 5, 'Bánh Crepe sầu riêng được làm tại nhà', 150000, 120000, '1430967449-pancake-sau-rieng-6.jpg', 'hộp', '1', '2024-10-01 02:00:16', '2024-12-17 09:54:05'),
(2, 'Bánh Crepe Chocolate', 6, '', 180000, 160000, 'crepe-chocolate.jpg', 'hộp', '1', '2014-10-02 03:00:16', '2024-12-16 14:15:16'),
(3, 'Bánh Crepe Sầu riêng - Chuối', 5, '', 150000, 120000, 'crepe-chuoi.jpg', 'hộp', '0', '2024-10-02 03:00:16', '2024-12-16 14:15:27'),
(4, 'Bánh Crepe Đào', 5, '', 160000, 160000, 'crepe-dao.jpg', 'hộp', '0', '2024-10-01 20:00:16', '2024-12-16 14:14:56'),
(5, 'Bánh Crepe Dâu', 5, '', 160000, 160000, 'crepedau.jpg', 'hộp', '0', '2024-10-02 03:00:21', '2024-12-16 14:16:10'),
(6, 'Bánh Crepe Pháp', 5, '', 200000, 180000, 'crepe-phap.jpg', 'hộp', '0', '2024-10-03 03:02:16', '2024-12-16 14:16:50'),
(7, 'Bánh Crepe Táo', 5, '', 160000, 160000, 'crepe-tao.jpg', 'hộp', '1', '2024-10-03 03:04:16', '2024-12-16 14:17:37'),
(8, 'Bánh Crepe Trà xanh', 5, '', 160000, 150000, 'crepe-traxanh.jpg', 'hộp', '0', '2024-10-03 03:05:00', '2024-12-16 14:18:28'),
(9, 'Bánh Crepe Sầu riêng và Dứa', 5, '', 160000, 150000, 'saurieng-dua.jpg', 'hộp', '0', '2024-10-03 03:10:00', '2024-12-16 14:19:00'),
(10, 'Bánh Gato Trái cây Việt Quất', 3, '', 250000, 250000, '544bc48782741.png', 'cái', '0', '2024-10-04 01:00:00', '2024-12-16 14:19:32'),
(11, 'Bánh sinh nhật rau câu trái cây', 3, '', 200000, 180000, '210215-banh-sinh-nhat-rau-cau-body- (6).jpg', 'cái', '0', '2024-10-04 01:01:00', '2024-12-16 14:20:00'),
(12, 'Bánh kem Chocolate Dâu', 3, '', 300000, 280000, 'banh kem sinh nhat.jpg', 'cái', '1', '2024-10-04 01:02:00', '2024-12-16 14:20:24'),
(13, 'Bánh kem Dâu III', 3, '', 300000, 280000, 'Banh-kem (6).jpg', 'cái', '0', '2024-10-04 01:03:00', '2024-12-16 14:20:45'),
(14, 'Bánh kem Dâu I', 3, '', 350000, 320000, 'banhkem-dau.jpg', 'cái', '1', '2024-10-04 01:10:00', '2024-12-16 14:21:34'),
(15, 'Bánh trái cây II', 3, '', 150000, 120000, 'banhtraicay.jpg', 'hộp', '0', '2024-10-04 01:10:15', '2024-12-16 14:22:02'),
(16, 'Apple Cake', 3, '', 250000, 240000, 'Fruit-Cake_7979.jpg', 'cai', '0', '2024-10-04 01:15:00', '2024-12-16 14:22:43'),
(17, 'Bánh ngọt nhân cream táo', 2, '', 180000, 180000, '20131108144733.jpg', 'hộp', '0', '2024-10-04 01:15:15', '2024-12-16 14:23:09'),
(18, 'Bánh Chocolate Trái cây', 2, '', 150000, 150000, 'Fruit-Cake_7976.jpg', 'hộp', '1', '2024-10-04 01:20:00', '2024-12-16 14:23:26'),
(19, 'Bánh Chocolate Trái cây II', 2, '', 150000, 150000, 'Fruit-Cake_7981.jpg', 'hộp', '1', '2024-10-04 01:30:00', '2024-12-16 14:23:48'),
(20, 'Peach Cake', 2, '', 160000, 150000, 'Peach-Cake_3294.jpg', 'cái', '0', '2024-10-04 01:30:00', '2024-12-16 14:24:09'),
(21, 'Bánh bông lan trứng muối I', 1, '', 160000, 150000, 'banhbonglantrung.jpg', 'hộp', '1', '2024-10-04 01:35:00', '2024-12-16 14:24:30'),
(22, 'Bánh bông lan trứng muối II', 1, '', 180000, 180000, 'banhbonglantrungmuoi.jpg', 'hộp', '0', '2024-10-13 02:00:00', '2024-12-16 14:24:49'),
(23, 'Bánh French', 1, '', 180000, 180000, 'banh-man-thu-vi-nhat-1.jpg', 'hộp', '0', '2024-10-13 02:15:00', '2024-12-16 14:25:05'),
(24, 'Bánh mì Australia', 1, '', 80000, 70000, 'dung-khoai-tay-lam-banh-gato-man-cuc-ngon.jpg', 'hộp', '0', '2024-10-04 02:20:00', '2024-12-16 14:25:32'),
(25, 'Bánh mặn thập cẩm', 1, '', 50000, 50000, 'Fruit-Cake.png', 'hộp', '1', '2024-10-04 02:30:00', '2024-12-16 14:25:47'),
(27, 'Bánh Muffins trứng', 1, '', 100000, 80000, 'maxresdefault.jpg', 'hộp', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(28, 'Bánh Scone Peach Cake', 1, '', 120000, 120000, 'Peach-Cake_3300.jpg', 'hộp', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(29, 'Bánh mì Loaf I', 1, '', 100000, 100000, 'sli12.jpg', 'hộp', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(30, 'Bánh kem Chocolate Dâu I', 4, '', 380000, 350000, 'sli12.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(31, 'Bánh kem Trái cây I', 4, '', 380000, 350000, 'Fruit-Cake.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(32, 'Bánh kem Trái cây II', 4, '', 380000, 350000, 'Fruit-Cake_7971.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(33, 'Bánh kem Doraemon', 4, '', 280000, 250000, 'p1392962167_banh74.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(34, 'Bánh kem Caramen Pudding', 4, '', 280000, 280000, 'Caramen-pudding636099031482099583.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(35, 'Bánh kem Chocolate Fruit', 4, '', 320000, 300000, 'chocolate-fruit636098975917921990.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(36, 'Bánh kem Coffee Chocolate GH6', 4, '', 320000, 300000, 'COFFE-CHOCOLATE636098977566220885.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(37, 'Bánh kem Mango Mouse', 4, '', 320000, 300000, 'mango-mousse-cake.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(38, 'Bánh kem Matcha Mouse', 4, '', 350000, 330000, 'MATCHA-MOUSSE.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(39, 'Bánh kem Flower Fruit', 4, '', 350000, 330000, 'flower-fruits636102461981788938.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(40, 'Bánh kem Strawberry Delight', 4, '', 350000, 330000, 'strawberry-delight636102445035635173.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(41, 'Bánh kem Raspberry Delight', 4, '', 350000, 330000, 'raspberry.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(42, 'Beefy Pizza', 6, 'Thịt bò xay, ngô, sốt BBQ, phô mai mozzarella', 150000, 130000, '40819_food_pizza.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(43, 'Hawaii Pizza', 6, 'Sốt cà chua, ham , dứa, pho mai mozzarella', 120000, 120000, 'hawaiian paradise_large-900x900.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(44, 'Smoke Chicken Pizza', 6, 'Gà hun khói,nấm, sốt cà chua, pho mai mozzarella.', 120000, 120000, 'chicken black pepper_large-900x900.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(45, 'Sausage Pizza', 6, 'Xúc xích klobasa, Nấm, Ngô, sốtcà chua, pho mai Mozzarella.', 120000, 120000, 'pizza-miami.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(46, 'Ocean Pizza', 6, 'Tôm , mực, xào cay,ớt xanh, hành tây, cà chua, phomai mozzarella.', 120000, 120000, 'seafood curry_large-900x900.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(47, 'All Meaty Pizza', 6, 'Ham, bacon, chorizo, pho mai mozzarella.', 140000, 140000, 'all1).jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(48, 'Tuna Pizza', 6, 'Cá Ngừ, sốt Mayonnaise,sốt càchua, hành tây, pho mai Mozzarella', 140000, 140000, '54eaf93713081_-_07-germany-tuna.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(49, 'Bánh su kem nhân dừa', 7, '', 120000, 100000, 'maxresdefault.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(50, 'Bánh su kem sữa tươi', 7, '', 120000, 100000, 'sukem.jpg', 'cái', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(51, 'Bánh su kem sữa tươi chiên giòn', 7, '', 150000, 150000, '1434429117-banh-su-kem-chien-20.jpg', 'hộp', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(52, 'Bánh su kem dâu sữa tươi', 7, '', 150000, 150000, 'sukemdau.jpg', 'hộp', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(53, 'Bánh su kem bơ sữa tươi', 7, '', 150000, 150000, 'He-Thong-Banh-Su-Singapore-Chewy-Junior.jpg', 'hộp', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(54, 'Bánh su kem nhân trái cây sữa tươi', 7, '', 150000, 150000, 'foody-banh-su-que-635930347896369908.jpg', 'hộp', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(55, 'Bánh su kem cà phê', 7, '', 150000, 150000, 'banh-su-kem-ca-phe-1.jpg', 'hộp', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(56, 'Bánh su kem phô mai', 7, '', 150000, 150000, '50020041-combo-20-banh-su-que-pho-mai-9.jpg', 'hộp', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(57, 'Bánh su kem sữa tươi chocolate', 7, '', 150000, 150000, 'combo-20-banh-su-que-kem-sua-tuoi-phu-socola.jpg', 'hộp', '', '2016-10-12 19:20:00', '2016-10-18 20:20:00'),
(58, 'Bánh Macaron Pháp', 2, 'Thưởng thức macaron, người ta có thể tìm thấy từ những hương vị truyền thống như mâm xôi, chocolate, cho đến những hương vị mới như nấm và trà xanh. Macaron với vị giòn tan của vỏ bánh, béo ngậy ngọt ngào của phần nhân, với vẻ ngoài đáng yêu và nhiều màu sắc đẹp mắt, đây là món bạn không nên bỏ qua khi khám phá nền ẩm thực Pháp.', 200000, 180000, 'Macaron9.jpg', '', '', '2016-10-26 10:00:00', '2016-10-11 10:00:00'),
(59, 'Bánh Tiramisu - Italia', 2, 'Chỉ cần cắn một miếng, bạn sẽ cảm nhận được tất cả các hương vị đó hòa quyện cùng một chính vì thế người ta còn ví món bánh này là Thiên đường trong miệng của bạn', 200000, 200000, '234.jpg', '', '', '2016-10-26 10:00:00', '2016-10-11 10:00:00'),
(60, 'Bánh Táo - Mỹ', 2, 'Bánh táo Mỹ với phần vỏ bánh mỏng, giòn mềm, ẩn chứa phần nhân táo thơm ngọt, điểm chút vị chua dịu của trái cây quả sẽ là một lựa chọn hoàn hảo cho những tín đồ bánh ngọt trên toàn thế giới.', 200000, 200000, '1234.jpg', '', '', '2016-10-26 10:00:00', '2016-10-11 10:00:00'),
(61, 'Bánh Cupcake - Anh Quốc', 6, 'Những chiếc cupcake có cấu tạo gồm phần vỏ bánh xốp mịn và phần kem trang trí bên trên rất bắt mắt với nhiều hình dạng và màu sắc khác nhau. Cupcake còn được cho là chiếc bánh mang lại niềm vui và tiếng cười như chính hình dáng đáng yêu của chúng.', 150000, 120000, 'cupcake.jpg', 'cái', '', NULL, NULL),
(62, 'Bánh Sachertorte', 6, 'Sachertorte là một loại bánh xốp được tạo ra bởi loại&nbsp;chocholate&nbsp;tuyệt hảo nhất của nước Áo. Sachertorte có vị ngọt nhẹ, gồm nhiều lớp bánh được làm từ ruột bánh mì và bánh sữa chocholate, xen lẫn giữa các lớp bánh là mứt mơ. Món bánh chocholate này nổi tiếng tới mức thành phố Vienna của Áo đã ấn định&nbsp;tổ chức một ngày Sachertorte quốc gia, vào 5/12 hằng năm', 250000, 220000, '111.jpg', 'cái', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '', 'banner1.jpg'),
(2, '', 'banner2.jpg'),
(3, '', 'banner3.jpg'),
(4, '', 'banner4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

CREATE TABLE `type_products` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bánh mặn', 'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.', 'banh-man-thu-vi-nhat-1.jpg', NULL, NULL),
(2, 'Bánh ngọt', 'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween..', '20131108144733.jpg', '2016-10-11 19:16:15', '2016-10-12 18:38:35'),
(3, 'Bánh trái cây', 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \"lạc\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.', 'banhtraicay.jpg', '2016-10-17 17:33:33', '2016-10-15 00:25:27'),
(4, 'Bánh kem', 'Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan – một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem. Tuy nhiên, cốt bánh kem thực ra có rất nhiều loại với hương vị, kết cấu và phương thức làm khác nhau chứ không chỉ đơn giản là “bánh bông lan” chung chung đâu nhé!', 'banhkem.jpg', '2016-10-25 20:29:19', '2016-10-25 19:22:22'),
(5, 'Bánh crepe', 'Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải “xiêu lòng”', 'crepe.jpg', '2016-10-27 21:00:00', '2016-10-26 21:00:23'),
(6, 'Bánh Pizza', 'Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn được những nhà cầm quyền EU chứng nhận là một phần di sản văn hóa ẩm thực châu Âu. Và để được chứng nhận là một nhà sản xuất pizza không hề đơn giản. Người ta phải qua đủ mọi các bước xét duyệt của chính phủ Ý và liên minh châu Âu nữa… tất cả là để đảm bảo danh tiếng cho món ăn này.', 'pizza.jpg', '2016-10-25 10:19:00', NULL),
(7, 'Bánh su kem', 'Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... đánh đều tạo thành một hỗn hợp và sau đó bằng thao tác ép và phun qua một cái túi để định hình thành những bánh nhỏ và cuối cùng được nướng chín. Bánh su kem có thể thêm thành phần Sô cô la để tăng vị hấp dẫn. Bánh có xuất xứ từ nước Pháp.', 'sukemdau.jpg', '2016-10-25 10:19:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đinh Lê Quỳnh Phương', '2211090031@studenthuph.edu.vn', '$2y$12$oXYyo3GDr1cHWGGgPMVHIeDy7/PLdyPScBSivAdQn3XimuMMn8sU.', NULL, 'Hà Nội', NULL, '2024-12-18 16:11:03', '2024-12-18 16:11:03'),
(2, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '$2y$12$QFT40i3dQ585MeMrCkque.hlFcWfDPyQJ7G7.0dqZnGN03HLcVL6K', NULL, 'Hà Nội', NULL, '2024-12-18 16:30:59', '2024-12-18 16:30:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
