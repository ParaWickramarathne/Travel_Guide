-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2024 at 09:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `name` varchar(100) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`name`, `destination`, `details`, `image`) VALUES
('Bomburu Ella Waterfall', 'NuwaraEliya', 'Bomburu Ella, also known as Perawella Falls, is a waterfall at Uva-Paranagama Divisional Secretariat of Sri Lanka. It is located near the border of Nuwara Eliya and Badulla districts, approximately 15 km from Welimada town.', 'n11.jpg'),
('Dehiwala-Mount Lavinia', 'Colombo', 'Dehiwala-Mount Lavinia, located in Sri Lanka, is renowned for its stunning coastline, vibrant culture, and historical landmarks. Visitors flock to its pristine beaches, explore ancient temples, and indulge in delectable seafood. With its blend of natural beauty and rich heritage, it offers a memorable experience.', 'c15.jpg'),
('Galle Fort', 'Galle', 'Galle Fort, a UNESCO World Heritage Site in Sri Lanka, is a testament to the island&#39;s colonial past. Enclosed by sturdy ramparts, it boasts charming cobblestone streets, historic buildings, and vibrant culture, making it a captivating destination for travelers.', 'g1.jpg'),
('Horton Plains', 'NuwaraEliya', 'Horton Plains in Sri Lanka is a mesmerizing national park, famed for its scenic beauty and biodiversity. Visitors marvel at its rolling grasslands, dense forests, and iconic World\'s End cliff, making it a haven for nature lovers and hikers alike.', 'n8.jpg'),
('Independence Square', 'Colombo', 'Independence Square, situated in Colombo, Sri Lanka, is a significant landmark commemorating the country\'s independence from British rule in 1948. It features a ceremonial arcade surrounded by lush greenery, ideal for leisurely strolls and reflection.', 'c4.jpg'),
('Kandy Lake', 'Kandy', 'Kandy Lake, nestled in the heart of Sri Lanka&#39;s cultural capital, is a serene oasis encircled by lush greenery. Reflecting the charm of the surrounding hills and dotted with picturesque islands, it offers a tranquil escape for visitors and locals alike.', 'k4.jpg'),
('Kellani Temple', 'Colombo', 'Kelaniya Temple, located in Sri Lanka, is a sacred Buddhist site steeped in history and spirituality. Adorned with intricate architecture and vibrant murals, it offers visitors a serene space for contemplation and reverence.', 'c12.jpg'),
('Lighthouse - Galle', 'Galle', 'The Galle Lighthouse, perched majestically on the southwestern coast of Sri Lanka, stands as a beacon of maritime history. This iconic structure, dating back to 1848, guides ships safely into the historic port city of Galle.', 'g2.jpg'),
('Lion&#39;s Paws', 'Sigiriya', 'Lion&#39;s Paws are the iconic remnants of the grand entrance to Sigiriya Rock Fortress in Sri Lanka. Carved into massive stone paws, they symbolize the historic grandeur of the ancient kingdom and attract countless visitors annually.', 's5.jpg'),
('Lotus Tower', 'Colombo', 'The Lotus Tower, located in Colombo, Sri Lanka, is an iconic landmark standing tall at 350 meters. It serves as a telecommunications and observation tower, offering panoramic views of the cityscape.', 'c2.jpg'),
('Minneriya National Park', 'Sigiriya', 'The Minneriya National Park is just 30 minutes away from Sigiriya. It is famous for its herds of elephants migrating for food, water, and shelter and forming a \'gathering\' that can be witnessed by the visitors. The dry season is the best time to visit this place, as the majestic elephants migrate to the Minneriya Tank for water', 's8.jpg'),
('Peradeniya Garden', 'Kandy', 'Peradeniya Botanical Garden in Sri Lanka is a botanical paradise spread over 147 acres. Established in 1821, it showcases a diverse collection of plants, including orchids, palms, and spices. Visitors admire its stunning landscapes, giant trees, and the enchanting ambiance, making it a must-visit destination.', 'k2.jpg'),
('Pidurangala Rock', 'Sigiriya', 'Pidurangala Rock in Sri Lanka offers stunning panoramic views, adjacent to Sigiriya. Ideal for sunrise hikes, it attracts adventure enthusiasts seeking breathtaking landscapes and ancient ruins exploration.', 's7.jpg'),
('Polonnaruwa Vatadage', 'Anuradhapura&Polonna', 'It also known as a dage, thupagara and a cetiyagara. Although it may have had some Indian influence, it is a structure that is more or less unique to the architecture of ancient Sri Lanka.', 'a3.jpg'),
('Samadhi Buddha Statue', 'Anuradhapura&Polonna', 'This statue is 7 feet 3 inches in height and carved from dolomite marble.. It is similar to the Toluvila statue from the same period. It is similar to Gupta period Buddha images, it is believed that originally the image was gilded and had inlaid eyes made of precious gems.', 'a2.jpg'),
('Seetha Amman Temple', 'NuwaraEliya', 'Seetha Amman Temple, nestled in the lush hills of Sri Lanka, is a revered Hindu temple dedicated to Goddess Sita. Believed to be the site where she was held captive by Ravana, it exudes spiritual serenity and attracts devotees seeking blessings and inner peace.', 'n3.jpg'),
('Sri Maha Bodhi ', 'Anuradhapura&Polonna', 'Sri Maha Bodhi in Anuradhapura, Sri Lanka, is one of the oldest living trees globally, revered by Buddhists as the sacred fig tree under which Lord Buddha attained enlightenment. A symbol of spiritual significance, it draws pilgrims seeking blessings and tranquility.', 'a1.jpg'),
('Temple of The Tooth', 'Kandy', 'The Temple of the Tooth, located in Sri Lanka&#39;s historic city of Kandy, houses the revered relic of the Buddha&#39;s tooth. A sacred pilgrimage site, it embodies centuries of rich cultural heritage and spiritual significance.', 'k1.jpg'),
('Unawatuna Beach', 'Galle', 'Unawatuna Beach in Sri Lanka is renowned for its picturesque scenery, golden sands, and clear turquoise waters. It\'s a popular destination for both locals and tourists, offering a range of activities like snorkeling, diving, and surfing.', 'g11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `user_type`) VALUES
('admin1', 'admin@1', '698d51a19d8a121ce581499d7b701668', 'admin'),
('admin2', 'admin@2', 'bcbe3365e6ac95ea2c0343a2395834dd', 'admin'),
('admin3', 'admin@3', '310dcbbf4cce62f762a2aaa148d556bd', 'admin'),
('User1', 'user@1', '698d51a19d8a121ce581499d7b701668', 'user'),
('user2', 'user@2', 'bcbe3365e6ac95ea2c0343a2395834dd', 'user'),
('user3', 'user@3', '310dcbbf4cce62f762a2aaa148d556bd', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
