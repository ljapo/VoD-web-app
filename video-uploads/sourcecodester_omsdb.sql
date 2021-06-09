-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 04:41 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourcecodester_omsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `kid` int(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `poruka` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`kid`, `ime`, `email`, `poruka`) VALUES
(2, 'toni', 'tony@gmail.com', 'Imam problem sa pokretanjem filma Avengers Infinity War'),
(3, 'nazif', 'nazzif10@gmail.com', 'Trenutno imam problema sa promjenom passworda.');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rdate` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `runtime` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `decription` text COLLATE utf8_unicode_ci NOT NULL,
  `viewers` int(10) DEFAULT 1,
  `imgpath` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `videopath` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `name`, `genre`, `rdate`, `runtime`, `decription`, `viewers`, `imgpath`, `videopath`) VALUES
(1, 'avengers infinity war', 'superheroji', '2020', '149', 'Osvetnici i njihovi saveznici moraju biti spremni žrtvovati sve u pokušaju da poraze moćnog Thanosa koji želi uništiti svemir.', 48, 'infinity-war-poster-new.jpg', 'yt1s.com - Osvetnici Rat beskonacnosti  trailer_1080p.mp4'),
(2, 'black panther', 'superheroji', '2019', '140', 'T\'Challa, nasljednik skrivenog, ali naprednog kraljevstva Wakanda, mora povesti svoj narod u novu budućnost i suočiti se s izazivačem iz prošlosti svoje zemlje. ', 19, 'black-panther-poster-2-main.jpg', 'yt1s.com - Black Panther  trailer_1080p.mp4'),
(3, 'wonder', 'porodični', '2017', '113', 'Zasnovan na bestseleru New York Timesa, ovaj film govori nevjerojatno nadahnjujuću i dirljivu priču Augusta Pullmana, dječaka s razlikama na licu koji ulazi u peti razred, po prvi puta pohađajući redovnu osnovnu školu.', 9, 'Wonder-294892482.jpg', 'yt1s.com - WONDER Trailer 2017_1080p.mp4'),
(4, 'togo', 'drama', '2019', '117', 'Priča o Togu, psu koji je još vodio serumsku trku 1925. godine, većina ga je smatrala premalim i slabim da bi mogao voditi tako intenzivnu utrku.', 3, 'Togo-poster-1-913.jpg', 'yt1s.com - Togo  Official Trailer  Disney  Streaming Dec 20_1080p.mp4'),
(5, 'the martian', 'naučna fantastika', '2015', '144', 'Astronaut ostaje zarobljen na Marsu nakon što njegov tim pretpostavi da je mrtav i mora se osloniti na svoju domišljatost kako bi pronašao način da signalizira Zemlji da je živ.', 4, 'the-martian-poster.jpg', 'yt1s.com - The Martian  Official Trailer HD  20th Century FOX_1080p.mp4'),
(7, 'gone girl', 'drama', '2014', '149', 'Povodom svoje pete godišnjice braka, Nick Dunne izvještava da je njegova supruga Amy nestala. Pod pritiskom policije i rastućom medijskom pomamom Nickov portret blaženog braka počinje se rušiti. Ubrzo zbog njegovih laži, obmana i neobičnog ponašanja svi postavljaju isto mračno pitanje: Je li Nick Dunne ubio svoju suprugu?', 4, 'gone-girl-poster-ben-affleck.jpg', 'yt1s.com - Gone Girl  Official Trailer HD  20th Century FOX_1080p.mp4'),
(8, 'interstellar', 'naučna fantastika', '2014', '169', 'Budućnost Zemlje upitna je katastrofama, glađu i sušama. Postoji samo jedan način da se osigura čovjekov opstanak: Međuzvjezdana putovanja. Novootkrivena crvotočina u dalekim krajevima našeg Sunčevog sustava omogućava timu astronauta da odu tamo gdje još nijedan čovjek nije otišao, planetu koja može predstavljati pravo okruženje za ljudski život.', 3, 'interstellar_sky.jpg', 'yt1s.com - Interstellar  Trailer  Official Warner Bros UK_1080p.mp4'),
(9, 'life of pi', 'avantura', '2012', '127', 'Mladić koji preživi katastrofu na moru ulazi u epsko putovanje avanture i otkrića. Dok je izgubljen na moru, stvara neočekivanu vezu s drugim preživjelim: zastrašujućim bengalskim tigrom.', 2, 'Life-of-Pi_hope-poster_PPP.jpg', 'yt1s.com - Life of Pi Official Trailer 1 2012 Ang Lee Movie HD_1080p.mp4'),
(10, '1917', 'ratni', '2019', '119', '6. aprila 1917. Dok se pukovnija okuplja kako bi vodila rat duboko na neprijateljskom teritoriju, dva vojnika su u utrci s vremenom da dostave poruku koja će spriječiti 1.600 ljudi da uđu ravno u smrtonosnu zamku.', 4, '1917-poster-2.jpg', 'yt1s.com - 1917  Official Trailer HD_1080p.mp4'),
(11, 'hacksaw ridge', 'ratni', '2017', '139', 'Medicinar američke vojske iz Drugog svjetskog rata Desmond T. Doss, koji je služio tijekom bitke za Okinawu, odbija ubijati ljude i postaje prvi čovjek u američkoj povijesti koji je primio Medalju časti bez ispaljenog metka. ', 2, 'hacksaw_ridge_poster.jpg', 'yt1s.com - Hacksaw Ridge 2016 Official Trailer  Believe  Andrew Garfield_1080p.mp4'),
(12, 'avengers endgame', 'superheroji', '2019', '181', 'Nakon razornih događaja Avengers: Infinity War (2018), svemir je u ruševinama. Uz pomoć preostalih saveznika, Osvetnici se ponovno okupljaju kako bi preokrenuli Thanosove postupke i vratili ravnotežu u svemir.', 8, 'avengers-endgame-poster-xl.jpg', 'yt1s.com - Osvetnici 2019_1080p.mp4'),
(13, 'captain america: civil war', 'superheroji', '2016', '147', 'Budući da se mnogi ljudi plaše djela super heroja, vlada odlučuje zalagati se za Zakon o registraciji heroja, zakon koji ograničava herojevo djelovanje. To rezultira podjelom u Osvetnicima. Iron Man stoji uz ovaj zakon, tvrdeći da se njihovi postupci moraju kontrolirati jer će gradovi i dalje biti uništavani, ali kapetan Amerika osjeća da je spašavanje svijeta dovoljno smjelo i da se ne mogu osloniti na vladu koja će zaštititi svijet. To eskalira u sveopći rat između Team Iron Mana i Captain America Amerike.', 7, 'Captain-America-Civil-War-main-poster.jpg', 'yt1s.com - Kapetan Amerika Gradjanski rat_1080p.mp4'),
(14, 'mission: impossible - fallout', 'akcija', '2018', '147', 'Dvije godine nakon što je Ethan Hunt uspješno zarobio Solomona Lanea, ostaci Sindikata transformirali su se u drugu organizaciju zvanu Apostoli. Pod vodstvom misterioznog fundamentaliste poznatog samo kao John Lark, organizacija planira nabaviti tri plutonijeve jezgre. Ethan i njegovi saveznici sada moraju pronaći jezgre plutonija prije nego što bude prekasno.', 2, 'mission-fallout-poster-xl.jpg', 'yt1s.com - Mission Impossible  Fallout 2018  Official Trailer  Paramount Pictures_1080p.mp4'),
(15, 'inception', 'akcija', '2010', '148', 'Lopov koji krade korporativne tajne korištenjem tehnologije dijeljenja snova dobiva obrnuti zadatak da ideju usadi u um C.E.O.', 2, 'inception-poster2.jpg', 'yt1s.com - Inception  Official Trailer HD_1080p.mp4'),
(16, 'baby driver', 'akcija', '2017', '113', 'Baby je mladi i talentirani vozač automobila koji se oslanja se na ritam glazbe koju non-stop sluša kako bi bio najbolji u onome što radi. Međutim, kada upozna djevojku svojih snova, Baby u novom poznanstvu vidi priliku za bijeg od kriminala. Ipak, nakon što ga mafijaš prisili da radi za njega, Baby se mora suočiti sa stvarnošću – pljačkom unaprijed osuđenom na propast koja će zaprijetiti njegovom životu, ljubavi i slobodi.   ', 2, 'babydriver1200.jpg', 'yt1s.com - Baby Driver Trailer 1 2017  Movieclips Trailers_1080p.mp4'),
(17, 'mad max: fury road', 'akcija', '2015', '120', 'Progonjen turbulentnom prošlošću Max Rockatansky u osamljenom lutanju vidi najbolje šanse za preživljavanjem. No, nakon susreta s lijepom Furiosom i grupom odbjeglom iz Citadele, grada čije stanovnike terorizira tiranin Joe, postat će dio neizbježnog rata koji slijedi. ', 6, 'Mad_Max_Fury_Road_Poster_Final_JPosters.jpg', 'yt1s.com - Mad Max Fury Road  Official Main Trailer HD_1080p.mp4'),
(18, 'the girl with the dragon tatto', 'krimi', '2011', '158', 'Novinaru Mikaelu Blomkvistu u potrazi za ženom koja je nestala četrdeset godina pomaže Lisbeth Salander, mladi računalni haker.', 2, 'MV5BMTczNDk4NTQ0OV5BMl5BanBnXkFtZTcwNDAxMDgxNw@@._V1_.jpg', 'yt1s.com - THE GIRL WITH THE DRAGON TATTOO  Official Trailer  In Theaters 1221_1080p.mp4'),
(19, 'mollys game ', 'krimi', '2017', '140', 'Istinita priča o Molly Bloom, skijašici olimpijske klase koja je vodila najekskluzivniju poker igru s visokim ulozima na svijetu i postala FBI-jeva meta.              ', 3, 'mollys_game_poster.jpg', 'yt1s.com - Mollys Game  Official Trailer  Own it Now on Digital HD Bluray  DVD_1080p.mp4'),
(20, 'the wolf of wall street', 'krimi', '2013', '145', 'Temeljeno na istinitoj priči o Jordanu Belfortu, od njegovog uspona do bogatog burzovnog brokera koji je živio visoki život do pada uključujući kriminal, korupciju i saveznu vladu.', 2, 'MV5BMjIxMjgxNTk0MF5BMl5BanBnXkFtZTgwNjIyOTg2MDE@._V1_.jpg', 'yt1s.com - The Wolf of Wall Street Official Trailer_1080p.mp4'),
(21, 'the hateful eight', 'western', '2017', '168', 'U jeku zime u Wyomingu, lovac na glave i njegov zarobljenik pronalaze sklonište u kabini u kojoj trenutno živi zbirka podlih likova. ', 2, 'the-ncposter-gallery.jpg', 'yt1s.com - The Hateful Eight Trailer_1080p.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `prijedlozi`
--

CREATE TABLE `prijedlozi` (
  `pid` int(11) NOT NULL,
  `Prijedlog` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prijedlozi`
--

INSERT INTO `prijedlozi` (`pid`, `Prijedlog`) VALUES
(1, 'black panther'),
(2, 'black panther'),
(3, 'avengers endgame'),
(4, 'black panther'),
(5, 'avengers assemble'),
(6, 'avengers endgame'),
(7, 'avengers endgame'),
(8, 'black panther'),
(9, 'shazam!'),
(10, 'shazam!');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(100) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `username`, `passwd`, `name`, `phone`, `email`, `DOB`, `mid`) VALUES
(1, 'admin@gmail.com', 'admin', 'nazif salihović', '3876212462', 'nazzif10@gmail.com', '28/05/1994', 5),
(8, 'tony@gmail.com', '11111', 'toni  marjanović', '65261262', 'tony@gmail.com', '28/10/1998', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `prijedlozi`
--
ALTER TABLE `prijedlozi`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `mid` (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `prijedlozi`
--
ALTER TABLE `prijedlozi`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user1`
--
ALTER TABLE `user1`
  ADD CONSTRAINT `user1_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
