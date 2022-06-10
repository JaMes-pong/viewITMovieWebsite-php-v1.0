-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `moviedb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `running_time` time NOT NULL,
  `release_date` date NOT NULL,
  `genre` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `description`, `running_time`, `release_date`, `genre`, `image`) VALUES
(1, 'Aladdin', 'A kind-hearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.', '02:08:00', '2019-06-22', 'Adventure', 'poster/Aladdin.jpg'),
(2, 'Angel Has Fallen', 'Mike Banning is framed for the attempted assassination of the President and must evade his own agency and the FBI as he tries to uncover the real threat.', '02:01:00', '2019-08-21', 'Action', 'poster/Angel_Has_Fallen.jpg'),
(3, 'Anna', 'Beneath Anna Poliatova\'s striking beauty lies a secret that will unleash her indelible strength and skill to become one of the world\'s most feared government assassins.', '01:59:00', '2019-06-19', 'Action', 'poster/Anna.jpg'),
(4, 'Avengers: Endgame', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.', '03:01:00', '2019-04-24', 'Action', 'poster/Avengers_Endgame.jpg'),
(5, 'Charlie\'s Angles', 'When a young systems engineer blows the whistle on a dangerous technology, Charlie\'s Angels are called into action, putting their lives on the line to protect us all.', '01:58:00', '2019-11-14', 'Adventure', 'poster/Charlie\'s_Angles.jpg'),
(6, 'Fast & Furious Presents: Hobbs & Shaw', 'Lawman Luke Hobbs and outcast Deckard Shaw form an unlikely alliance when a cyber-genetically enhanced villain threatens the future of humanity.', '02:17:00', '2019-07-31', 'Action', 'poster/Fast_Furious_Presents_Hobbs_Shaw.jpg\r\n'),
(7, 'Ford v Ferrari', 'American car designer Carroll Shelby and driver Ken Miles battle corporate interference, the laws of physics and their own personal demons to build a revolutionary race car for Ford and challenge Ferrari at the 24 Hours of Le Mans in 1966.', '02:32:00', '2019-11-28', 'Biography', 'poster/Ford_v_Ferrari.jpg'),
(8, 'Frozen II', 'Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land. They set out to find the origin of Elsa\'s powers in order to save their kingdom.', '01:43:00', '2019-11-21', 'Animation', 'poster/Frozen2.jpg'),
(9, 'Joker', 'In Gotham City, mentally-troubled comedian Arthur Fleck is disregarded and mistreated by society. He then embarks on a downward spiral of revolution and bloody crime. This path brings him face-to-face with his alter-ego: \"The Joker\".', '02:02:00', '2019-10-03', 'Crime', 'poster/Joker.jpg'),
(10, 'Jumanji: The Next Level', 'In Jumanji: The Next Level, the gang is back but the game has changed. As they return to rescue one of their own, the players will have to brave parts unknown from arid deserts to snowy mountains, to escape the world\'s most dangerous game.', '01:54:00', '2019-12-04', 'Adventure', 'poster/Jumanji_The_Next_Level.jpg\r\n'),
(11, 'Rambo: Last Blood', 'Rambo must confront his past and unearth his ruthless combat skills to exact revenge in a final mission.', '02:29:00', '2019-09-20', 'Action', 'poster/Rambo_Last_Blood.jpg'),
(12, 'Spider-Man: Far From Home', 'Following the events of Avengers: Endgame (2019), Spider-Man must step up to take on new threats in a world that has changed forever.', '02:09:00', '2019-07-03', 'Action', 'poster/Spider_Man_Far_from_Home.jpg\r\n'),
(13, 'The Irishman', 'A mob hitman recalls his possible involvement with the slaying of Jimmy Hoffa.', '03:29:00', '2019-11-27', 'Crime', 'poster/The_Irishman.jpg\r\n'),
(14, 'The Lion King', 'After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.', '01:58:00', '2019-07-17', 'Animation', 'poster/The_Lion_King.jpg'),
(15, 'Toy Story 4', 'When a new toy called \"Forky\" joins Woody and the gang, a road trip alongside old and new friends reveals how big the world can be for a toy.', '01:40:00', '2019-06-20', 'Animation', 'poster/Toy_Story_4.jpg'),
(16, 'Toy Story 3', 'The toys are mistakenly delivered to a day-care center instead of the attic right before Andy leaves for college, and it\'s up to Woody to convince the other toys that they weren\'t abandoned and to return home.', '01:43:00', '2010-06-16', 'Animation', 'poster/Toy_Story_3.jpg'),
(17, 'The Dark Knight', 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.', '02:32:00', '2008-07-16', 'Action', 'poster/The_Dark_Knight.jpg'),
(18, 'Mr Bean\'s Holiday', 'Mr. Bean wins a trip to Cannes where he unwittingly separates a young boy from his father and must help the two come back together. On the way he discovers France, bicycling, and true love, among other things.', '01:30:00', '2007-06-01', 'Comedy', 'poster/Mr_Bean\'s_Holiday.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `ratings`
--

CREATE TABLE `ratings` (
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `ratings`
--

INSERT INTO `ratings` (`user_id`, `movie_id`, `rating`) VALUES
(1, 1, 4),
(1, 2, 2),
(1, 7, 5),
(1, 13, 2),
(1, 10, 3),
(1, 9, 4),
(1, 17, 4),
(1, 3, 4),
(1, 4, 5),
(1, 6, 4),
(1, 8, 5),
(1, 11, 3),
(1, 12, 4),
(1, 14, 1),
(1, 15, 4),
(1, 16, 4),
(2, 1, 5),
(2, 7, 2),
(2, 14, 4),
(2, 16, 0),
(2, 15, 4),
(2, 17, 4),
(2, 4, 5),
(2, 6, 3),
(3, 1, 2),
(3, 15, 3),
(3, 16, 4),
(3, 11, 3),
(3, 7, 1),
(3, 8, 5),
(3, 13, 0),
(3, 2, 3),
(3, 10, 3),
(3, 12, 3),
(4, 2, 4),
(4, 8, 2),
(4, 6, 3),
(4, 11, 5),
(4, 17, 3),
(4, 15, 3),
(4, 16, 4),
(4, 3, 2),
(4, 7, 3),
(4, 1, 4),
(4, 12, 4),
(5, 2, 4),
(5, 1, 3),
(5, 12, 2),
(5, 16, 3),
(5, 13, 4);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'James', '180609303', 'testest@gmail.com'),
(2, 'James75', '96637441', 'testest01@gmail.com'),
(3, 'Bonnie', '65142365', 'testest03@gmail.com'),
(4, 'JPM75', '180609303#', 'testest04@gmail.com'),
(5, 'JamesPong', '180609303-', 'testest0@gmail.com');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
