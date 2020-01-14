-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 02:30 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`id`, `name`, `email`, `pwd`) VALUES
('ADMIN00362', 'Arya Rajiv Chaloli', 'aryarajivchaloli@gmail.com', 'arya362admin'),
('ADMIN00363', 'General Administrator', 'genadmin@scriptorium.com', 'genadmin');

-- --------------------------------------------------------

--
-- Table structure for table `books_db`
--

CREATE TABLE `books_db` (
  `Series` varchar(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `cover` varchar(2000) NOT NULL,
  `description` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books_db`
--

INSERT INTO `books_db` (`Series`, `title`, `author`, `cover`, `description`) VALUES
('OTT', 'Ottoline and the Yellow Cat', 'Chris Riddell', '../theImages/theBookImages/ottoline/ottolineGoesToSchool.jpg', 'Introducing Miss Ottoline Brown, an exceptionally inquisitive Mistress of Disguise, and her partner in crime, Mr. Munroe. No puzzle is ever too tricky for the two of them to solve. Ottoline lives in a stylish apartment in Big City with a small hairy creature called Mr. Munroe. Together they look after the Brown familys eclectic collections  and dabble in a spot of detective work. So they are the first to the scene of the crime when a string of high society dog nappings and jewel thefts hits Big City. Ottoline (who luckily has a diploma from the Who R U Academy of Disguise) and Mr. Munroe go undercover   and expose an ingenious scam masterminded by furry feline crook, the Yellow Cat. Ottoline and the Yellow Cat is a quirky mystery adventure from star author/illustrator, Chris Riddell. Winner of the Nestle Prize, and crammed with black and white illustrations, Ottoline and the Yellow Cat is perfectly packaged and highly collectable.'),
('OTT', 'Ottoline Goes to School', 'Chris Riddell', '../theImages/theBookImages/ottoline/ottolineGoesToSchool.jpg', 'Meet Ottoline and her hairy, helpful friend Mr. Munroe. Ottoline is off to the Alice B. Smith School for the Differently Gifted, but she is rather worried that she doesnt have a special gift. Mr. Munroe is more worried about the ghost who is said to haunt the school halls at night. Does Ottoline discover her hidden talent and can they expose the spook? Full of gorgeous, intricate black and white llustrations, Ottoline Goes to School is the second exciting Ottoline adventure from the award winning Chris Riddell, author of Goth Girl and the Ghost of a Mouse.'),
('OTT', 'Ottoline at Sea', 'Chris Riddell', '../theImages/theBookImages/ottoline/o_sea.png', 'Ottoline and Mr. Munroe do everything and go everywhere together. That is, until the day Mr. Munroe mysteriously disappears leaving a strange clue written in string... Armed with her Amateur Roving Collectors travel pass Ottoline sets off on a journey over, under and on top of the sea to find her hairy best friend   and bring him back home. Ottoline at Sea is the third enchanting Ottoline adventure from Kate Greenaway award winner, Chris Riddell. With his appealing illustration style, Riddells humorous details make this a book to pore over and adore   especially using the free set of novelty gadget spectacles that comes included!'),
('HP', 'Harry Potter and the Philosophers Stone', 'J.K. Rowling', '../theImages/theBookImages/HP/HP1.jpg', 'Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on Harry’s eleventh birthday, a great beetle eyed giant of a man called Rubeus Hagrid bursts in with some astonishing news: Harry Potter is a wizard, and he has a place at Hogwarts School of Witchcraft and Wizardry. An incredible adventure is about to begin! '),
('HP', 'Harry Potter and the Chamber of Secrets', 'J.K. Rowling', '../theImages/theBookImages/HP/HP2.jpg', 'Harry Potter’s summer has included the worst birthday ever, doomy warnings from a house elf called Dobby, and rescue from the Dursleys by his friend Ron Weasley in a magical flying car! Back at Hogwarts School of Witchcraft And Wizardry for his second year, Harry hears strange whispers echo through empty corridors – and then the attacks start. Students are found as though turned to stone … Dobby’s sinister predictions seem to be coming true.'),
('SH', 'Magyk', 'ANGIE SAGE', '../theImages/theBookImages/SH/Magyk.jpg', 'A powerful necromancer plans to seize control of all things Magykal. He has killed the Queen and locked up the Extraordinary Wizard. Now with Darke Magyk he will create a world filled with Darke creatures. But the Necromancer made one mistake. A vital detail he has overlooked means there is a boy who can stop him   the only problem is, the boy doesnt know it yet. For the Heap family, life as they know is about to change, and the most fantastically fast paced adventure of confused identities, magyk and mayhem, begin.'),
('SH', 'Flyte', 'ANGIE SAGE', '../theImages/theBookImages/SH/Flyte.jpg', 'The evil necromancer DomDaniel has been disposed of, but something Darke is stirring. A Shadow pursues ExtraOrdinary Wizard Marcia Overstrand around, following her every move, growing stronger every day. Septimus senses something sinister is afoot, but before he can act, Jenna is snatched   taken by the most unlikely kidnapper. Septimus must rescue his sister but does not, at first, realise what he will be facing. Flyte is brilliantly funny, and packed with even more inventive Magyk, Mayhem and adventure.'),
('SH', 'Physik', 'ANGIE SAGE', '../theImages/theBookImages/SH/physic.jpg', 'When Silas Heap unseals a forgotten room in the Palace, he releases the ghost of a Queen who lived five hundred years earlier. Queen Etheldredda is as awful in death as she was in life, and shes still up to no good. Her diabolical plan to give herself ever lasting life requires Jennas compliance, Septimuss disappearance, and the talents of her son, Marcellus Pye, a famous Alchemist and Physician. And if Queen Etheldreddas plot involves Jenna and Septimus, then Dark adventure awaits . . .  With heart stopping action and Magykal wit, Angie Sage continues the fantastical journey of Septimus Heap.'),
('HP', 'The Tales of Beedle the Bard', 'J.K. Rowling', '../theImages/theBookImages/HP/The Tales of Beedle the Bard.jpg', 'The Tales of Beedle the Bard is a collection of classic Wizarding fairy tales which first emerged in the seventh and final book in the Harry Potter series, Harry Potter and the Deathly Hallows. Never before had Muggles been privy to these richly imaginative stories, including The Wizard and the Hopping Pot, and The Tale of the Three Brothers. This beautiful edition includes an introduction, notes and illustrations by J.K. Rowling; a new translation from the ancient runes by Hermione Granger; and extensive commentary by Hogwarts Headmaster Albus Dumbledore.'),
('HP', 'Quidditch Through the Ages', 'J.K. Rowling', '../theImages/theBookImages/HP/Quidditch Through the Ages.jpg', 'Quidditch Through the Ages is a comprehensive guide to Quidditch and the ultimate resource for anyone interested in the magical world and its most popular sport. Written by Kennilworthy Whisp, it is charmingly reproduced as if it were a facsimile of the very copy from the library of Hogwarts School of Witchcraft and Wizardry.'),
('HP', 'Harry Potter and the Order of the Phoenix', 'J.K. Rowling', '../theImages/theBookImages/HP/HP5.jpg', 'Dark times have come to Hogwarts. After the Dementors attack on his cousin Dudley, Harry Potter knows that Voldemort will stop at nothing to find him. There are many who deny the Dark Lords return, but Harry is not alone: a secret Order gathers at Grimmauld Place to fight against the Dark forces. Harry must allow Professor Snape to teach him how to protect himself from Voldemorts savage assaults on his mind. But they are growing stronger by the day and Harry is running out of time. These stunning editions, with cover illustrations by Jonny Duddle, are now available in hardback and paperback.'),
('HP', 'Harry Potter and the Deathly Hallows', 'J.K. Rowling', '../theImages/theBookImages/HP/HP7.jpg', 'As he climbs into the sidecar of Hagrids motorbike and takes to the skies, leaving Privet Drive for the last time, Harry Potter knows that Lord Voldemort and the Death Eaters are not far behind. The protective charm that has kept Harry safe until now is broken, but he cannot keep hiding. The Dark Lord is breathing fear into everything Harry loves, and to stop him Harry will have to find and destroy the remaining Horcruxes. The final battle must begin – Harry must stand and face his enemy ... These stunning editions, with cover illustrations by Jonny Duddle, are now available in hardback and paperback. '),
('HP', 'Harry Potter and the Half Blood Prince', 'J.K. Rowling', '../theImages/theBookImages/HP/HP6.jpg', 'When Dumbledore arrives at Privet Drive one summer night to collect Harry Potter, his wand hand is blackened and shrivelled, but he does not reveal why. Secrets and suspicion are spreading through the wizarding world, and Hogwarts itself is not safe. Harry is convinced that Malfoy bears the Dark Mark: there is a Death Eater amongst them. Harry will need powerful magic and true friends as he explores Voldemorts darkest secrets, and Dumbledore prepares him to face his destiny ... These stunning editions, with cover illustrations by Jonny Duddle, are now available in hardback and paperback.');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_db`
--

CREATE TABLE `borrow_db` (
  `id` varchar(10) NOT NULL,
  `book1` varchar(500) NOT NULL,
  `ret1` date NOT NULL,
  `book2` varchar(500) NOT NULL,
  `ret2` date NOT NULL,
  `book3` varchar(500) NOT NULL,
  `ret3` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow_db`
--

INSERT INTO `borrow_db` (`id`, `book1`, `ret1`, `book2`, `ret2`, `book3`, `ret3`) VALUES
('LIS00127', 'Ottoline Goes to School', '2018-11-28', 'Harry Potter and the Chamber of Secrets', '2018-11-29', 'Ottoline Goes to School', '2018-11-29'),
('LIS00128', 'Harry Potter and the Philosophers Stone', '2018-11-28', '-', '0000-00-00', 'Magyk', '2018-12-05'),
('LIS00129', 'Ottoline at Sea', '2018-11-28', 'Ottoline and the Yellow Cat', '2018-12-05', '-', '0000-00-00'),
('LIS00130', '-', '0000-00-00', 'Physik', '2018-12-05', '-', '0000-00-00'),
('LIS00131', '-', '0000-00-00', '-', '0000-00-00', '-', '0000-00-00'),
('LIS00132', '-', '0000-00-00', '-', '0000-00-00', '-', '0000-00-00'),
('LIS00133', 'Ottoline at Sea', '2018-11-29', 'Quidditch Through the Ages', '2018-11-29', '-', '0000-00-00'),
('LIS00134', '-', '0000-00-00', 'Quidditch Through the Ages', '2018-11-29', '-', '0000-00-00'),
('LIS00135', '-', '0000-00-00', 'Ottoline Goes to School', '2018-11-29', '-', '0000-00-00'),
('LIS00136', 'Harry Potter and the Deathly Hallows', '2018-11-29', '-', '0000-00-00', '-', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users_db`
--

CREATE TABLE `users_db` (
  `id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_db`
--

INSERT INTO `users_db` (`id`, `name`, `email`, `pwd`) VALUES
('LIS00127', 'Arya', 'arya@a.a', 'abc'),
('LIS00128', 'abcd', 'abcd@e.f', 'password123'),
('LIS00129', 'Dr Chaloli  ', 'DrChaloli@gmail.com', 'password123'),
('LIS00130', 'anitha', 'anitha@a.a', 'password123'),
('LIS00131', 'aaaa', 'aaaa@a.a', 'password123'),
('LIS00132', 'aa1a', 'aa1a@a.a', '1234'),
('LIS00133', 'Abba', 'aba@a.com', 'abapass'),
('LIS00134', 'abcde', 'aaaaa@a.a', 'password123'),
('LIS00135', 'tanvi', 'tt@2.t', 'tanvi'),
('LIS00136', 'buks', 'ukbharani@gmail.com', 'aA1234567890');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
