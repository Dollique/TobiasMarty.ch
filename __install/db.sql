--
-- install database: `tobiasmarty_ch`
--

-- --------------------------------------------------------

--
-- table `nav`
--

CREATE TABLE IF NOT EXISTS `nav` (
`id` int(11) NOT NULL,
  `fk_page` int(11) NOT NULL,
  `fk_parentpage` int(11) NOT NULL,
  `lastedit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- table `nav`
--

INSERT INTO `nav` (`id`, `fk_page`, `fk_parentpage`, `lastedit`) VALUES
(1, 1, 0, '2017-02-13 09:57:00');

-- --------------------------------------------------------

--
-- table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `content` text,
  `lang` varchar(4) NOT NULL DEFAULT 'en',
  `lastedit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- test data `pages`
--

INSERT INTO `pages` (`id`, `title`, `alias`, `content`, `lang`, `lastedit`) VALUES
(1, 'Testseite', 'test', '<h2>Testpage</h2>\r\n<p>This is a test</p>', 'en', '2017-02-13 09:50:42');

-- --------------------------------------------------------

--
-- table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` char(64) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- indexes
--

--
-- index for table `nav`
--
ALTER TABLE `nav`
 ADD PRIMARY KEY (`id`);

--
-- index for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- index for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT
--

--
-- AUTO_INCREMENT on `nav`
--
ALTER TABLE `nav`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT on `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT on `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
