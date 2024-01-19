-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 05:33 AM
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
(34, 'Professor Vida, Head of the Research Department', 'SDP Facility A3 ', 'Mirror Mirror on the Wall', '<b>Discovery:</b>\r\n</br>\r\n</br>The mirror was reported and examined by SDP Special Team Bravo in a town in Bavaria, Germany on the 21st of December, 1967. The mirror appeared to be a regular mirror, but upon close inspection, the mirror does not show one’s reflection. It was quickly taken to SDP Facility A3 based in Denmark.\r\n<br/>\r\n<br/>\r\nFurther studies showed that all living beings do not have reflections. Researchers theorized that the mirror is what gave rise to the belief that vampires don’t have a reflection, but nothing is proven so far.\r\n</br>\r\n</br>\r\n<b>Description:</b>\r\n</br>\r\n</br>\r\nThe mirror frame is made of bronze with gold surrounding the mirror itself. It is 3.5 ft tall and 1.5 ft wide.\r\n\r\n', 'Object', 'Vicinity', 'Secured', 'ob001.png', 'OB-001'),
(35, 'Allen Payad, High Head of Administration', 'South America', 'A Messy Mess', '      <b>Discovery:</b>\r\n</br>\r\n</br>\r\nThis anomaly was first sighted in Punta Arenas, Chile in August 15, 1968. The town had its communications go down for a week. The local authorities were alarmed at this and a local police force was sent to go check on the town. They never returned.\r\n</br>\r\n</br>\r\n	The SDP International were immediately notified after this incident and had tasked a nearby mobile hounds office to find out what was happening in the town. They found the town and the area around it devoid of any fauna and flora. All the town inhabitants had also disappeared. Replaced by what seems to be a white sticky liquid with nerves and veins inside of it. The office’s agents noted a smell of oranges surrounding the area. \r\n</br>\r\n</br>\r\n	When the agents arrived back at their office, they were put in a lockdown due to suspected biological effects of the liquid back at Arenas. Over a period of 24 hours most of the agents developed a pale complexion, with their veins being translucent even under their skin. They then became violent and proceeded to try and break out. All of the infected agents were killed and incinerated.\r\n</br>\r\n</br>\r\n <b>Description:</b>\r\n</br>\r\n</br>\r\n	Due to the white substance inside the affected area. It was deemed an exclusion zone. The white substance has since then expanded by 100 miles. \r\n</br>\r\n</br>\r\n	Since then, the anomaly has only been sighted twice. All within South America targeting populous areas. A helpful warning sign before the anomaly arrives is the smell of oranges. When this particular sign has found, an evacuation of the area is done.\r\n</br>\r\n</br>\r\n	It has been theorized that the effect of the anomaly on an organism is a cycle. First they develop pale complexions, then they get implanted with the thought to spread as far and wide as possible. With their infection ending in them melting and spreading the white substance further.\r\n', 'Event', 'Regional', 'Unknown', 'placeholder-img-home.png', 'EV-014'),
(37, 'Allen Payad, High Head of Administration', 'Scandinavia', 'Borealis Worm', '\r\n<b>Discovery:</b>\r\n</br>\r\n</br>\r\nThis anomaly was first spotted in November 5, 1956 Asker, Norway. While the locals were outside watching the aurora borealis. They witnessed the lights form into a shape of a giant worm. It then floated around in the sky for a few minutes until it came down to the ground. It was benign at first until a few locals came too close to it. The worm then passed through them and once it passed through a bright flash can be seen and then they were gone, with only their clothes remaining on the spot. \r\n</br>\r\n</br>\r\n\r\nSince then, it has been a common occurrence during an aurora borealis in the Scandinavian region of Europe. It is encouraged to stay away from the anomaly and call the authorities when it manifests.\r\n</br>\r\n</br>\r\n\r\n<b>Description:</b>\r\n</br>\r\n</br>\r\nEN-002 is a light construct only existing for as long as the aurora borealis is active. It is highly territorial, as it will attack any organism within its vicinity. It can pass through any obstacles.\r\n</br>\r\n</br>\r\nOn its 4th appearance. The anomaly was led to a glass prism hoping for it to be terminated, however the prism only led to the worm splitting into mutliple, albeit smaller worms. It has been since prohibited to own any large glass prisms in the countries of Finland, Norway and Sweden.\r\n', 'Entity', 'Local', 'Unknown', 'samplean2.jpg', 'EN-002'),
(38, 'Professor Vida, Head of Research', 'SDP Facility EN02, Chicxulub Crater, Gulf of Mexico', 'Dragón de Fuego', '<b>Discovery:</b>\r\n</br>\r\n</br>On the 14th of March, 1961. Two private researchers stumbled upon an old cave system that seemed unnatural. The cave system only has a single tunnel, however it descends into a series of twists and turns before reaching an extremely large chamber. The chamber appears to measure around 10 km in height and 20 x 25 km in width.\r\n</br>\r\n</br>\r\nAt the center of the room, standing at 18 meters, lies EN-003. EN-003 has a body that resembles a theropod, with two rows of large spikes on its back. It has a pair of wings with a wingspan that reaches 110 meters. The head of EN-003 has a striking similarity to reptiles. Around EN-003 lies a moat of boiling magma, parts of it connects to EN-003 itself. EN-003 appears to be absorbing the magma around it.dfdf\r\n</br>\r\n</br>\r\n\r\nUpon closer inspection of EN-003 and the room around it, inscriptions littered the cave. Epigraphers deciphered that an ancient civilization worshiped EN-003 and that it will cleanse the Earth with magma and fire should it awaken. The SDP created a perimeter around the crater to prevent anything from accidentally, or intentionally, awakening EN-003.\r\n</br>\r\n</br>\r\n</br>\r\n<strong>AD account:</strong>\r\n</br>\r\n</br>\r\nJune 6, 1965 - 0936 - A researcher collapsed while studying EN-003. EN-003’s eyes glowed bright orange before it died down to normal.\r\n</br>\r\nJune 6, 1965 - 1623 - The researcher woke up and started spouting gibberish.\r\n</br>\r\nJune 6, 1965 - 2049 - The researcher calmed down, and was questioned what happened. The researcher recalled seeing the Earth engulfed in hellish storms, oceans of fire, volcanoes erupted around the globe, and at the center of it all is EN-003, standing on top of a mountain.\r\n</br>\r\nJune 7, 1965, 0754 - The Researcher, now codenamed EN-003-B, was kept in a monitored confinement for further analysis.\r\n</br>\r\nJune 10, 1965 - 0831 - EV-001 added to database.\r\n', 'Entity', 'Global', 'Monitored', 'en-003.png', 'EN-003'),
(39, 'Professor Vida, Head of Research', 'Earth', 'Armageddon', '\r\n<b>Description:</b>\r\n</br>\r\n</br>\r\nEV-001 is the apocalyptic event that will wipe out everything off the face of the Earth with fire and magma. Knowledge of EV-001 was given to a SDP researcher from EN-003, a slumbering dragon located at SDP Facility EN02. The vision depicts the dragon waking up and summoning waves of magma that will reach every corner of the Earth with the Chicxulub Crater at its epicenter.\r\n</br>\r\n</br>\r\nThe oceans of around the world will evaporate, forests will shrivel up and die. EN-003 will burrow through the ground and rise from the Earth’s surface. From there, EN-003 will continue the cleansing until every inch of the Earth is burned to ashes. EN-003 will then return to the Chixulub Crater where it will sleep for another cycle.\r\n', 'Event', 'Global', 'Unknown', 'watcherslogo.png', 'EV-001'),
(40, 'Allen Payad, High Head of Administration', 'Saharan Desert', 'The Moving City', '\r\n<b>Discovery:</b>\r\n</br>\r\n</br>\r\nIn December 14, 1977, a satellite image made by KH-11 was scrutinized by the USA government. They noticed a new massive city pop up in the Saharan Desert not matching up any city there before. The SPD International was quickly called to investigate the city.\r\n</br>\r\n</br>\r\n<b>Description:</b>\r\n</br>\r\n</br>\r\nThe people of The Moving City calls themselves the Macrobian City. The inhabitants were an exodus of humanity that went into isolation under the Saharan desert in 1504. They had since then made massive leaps in technology. Particularly in mobile subterranean cities. They use a method which is akin to a submarine, with the city submerging itself in sand and reappearing in another part of the Sahara. \r\n</br>\r\n</br>\r\n<b>Note:</b>\r\n</br>\r\n</br>\r\nThere has been an agreement made with the Macrobians and various other governments for a technology exchange, trade and territorial agreements.\r\n\r\n\r\n\r\n\r\n', 'Place', 'Regional', 'Cooperative', 'samplean.jpg', 'PL-005'),
(41, 'Professor Vida, Head of the Research Department', 'Bermuda, Miami, Puerto Rico', 'Bermuda Triangle', '</br>\r\n</br>\r\n<b>Discovery:</b>\r\n</br>\r\n</br>\r\nThe bermuda triangle is a triangle that formed from the coast of Miami, to Puerto Rico, then to Bermuda. Incidents happen within the triangle, from lost planes, to ships missing. These incidents earned the triangle its name “The Devil’s Triangle”.\r\n\r\nThe first known recorded incident happened on December 5, 1945. A flight squad of 5 TBF Avengers, also known as Flight 19, mysteriously disappeared during routine navigation and combat training exercise. A PBM-5 Mariner was deployed on the same day to locate and rescue the missing squadron. However, the PBM05 also went missing.\r\n</br>\r\n</br>\r\nA perimeter was set on 8/6/1961, research outposts were established on each of the three points. Researchers still do not have any confirmed answers on what the reasons for such anomalies are, but they have theories on how.\r\n</br>\r\n</br>\r\n<b>Description:</b>\r\n</br>\r\n</br>\r\nOne notable theory states that a certain weather condition that creates “air bombs” are responsible for the disappearances. These “air bombs” produce deadly blasts of air, which reach wind speeds up to 170 miles per hour. These winds can generate waves of more than 45 feet in length. No ship can survive such storms and no aircraft can withstand such winds.\r\n', 'Place', 'Regional', 'Monitored', 'pl001.png', 'PL-001'),
(45, 'Professor Vida, Head of the Research Department', 'Tokyo, Japan', 'Japan\'s Real Life Gojira', '<b>Discovery:</b>\r\n</br>\r\n</br>\r\nThe creature was first sighted 115.68 km off the coast of Hakone, Japan on November 3, 1954. A fishing boat spotted the creature on the water’s surface. The fisherman onboard described a 20 foot scaly creature that resembled a crocodile with jagged spikes along its back.\r\n<br/>\r\n<br/>\r\nFishing catches dropped to zero and the local fishermen blamed EN-001 for the lack of fish. The situation soon took a dark turn as the EN-001 switched its prey to the fishermen. Armed forces were soon deployed to scare away EN-001, or kill EN-001 if the worst came. However, their actions only angered EN-001 and attacked the sent forces, injuring most. EN-001 began growing from 20 ft to 55 ft in just 4 days before it made landfall and began attacking those near the coastline, injuring 8 civilians and 3 members of the response team. \r\n<br/>\r\n<br/>\r\nJapan was forced to deploy its newly established Japan Self Defense Force once it started attacking the populace. The JSDF had a hard time eliminating EN-001 as most of their weapons bounced off the creature’s scales. However, repeated force on EN-001 proved too much for the creature as it finally succumbed to its injuries. EN-001 managed to reach the city of Tokyo before it fell, wounding 24 people in total and fatally injuring 7.\r\n</br>\r\n</br>\r\n<b>Description:</b>\r\n</br>\r\n</br>\r\nEN-001 has a striking resemblance to a saltwater crocodile, with a few mutations. 3 rows of sharp, jagged spikes run along the back of EN-001. Analysis shows that the spikes are connected to EN-001’s spine and are covered by an extremely durable substance that hardens as EN-001 grows. The substance was originally found inside EN-001 which was then named “Duratin”. When EN-001 was first seen, it was only 20.3 ft in length from the tip of the snout to the tip of the tail. When it reached Tokyo, EN-001 was over 54.7 ft in length and it showed gradual growth with no signs of stopping. The organization estimated that EN-001 can reach over 200 ft in just a month if it wasn’t successfully terminated.\r\n', 'Entity', 'Local', 'Terminated', 'en-001.png', 'EN-001'),
(49, 'Professor Vida, Head of the Research Department', 'SDP Facility A2 (Current)', 'Death\'s Watch', '<b>Discovery:</b>\r\n</br>\r\n</br>\r\nThe pocket watch was discovered on an abandoned building on a small town near the Yorkshire Wolds, UK. The watch was found when a group of three teens explored the ruins of the abandoned building. The watch was then picked up by one of the teens. The watch’s hands started picking up speed in a clockwise movement. The teen began aging in an alarming rate which led to the teen’s death as he reached his maximum age.\r\n</br>\r\n</br>\r\nThe watch was then reported to the authorities where the case was handed to the SDP. SDP Special Teams was dispatched to the location and successfully secured OB-002 and was transferred to Facility A2 where it will undergo analysis.\r\n</br>\r\n</br>\r\n<b>Description:</b>\r\n</br>\r\n</br>\r\nStudies shows that OB-002 somehow taps into the holder’s soul through physical touch and it speeds up the person’s growth until the holder expires. Researchers does not have a complete answer as to how the watch is able to control the person’s growth, however one notable theory states that the OB-002 infect the holder with Duratin and uses the substance like a virus. OB-002 is kept under surveillance and locked inside a bulletproof casing. \r\n', 'Object', 'Vicinity', 'Secured', 'ob002.jpg', 'OB-002'),
(50, 'Allen Payad, High Head of Administration', 'In possession of Mr. Payad, Head of Administration', 'Ideality', '\r\n<b>Discovery:</b>\r\n</br>\r\n</br>\r\nIt was confiscated from a theatre actor in Kabukiza Theater, Tokyo when said actor turned into a fit of rage and started attacking the other actors. When apprehended he confessed that he had used an anomaly in order to bolster his acting career. He was charged guilty of Illegal Use of an Anomaly and was sent to prison. \r\n</br>\r\n</br>\r\nWhen a person looks into the mirror, or in a case of a group the mirror locks into the person closest to it. The user then can select and view alternate versions of themselves. They can then use the mirror to retrieve the skills, in addition with the memories and personalities that their alternate has. While the user’s ego is the one in charge, multiple repeated use without break may result in a dissociative personality disorder in the user.\r\n</br>\r\n</br>\r\n<b>Description:</b>\r\n</br>\r\n</br>\r\nThe branch of Conventional Research has found a residual duratin inside the user after using the mirror. This building up inside the user after repeated use along with the strain of having another person’s memory and personality inflicted upon them may be the reason on why the harmful effects are present.\r\n</br>\r\n</br>\r\nThey had also found that the more one uses the mirror, they are able to call more than just the memory and skills of their alternate, but also their equipment that they frequently use.\r\n</br>\r\n</br>\r\n<b>Note:</b>\r\n</br>\r\n</br>\r\nAfter the current Allen E. Payad, Head of Administration got into his position. He immediately requisitioned OB-007, by the requirement of every department head should have a cooperative anomaly with them at all times.\r\n\r\n', 'Object', 'Vicinity', 'Cooperative', 'OB007.jpg', 'OB-007'),
(57, 'Allen Payad, High Head of Administration', 'Earth', 'Cliche Story', '<b>Discovery:</b>\r\n</br>\r\n</br>\r\nOn May 5, 1963 in the D1 Mobile Hounds Branch, Awsard. The investigators found a common pattern in the recent news of the area, in that they are described like how a fictional story would be. This was dismissed at first as a way for newspaper companies to bolster their sales. However, when one of their agents got caught up in EV-004’s influence. Their behaviors were altered and they were put into a mental breach protocol. \r\n</br>\r\n</br>\r\nFurther investigations moved them to the location of the anomaly at the time. The plot was which of a person trying to stop a cult that was planning to do a massive sacrifice in order to ascend. The local Shock Troops branch was tasked to stop this from happening. However, due to a trope of military soldiers being easy pickings for the main villains they were stopped. It was eventually resolved by the protagonist.After the event all parties were questioned. They account that the actions they displayed during the anomaly was not what they will usually would have done. \r\n</br>\r\n</br>\r\nDue to the nature of this anomaly, and the SDP International, it is advised to use a lot of resources when dealing with this anomaly as the trope ‘Government Fails’ is a common trope the anomaly uses to prevent SDP intervention.\r\n</br>\r\n</br>\r\n\r\n<b>Description:</b>\r\n</br>\r\n</br>\r\n\r\nThis anomaly refers to when real life events have fictional tropes inserted into them. The tropes included are usually in the form of good vs evil archetypes, with a clear distinction between hero and villain. \r\n</br>\r\n</br>\r\n\r\nThe ‘actors’ of this event will behave out of their usual personality to enact the roles given to them by the event anomaly. There can only be one EV-004 present at a time, and the maximum boundary of its influence is 500km. If any actor steps out of its boundary, then they will break out of its influence.\r\n</br>\r\n</br>\r\n\r\n<b>List of tropes observed:</b>\r\n</br>\r\n</br>\r\n\r\n1.	Plot Armor – The main protagonist cannot die until the plot of the event anomaly is finished.\r\n</br>\r\n</br>\r\n2.	Second Wind – The protagonist will get up after being defeated for the first time, coming back stronger usually winning.\r\n</br>\r\n</br>\r\n3.	Mercy for the villain – The villain will be spared by the protagonists. (This usually complicates matters as the villain causes more trouble after the anomaly event).\r\n', 'Event', 'Local', 'Unknown', 'watcherslogo.png', 'EV-002'),
(58, 'Allen Payad, High Head of Administration', 'Classified', 'Bubbles', '<b>Description:</b>\r\n</br>\r\n</br>\r\nThe bubbles that comes from blowing the wand is able to steal something in its bubble, be it concepts or things. When the bubble burst that something is transferred to where the bubble was. The only side-effect is that the wielder would have to be careful on where the bubble lands, as if a strong gust of wind affects it. The trajectory of the bubble may go towards them and they themselves trapped in the bubble. The sudden change from being normal sized to being inside a bubble can kill most beings, exceptions to those organisms that are already small enough to fit inside it.\r\n</br>\r\n</br>\r\n<b>Note:</b>\r\n</br>\r\n</br>\r\nThe anomaly was deemed safe enough for field use. Due to its particularly strong effects, its only cleared for high-ranking Wielders. \r\n', 'Object', 'Vicinity', 'Cooperative', 'ob-004.jpg', 'OB-004'),
(59, 'Allen Payad, High Head of Administration', 'Constellation Aquarius', 'Watchful Eye', '<b>Discovery:</b>\r\n</br>\r\n</br>\r\nDiscovered in 1824 by Karl Ludwig Harding. It was not considered anomalous at the time and was thought of as a coincidence for its similarity to an eye. However, in the 1966, when researchers from the Cosmic Research Branch, B2 Facility. They noticed that the nebula seems to shift its gaze from some other parts of the galaxy, then back to Earth. \r\n</br>\r\n</br>\r\nFollowing this discovery. A massive memory block had happened to Earth, making the inhabitants inside it ever forget the concept of the Helix Nebula. It was only a years later in 1970 when Prof. Vida overcame its effects, because of an experiment he was conducting.\r\n</br>\r\n</br>\r\nIt is theorized that the anomaly has an alarm for whenever someone thinks of it. The reason is unknown on why it was only in 1970 that this anomalous effect was felt. It is unknown further, on what this entity gains on its attempt to block the memory of humanity. \r\n</br>\r\n</br>\r\nSince then, there has not been any more anomalous events involving this entity. \r\n</br>\r\n</br>\r\n<b>Description:</b>\r\n</br>\r\n</br>\r\nThis entity is thought to come from the Helix Nebula or is the nebula itself. Its feature are that those like of an eye. When a photo is made of the entity, the eye inside the photo moves. There has been many speculations, but most prevalent is that it is a security leak, since then all images of the nebula has been ordered to be destroyed by the SDP International.\r\n', 'Entity', 'Global', 'Monitored', 'en005.jpg', 'EN-005');

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
(20, 'maskerash11@gmail.co', 'The Head of Security looks funny');

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
(10, 'James Anomalous Cald', 'STI Caloocan', '1/12/24');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `feedbackdb`
--
ALTER TABLE `feedbackdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reportdb`
--
ALTER TABLE `reportdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
