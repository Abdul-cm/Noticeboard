-- phpMyAdmin SQL Dump
-- version 5.6.38
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 10:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noticeboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(5) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `title` varchar(120) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `content` mediumtext,
  `image` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `uid`, `title`, `created`, `content`, `image`) VALUES
(1, 14, 'Lost grey tabby dog 1', '2021-11-01 05:46:39', 'My grey and white tabby cat when missing on Tuesday this week. Last seen in the city centre park. She should be wearing a red collar with a bell. Quite shy so will run away when approached. Please contact me if you see her:  1', 'grey-cat.png'),
(2, NULL, 'Classic Car Volkswagen Golf Mk1 1.5 litre model - £12500 (1983 model)', '2022-02-20 13:18:10', 'Classic Car Volkswagen Golf Mk1 1.5L 1983 - £12,750 in Sky Blue.\r\nThree owners so far, full service history\r\nNo dents. Small scratches on front bumper and tyres need replacing in next year\r\nMileage: 98,761\r\nMax speed: 96.3–98.2 mph\r\nEngine: 1,457 cc \r\nGearBox: 4 Speed Manual', 'vw-golf-blue.png'),
(3, 8, 'Great one bedroom flat for rent', '2022-01-03 03:44:44', 'The property  benefits from a well cared for communal entrance with a lift to the 25th floor, the entrance hall having useful storage.\nAn open plan 30.4\'ft lounge/contemporary kitchen with 5 year old integrated appliances but no microwave. There is a small veranda off the living room. One double bedroom, storage cupboard, and 1 en-suite bathroom. Sadly no on-site parking. £650 per month in cash only. Call if interested.', 'apartment-1bed.jpg'),
(4, 10, 'Piano and keyboard lessons', '2021-10-15 11:52:33', 'Do you want to learn how to play the piano or improve what you can do already? I can teach and provide lessons up to Grade 8 in piano or keyboards. I can travel to your home or you can come to me for lessons. Lessons cost £30 per hour. ', 'piano-23.jpg'),
(5, 25, 'Wanted West Ham Tickets at Everton - £100', '2022-01-05 08:37:17', 'Wanted: two Home End tickets for West Ham v Everton 2nd April 2022 - Face to Face Exchange please. Will pay more for pitch-side seats, up to £150.', 'Westham-Ev.jpg'),
(6, 25, 'Wanted Brentford Tickets at West Ham - £160', '2022-01-05 08:42:29', 'Wanted: four Away End tickets for Brentford versus West Ham on 9th April 2022 - Face to Face Exchange please.', 'ticket-f.jpg'),
(7, 17, 'Security Operative Needed x 3', '2021-12-01 23:38:40', 'Seeking THREE experienced security individuals to work Friday and Saturday evening shifts at local night club. Potential candidates need to have some experience and current certification for door security staff. Should be able to take orders and execute them ASAP. Good communication skills are a must. ', 'security.jpg'),
(8, 4, 'Office Chair for Sale. £15.', '2022-01-05 23:17:15', 'Black office chair with fake leather covering - pickup/cash only', 'office-chair-blk.jpg'),
(9, 4, 'Three seater fabric sofa in green. FREE', '2022-01-05 23:23:00', 'Green sofa available for free. Some small marks and tears from pets but still comfortable. Need this gone by Saturday! Free to anyone who can collect it!', 'green-sofa.jpg'),
(10, 19, 'jlkjl', '2021-11-27 20:21:12', 'The specs for my PC are as follows:\r\nIntel I5-7500,\r\nAMD Radeon RX 580x 8 GB VRAM,\r\nCorsair 16 GB RAM,\r\nCooler Master AIO Liquid Cooler,\r\n2 TB SSD,\r\nAcer CD-DVD drive,\r\nCooler Master case and RGB fan kit,\r\nWindows 10', 'memory.jpg'),
(11, NULL, 'Dinner at Ramirez\'s Steakhouse and Bar', '2021-11-05 10:42:14', 'Ramirez\'s the premier downtown steak and grill restaurant, is open every Friday and Saturday night for Prepaid Dinner. Three affordable fixed menus: £25, £40, or £55 per person. Delivery and takeout also available. Non-communal private tables for you and your family and friends.', 'steak house.jpg'),
(12, 8, 'Wallet Found outside train station', '2022-01-16 23:49:34', 'Found wallet on the pavement just outside the central train station! ID and cards still in there, would like to return it. There is also £40 in cash. Brown leather with clasp.', 'brown-found-wallet.jpg'),
(13, 3, 'Affordable Cleaning for your home or small office', '2021-09-19 07:01:12', 'Personable professional cleaner, very reliable and thorough with over 10 years of experience. Happy to deal with cleaning, laundry and ironing. References are available. Has own transportation. Please email or call for an estimate.', 'cleaner.jpg'),
(14, 10, 'Car Wash workers needed', '2022-01-10 13:38:00', 'Car wash company E-Z-Clean-4-U in the finance district is looking for workers to vacuum, brush, and dry cars for the 7:30am-2pm shift. Experience is preferred but not required. Please reply with your name and phone number. Pay is £7 per hour with potential for tips from customers. Must have own sponge.', 'car-wash.jpg'),
(15, 13, 'Looking to rent a garage or 24 hour access storage space', '2021-12-29 17:22:18', 'I\'m looking to rent a garage or similar sized storage space.I would prefer if it has electricity. Willing to pay up to £100 per month. Good security and lighting outside is a must.', 'Garage.jpg'),
(16, 2, 'Casio digital watch with black strap - 40 ono', '2021-11-28 05:51:50', 'Brand new casio watch for sale. All the usual features: stopwatch, alarm, etc. Cash pickup only.', 'digital-watch.jpg'),
(17, 5, 'Wanted: Les Paul Custom guitar (1998)', '2021-11-09 07:28:02', 'Wanted: 1998 Gibson Les Paul Custom in Wine Red. Willing to pay up to £2,200', 'guitar.jpg'),
(18, 3, 'Graphic Designer needed', '2021-12-09 04:02:46', 'Small company looking to re-brand. Requires strong understanding and implementation of all necessary design software and already has access to this. Turnaround is 2 months. Will pay up to £3000 for complete rebranding work.', 'graphics-designer.jpg'),
(19, NULL, 'Looking to rent a room', '2022-01-06 01:28:20', 'I\'m looking to rent a room in a city suburb or on the outskirts. Can be short or long term. When responding, please include town, price, and contact phone number. Please be pet friendly. No texts, no emails. Voice calls only on 01234 567890.', 'room-for-rent.jpg'),
(20, 12, 'Xbox 360 w/15 games & 2 controllers - £180', '2020-07-15 14:47:16', 'Xbox 360 Console; two controllers, power brick, HDMI cable, 15 games. Original box, instructions and all components included. Used but all still working. Selling everything for £180.', 'xbox-360.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) DEFAULT NULL,
  `AdminPassword` varchar(255) DEFAULT NULL,
  `AdminEmailId` varchar(255) DEFAULT NULL,
  `userType` int(11) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `userType`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', 'e3b534c2c40e8c5d2010225be4a70978', 'admin@example.com', 1, '2021-05-26 18:30:00', '2022-02-22 21:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `firstname` varchar(64) DEFAULT NULL,
  `lastname` varchar(64) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `age` smallint(3) DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `county` varchar(40) DEFAULT NULL,
  `country` varchar(60) DEFAULT NULL,
  `phone` varchar(24) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `firstname`, `lastname`, `email`, `age`, `city`, `county`, `country`, `phone`, `regDate`) VALUES
(2, 'silverpanda145', 'semper', 'Mathew', 'Carter', 'mathew.carter@example.com', 25, 'Athlone', 'Roscommon', 'Ireland', '612122816', '2022-02-16 17:17:24'),
(3, 'angrycat29', 'amber1', 'Larissa', 'Souza', 'larissa.souza@example.com', 74, 'Uberaba', 'Minas Gerais', 'Brazil', '9568171731', '2022-02-16 17:17:24'),
(4, 'heavycat533', 'golden', 'Ceylan', 'Akyuz', 'ceylan.akyuz@example.com', 72, 'Sinop', 'Sinop', 'Turkey', '6198082101', '2022-02-16 17:17:24'),
(5, 'silverkoala474', 'forest', 'Justin', 'Anderson', 'justin.anderson@example.com', 28, 'St. Antoine', 'New Brunswick', 'Canada', '3155066199', '2022-02-16 17:17:24'),
(6, 'ticklishlion155', 'crystal', 'Domingo', 'Navarro', 'domingo.navarro@example.com', 69, 'Sevilla', 'Galicia', 'Spain', '920829274', '2022-02-16 17:17:24'),
(7, 'organicbear21', 'diva66', 'Emily', 'Campbell', 'emily.campbell@example.com', 22, 'Carleton', 'Ontario', 'Canada', '9286555750', '2022-02-16 17:17:24'),
(8, 'redmouse5', 'simon', 'Jeppe', 'Petersen', 'jeppe.petersen@example.com', 39, 'Dalmose', 'Zealand', 'Denmark', '78043558', '2022-02-16 17:17:24'),
(9, 'tinyfish499', 'coolhand', 'Bob', 'Wright', 'bob.wright@example.com', 72, 'Peterborough', 'Staffordshire', 'United Kingdom', '1768419199', '2022-02-16 17:17:24'),
(10, 'lazybird447', 'ireland', 'Benjamin', 'Olsen', 'benjamin.olsen@example.com', 57, 'Aalborg', 'Syddanmark', 'Denmark', '37289080', '2022-02-16 17:17:24'),
(11, 'heavydog676', 'goldberg', 'Isaac', 'Coort', 'isaac.coort@example.com', 49, 'Eemdijk', 'Groningen', 'Netherlands', '2298015724', '2022-02-16 17:17:24'),
(12, 'goldenleopard838', 'telephone8', 'Jared', 'Stephens', 'jared.stephens@example.com', 76, 'Traralgon', 'Northern Territory', 'Australia', '618565260', '2022-02-16 17:17:24'),
(13, 'ticklishostrich664', 'modles', 'Charline', 'Leclerc', 'charline.leclerc@example.com', 19, 'Rouen', 'Normandy', 'France', '276350589', '2022-02-16 17:17:24'),
(14, 'bigfish970', 'fearless', 'Niklas', 'Remes', 'niklas.remes@example.com', 33, 'Ruokolahti', 'Northern Savonia', 'Finland', '8009050', '2022-02-16 17:17:24'),
(15, 'ticklishlion330', 'pelican', 'Xavier', 'Wong', 'xavier.wong@example.com', 65, 'Jasper', 'Nunavut', 'Canada', '9459097456', '2022-02-16 17:17:24'),
(16, 'heavydog654', '29ying', 'Minttu', 'Justi', 'minttu.justi@example.com', 43, 'Tampere', 'Pirkanmaa', 'Finland', '2834349', '2022-02-16 17:17:24'),
(17, 'yellowfish7', 'sigma', 'Rose', 'Duncan', 'rose.duncan@example.com', 50, 'Winchester', 'Dorset', 'United Kingdom', '1387399340', '2022-02-16 17:17:24'),
(18, 'happygorilla82', 'russell', 'Clarence', 'Henry', 'clarence.henry@example.com', 49, 'Tralee', 'Cork City', 'Ireland', '412734696', '2022-02-16 17:17:24'),
(19, 'biglion859', 'disney', 'Colleen', 'Simmmons', 'colleen.simmmons@example.com', 60, 'Eugene', 'New Mexico', 'United States', '8686197734', '2022-02-16 17:17:24'),
(20, 'goldenostrich2', 'potato', 'Charles', 'Silva', 'charles.silva@example.com', 40, 'Salisbury', 'Mid Glamorgan', 'United Kingdom', '179881228', '2022-02-16 17:17:24'),
(21, 'heavyladybug883', 'trace', 'Cassandra', 'Davis', 'cassandra.davis@example.com', 41, 'Baton Rouge', 'Florida', 'United States', '5205928477', '2022-02-16 17:17:24'),
(22, 'ticklishgoose999', 'dominic**', 'Josefine', 'Berg', 'josefine.berg@example.com', 48, 'Esbjerg', 'Jutland', 'Denmark', '94692973', '2022-02-16 17:17:24'),
(23, 'beautifulleopard17', 'review', 'Nicete', 'Costa', 'nicete.costa@example.com', 26, 'Feira de Santana', 'Minas Gerais', 'Brazil', '1364358168', '2022-02-16 17:17:24'),
(24, 'organicleopard51', 'never', 'Genesis', 'Armstrong', 'genesis.armstrong@example.com', 47, 'Albury', 'Victoria', 'Australia', '612674988', '2022-02-16 17:17:24'),
(25, 'thundercat21', 'punkling', 'Juliette', 'Campbell', 'juliette.campbell@example.com', 59, 'Tilbury', 'Essex', 'United Kingdom', '7941599883', '2022-02-16 17:17:24'),
(26, 'admin', 'banner21', 'Caroline', 'Edwards', 'admin@example.com', 42, 'Truth or Consequences', 'New Mexico', 'USA', '1746797795', '2022-02-16 17:17:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AdminUserName` (`AdminUserName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
