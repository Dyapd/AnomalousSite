-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 02:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdpdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `entrysubdb`
--

CREATE TABLE `entrysubdb` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `report` mediumtext NOT NULL,
  `type` enum('Object','Entity','Event','Place') NOT NULL,
  `threat` enum('Vicinity','Local','Regional','Continental','Global') NOT NULL,
  `status` enum('Unknown','Secured','Cooperative','Terminated','Monitored') NOT NULL,
  `image` text NOT NULL,
  `entryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entrysubdb`
--

INSERT INTO `entrysubdb` (`id`, `name`, `location`, `title`, `report`, `type`, `threat`, `status`, `image`, `entryName`) VALUES
(32, 'Professor Vida, Head of Research', 'Tokyo, Japan', 'A Normal Sized Crocodile', 'The creature was first sighted 115.68 km off the coast of Hakone, Japan on November 3, 1954. A fishing boat spotted the creature on the water’s surface. The fisherman onboard described a 20 foot scaly creature that resembled a crocodile with jagged spikes along its back. \r\n</br>\r\n</br>\r\nFishing catches dropped to zero and the local fishermen blamed EN-001 for the lack of fish. The situation soon took a dark turn as the EN-001 switched its prey to the fishermen. Armed forces were soon deployed to scare away EN-001, or kill EN-001 if the worst came. However, their actions only angered EN-001 and attacked the sent forces, injuring most. EN-001 began growing from 20 ft to 55 ft in just 4 days before it made landfall and began attacking those near the coastline, injuring 8 civilians and 3 members of the response team. \r\n</br>\r\n</br>\r\nJapan was forced to deploy its newly established Japan Self Defense Force once it started attacking the populace. The JSDF had a hard time eliminating EN-001 as most of their weapons bounced off the creature’s scales. However, repeated force on EN-001 proved too much for the creature as it finally succumbed to its injuries. EN-001 managed to reach the city of Tokyo before it fell, wounding 24 people in total and fatally injuring 7.\r\n</br>\r\n</br>\r\nEN-001 has a striking resemblance to a saltwater crocodile, with a few mutations. 3 rows of sharp, jagged spikes run along the back of EN-001. Analysis shows that the spikes are connected to EN-001’s spine and are covered by an extremely durable substance that hardens as EN-001 grows. The substance was originally found inside EN-001 which was then named “Duratin”. When EN-001 was first seen, it was only 20.3 ft in length from the tip of the snout to the tip of the tail. When it reached Tokyo, EN-001 was over 54.7 ft in length and it showed gradual growth with no signs of stopping. The organization estimated that EN-001 can reach over 200 ft in just a month if it wasn’t successfully terminated.\r\n', 'Entity', 'Local', 'Terminated', 'en-001.png', 'EN-001'),
(34, 'Professor Vida, Head of the Research Department', 'SDP Facility A3 ', 'Mirror Mirror on the Wall', 'The mirror was reported and examined by SDP Special Team Bravo in a town in Bavaria, Germany on the 21st of December, 1967. The mirror appeared to be a regular mirror, but upon close inspection, the mirror does not show one’s reflection. It was quickly taken to SDP Facility A3 based in Denmark.\r\n<br/>\r\n<br/>\r\nFurther studies showed that all living beings do not have reflections. Researchers theorized that the mirror is what gave rise to the belief that vampires don’t have a reflection, but nothing is proven so far.\r\n<br/>\r\n<br/>\r\nThe mirror frame is made of bronze with gold surrounding the mirror itself. It is 3.5 ft tall and 1.5 ft wide.\r\n\r\n', 'Object', 'Vicinity', 'Secured', 'ob001.png', 'OB-001'),
(35, 'Allen Payad, High Head of Administration', 'South America', 'A Messy Mess', '        This anomaly was first sighted in Punta Arenas, Chile in August 15, 1968. The town had its communications go down for a week. The local authorities were alarmed at this and a local police force was sent to go check on the town. They never returned.\r\n</br>\r\n</br>\r\n	The SDP International were immediately notified after this incident and had tasked a nearby mobile hounds office to find out what was happening in the town. They found the town and the area around it devoid of any fauna and flora. All the town inhabitants had also disappeared. Replaced by what seems to be a white sticky liquid with nerves and veins inside of it. The office’s agents noted a smell of oranges surrounding the area. \r\n</br>\r\n</br>\r\n	When the agents arrived back at their office, they were put in a lockdown due to suspected biological effects of the liquid back at Arenas. Over a period of 24 hours most of the agents developed a pale complexion, with their veins being translucent even under their skin. They then became violent and proceeded to try and break out. All of the infected agents were killed and incinerated.\r\n</br>\r\n</br>\r\n	Due to the white substance inside the affected area. It was deemed an exclusion zone. The white substance has since then expanded by 100 miles. \r\n</br>\r\n</br>\r\n	Since then, the anomaly has only been sighted twice. All within South America targeting populous areas. A helpful warning sign before the anomaly arrives is the smell of oranges. When this particular sign has found, an evacuation of the area is done.\r\n</br>\r\n</br>\r\n	It has been theorized that the effect of the anomaly on an organism is a cycle. First they develop pale complexions, then they get implanted with the thought to spread as far and wide as possible. With their infection ending in them melting and spreading the white substance further.\r\n', 'Event', 'Regional', 'Unknown', 'placeholder-img-home.png', 'EV-014'),
(37, 'Allen Payad, High Head of Administration', 'Scandinavia', 'Borealis Worm', 'This anomaly was first spotted in November 5, 1956 Asker, Norway. While the locals were outside watching the aurora borealis. They witnessed the lights form into a shape of a giant worm. It then floated around in the sky for a few minutes until it came down to the ground. It was benign at first until a few locals came too close to it. The worm then passed through them and once it passed through a bright flash can be seen and then they were gone, with only their clothes remaining on the spot. \n</br>\n</br>\n<?php if(isset($_SESSION[\'loggedon\'])) : ?>\nSince then, it has been a common occurrence during an aurora borealis in the Scandinavian region of Europe. It is encouraged to stay away from the anomaly and call the authorities when it manifests.\n</br>\n</br>\nEN-002 is a light construct only existing for as long as the aurora borealis is active. It is highly territorial, as it will attack any organism within its vicinity. It can pass through any obstacles.\n</br>\n</br>\nOn its 4th appearance. The anomaly was led to a glass prism hoping for it to be terminated, however the prism only led to the worm splitting into mutliple, albeit smaller worms. It has been since prohibited to own any large glass prisms in the countries of Finland, Norway and Sweden.\n', 'Entity', 'Local', 'Unknown', 'samplean2.jpg', 'EN-002'),
(38, 'Professor Vida, Head of Research', 'SDP Facility EN02, Chicxulub Crater, Gulf of Mexico', 'Dragón de Fuego', 'On the 14th of March, 1961. Two private researchers stumbled upon an old cave system that seemed unnatural. The cave system only has a single tunnel, however it descends into a series of twists and turns before reaching an extremely large chamber. The chamber appears to measure around 10 km in height and 20 x 25 km in width.\n</br>\n</br>\nAt the center of the room, standing at 18 meters, lies EN-003. EN-003 has a body that resembles a theropod, with two rows of large spikes on its back. It has a pair of wings with a wingspan that reaches 110 meters. The head of EN-003 has a striking similarity to reptiles. Around EN-003 lies a moat of boiling magma, parts of it connects to EN-003 itself. EN-003 appears to be absorbing the magma around it.dfdf\n</br>\n</br>\nUpon closer inspection of EN-003 and the room around it, inscriptions littered the cave. Epigraphers deciphered that an ancient civilization worshiped EN-003 and that it will cleanse the Earth with magma and fire should it awaken. The SDP created a perimeter around the crater to prevent anything from accidentally, or intentionally, awakening EN-003.\n</br>\n</br>\n</br>\n<strong>AD account:</strong>\n</br>\n</br>\nJune 6, 1965 - 0936 - A researcher collapsed while studying EN-003. EN-003’s eyes glowed bright orange before it died down to normal.\n</br>\nJune 6, 1965 - 1623 - The researcher woke up and started spouting gibberish.\n</br>\nJune 6, 1965 - 2049 - The researcher calmed down, and was questioned what happened. The researcher recalled seeing the Earth engulfed in hellish storms, oceans of fire, volcanoes erupted around the globe, and at the center of it all is EN-003, standing on top of a mountain.\n</br>\nJune 7, 1965, 0754 - The Researcher, now codenamed EN-003-B, was kept in a monitored confinement for further analysis.\n</br>\nJune 10, 1965 - 0831 - EV-001 added to database.\n', 'Entity', 'Global', 'Monitored', 'en-003.png', 'EN-003'),
(39, 'Professor Vida, Head of Research', 'Earth', 'Armageddon', 'EV-001 is the apocalyptic event that will wipe out everything off the face of the Earth with fire and magma. Knowledge of EV-001 was given to a SDP researcher from EN-003, a slumbering dragon located at SDP Facility EN02. The vision depicts the dragon waking up and summoning waves of magma that will reach every corner of the Earth with the Chicxulub Crater at its epicenter.\n</br>\n</br>\nThe oceans of around the world will evaporate, forests will shrivel up and die. EN-003 will burrow through the ground and rise from the Earth’s surface. From there, EN-003 will continue the cleansing until every inch of the Earth is burned to ashes. EN-003 will then return to the Chixulub Crater where it will sleep for another cycle.\n', 'Object', 'Vicinity', 'Monitored', 'watcherslogo.png', 'EV-001'),
(40, 'Allen Payad, High Head of Administration', 'Saharan Desert', 'The Moving City', 'In December 14, 1977, a satellite image made by KH-11 was scrutinized by the USA government. They noticed a new massive city pop up in the Saharan Desert not matching up any city there before. The SPD International was quickly called to investigate the city.\r\n</br>\r\n</br>\r\nThe people of The Moving City called themselves the Macrobian City. The inhabitants were an exodus of humanity that went into isolation under the Saharan desert in 1504. They had since then made massive leaps in technology. Particularly in mobile subterranean cities. They use a method which is akin to a submarine, with the city submerging itself in sand and reappearing in another part of the Sahara. \r\n</br>\r\n</br>\r\nThere has been an agreement made with the Macrobians and various other governments for a technology exchange, trade and territorial agreements.\r\n\r\n\r\n\r\n\r\n', 'Place', 'Local', 'Cooperative', 'samplean.jpg', 'PL-005'),
(41, 'Professor Vida, Head of the Research Department', 'Bermuda, Miami, Puerto Rico', 'Bermuda Triangle', 'The bermuda triangle is a triangle that formed from the coast of Miami, to Puerto Rico, then to Bermuda. Incidents happen within the triangle, from lost planes, to ships missing. These incidents earned the triangle its name “The Devil’s Triangle”.\r\n\r\nThe first known recorded incident happened on December 5, 1945. A flight squad of 5 TBF Avengers, also known as Flight 19, mysteriously disappeared during routine navigation and combat training exercise. A PBM-5 Mariner was deployed on the same day to locate and rescue the missing squadron. However, the PBM05 also went missing.\r\n</br>\r\n</br>\r\nA perimeter was set on 8/6/1961, research outposts were established on each of the three points. Researchers still do not have any confirmed answers on what the reasons for such anomalies are, but they have theories on how.\r\n</br>\r\n</br>\r\nOne notable theory states that a certain weather condition that creates “air bombs” are responsible for the disappearances. These “air bombs” produce deadly blasts of air, which reach wind speeds up to 170 miles per hour. These winds can generate waves of more than 45 feet in length. No ship can survive such storms and no aircraft can withstand such winds.\r\n', 'Place', 'Regional', 'Monitored', 'pl001.png', 'PL-001'),
(42, 'TEST', 'vTEST', 'TEST', '<?php if(isset($_SESSION[\'loggedon\'])) : ?>\r\nTESTING\r\n<?php endif ?>\r\n\r\nu missed nerd', 'Object', 'Vicinity', 'Unknown', 'discordlogo.png', 'EN-000');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackdb`
--

CREATE TABLE `feedbackdb` (
  `id` int(11) NOT NULL,
  `emailad` varchar(20) DEFAULT NULL,
  `feedback` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbackdb`
--

INSERT INTO `feedbackdb` (`id`, `emailad`, `feedback`) VALUES
(2, 'af', 'af'),
(3, 'af', 'sf'),
(4, 'af', ''),
(5, 'af', ''),
(6, 'af', ''),
(7, 'hy', ''),
(8, 'TEst2', ''),
(9, 'df', ''),
(10, 'df', ''),
(11, 'feddback test', ''),
(12, 'df@df.com', ''),
(13, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reportdb`
--

CREATE TABLE `reportdb` (
  `id` int(11) NOT NULL,
  `what` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reportdb`
--

INSERT INTO `reportdb` (`id`, `what`, `location`, `time`) VALUES
(3, 'd', 'd', 'd'),
(4, 'Test3', 'TEst4', 'Test3'),
(5, 'df', 'df', 'df'),
(6, 'df', 'df', 'df'),
(7, 'df', 'dfdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `userid` int(5) NOT NULL,
  `username` varchar(6) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`userid`, `username`, `password`) VALUES
(1, 'AD-001', '3b0404'),
(2, 'HRSM', '861945'),
(4, 'SC-001', '040f4f'),
(5, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entrysubdb`
--
ALTER TABLE `entrysubdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbackdb`
--
ALTER TABLE `feedbackdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportdb`
--
ALTER TABLE `reportdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entrysubdb`
--
ALTER TABLE `entrysubdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `feedbackdb`
--
ALTER TABLE `feedbackdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reportdb`
--
ALTER TABLE `reportdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
