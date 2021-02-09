-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2021 at 10:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fesdis`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `page_id`) VALUES
(1, 'مليح زعما ؟', 7, 0),
(2, 'Salama Salam\r\n', 7, 0),
(3, 'Dude ', 7, 0),
(4, 'اححح فيلم يقعر ان شاء الله يديرو جزء 2', 7, 0),
(5, 'وااااااااااااااااااااااااااااااااااااااااااااااو', 67, 0),
(6, 'tenet test', 7, 52),
(7, 'tenet test', 7, 52),
(8, 'A7777777 Ya93ar\r\n', 7, 98),
(9, 'فيلم هايل 🖤🖤🖤🖤', 72, 98),
(10, 'هخخخخ راحو 2 سوايع باطل ', 72, 25),
(11, 'علاه ؟ عجبني انا مليح \r\n', 7, 25),
(12, 'هذا فيلم ؟ تتمسخر بينا ؟', 7, 10),
(13, 'احسن لعبة في العالم هي فري فاير . فري فاير دش دش ', 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `film_name` varchar(255) NOT NULL,
  `film_image` varchar(255) DEFAULT NULL,
  `film_story` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `film_name`, `film_image`, `film_story`) VALUES
(1, 'Eternal.Sunshine.Of.The.Spotless.Mind.2004.BluRay.720p.mp4', 'external.jpg', 'يصاب جويل باريش (جيم كاري) بصدمة كبيرة تفطر فؤاده، يكتشف أن حبيبته السابقة كليمنتي (كيت وينسلت) التي تركته وحيدًأ قد أقدمت على عملية غريبة لتمسح كل ذكرياتها عنه.يصاب جويل باليأس والإحباط، ويقرر أن يفعل المثل ويقوم بحذف كل ذكرياته معها من رأسه.يشاهد جويل ذكرياته وهي تتلاشي في أثناء العملية، ليكتشف حينها أنه مازال يحبها ويذوب في غرامها.ويدرك متأخرًا أن الأوان قد فات للتراجع عن ذلك القرار المتسرع.'),
(2, 'Extraction.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(3, 'Fatman.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(4, 'Fearless.2006.BluRay.720p.mp4', '', 'لا توجد قصة'),
(5, 'Fight.Club.1999.BluRay.720p.mp4', '', 'لا توجد قصة'),
(6, 'Flight.2012.BluRay.720p.mp4', '', 'لا توجد قصة'),
(7, 'Flu.2013.BluRay.720p.mp4', '', 'لا توجد قصة'),
(8, 'Ford.V.Ferrari.2019.BluRay.720p.mp4', '', 'لا توجد قصة'),
(9, 'Forrest.Gump.1994.BluRay.720p.mp4', '', 'لا توجد قصة'),
(10, 'Freaky.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(11, 'Get.Out.2017.BluRay.720p.mp4', '', 'لا توجد قصة'),
(12, 'Gone.Girl.2014.BluRay.720p.mp4', '', 'لا توجد قصة'),
(13, 'Gothika.2003.BluRay.720p.mp4', '', 'لا توجد قصة'),
(14, 'Green.Book.2018.BluRay.720p.mp4', '', 'لا توجد قصة'),
(15, 'Greyhound.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(16, 'Hacksaw.Ridge.2016.BluRay.720p.mp4', '', 'لا توجد قصة'),
(17, 'Honest.Thief.2020.BluRay.720p.mp4', '', 'لا توجد قصة'),
(18, 'How.It.Ends.2018.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(19, 'I.See.You.2019.BluRay.720p.mp4', '', 'لا توجد قصة'),
(20, 'Inception.2010.BluRay.720p.mp4', '', 'لا توجد قصة'),
(21, 'Inglourious.Basterds.2009.BluRay.720p.mp4', '', 'لا توجد قصة'),
(22, 'Interstellar.2014.BluRay.720p.mp4', '', 'لا توجد قصة'),
(23, 'Knives.Out.2019.BluRay.720p.mp4', '', 'لا توجد قصة'),
(24, 'Leon.The.Professional.1994.BluRay.720p.mp4', '', 'لا توجد قصة'),
(25, 'Live.Free.Or.Die.Hard.2007.BluRay.720p.mp4', '', 'لا توجد قصة'),
(26, 'Mad.Max.Fury.Road.2015.BluRay.720p.mp4', '', 'لا توجد قصة'),
(27, 'Mirrors.2008.BluRay.720p.mp4', '', 'لا توجد قصة'),
(28, 'Mortal.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(29, 'Most.Wanted.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(30, 'Never.Back.Down.2008.BluRay.720p.mp4', '', 'لا توجد قصة'),
(31, 'Ninja.2009.BluRay.720p.mp4', '', 'لا توجد قصة'),
(32, 'No.Country.For.Old.Men.2007.BluRay.720p.mp4', '', 'لا توجد قصة'),
(33, 'No.Escape.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(34, 'Once.Upon.A.Time.In.Hollywood.2019.BluRay.720p.mp4', '', 'لا توجد قصة'),
(35, 'Prisoners.2013.BluRay.720p.mp4', '', 'لا توجد قصة'),
(36, 'Redemption.2013.BluRay.720p.mp4', '', 'لا توجد قصة'),
(37, 'Rising.Phoenix.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(38, 'Run.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(39, 'Run.All.Night.2015.BluRay.720p.mp4', '', 'لا توجد قصة'),
(40, 'Saving.Private.Ryan.1998.BluRay.720p.mp4', '', 'لا توجد قصة'),
(41, 'Se7en.1995.BluRay.720p.mp4', '', 'لا توجد قصة'),
(42, 'Shooting.Heroin.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(43, 'Shooting.Heroin.2020.WEB-DL.1080p.mp4', '', 'لا توجد قصة'),
(44, 'Sicario.2015.BluRay.720p.mp4', '', 'لا توجد قصة'),
(45, 'Skyfall.2012.BluRay.720p.mp4', '', 'لا توجد قصة'),
(46, 'Southpaw.2015.BluRay.720p.mp4', '', 'لا توجد قصة'),
(47, 'Spenser.Confidential.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(48, 'Split.2017.BluRay.720p.mp4', '', 'لا توجد قصة'),
(49, 'Spotlight.2015.BluRay.720p.mp4', '', 'لا توجد قصة'),
(50, 'Status.Update.2018.BluRay.720p.mp4', '', 'لا توجد قصة'),
(51, 'Taxi.Driver.1976.BluRay.720p.mp4', '', 'لا توجد قصة'),
(52, 'Tenet.2020.BluRay.720p.mp4', '', 'لا توجد قصة'),
(53, 'The.Art.Of.Getting.By.2011.BluRay.720p.mp4', '', 'لا توجد قصة'),
(54, 'The.Beast.2019.BluRay.720p.mp4', '', 'لا توجد قصة'),
(55, 'The.Collector.2009.BluRay.720p.mp4', '', 'لا توجد قصة'),
(56, 'The.Curious.Case.Of.Benjamin.Button.2008.BluRay.720p.mp4', '', 'لا توجد قصة'),
(57, 'The.Departed.2006.BluRay.720p.mp4', '', 'لا توجد قصة'),
(58, 'The.Devil.All.The.Time.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(59, 'The.Equalizer.2014.BluRay.720p.mp4', '', 'لا توجد قصة'),
(60, 'The.Gangster.The.Cop.The.Devil.2019.BluRay.720p.mp4', '', 'لا توجد قصة'),
(61, 'The.Godfather.1972.BluRay.720p.mp4', '', 'لا توجد قصة'),
(62, 'The.Godfather.Part.II.1974.BluRay.720p.mp4', '', 'لا توجد قصة'),
(63, 'The.Godfather.Part.III.1990.BluRay.720p.mp4', '', 'لا توجد قصة'),
(64, 'The.Green.Mile.1999.BluRay.720p.mp4', '', 'لا توجد قصة'),
(65, 'The.Hangover.Part.II.2011.BluRay.720p.mp4', '', 'لا توجد قصة'),
(66, 'The.Host.2006.BluRay.720p.mp4', '', 'لا توجد قصة'),
(67, 'The.Invisible.Man.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(68, 'The.Man.Standing.Next.2020.BluRay.720p.mp4', '', 'لا توجد قصة'),
(69, 'The.Martian.2015.BluRay.720p.mp4', '', 'لا توجد قصة'),
(70, 'The.Mist.2007.BluRay.720p.mp4', '', 'لا توجد قصة'),
(71, 'The.Owners.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(72, 'The.Platform.2019.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(73, 'The.Pool.2018.BluRay.720p.mp4', '', 'لا توجد قصة'),
(74, 'The.Purge.Anarchy.2014.BluRay.720p.mp4', '', 'لا توجد قصة'),
(75, 'The.Raid.2.2014.BluRay.720p.mp4', '', 'لا توجد قصة'),
(76, 'The.Raid.2011.BluRay.720p.mp4', '', 'لا توجد قصة'),
(77, 'The.Revenant.2015.BluRay.720p.mp4', '', 'لا توجد قصة'),
(78, 'The.Ritual.2017.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(79, 'The.Social.Dilemma.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(80, 'The.Texas.Chainsaw.Massacre.2003.BluRay.720p.mp4', '', 'لا توجد قصة'),
(81, 'The.Tournament.2009.BluRay.720p.mp4', '', 'لا توجد قصة'),
(82, 'The.Uninvited.2009.BluRay.720p.mp4', '', 'لا توجد قصة'),
(83, 'The.Words.2012.BluRay.720p.mp4', '', 'لا توجد قصة'),
(84, 'Train.To.Busan.2.2020.BluRay.720p.mp4', '', 'لا توجد قصة'),
(85, 'Train.To.Busan.2016.BluRay.720p.mp4', '', 'لا توجد قصة'),
(86, 'Truth.Or.Dare.2018.BluRay.720p.mp4', '', 'لا توجد قصة'),
(87, 'Unleashed.2005.BluRay.720p.mp4', '', 'لا توجد قصة'),
(88, 'Up.In.The.Air.2009.BluRay.720p.mp4', '', 'لا توجد قصة'),
(89, 'Whiplash.2014.BluRay.720p.mp4', '', 'لا توجد قصة'),
(90, 'Wild.Tales.2014.BluRay.720p.mp4', '', 'لا توجد قصة'),
(91, 'Wolf.Creek.2.2013.BluRay.720p.mp4', '', 'لا توجد قصة'),
(92, 'Wolf.Creek.2005.720p.mp4', '', 'لا توجد قصة'),
(93, 'Wonder.2017.BluRay.720p.mp4', '', 'لا توجد قصة'),
(94, 'Wrong.Turn.2003.BluRay.720p.mp4', '', 'لا توجد قصة'),
(95, 'Yes.Man.2008.BluRay.720p.mp4', '', 'لا توجد قصة'),
(96, 'I.Am.Number.Four.2011.BluRay.720p.mp4', '', 'لا توجد قصة'),
(97, 'Apocalypto.2006.BluRay.720p.mp4', '', 'لا توجد قصة'),
(98, '12.Angry.Men.1957.BluRay.720p.mp4', '', 'لا توجد قصة'),
(99, 'A.Quiet.Place.2018.BluRay.720p.mp4', '', 'لا توجد قصة'),
(100, 'Alive.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(101, 'All.Eyez.On.Me.2017.BluRay.720p.mp4', '', 'لا توجد قصة'),
(102, 'Almost.Friends.2016.BluRay.720p.mp4', '', 'لا توجد قصة'),
(103, 'American.History.X.1998.BluRay.720p.mp4', '', 'لا توجد قصة'),
(104, 'Anjaam.Pathiraa.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(105, 'Argo.2012.BluRay.720p.mp4', '', 'لا توجد قصة'),
(106, 'Arrival.2016.BluRay.720p.mp4', '', 'لا توجد قصة'),
(107, 'Assassination.Games.2011.BluRay.720p.mp4', '', 'لا توجد قصة'),
(108, 'August.Rush.2007.BluRay.720p.mp4', '', 'لا توجد قصة'),
(109, 'Bad.Ass.2012.720p.mp4', '', 'لا توجد قصة'),
(110, 'Before.I.Wake.2016.BluRay.720p.mp4', '', 'لا توجد قصة'),
(111, 'Bring.Me.Home.2019.BluRay.720p.mp4', '', 'لا توجد قصة'),
(112, 'Capone.2020.WEB-DL.1080p.mp4', '', 'لا توجد قصة'),
(113, 'Cast.Away.2000.BluRay.720p.mp4', '', 'لا توجد قصة'),
(114, 'Commitment.2013.BluRay.720p.mp4', '', 'لا توجد قصة'),
(115, 'Death.Of.Me.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(116, 'Dunkirk.2017.BluRay.720p.mp4', '', 'لا توجد قصة'),
(117, 'Coco.2017.BluRay.720p.mp4', '', 'لا توجد قصة'),
(118, 'Eish.Hayatak.2019.BluRay.720p.mp4', '', 'لا توجد قصة'),
(119, 'Embattled.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(120, 'Forgotten.2017.WEB.DL.720p.mp4', '', 'لا توجد قصة'),
(121, 'Rambo.Last.Blood.2019.BluRay-720p.mp4', '', 'لا توجد قصة'),
(122, '15.Minutes.Of.War.2019[720p].mkv', '', 'لا توجد قصة'),
(123, 'Seized.2020.DVDRip.mp4', '', 'لا توجد قصة'),
(124, 'Ayla.The.Daughter.Of.War.Cima4U.mp4', '', 'لا توجد قصة'),
(125, 'Soul.2020.BluRay.Egybest.app.720p.mp4', '', 'لا توجد قصة'),
(126, 'Halloween.Party.2020.720p.WEB-DL.mp4', '', 'لا توجد قصة'),
(127, 'Miracle.in.Cell.No.7.720p.WEB.mp4', '', 'لا توجد قصة'),
(128, 'The.Paramedic.2020.1080p.NF.WEB-DL.mp4', '', 'لا توجد قصة'),
(129, 'Enola.Holmes.2020.WEB-DL.720p.mp4', '', 'لا توجد قصة'),
(130, 'Escape.From.Alcatraz.1979.BluRay.720p.mp4', '', 'لا توجد قصة'),
(131, 'Host.2020.720p.WEBRip.mkv', '', 'لا توجد قصة'),
(132, 'In.Time.2011.720p.BluRay.MyCima.TV.mp4', '', 'لا توجد قصة'),
(133, 'Legend_2015.Bluray.Cima4U.mp4', '', 'لا توجد قصة'),
(134, 'The.Invention.of.Lying.2009.Cima4U.mkv', '', 'لا توجد قصة'),
(135, 'The.Perfect.Date.2019.1080p.NF.WEB-DL.cima4up.tv.mp4', '', 'لا توجد قصة'),
(136, 'The_Untouchables_1987_Cima4U.mp4', '', 'لا توجد قصة');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`) VALUES
(1, ''),
(2, 'lolHhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(3, ''),
(4, ''),
(5, '              '),
(6, '            '),
(7, '          '),
(8, '           '),
(9, '           '),
(10, '           '),
(11, '           '),
(12, '           '),
(13, '           '),
(14, '           '),
(15, '           '),
(16, '     '),
(17, '     '),
(18, '     '),
(19, '     '),
(20, 'awszadzda zdazd zad'),
(21, ' '),
(22, ' '),
(23, 'Hello its me'),
(24, 'Hello its me'),
(25, 'وشراك'),
(26, 'وشراك'),
(27, 'azdazdzadazdadazd dzad azda zdza daz dzad azd azd azd'),
(28, 'azdazdzadazdadazd dzad azda zdza daz dzad azd azd azd'),
(29, 'وشراك'),
(30, 'azdazdzadazdadazd dzad azda zdza daz dzad azd azd azd'),
(31, 'salam salam ma3akom 3abd salam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registration_day` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passwd`, `email`, `registration_day`) VALUES
(1, 'ddddddddddd', 'zadzds', 'sqddzdzd', '2021-01-19'),
(2, 'oussama', '71f0caccd6959b358543ee9cdc9b9c3e', 'dddd', '2021-01-20'),
(3, 'ass', '37f31694ce2528a64cfacc73c612ef06', 'azdazdzad', '2021-01-20'),
(4, 'lol', '9cdfb439c7876e703e307864c9167a15', 'lol', '2021-01-20'),
(5, 'da', '0de7b6a61a70688b26e6eeb3113531a3', 'ss', '2021-01-20'),
(6, 'final', '654816f85dfe2115674e7115c7d1ea51', 'dotphp', '2021-01-20'),
(7, 'sama', '26c322652770620e64ac90682eb6504c', 'dz', '2021-01-20'),
(8, 'aloha', 'ba248c985ace94863880921d8900c53f', 'lollol', '2021-01-20'),
(9, 'salam', 'de6838252f95d3b9e803b28df33b4baa', 'Hohoh', '2021-01-20'),
(10, 'mimi', '99605671e193aeeff68a304bad60a56f', 'anocha', '2021-01-20'),
(11, '&#39;', 'a34f59274d50f313ec06e96e2620e117', '&#39;', '2021-01-21'),
(12, '&#39; OR 1=1 --', '368029d97ed63c4019902fe4f05bd56c', '&#39; OR 1=1 --', '2021-01-22'),
(13, '&#39; OR 1=1 UNION SELECT * FROM users; -- ', '09b62c4dc1010363350a560a7310493d', '&#39; OR 1=1 UNION SELECT * FROM users; -- ', '2021-01-22'),
(67, 'oussamakun', '202cb962ac59075b964b07152d234b70', 'lol@gmail.org', '2021-01-26'),
(68, 'samirlaclass', '814f06ab7f40b2cff77f2c7bdffd3415', 'famous@gmail.com', '2021-01-28'),
(69, 'samir13', '9cdfb439c7876e703e307864c9167a15', 'info@ddd.com', '2021-01-30'),
(70, 'salamoli', '202cb962ac59075b964b07152d234b70', 'test@me.org', '2021-01-31'),
(71, 'mohlartish', '202cb962ac59075b964b07152d234b70', 'moh@lartish.com', '2021-01-31'),
(72, 'ferhat', '00c66aaf5f2c3f49946f15c1ad2ea0d3', 'pjtofnx@mail-help.net', '2021-02-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comm` (`user_id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `film_name` (`film_name`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comm` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
