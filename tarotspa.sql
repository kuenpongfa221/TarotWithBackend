-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-31 08:02:13
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `tarotspa`
--

-- --------------------------------------------------------

--
-- 資料表結構 `cardmeanings`
--

CREATE TABLE `cardmeanings` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `cardmeanings`
--

INSERT INTO `cardmeanings` (`id`, `img`, `title`, `contents`, `sh`) VALUES
(1, 'rws_tarot_01_magician.jpg', '魔術師', '魔術的背後付出了許多努力，才能夠看起來非常神奇', 0),
(3, 'rws_tarot_03_empress.jpg', '女皇', '女皇表示社交來去自如，玩樂的狀態好', 0),
(4, 'rws_tarot_00_fool.jpg', '愚人', '愚人象徵著，不被過去拖累，帶著嶄新眼光向前進的精神', 1),
(5, 'rws_tarot_02_high_priestess.jpg', '女祭司', '女祭司象徵著神秘，背後隱藏著龐大的知識', 1),
(6, 'cups01.jpg', '聖杯王牌', '聖杯屬水，代表沉著的情', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `href` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1,
  `main_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `footers`
--

INSERT INTO `footers` (`id`, `title`, `href`, `sh`, `main_id`) VALUES
(1, '預約占卜', '#tab-reserve', 1, 0),
(2, '牌義 • 教學', '#tab-card-meaning', 1, 0),
(3, '客戶回饋', '#tab-testimonials', 1, 0),
(4, '商品', '#tab-product', 1, 0),
(5, '服務', '#tab-service', 1, 0),
(7, 'aaa', 'bbb', 1, 1),
(8, 'ccc', 'ddd', 1, 1),
(9, 'eee', 'fff', 1, 1),
(11, 'link', 'link', 1, 2),
(12, 'link', 'link', 1, 2),
(13, 'link', 'link', 1, 2),
(14, 'link', 'link', 1, 3),
(15, 'link', 'link', 1, 3),
(16, 'link', 'link', 1, 3),
(17, 'link', 'link', 1, 4),
(18, 'link', 'link', 1, 4),
(19, 'link', 'link', 1, 4),
(20, 'link', 'link', 1, 5),
(21, 'link', 'link', 1, 5),
(22, 'link', 'link', 1, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `contents` text NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`id`, `img`, `title`, `contents`, `sh`) VALUES
(1, 'crystal-1.avif', '黑髮晶銀曜石白水晶手錬', 'Some example text. John Doe is an architect', 1),
(2, 'magicCandle.png', '魔法蠟燭', 'Some example text. John Doe is an architect', 0),
(3, 'incense.jpg', '移動式無線擴香儀', 'Some example text. John Doe is an architect', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `reserves`
--

CREATE TABLE `reserves` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `btnText` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `reserves`
--

INSERT INTO `reserves` (`id`, `img`, `title`, `btnText`, `sh`) VALUES
(1, 'tarotHeroSec.jpg', '塔羅，遇見你的內在天賦之旅', '立即預約占卜', 0),
(2, 'tarot-2.jpg', '塔羅，遇見更好的自己', '立即預約占卜', 1),
(3, '卡比.png', 'Kirby is Very Cute !!', 'We love kirby', 0),
(5, 'kirbyGIF.gif', '卡比超Q超口愛!!', '卡比-2', 0),
(9, 'goblin.jpg', '哥殺', '哥殺', 0),
(10, 'jojoGoldenWind.jpg', '黃金之風2', '黃金之風', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `title` text NOT NULL,
  `contents` text NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `services`
--

INSERT INTO `services` (`id`, `img`, `title`, `contents`, `sh`) VALUES
(1, 'tarot-2.jpg', '塔羅', '療育 你的內在小孩', 0),
(2, 'ziWei.webp', '紫微斗數', '遇見更好的自己', 1),
(3, 'name-2.jpg', '姓名學', '取名與改名', 1),
(4, 'wands04.jpg', '塔羅', '療育 你的內在小孩', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `name` text NOT NULL,
  `jbTitle` text NOT NULL,
  `contents` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `testimonials`
--

INSERT INTO `testimonials` (`id`, `img`, `name`, `jbTitle`, `contents`, `sh`) VALUES
(1, 'seventhPrince.jpg', '第七王子', '轉生者', '魔法賽高', 1),
(2, 'instantDeath.jpg', '高遠夜霧', 'AQ', '秒殺外掛!', 1),
(3, 'orphans.jpg', '鐵血的孤兒', '鐵血的孤兒', '鐵血的孤兒', 1),
(4, 'avatar-1.jpg', 'Dianne Russell', 'UX Architect', 'Amazing theme ipsum dolor sit amet consectetur adipisicing elit. Assumenda eum animi rerum ipsam impedit dicta voluptatem.', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `cardmeanings`
--
ALTER TABLE `cardmeanings`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cardmeanings`
--
ALTER TABLE `cardmeanings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
