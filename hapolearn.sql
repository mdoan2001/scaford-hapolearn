-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 12:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hapolearn`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `description`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'HTML Fundamentals', 'https://www.sistemex.com/blog/wp-content/uploads/2015/09/html5.jpg', 'Khóa học “Xây dựng Website với HTML/CSS căn bản” giúp học viên đạt được các kiến thức và rèn luyện các kỹ năng xây dựng trang web với ngôn ngữ HTML, CSS. Sử dụng được framework Bootstrap, Sass. Có kiến thức căn bản về UI/UX. Sử dụng được hệ thống quản lý phiên bản phân tán (Git) để quản lý mã nguồn và làm việc nhóm.\n\nKết thúc khóa học, học viên có đủ trình độ để thiết kế các trang web hiện đại, đẹp mắt, có khả năng tương tác cao, tương thích với mọi trình duyệt và hiển thị trên mọi thiết bị.', 0, '2022-12-29 17:25:27', '2022-08-03 10:25:52', NULL),
(2, 'CSS Fundamentals', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdgVlOeuMHzszMHEdDV8qG49Rtx6vg-o0n2Q&usqp=CAU', 'Khóa học “Xây dựng Website với HTML/CSS căn bản” giúp học viên đạt được các kiến thức và rèn luyện các kỹ năng xây dựng trang web với ngôn ngữ HTML, CSS. Sử dụng được framework Bootstrap, Sass. Có kiến thức căn bản về UI/UX. Sử dụng được hệ thống quản lý phiên bản phân tán (Git) để quản lý mã nguồn và làm việc nhóm.\n\nKết thúc khóa học, học viên có đủ trình độ để thiết kế các trang web hiện đại, đẹp mắt, có khả năng tương tác cao, tương thích với mọi trình duyệt và hiển thị trên mọi thiết bị.', 1950808, '2021-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(3, 'PHP Tutorial', 'https://product.bachkhoa-aptech.edu.vn:33/resources/upload/image/chia-se/co-nen-hoc-lap-trinh-web-bang-php-02.jpg', 'Practice during lessons, practice between lessons, practice whenever you can. Master the task, then reinforce and test your knowledge with fun, hands-on exercises and interactive quizzes.', 406334, '2022-07-18 17:25:27', '2022-07-22 17:25:27', NULL),
(4, 'SQL Fundamentals', 'https://icons-for-free.com/download-icon-logo+my+query+server+sql+icon-1320184811372606623_512.png', 'Practice during lessons, practice between lessons, practice whenever you can. Master the task, then reinforce and test your knowledge with fun, hands-on exercises and interactive quizzes.', 106068, '2020-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(5, 'Swift ', 'https://www.tma.vn/Media/Default/BaiDang/CamNangNgheNghiep/7e29f207-876c-4d3f-9a47-5daba01784a5.jpg', 'Practice during lessons, practice between lessons, practice whenever you can. Master the task, then reinforce and test your knowledge with fun, hands-on exercises and interactive quizzes.', 226468, '2022-07-23 03:25:27', '2022-07-22 17:25:27', NULL),
(6, 'C# Tutorial', 'https://play-lh.googleusercontent.com/uGqP7F-E_eaEwTb3hMz63MWf0YKRSK6n9INBwibBSOrGDg6B3sd-ACuqNrR312ohdQ', 'Veritatis voluptas quos sed et amet ex voluptas. Qui magni sit aut qui rerum assumenda cum. Neque error molestias consequuntur illum molestiae. Voluptates praesentium porro dignissimos placeat et autem qui.', 20450, '2019-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(7, 'Ruby Tutorial', 'https://icons-for-free.com/download-icon-end+long+shadow+programming+language+rails+ruby+web+web+technology+icon-1320184848081592395_512.png', 'Practice during lessons, practice between lessons, practice whenever you can. Master the task, then reinforce and test your knowledge with fun, hands-on exercises and interactive quizzes.', 1940970, '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(8, 'jQuery Tutorial', 'https://cloud-cdn.hostify.vn/blog/wp-content/uploads/2022/03/jquery-la-gi-huong-dan-su-dung-jquery-moi-nhat-Logo.webp', 'Practice during lessons, practice between lessons, practice whenever you can. Master the task, then reinforce and test your knowledge with fun, hands-on exercises and interactive quizzes.', 1031139, '2022-08-22 18:25:27', '2022-07-22 17:25:27', NULL),
(9, 'Angular + NestJS', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/800px-Angular_full_color_logo.svg.png', 'Qui sunt est commodi inventore quo et. Dolorum beatae sunt est eligendi molestias esse quas. Odio reprehenderit eos eum minus consequuntur ex. Asperiores fugit voluptas earum ut quis. Dolore dolorem sed molestias veniam quaerat quod rerum.', 41924, '2022-10-22 17:25:27', '2022-07-22 17:25:27', NULL),
(10, 'Data Science with Python', 'https://images.viblo.asia/cb28822d-c061-474c-9ade-e85ae6701eb9.png', 'Perferendis html quia expedita qui. Quam quam ab doloremque cupiditate placeat. Sit nihil exercitationem eum dolorem excepturi sit beatae. Alias fuga ipsam ad. Id sunt velit facilis voluptatem.', 1561898, '2021-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(11, 'Machine Learning', 'https://c8.alamy.com/comp/2D6FW17/machine-learning-logo-design-vector-illustrations-brain-ai-technology-human-template-2D6FW17.jpg', 'Temporibus officiis amet ut facere autem et inventore. Maiores aspernatur magni cupiditate. Saepe est nam impedit maiores commodi ut. Officiis et eligendi aut et repellendus perferendis.', 1955562, '2012-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(12, 'Javascript Tutorial', 'https://techvccloud.mediacdn.vn/2018/11/23/js-15429579443112042672363-crop-1542957949936317424252.png', 'Nulla libero aliquam quaerat. Et quisquam sint quo et repellat. Incidunt optio officiis mollitia temporibus. Officia corrupti perspiciatis corporis quas. Molestiae nihil ut nihil quasi non aperiam porro.', 1276448, '2022-03-22 17:25:27', '2022-07-22 17:25:27', NULL),
(13, 'Java Tutorial', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXumZFWVY3V2ZHammqQ49horWDyO1ThQloOA&usqp=CAU', 'Rerum iste corrupti qui ut quo. Culpa ea debitis voluptatem ut. Id sint et in amet. Nihil rerum ea et necessitatibus. Expedita asperiores deserunt impedit suscipit. Amet sequi exercitationem iure neque veniam natus.', 1525116, '2022-07-22 17:30:27', '2022-07-22 17:25:27', NULL),
(14, 'React JS', 'https://codelearnstorage.s3.amazonaws.com/Upload/Blog/react-js-co-ban-phan-1-63738082145.3856.jpg', 'Necessitatibus exercitationem in sit illum et maxime aliquid. Deserunt asperiores commodi reiciendis suscipit. Non qui non at aut velit. Nam molestiae voluptatum repudiandae ipsum.', 1563866, '2022-07-22 17:25:59', '2022-07-22 17:25:27', NULL),
(15, 'Laravel Tutorial', 'https://fptcloud.com/wp-content/uploads/2022/07/framework-la-tap-hop-cac-class-giup-cho-nhung-nha-phat-trien-phan-mem-de-dang-hon-khi-lam-viec.jpg', 'Tại thời điểm biết đến Laravel, tôi thật bất ngờ khi một nền tảng phát triển web mạnh mẽ như vậy nhưng khó tìm được các tài liệu Laravel bằng tiếng Việt. All Laravel ra đời nhằm tổng hợp các tài liệu, kiến thức và kinh nghiệm xoay quanh framework số 1 này chia sẻ các lập trình viên, nhằm tạo ra một cộng đồng Laravel ở Việt Nam để mọi người có thể trao đổi, giúp đỡ nhau.\n\nTrước đây, All Laravel được xây dựng trên Wordpress, khá khó khăn trong phát triển các tính năng mới, chính vì vậy các anh em trong team quyết định chuyển nhà sang OctoberCMS. Với nền tảng mới All Laravel sẽ có những tính năng cần thiết nhất cho mọi người học tập, trao đổi và nghiên cứu Laravel.', 0, '2022-07-29 17:25:27', '2022-07-22 17:25:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_tag`
--

CREATE TABLE `course_tag` (
  `tag_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_tag`
--

INSERT INTO `course_tag` (`tag_id`, `course_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(1, 3, '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(2, 1, '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(2, 6, '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(2, 15, '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(3, 6, '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(3, 15, '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(4, 1, '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL),
(7, 6, '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`user_id`, `course_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, '2022-08-15 14:58:37', NULL),
(1, 2, NULL, NULL, NULL),
(1, 3, NULL, '2022-08-17 08:12:03', NULL),
(1, 9, NULL, NULL, NULL),
(1, 12, NULL, NULL, NULL),
(1, 14, NULL, NULL, NULL),
(1, 15, NULL, '2022-08-16 08:42:32', NULL),
(2, 1, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL),
(2, 3, NULL, NULL, NULL),
(2, 4, NULL, NULL, NULL),
(16, 1, NULL, NULL, NULL),
(16, 3, NULL, NULL, NULL),
(16, 6, NULL, NULL, NULL),
(16, 14, NULL, NULL, NULL),
(17, 3, NULL, NULL, NULL),
(29, 13, NULL, '2022-08-16 09:09:48', '2022-08-16 09:09:48'),
(33, 1, NULL, NULL, NULL),
(33, 3, NULL, NULL, NULL),
(35, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `name`, `image`, `time`, `description`, `requirement`, `created_at`, `updated_at`, `deleted_at`, `order`) VALUES
(1, 1, 'Tìm hiểu về HTML, CSS', 'https://fptcloud.com/wp-content/uploads/2021/12/html.jpg', '02:39:21', 'Non voluptates vero architecto beatae. Voluptatibus eum officiis nemo natus. Consequatur et eveniet culpa ea assumenda neque. Et qui provident nihil quam rerum similique.', 'Porro et voluptatibus earum ut earum. Natus et accusantium voluptas aut tempore. Impedit quis provident eaque autem officia. Ut maxime enim velit. Tempora harum beatae quia sint. Assumenda debitis est omnis. Accusantium rerum qui temporibus qui.', '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL, 1),
(2, 1, 'Cấu trúc của 1 file HTML', 'https://vinasupport.com/uploads/2018/05/Cau-Truc-Cua-Trang-Web-Su-Dung-The-HTML5.jpeg', '04:52:34', 'Non itaque omnis reiciendis incidunt corporis in. Pariatur ipsum temporibus earum aliquam voluptatem iste id. Quod ex similique fugiat optio ea quo amet.', 'Iure ut eos saepe ad cupiditate beatae. Maxime est non veniam quia. Quos accusantium et necessitatibus ut nemo.', '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL, 2),
(3, 1, 'Comments trong HTML', 'https://arena.fpt.edu.vn/wp-content/uploads/2021/05/anh-dai-dien-php-la-gi.jpg', '21:50:58', 'Et sed corporis voluptas recusandae quas occaecati. Dicta praesentium delectus molestias eaque nobis rem. Autem culpa veritatis nemo mollitia.', 'Ducimus quod id non maiores veritatis consequatur. Quis dicta fugit saepe quasi accusamus iure ex. Omnis nemo et eos est provident dolorem enim. Similique a ullam perspiciatis. Sit cum iusto id voluptas.', '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL, 3),
(4, 1, ' Các thẻ HTML thông dụng', 'https://arena.fpt.edu.vn/wp-content/uploads/2021/05/anh-dai-dien-php-la-gi.jpg', '13:06:34', 'Quia ea repellat quis nihil rerum. Dicta voluptatum dignissimos accusamus ducimus. Laborum non dolorem nihil illo. Aut totam fugiat harum officiis autem et.', 'Quasi aliquid placeat magni non ut. Et quia et magnam rem ipsa voluptas voluptas. Labore consequatur in molestias dicta sapiente minus.', '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL, 4),
(5, 1, 'Attribute trong HTML là gì?', 'https://via.placeholder.com/0x400.png/00ff44?text=300+enim', '100:27:50', 'Fuga blanditiis provident qui quod repellendus ut quae non. Dolor alias quis ut quae corrupti nobis ex dolorum. Nobis dolorem deserunt sint. Dignissimos quasi sint assumenda alias molestias architecto velit aut.', 'Possimus ullam quae dolores ut est. Ipsum qui natus perspiciatis. Aliquam iusto ea aliquid. Aut delectus repellendus non modi vel temporibus iste. Voluptate unde saepe voluptas ullam. Eius assumenda officiis dolorum minima neque laboriosam.', '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL, 5),
(6, 1, 'Cách quản lý thư mục dự án', 'https://cdn.helpex.vn/upload/2019/2/19/ar/04-41-41-626-2cdcd15a-f3e8-4ca4-9ac1-9b0433b1fb8a.jpg', '14:38:42', 'Doloribus aut est amet aut et ab. Reiciendis cum mollitia nisi culpa velit nobis. Ut voluptas vero fuga provident et qui fugiat explicabo.', 'Tempora consectetur sunt qui. Labore sit aspernatur expedita modi debitis nobis. Dolores magni deserunt dolor dolores sequi repellat.', '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL, 6),
(7, 2, 'Sử dụng CSS trong HTML', 'https://codeschool.vn/wp-content/uploads/2020/06/featured-ways-to-embed-css.jpg', '09:02:49', 'Dicta vitae eius eum ullam id ipsum aut. Dolores dolor eveniet perferendis nobis nulla consequuntur consequatur corporis. Molestiae nihil totam sit et voluptas ut dolore. Voluptate itaque occaecati adipisci voluptas vero tempore.', 'Quia dolorum neque distinctio. Iure error corrupti doloribus omnis molestias. Velit vel voluptatem autem iste. Eligendi et omnis ut ea distinctio ratione suscipit.', '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL, 1),
(8, 2, 'ID và Class', 'https://via.placeholder.com/0x400.png/007711?text=300+dicta', '00:29:31', 'Repellendus voluptatibus ipsam blanditiis atque vero. Itaque veritatis delectus cum consequatur laboriosam est molestiae. Animi dicta delectus ullam provident. Sed totam qui ratione est fugit ut. Occaecati molestiae sequi iste cupiditate ex.', 'Quia veritatis commodi ut iusto modi deleniti vel unde. Aliquam omnis voluptas delectus aliquid. Ratione omnis rerum autem repellat consectetur cumque.', '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL, 2),
(9, 2, 'Độ ưu tiên trong CSS', 'https://via.placeholder.com/0x400.png/00aa11?text=300+quo', '11:06:29', 'Dolor et tenetur non est at. Veniam voluptas dolor expedita rerum nobis et ut corporis. Eum repellat architecto quia quo vel atque. Vitae esse animi quia eos et voluptatibus.', 'Sit qui impedit et. Autem molestias repudiandae architecto ab omnis veritatis. Est rerum in dolorem non. Quam laborum beatae inventore ad aliquam velit similique.', '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL, 3),
(10, 2, 'Sử dụng biến trong CSS', 'https://via.placeholder.com/0x400.png/0077cc?text=300+omnis', '04:47:53', 'Modi ut eos molestiae in quisquam animi laborum. Ab consequatur impedit quo. Consequatur laudantium dolores vel molestiae. Et consequatur nulla autem voluptatibus magnam.', 'Ratione aut commodi provident quam nostrum quia dolorem nisi. Qui voluptas itaque eum nam voluptas. Aut sed sint qui ex quam. Explicabo et autem quae veniam nulla.', '2022-07-22 17:25:27', '2022-07-22 17:25:27', NULL, 4),
(11, 3, 'Giới thiệu khóa học', 'https://cafedev.vn/wp-content/uploads/2020/08/cafedev_tuhoc_php.png', '1:00:00', 'Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ligula libero, feugiat faucibus mattis eget, pulvinar et ligula.', 'Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ligula libero, feugiat faucibus mattis eget, pulvinar et ligula.', '2022-07-29 09:40:19', NULL, NULL, 1),
(12, 3, 'Cài đặt 2 phần mềm cần thiết', 'https://in4tintuc.com/wp-content/uploads/2021/09/huong-dan-cai-dat-php-tren-windows-nhu-the-nao-cai-dat-php-tren-windows-nhu-the-nao.jpg', '2:59:00', 'Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ligula libero, feugiat faucibus mattis eget, pulvinar et ligula.', 'Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ligula libero, feugiat faucibus mattis eget, pulvinar et ligula.', '2022-07-29 09:40:19', NULL, NULL, 2),
(13, 3, 'hướng dẫn dùng Biến - Comment - Debug trong PHP', 'https://t3h.edu.vn/sites/default/files/tim-hieu-ve-bien-trong-php.png', '0:59:30', '- Biến trong PHP\r\n- In dữ liệu\r\n- Chú thích (Comment) trong PHP\r\n- Hàm dùng để Debug Debug trong PHP', 'Lắm vững kiến thức cơ bản về HTML, CSS, JS', NULL, NULL, NULL, 3),
(14, 3, 'Cách nối biến trong PHP', 'https://t3h.edu.vn/sites/default/files/tim-hieu-ve-bien-trong-php.png', '00:30:00', '- Nối biến trong PHP\r\n- Một số kỹ thuật sẽ được học trong phần chuỗi sau này', 'Lắm vững kiến thức cơ bản về HTML, CSS, JS', NULL, NULL, NULL, 4),
(15, 3, 'Hướng dẫn khai báo và sử dụng Hằng số', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREHgN2Xfg8NwW1IBNKJueyPET7F2PnjHC6KIPZJ08qAnJCfEOhjuPUYP6GxgYmRZqmH6E&usqp=CAU', '1:00:00', '- Hằng số trong PHP\r\n- Khai báo và sử dụng hằng số', 'Lắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 5),
(16, 3, 'Các kiểu dữ liệu trong PHP', 'https://i.ytimg.com/vi/HkeU2MmtYac/maxresdefault.jpg', '1:30:00', '- Các kiểu dữ liệu trong PHP\r\n- Phân biệt kiểu Null và Empty', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 6),
(17, 3, 'Biểu thức và toán tử trong PHP (Phần 1)', 'https://laptrinhvienphp.com/wp-content/uploads/2019/10/bieu-thuc-chinh-quy-trong-php-1024x536.jpg', '1:20:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn bạn các nội dung: Biểu thức và toán tử trong PHP (Phần 1)', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 7),
(18, 3, 'Biểu thức và toán tử trong PHP (Phần 2)', 'https://laptrinhvienphp.com/wp-content/uploads/2019/10/bieu-thuc-chinh-quy-trong-php-1024x536.jpg', '3:00:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn bạn các nội dung: Biểu thức và toán tử trong PHP (Phần 2)', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 8),
(19, 3, 'Câu lệnh rẽ nhánh if else trong PHP', 'https://kiemtientuweb.com/storages/posts/600/cau-lenh-re-nhanh-if-va-switch-trong-php-1628763275.jpg', '0:40:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn bạn các nội dung: Câu lệnh rẽ nhánh if else', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 9),
(20, 3, 'Câu lệnh rẽ nhánh switch case', 'https://cdn.pimylifeup.com/wp-content/uploads/2022/04/PHP-switch-no-wm.jpg', '00:30:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn bạn các nội dung: Câu lệnh rẽ nhánh switch case', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 10),
(21, 3, 'Vòng lặp for trong PHP', 'https://brainbell.com/wp-content/uploads/2022/05/php-loops.png', '4:00:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn bạn các nội dung: Vòng lặp for\r\n\r\nKhoá học lập trình PHP miễn phí sẽ trang bị cho bạn các kiến thức lập trình cơ bản nhất, hệ thống hoá bài bản giúp bạn học tập nhanh hơn trên con đường trở thành PHP Developer.', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 11),
(22, 3, 'Ý nghĩa và cách dùng Break - Continue - Die - Exit', 'https://cdn.educba.com/academy/wp-content/uploads/2019/12/Break-in-PHP.jpg', '2:00:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ chia sẻ với các bạn các từ khóa, ý nghĩa và cách sử dụng: Break - Continue - Die - Exit', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 12),
(23, 3, 'Xử lý chuỗi trong PHP (Phần 1)', 'https://t3h.com.vn/photos/1/Anh%20bai%20viet/tim-hieu-ve-String-trong-PHP.jpg', '1:00:30', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ chia sẻ với các bạn cách Xử lý chuỗi trong PHP (Phần 1)', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 13),
(24, 3, 'Xử lý chuỗi trong PHP (Phần 2)', 'https://t3h.com.vn/photos/1/Anh%20bai%20viet/tim-hieu-ve-String-trong-PHP.jpg', '0:45:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ chia sẻ với các bạn cách Xử lý chuỗi trong PHP (Phần 2)', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 14),
(25, 3, 'Định nghĩa hàm trong PHP (Phần 1)', 'https://techacademy.edu.vn/wp-content/uploads/2021/08/Functions-PHP.png', '0:25:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn các bạn: Định nghĩa hàm trong trong PHP (Phần 1)', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 15),
(26, 3, 'Định nghĩa hàm trong PHP (Phần 2)', 'https://techacademy.edu.vn/wp-content/uploads/2021/08/Functions-PHP.png', '0:45:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn các bạn: Định nghĩa hàm trong trong PHP (Phần 2)', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 16),
(27, 3, 'Định nghĩa hàm trong PHP (Phần 3)', 'https://techacademy.edu.vn/wp-content/uploads/2021/08/Functions-PHP.png', '0:50:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn các bạn: Định nghĩa hàm trong trong PHP (Phần 3)', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 17),
(28, 3, 'Hàm Isset - Empty trong PHP', 'https://cdn.educba.com/academy/wp-content/uploads/2020/03/isset-Function-in-PHP.jpg', '1:20:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn các bạn: Hàm Isset - Empty trong PHP', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 18),
(29, 0, 'Kiểu dữ liệu Mảng trong PHP (Phần 1)', 'https://www.freecodecamp.org/news/content/images/2022/06/Arrays-in-PHP-final.png', '3:00:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn các bạn: Kiểu dữ liệu Mảng trong PHP', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 19),
(30, 3, 'Kiểu dữ liệu Mảng trong PHP (Phần 2)', 'https://www.freecodecamp.org/news/content/images/2022/06/Arrays-in-PHP-final.png', '2:00:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn các bạn: Kiểu dữ liệu Mảng trong PHP (Phần 2)', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 20),
(31, 3, 'Kiểu dữ liệu Mảng trong PHP (Phần 1)', 'https://www.freecodecamp.org/news/content/images/2022/06/Arrays-in-PHP-final.png', '2:00:00', 'Bài học tiếp theo trong khoá học PHP cơ bản tôi sẽ hướng dẫn các bạn: Kiểu dữ liệu Mảng trong PHP (Phần 1)', 'Nắm vững kiến thức HTML, CSS, JS', NULL, NULL, NULL, 19);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_user`
--

CREATE TABLE `lesson_user` (
  `user_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lesson_user`
--

INSERT INTO `lesson_user` (`user_id`, `lesson_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, NULL, NULL),
(1, 2, NULL, NULL, NULL),
(1, 3, NULL, NULL, NULL),
(1, 4, NULL, NULL, NULL),
(1, 11, NULL, NULL, NULL),
(1, 12, NULL, NULL, NULL),
(1, 13, NULL, NULL, NULL),
(1, 14, NULL, NULL, NULL),
(1, 15, NULL, NULL, NULL),
(1, 16, NULL, NULL, NULL),
(1, 17, NULL, NULL, NULL),
(1, 26, NULL, NULL, NULL),
(2, 1, NULL, NULL, NULL),
(2, 7, NULL, NULL, NULL),
(2, 10, NULL, NULL, NULL),
(2, 11, NULL, NULL, NULL),
(2, 12, NULL, NULL, NULL),
(2, 14, NULL, NULL, NULL),
(2, 16, NULL, NULL, NULL),
(16, 11, NULL, NULL, NULL),
(16, 12, NULL, NULL, NULL),
(16, 13, NULL, NULL, NULL),
(17, 11, NULL, NULL, NULL),
(17, 12, NULL, NULL, NULL),
(17, 13, NULL, NULL, NULL),
(33, 1, NULL, NULL, NULL),
(33, 12, NULL, NULL, NULL),
(35, 24, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_07_11_031542_update_table_to_users', 1),
(5, '2022_07_11_033400_create_courses_table', 1),
(6, '2022_07_11_035948_create_lessons_table', 1),
(7, '2022_07_11_040725_create_programs_table', 1),
(8, '2022_07_11_041444_create_tags_table', 1),
(9, '2022_07_11_041758_create_reviews_table', 1),
(10, '2022_07_12_060827_create_course_user_table', 1),
(11, '2022_07_12_062019_create_table_to_course_tag', 1),
(12, '2022_07_12_063043_create_table_to_lesson_user', 1),
(13, '2022_07_12_063642_create_table_program_user', 1),
(14, '2022_07_12_091935_update_table_password_resets', 1),
(15, '2022_07_12_091958_update_table_failded_jobs', 1),
(16, '2022_07_18_113447_alter_table_users', 1),
(17, '2022_07_19_143734_alter_avarta_to_table_users', 2),
(18, '2022_07_29_131621_update_lessons_table', 3),
(19, '2022_07_29_133309_update_order_lessons_table', 4),
(20, '2022_07_29_162400_change_description_course_table', 5),
(21, '2022_07_29_162609_change_content_reviews_table', 6),
(22, '2022_07_30_151009_update_course_user_table', 7),
(23, '2022_07_31_182710_create_replies_table', 8),
(24, '2022_07_31_183701_update_reply_table', 9),
(25, '2022_08_01_215122_add_adress_users_table', 10),
(26, '2022_08_01_233544_update_about_users_table', 11),
(27, '2022_08_04_213150_update_description_lessons_table', 12),
(28, '2022_08_06_141338_drop_registration_column__lesson_user', 13),
(29, '2022_08_06_165043_drop_study_date_program_table_table', 14),
(30, '2022_08_15_230932_create_user_activations_table', 15),
(31, '2022_08_15_231148_alter_users_table', 15),
(32, '2022_08_16_090105_create_user_activations_table', 16),
(33, '2022_08_16_090209_alter_users_table', 16),
(34, '2022_08_16_213201_alter_updated_password_resets_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`, `deleted_at`, `updated_at`) VALUES
('mdoan2001@gmail.com', 'G1wMVqbd3c0Zz2gvWd3KCeWWu9AxiN9nz4GtvsgS0Vfvb1bTueiTZTcHdwMJX2J6', '2022-08-16 14:38:33', '2022-08-16 14:39:18', '2022-08-16'),
('mdoan2001@gmail.com', 'tZrsKU3mcstdjAY58zBvFvIP5rJcoyKdvzc4AFNY3rrmmxnIAAtdlss4NmMcMY6a', '2022-08-16 14:41:08', '2022-08-16 14:41:35', '2022-08-16'),
('mdoan2001@gmail.com', 'BNQAhsYbUzcYwTJgB6aX0huGiadzclHMiqzHvpIlnvmV3L337GQZVVLfP2dunRID', '2022-08-16 15:00:17', '2022-08-16 15:28:25', '2022-08-16'),
('mdoan2001@gmail.com', 'GPQujZy3ZS9RscTsY4Q5Y9PDnrvQtbgEw9zUD3dg8694VHcwS6UXaVou0UKCgiNm', '2022-08-16 15:27:57', '2022-08-16 15:28:25', '2022-08-16'),
('mdoan2001@gmail.com', 'YpfaOBwbsTYL7Zi1UPAek6bZJ0WNHAIa0Hr7flc71hFJNiQLyQni7ubpL62GZJiO', '2022-08-17 04:39:56', '2022-08-17 04:40:20', '2022-08-17'),
('mdoan2001@gmail.com', 'U7mRxq3AYCLrarZV5IfzdAVVDUMYwkwc5wAesc5ZVZKTtbN6yIpxkpjA29vRIBn2', '2022-08-17 04:43:04', NULL, '2022-08-17'),
('mdoan2001@gmail.com', 'velGZM53nGgqS0WtIoJQ5h2PtLbQ6uX67cnI74NoraoXtUeS3JnNuYliogFb0tjm', '2022-08-17 04:43:26', NULL, '2022-08-17'),
('mdoan12321@gmail.com', 'Gitqv4QARspiDDhooGjns2muRL1bcivqy7a625ACvh9V9WYVVbgjyYNAhNX983zR', '2022-08-17 06:42:08', '2022-08-17 06:44:15', '2022-08-17'),
('mdoan12321@gmail.com', 'URmvVh4KMGyBoO1wTz2ONL6kDB3FB3WAi4QA3BawVwnHkmDsXOcTWj8DfdaMrhhv', '2022-08-17 06:43:45', '2022-08-17 06:44:15', '2022-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `lesson_id`, `name`, `link`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 'Sử dụng CSS trong HTML', 'https://www.youtube.com/watch?v=NsSsJTg29oE&list=PL_-VfJajZj0U9nEXa4qyfB4U5ZIYCMPlz&index=9', 2, '2011-11-11 17:00:00', '1993-03-14 17:00:00', NULL),
(2, 7, 'Sử dụng CSS trong HTML', 'https://xuanthulab.net/css-la-gi-cach-nhung-ma-css-vao-html.html', 0, '1987-08-21 17:00:00', '1987-07-20 17:00:00', NULL),
(3, 7, 'slide CSS trong HTML', 'https://www.w3schools.com/w3css/w3css_slideshow.asp', 2, '2013-06-15 17:00:00', '2012-07-28 17:00:00', NULL),
(11, 11, 'Giới thiệu PHP', 'https://hoclaptrinhweb.org/lap-trinh/hoc-php/227-bai-1-gioi-thieu-ve-ngon-ngu-lap-trinh-php-va-huong-dan-cai-dat.html', 0, NULL, NULL, NULL),
(12, 11, 'Giới thiệu ngôn ngữ PHP', 'https://www.youtube.com/watch?v=0KVkhKxGlBs&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=1', 0, NULL, NULL, '0000-00-00 00:00:00'),
(13, 11, 'Giới thiệu ngôn ngữ PHP', 'https://www.youtube.com/watch?v=0KVkhKxGlBs&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=1', 2, NULL, NULL, NULL),
(14, 11, 'Phương pháp học', 'https://www.youtube.com/watch?v=OwwjM8FMPj0&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=2', 0, NULL, NULL, '0000-00-00 00:00:00'),
(15, 11, 'Phương pháp học', 'https://www.youtube.com/watch?v=OwwjM8FMPj0&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=2', 2, NULL, NULL, NULL),
(16, 11, 'Tài liệu', 'https://mona.media/php-la-gi/', 1, NULL, NULL, NULL),
(17, 12, 'Hướng dẫ Cài đặt môi trường', 'https://www.youtube.com/watch?v=YJ74SCzRJtg&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=3', 2, NULL, NULL, NULL),
(18, 12, 'Hướng dẫ Cài đặt môi trường', 'http://itplus-academy.edu.vn/CAI-DAT-MOI-TRUONG-LAP-TRINH-PHP.html', 0, NULL, NULL, NULL),
(19, 12, 'Hướng dẫn cài đặt môi trường', 'https://gokisoft.com/huong-dan-cai-dat-bien-moi-truong-tren-window-huong-dan-cai-dat-voi-php.html', 1, NULL, NULL, NULL),
(20, 13, 'hướng dẫn dùng Biến', 'https://www.youtube.com/watch?v=0YPtbdTkFl0&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=5', 2, NULL, NULL, NULL),
(21, 13, 'Hướng dẫn sử dụng biến', 'https://timoday.edu.vn/bai-3-su-dung-bien-trong-php/', 0, NULL, NULL, NULL),
(22, 13, 'Hướng dẫn sử dụng biến', 'https://viettuts.vn/php/bien-trong-php', 1, NULL, NULL, NULL),
(23, 14, 'Cách nối biến trong PHP', 'https://www.youtube.com/watch?v=QeBrCFu-Aas&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=6', 2, NULL, NULL, NULL),
(24, 14, 'Cách nối biến trong PHP', 'https://viettuts.vn/php/bien-trong-php', 0, NULL, NULL, NULL),
(25, 15, 'sử dụng Hằng số', 'https://www.youtube.com/watch?v=Qr-0tg2o5ec&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=7', 2, NULL, NULL, NULL),
(26, 15, 'sử dụng Hằng số', 'https://xuanthulab.net/hang-so-trong-php.html', 0, NULL, NULL, NULL),
(27, 0, 'sử dụng Hằng số', 'https://freetuts.net/khai-bao-bien-va-hang-so-trong-php-2.html', 1, NULL, NULL, NULL),
(28, 16, 'Các kiểu dữ liệu trong PHP', 'https://www.youtube.com/watch?v=10HpnLxP5UY&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=8', 2, NULL, NULL, NULL),
(29, 16, 'Các kiểu dữ liệu trong PHP', 'https://freetuts.net/cac-kieu-du-lieu-trong-php-3.html', 0, NULL, NULL, NULL),
(30, 16, 'Các kiểu dữ liệu trong PHP', 'https://hocwebchuan.com/tutorial/php/php_data_types.php', 1, NULL, NULL, NULL),
(31, 17, 'Biểu thức và toán tử trong PHP (Phần 1)', 'https://www.youtube.com/watch?v=mA1Gj8nu214&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=9', 2, NULL, NULL, NULL),
(32, 0, 'Biểu thức và toán tử trong PHP (Phần 1)', 'https://xuanthulab.net/cac-toan-tu-trong-php.html', 0, NULL, NULL, NULL),
(33, 17, 'Biểu thức và toán tử trong PHP (Phần 1)', 'https://hocwebchuan.com/tutorial/php/php_data_types.php', 1, NULL, NULL, NULL),
(34, 18, 'Biểu thức và toán tử trong PHP (Phần 2)\r\n', 'https://www.youtube.com/watch?v=b95nb2JLKn4&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=10', 2, NULL, NULL, NULL),
(35, 18, 'Biểu thức và toán tử trong PHP (Phần 2)\r\n', 'https://xuanthulab.net/cac-toan-tu-trong-php.html', 1, NULL, NULL, NULL),
(36, 18, 'Biểu thức và toán tử trong PHP (Phần 2)\r\n', 'https://hocwebchuan.com/tutorial/php/php_data_types.php', 1, NULL, NULL, NULL),
(37, 19, 'Câu lệnh rẽ nhánh ', 'https://www.youtube.com/watch?v=fyjeDTvfzFQ&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=11', 2, NULL, NULL, NULL),
(38, 19, 'Câu lệnh rẽ nhánh ', 'https://xuanthulab.net/cau-lenh-re-nhanh-if-va-switch-trong-php.html', 0, NULL, NULL, NULL),
(39, 19, 'Câu lệnh rẽ nhánh ', 'https://gochocit.com/lap-trinh-web/cau-truc-re-nhanh-ifelse-trong-php', 1, NULL, NULL, NULL),
(40, 20, 'Câu lệnh rẽ nhánh switch case', 'https://www.youtube.com/watch?v=4FX_H61Py_w&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=12', 2, NULL, NULL, NULL),
(41, 20, 'Câu lệnh rẽ nhánh switch case', 'https://xuanthulab.net/cau-lenh-re-nhanh-if-va-switch-trong-php.html', 1, NULL, NULL, NULL),
(42, 20, 'Câu lệnh rẽ nhánh switch case', 'https://gochocit.com/lap-trinh-web/cau-truc-re-nhanh-ifelse-trong-php', 1, NULL, NULL, NULL),
(43, 21, 'Vòng lặp for trong PHP', 'https://www.youtube.com/watch?v=10QRmWEaFVU&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=13', 2, NULL, NULL, NULL),
(44, 21, 'Vòng lặp for trong PHP', 'https://www.w3schools.com/php/php_looping_for.asp', 1, NULL, NULL, NULL),
(45, 21, 'Vòng lặp for trong PHP', 'https://www.php.net/manual/en/control-structures.for.php', 0, NULL, NULL, NULL),
(46, 22, 'Break - Continue - Die - Exit', 'https://www.youtube.com/watch?v=B9ctp-EWXaI&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=20', 2, NULL, NULL, NULL),
(47, 22, 'Break - Continue - Die - Exit', 'https://www.w3schools.com/php/php_looping_break.asp', 1, NULL, NULL, NULL),
(48, 22, 'Break - Continue - Die - Exit', 'https://www.php.net/manual/en/control-structures.break.php', 1, NULL, NULL, NULL),
(49, 23, 'Xử lý chuỗi trong PHP (Phần 1)', 'https://www.youtube.com/watch?v=Q0n21LQoapw&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=23', 2, NULL, NULL, NULL),
(50, 23, 'Xử lý chuỗi trong PHP (Phần 1)', 'https://xuanthulab.net/chuoi-ky-tu-trong-php.html', 1, NULL, NULL, NULL),
(51, 23, 'Xử lý chuỗi trong PHP (Phần 1)', 'https://freetuts.net/cac-ham-xu-ly-chuoi-trong-php-20.html', 1, NULL, NULL, NULL),
(52, 24, 'Xử lý chuỗi trong PHP (Phần 2)', 'https://www.youtube.com/watch?v=8SbNQouCFw8&list=PL8y3hWbcppt21UiT79eZNhGYHmVJVV4xx&index=24', 2, NULL, NULL, NULL),
(53, 24, 'Xử lý chuỗi trong PHP (Phần 2)', 'https://xuanthulab.net/chuoi-ky-tu-trong-php.html', 1, NULL, NULL, NULL),
(54, 24, 'Xử lý chuỗi trong PHP (Phần 2)', 'https://freetuts.net/cac-ham-xu-ly-chuoi-trong-php-20.html', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `program_user`
--

CREATE TABLE `program_user` (
  `user_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_user`
--

INSERT INTO `program_user` (`user_id`, `program_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 11, NULL, NULL, NULL),
(1, 13, NULL, NULL, NULL),
(1, 15, NULL, NULL, NULL),
(1, 16, NULL, NULL, NULL),
(1, 17, NULL, NULL, NULL),
(1, 18, NULL, NULL, NULL),
(1, 19, NULL, NULL, NULL),
(1, 21, NULL, NULL, NULL),
(1, 23, NULL, NULL, NULL),
(1, 25, NULL, NULL, NULL),
(1, 28, NULL, NULL, NULL),
(1, 29, NULL, NULL, NULL),
(1, 31, NULL, NULL, NULL),
(1, 33, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL),
(2, 3, NULL, NULL, NULL),
(2, 11, NULL, NULL, NULL),
(2, 16, NULL, NULL, NULL),
(2, 18, NULL, NULL, NULL),
(2, 28, NULL, NULL, NULL),
(2, 30, NULL, NULL, NULL),
(16, 11, NULL, NULL, NULL),
(16, 13, NULL, NULL, NULL),
(16, 15, NULL, NULL, NULL),
(16, 16, NULL, NULL, NULL),
(16, 18, NULL, NULL, NULL),
(16, 19, NULL, NULL, NULL),
(16, 20, NULL, NULL, NULL),
(17, 11, NULL, NULL, NULL),
(17, 13, NULL, NULL, NULL),
(17, 15, NULL, NULL, NULL),
(17, 16, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `course_id`, `user_id`, `review_id`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(33, 1, 2, 57, 'Thanks', '2022-08-06 15:22:37', '2022-08-06 15:22:37', NULL),
(34, 3, 4, 60, 'OK 😍', '2022-08-06 15:23:36', '2022-08-06 15:23:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `course_id`, `user_id`, `content`, `star`, `created_at`, `updated_at`, `deleted_at`) VALUES
(57, 1, 2, 'I love lofi beats. Just helps me get through the day and stay productive with my own music! Thanks for this man', 5, '2022-08-06 15:19:28', '2022-08-06 15:19:28', NULL),
(58, 3, 2, 'I so love Alan  walker  his music  is like I\'m swaing  in to new demonstration  of life and I love it❤❤❤😊', 5, '2022-08-06 15:21:39', '2022-08-06 15:21:39', NULL),
(59, 1, 4, 'Спасибо  за красивые песни  браво💯💯💯💯🧡🧡💣💥💣🌹🌹🌹🌹', 4, '2022-08-06 15:22:23', '2022-08-06 15:22:23', NULL),
(60, 3, 3, 'Maravillosa musica electrónica 😍 ALAN WALKER l la mejor musica electrónica del mundo me gusta mucho thank you 💞💞💞💞💞💞💞💞💞💞', 4, '2022-08-06 15:23:27', '2022-08-06 15:23:27', NULL),
(61, 6, 10, '아주 좋은 음악 ❤❤🧡🧡', 5, '2022-08-06 15:24:18', '2022-08-06 15:24:18', NULL),
(62, 14, 9, 'Love her voice so much!🗽', 4, '2022-08-06 15:26:09', '2022-08-06 15:26:09', NULL),
(63, 1, 1, 'hi', 5, '2022-08-08 06:22:03', '2022-08-08 06:22:03', NULL),
(65, 3, 1, 'hi', 5, '2022-08-09 02:30:45', '2022-08-09 02:30:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'JS', '2020-04-25 17:00:00', '1997-07-13 17:00:00', NULL),
(2, 'PHP', '1975-11-03 17:00:00', '1992-12-29 17:00:00', NULL),
(3, 'HTML', '1992-07-11 17:00:00', '1978-05-22 17:00:00', NULL),
(4, 'CSS', '1980-12-04 17:00:00', '2015-04-09 17:00:00', NULL),
(5, 'JAVA', '1982-04-13 17:00:00', '2014-12-11 17:00:00', NULL),
(6, 'REACT', '1999-05-24 17:00:00', '1998-12-08 17:00:00', NULL),
(7, 'C#', '1982-01-29 17:00:00', '2000-07-21 17:00:00', NULL),
(8, 'C++', '1985-01-05 17:00:00', '2007-05-21 17:00:00', NULL),
(9, 'RUBY', '2003-04-07 17:00:00', '2017-02-27 17:00:00', NULL),
(10, 'SQL', '2019-05-03 17:00:00', '2001-07-25 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `full_name`, `birthday`, `telephone`, `about`, `deleted_at`, `avatar`, `address`, `active`) VALUES
(1, 'doanbb', 'mdoan12321@gmail.com', '2022-07-22 17:25:26', '$2y$10$zj.RNq1NqS1HlWBs1ST6R.QocPWikZb23gYcdwF5cHGv6JccZXp56', 'bWcWWBorzUVCV3UhGhlS9nAMSiAwhGdOblkTlzINkm5isDwFM1b3N3eky7iR', '2016-07-22 17:25:26', '2022-08-17 10:08:39', 0, 'Nguyễn Minh Đoàn', '2001-02-08', '0962662287', 'Tôi chỉ sợ những người sống tốt với mình thôi, vì mình không biết phải trả cái tình nghĩa cho người ta thế nào cho phải. Còn với những người tệ với mình thì dễ mà, họ như thế nào thì cũng không có gì đáng để mình bận tâm', NULL, 'storage/profile/53Pv8BxQPiVvSxBEBCQ0iJN3t0WbMvv6RZqfghxp.jpg', 'Hưng Yên', 1),
(2, 'anhduc', 'murray.wendy@example.org', '2022-07-22 17:25:26', '$2y$10$CStgLRD6PIrHgxWqv5gX0ujAZgJA73pzh5FP3xjIoxPmvX3rEomHW', 'g24RdqaTrX', '2022-07-22 17:25:26', '2022-08-09 01:42:04', 1, 'Nguyễn Anh Đức', '1971-01-31', '+19495024939', 'Quae et pariatur laborum. Esse quaerat magni ut perferendis. Ducimus eos eius eveniet magni tenetur aut in sequi.', NULL, 'storage/profile/Bus0KBbVNbkIHCo7zvaUw0KO0QRiD0LfJc7KyjC7.jpg', 'Nhổn - Hà Nội', 1),
(3, 'tuananh', 'ibarrows@example.org', '2022-07-22 17:25:26', '$2y$10$qwx94vrKPDmioA7zJu5WueIUdhI9oPiWuAgnd8guZlw0H1QODK8HS', '1LRDJGXjIj', '2019-07-22 17:25:26', '2022-08-09 01:59:17', 0, 'Lê Tuấn Anh', '2015-02-18', '657-835-8848', 'Quae dolores facere et neque voluptas id eaque. Labore neque sint occaecati iusto dolorum ullam non. Itaque quos pariatur qui et voluptas et veniam.', NULL, 'storage/profile/hhhJiX0HCqzjrs0EfHJBDghzZnGgO00LnPE3sZ4u.jpg', 'Thanh Hóa', 1),
(4, 'melyssa', 'saige.ullrich@example.org', '2022-07-22 17:25:26', '$2y$10$SN51l8Bp.tVG6.YWNG9VguC8XXaGqquc7MVdQx0t.ketNA8V6tWwW', 'FZlwZBpAtB', '2022-07-22 17:25:26', '2022-08-04 01:50:45', 1, 'Evangeline Hodkiewicz', '1988-03-02', '531-599-9356', 'Ipsum at sed quo qui dignissimos accusamus in. Occaecati nisi molestiae voluptatibus voluptates et et minima facilis. Minus in quo nisi et rerum quia.', NULL, 'storage/profile/hhhJiX0HCqzjrs0EfHJBDghzZnGgO00LnPE3sZ4u.jpg', 'Hồ Chí Minh', 1),
(5, 'wcolebb', 'bernardo.wuckert@example.org', '2022-07-22 17:25:26', '$2y$10$lvepy9Y2k8mTkTgkWd7L4uCai.C.chyt2aHySbopHxcUjj9WnO./G', 'Pyz1Mxr5l5', '2022-07-22 17:25:26', '2022-08-04 01:51:37', 0, 'Victoria Ondricka', '2012-10-29', '+1-267-893-7506', 'Suscipit nihil voluptas voluptates id. Dolorem velit nihil illo cumque assumenda. Eum culpa reprehenderit nihil vitae eum consectetur impedit harum. Tempora corporis voluptas qui qui odit.', NULL, 'storage/profile/hhhJiX0HCqzjrs0EfHJBDghzZnGgO00LnPE3sZ4u.jpg', 'Hải Phòng', 1),
(6, 'fmayer', 'jstanton@example.com', '2022-07-22 17:25:26', '$2y$10$rH1Qf3RH1XdLfaK.HymN.uGiTzPHWc9NDHwHYQSpRz2MAjnYnRAoa', 'vO1l1Q1l2z', '2022-07-22 17:25:26', '2022-08-04 01:52:16', 1, 'Mrs. Raina Weimann DVM', '1998-10-03', '678-744-3466', 'Facere molestiae quo sapiente asperiores velit. Hic vero earum deserunt aut veniam earum. Odit necessitatibus accusamus deleniti.', NULL, 'storage/profile/hhhJiX0HCqzjrs0EfHJBDghzZnGgO00LnPE3sZ4u.jpg', 'Hải Dương', 1),
(7, 'adelia', 'kiehn.colton@example.org', '2022-07-22 17:25:26', '$2y$10$12E3gRqMVQEfbcqvoSnwRe8Il33Cwyvhr.BTN89ponbHLfHy59qZe', 'w1cenfgKB9', '2022-07-22 17:25:27', '2022-08-04 01:49:06', 1, 'Deshaun Welch', '2008-11-20', '785.537.4147', 'Nam et ex perspiciatis laboriosam. Laudantium aspernatur quia quis consequuntur ut vero. Quis commodi assumenda occaecati nemo. Magni nisi debitis mollitia modi laboriosam doloremque mollitia.', NULL, 'storage/profile/hhhJiX0HCqzjrs0EfHJBDghzZnGgO00LnPE3sZ4u.jpg', 'England', 1),
(8, 'greyson', 'oweber@example.org', '2022-07-22 17:25:27', '$2y$10$3gXJjxnGUqWxy6uLZj3hX.MGh6w.zNbx7K4GDwzeqNAWHh4YylNVS', 'dcUz6E8h2B', '2022-07-22 17:25:27', '2022-08-04 01:53:49', 1, 'Ms. Carmen Labadie Sr.', '2016-09-12', '(937) 764-4755', 'Explicabo dolores possimus veritatis nihil eveniet. Nihil possimus iste ratione ipsum dignissimos. Autem molestias praesentium consectetur voluptatum totam qui beatae.', NULL, 'storage/profile/hhhJiX0HCqzjrs0EfHJBDghzZnGgO00LnPE3sZ4u.jpg', 'Ấn Độ', 1),
(9, 'ashton', 'jennyfer22@example.net', '2022-07-22 17:25:27', '$2y$10$Lkj0S9d756vTdvfJKLj9geDachW8lfoUjK9QYxdwovm0C3ZYH1rB2', 'd80gKtFIvd', '2022-07-22 17:25:27', '2022-08-04 01:54:47', 0, 'Cara Pacocha', '1987-12-27', '+1.651.302.6663', 'Soluta sunt aut rerum velit enim. Perspiciatis et illo et alias aliquid amet.', NULL, 'storage/profile/hhhJiX0HCqzjrs0EfHJBDghzZnGgO00LnPE3sZ4u.jpg', 'Đà Nẵng', 1),
(10, 'legros', 'schmitt.llewellyn@example.com', '2022-07-22 17:25:27', '$2y$10$Bi/.XYlgp9wiqd7AGoAc0.vmZFmkEDhI86MJJ4Vx1agGzmb8/Bhfa', 'O1Xu8OiqbE', '2022-07-22 17:25:27', '2022-08-04 01:44:59', 1, 'Jovan Smith', '1989-02-12', '320.405.2084', 'Id temporibus distinctio autem rem tempora. Nesciunt qui repudiandae recusandae molestias fuga sed non. Possimus quia mollitia in accusamus.', NULL, 'storage/profile/hhhJiX0HCqzjrs0EfHJBDghzZnGgO00LnPE3sZ4u.jpg', 'America', 1),
(15, 'longdb', 'longdb@gmail.com', NULL, '$2y$10$JY.rwuWunGtXRGUr67m/3eqzaZyfqlMn0dXhfs5PRCL6glWN.kSC6', NULL, '2022-08-01 07:05:56', '2022-08-02 17:07:18', 1, 'Trịnh Quang Long', '2002-01-01', '(+84)123123123', NULL, NULL, 'storage/profile/hhhJiX0HCqzjrs0EfHJBDghzZnGgO00LnPE3sZ4u.jpg', 'Hà Nội', 1),
(35, 'doanhihi', 'mdoan2001@gmail.com', NULL, '$2y$10$olWWoWdUQdyGBp/FDP9Op.DcGq79i3s4sxsA.wQCpvVXm/biu65vi', NULL, '2022-08-16 14:40:36', '2022-08-17 06:40:14', 1, 'Minh Doan', '2001-02-08', '0962662287', 'Hy vọng mọi cô gái đều gặp được chàng trai trong mọi cuộc cãi vã, anh ta đều cố gắng làm hoà, nhượng bộ chỉ hy vọng được sống bình yên bên bạn. \r\nChứ không phải một người đàn ông luôn dành phần thắng trong mọi cuộc cãi vã chỉ vì tính ích kỉ của bản thân mình.', NULL, 'storage/profile/mMEfDcZaspyOS91BOYoAVAxObO4XJfj1fSbjKrrs.jpg', 'Ha Noi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE `user_activations` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `activation_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_activations`
--

INSERT INTO `user_activations` (`user_id`, `activation_code`, `created_at`, `updated_at`) VALUES
(21, 'ffb19cfa6fac699969dcecc15c8744c45c4903dbe10f3ca5f3cefaccd642ed8c', '2022-08-16 02:32:38', NULL),
(22, 'c1c7fbb3027667b4dd0800ac93837a55bc930fbb2e9ad2851aed3303ebc5c61a', '2022-08-16 02:39:46', NULL),
(25, '24120e251cfff79b042b53623bb0ce317ee3139b76e120bff1105043b7ff8348', '2022-08-16 03:03:04', NULL),
(1, '9723105cb1b70a63506ccf2c18387472581ae8d2d95299864363e6bdfcae5dc7', '2022-08-16 03:06:03', NULL),
(26, 'bc57fe1ff6cb0134484d6023b71bfbe4df561ad435d302bb40307acc8056c441', '2022-08-16 03:17:49', NULL),
(30, 'd2f379a4c4c766ef5752b5fca54516ff6ce3269f0cb8e3f29114634fdd1214df', '2022-08-16 09:17:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_tag`
--
ALTER TABLE `course_tag`
  ADD PRIMARY KEY (`tag_id`,`course_id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`user_id`,`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson_user`
--
ALTER TABLE `lesson_user`
  ADD PRIMARY KEY (`user_id`,`lesson_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_user`
--
ALTER TABLE `program_user`
  ADD PRIMARY KEY (`user_id`,`program_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`);

--
-- Indexes for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD KEY `user_activations_activation_code_index` (`activation_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
