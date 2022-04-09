
-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

CREATE TABLE `symptom` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`id`, `name`, `date`) VALUES
(1, 'Arthritis/Joint Pain', '2022-04-04 15:34:41'),
(2, 'Back Pain', '2022-04-04 15:34:41'),
(3, 'Arthritis/Joint Pain', '2022-04-04 16:20:44'),
(4, 'Back Pain', '2022-04-04 16:20:44'),
(5, 'Neck Pain', '2022-04-04 16:20:44'),
(6, 'Cancer Pain', '2022-04-04 16:20:44'),
(7, 'Headache', '2022-04-04 16:20:44'),
(8, 'Testicular Pain', '2022-04-04 16:20:44'),
(9, 'Muscle Pain', '2022-04-04 16:20:44'),
(10, 'Neurogenic Pain', '2022-04-04 16:20:44'),
(11, 'Aching', '2022-04-04 16:20:44'),
(12, 'Aching', '2022-04-04 16:20:44'),
(13, 'Shooting', '2022-04-04 16:20:44'),
(14, 'Burning', '2022-04-04 16:20:44'),
(15, 'Squeezing', '2022-04-04 16:20:44'),
(16, 'Stiffness', '2022-04-04 16:20:44'),
(17, 'Throbbing', '2022-04-04 16:20:44'),
(18, 'Stinging', '2022-04-04 16:20:44'),
(19, 'Anxiety', '2022-04-04 16:20:44'),
(20, 'Depression', '2022-04-04 16:20:44'),
(21, 'Fatigue', '2022-04-04 16:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `username`, `email`, `password`, `active`, `date`, `gender`, `dob`) VALUES
(1, 'Hammed Taofeek', 'htolajide', 'htolajide@yahoo.com', 'a6b944fc65c184ca6b096593a895ba76', 0, '2022-03-22 20:05:50', 'Male', '2022-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `user_symptom`
--

CREATE TABLE `user_symptom` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `symptom_id` int(11) NOT NULL,
  `pain_level` int(11) DEFAULT NULL,
  `daily_reflection` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `other_symptoms` varchar(255) NOT NULL,
  `charateristics` varchar(255) NOT NULL,
  `agg_factors` varchar(255) NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_symptom`
--

INSERT INTO `user_symptom` (`id`, `user_id`, `symptom_id`, `pain_level`, `daily_reflection`, `note`, `location`, `other_symptoms`, `charateristics`, `agg_factors`, `date`) VALUES
(4, 1, 2, 8, '', '', 'Back', '', '', '', '2022-04-05 15:29:07'),
(5, 1, 2, 8, '', '', 'Back', '', '', '', '2022-04-05 15:29:56'),
(7, 1, 1, 4, '', '', 'Knee', '', '', '', '2022-04-05 16:20:45'),
(8, 1, 5, 6, '', '', 'Neck', '', '', '', '2022-04-05 16:48:56'),
(9, 1, 7, 5, '', '', 'Head', '', '', '', '2022-04-05 16:53:14'),
(10, 1, 8, 5, '', '', 'Testis', '', '', '', '2022-04-05 17:30:51'),
(11, 1, 8, 5, '', '', 'Testis', '', '', '', '2022-04-05 17:32:35'),
(12, 1, 8, 5, '', '', 'Testis', '', '', '', '2022-04-05 17:32:57'),
(13, 1, 9, 9, '', '', 'Arm', '', '', '', '2022-04-05 18:21:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `symptom`
--
ALTER TABLE `symptom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_symptom`
--
ALTER TABLE `user_symptom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_has_symptom_user` (`user_id`),
  ADD KEY `fk_user_has_symptom_symptom1` (`symptom_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `symptom`
--
ALTER TABLE `symptom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_symptom`
--
ALTER TABLE `user_symptom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_symptom`
--
ALTER TABLE `user_symptom`
  ADD CONSTRAINT `fk_user_has_symptom_symptom1` FOREIGN KEY (`symptom_id`) REFERENCES `symptom` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_symptom_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
