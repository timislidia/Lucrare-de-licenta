-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 26, 2021 at 01:35 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licentanou2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorii`
--

DROP TABLE IF EXISTS `categorii`;
CREATE TABLE IF NOT EXISTS `categorii` (
  `id_categorie` int(3) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorii`
--

INSERT INTO `categorii` (`id_categorie`, `denumire`) VALUES
(1, 'Cântec'),
(2, 'Povestire'),
(3, 'Poezie'),
(4, 'Quiz');

-- --------------------------------------------------------

--
-- Table structure for table `categorii_quiz`
--

DROP TABLE IF EXISTS `categorii_quiz`;
CREATE TABLE IF NOT EXISTS `categorii_quiz` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `categorie_quiz` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorii_quiz`
--

INSERT INTO `categorii_quiz` (`id`, `categorie_quiz`) VALUES
(1, 'Vechiul Testament'),
(2, 'Noul Testament');

-- --------------------------------------------------------

--
-- Table structure for table `format`
--

DROP TABLE IF EXISTS `format`;
CREATE TABLE IF NOT EXISTS `format` (
  `id_format` int(11) NOT NULL AUTO_INCREMENT,
  `tip` varchar(255) NOT NULL,
  PRIMARY KEY (`id_format`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `format`
--

INSERT INTO `format` (`id_format`, `tip`) VALUES
(1, 'audio'),
(2, 'text');

-- --------------------------------------------------------

--
-- Table structure for table `intrebari`
--

DROP TABLE IF EXISTS `intrebari`;
CREATE TABLE IF NOT EXISTS `intrebari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numar_intrebare` varchar(5) NOT NULL,
  `intrebare` varchar(500) NOT NULL,
  `opt1` varchar(500) NOT NULL,
  `opt2` varchar(500) NOT NULL,
  `opt3` varchar(500) NOT NULL,
  `opt4` varchar(500) NOT NULL,
  `raspuns` varchar(500) NOT NULL,
  `userans` text NOT NULL,
  `id_categorie` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `intrebari`
--

INSERT INTO `intrebari` (`id`, `numar_intrebare`, `intrebare`, `opt1`, `opt2`, `opt3`, `opt4`, `raspuns`, `userans`, `id_categorie`) VALUES
(1, '1', 'Ce a creat Dumnezeu în a 3-a zi?', 'Cerul', 'Pământul', 'Luminătorii', 'Lumina', 'Pământul', 'Matei,Marcu,Luca,Ioan', 1),
(2, '2', 'Câți ani a trăit Adam?', '978', '960', '930', '900', '930', '1', 1),
(3, '3', 'Care este semnificația numelui Noe?', 'Mângâiere', 'Bunătate', 'Bucurie', 'Binecuvântare', 'Mângâiere', 'De 3 ori', 1),
(4, '4', 'Vărsatul negru este urgia cu numărul:', '6', '3', '9', '1', '6', 'Petru,Iacov și Ioan', 1),
(5, '5', 'Cine și-a vândut dreptul de întâi născut?', 'Esau', 'Iacov', 'Abel', 'David', 'Esau', '2', 1),
(6, '6', 'Câți ani a slujit Iacov lui Laban?', '14', '20', '7', '10', '20', 'Învățător', 1),
(7, '7', 'Care este semnificația numelui Israel?', 'Cel ce luptă cu Dumnezeu', 'Dumnezeu este cu noi', 'Fața lui Dumnezeu', 'Dumnezeul cel tare', 'Cel ce luptă cu Dumnezeu', 'Saduchei', 1),
(8, '8', 'Cât timp a fost ascuns Moise?', '3 ani', '3 luni', '3 zile', '6 luni', '3 luni', 'Timotei', 1),
(9, '9', 'Câți ani a avut Moise când s-a înfățișat înaintea lui Faraon?', '80', '93', '83', '75', '80', 'Galateni', 1),
(10, '10', 'Care este a 9-a urgie?', 'Moartea celor întâi născuți', 'Broaștele', 'Întunericul de 3 zile', 'Piatra și focul', 'Întunericul de 3 zile', '7', 1),
(11, '1', 'Care este ordinea celor 4 evanghelii?', 'Matei,Marcu,Luca,Ioan', 'Matei,Luca,Ioan,Marcu', 'Marcu,Matei,Luca,Ioan', 'Matei,Ioan,Luca,Marcu', 'Matei,Marcu,Luca,Ioan', 'Matei,Marcu,Luca,Ioan', 2),
(12, '2', 'Câți din cei 10 leproși vindecați de Domnul Isus s-au întors să-i mulțumească?', 'Toți', '9', '1', '3', '1', '1', 2),
(13, '3', 'De câte ori s-a lepădat Petru de Domnul Isus?', 'Niciodată', 'De 2 ori', 'De 3 ori', 'De 5 ori', 'De 3 ori', 'De 3 ori', 2),
(14, '4', 'Care ucenici erau prezenți în momentul schimbării la față a Mântuitorului?', 'Petru și Ioan', 'Iacov și Ioan', 'Iacov și Petru', 'Petru,Iacov și Ioan', 'Petru,Iacov și Ioan', 'Petru,Iacov și Ioan', 2),
(15, '5', 'Câți bănuți a aruncat în visterie văduva săracă?', '2', '3', '10', '30', '2', '2', 2),
(16, '6', 'Ce înseamnă cuvântul Rabi?', 'Mântuitor', 'Învățător', 'Apărător', 'Fariseu', 'Învățător', 'Învățător', 2),
(17, '7', 'Cum se numea gruparea oamenilor din vremea Mântuitorului care nu credeau în Înviere?', 'Farisei', 'Saduchei', 'Vameși', 'Cărturari', 'Saduchei', 'Saduchei', 2),
(18, '8', 'Cum se numea tânărul ucenic al lui Pavel căruia i-a adresat 2 epistole?', 'Eutih', 'Tit', 'Filimon', 'Timotei', 'Timotei', 'Timotei', 2),
(19, '9', 'În care dintre epistole sunt menționate roadele Duhului Sfânt?', 'Efeseni', 'Fiipeni', 'Galateni', 'Coloseni', 'Galateni', 'Galateni', 2),
(20, '10', 'Câte biserici sunt amintite în cartea Apocalipsa?', '3', '5', '7', '9', '7', '7', 2);

-- --------------------------------------------------------

--
-- Table structure for table `preferate`
--

DROP TABLE IF EXISTS `preferate`;
CREATE TABLE IF NOT EXISTS `preferate` (
  `p_id` int(3) NOT NULL AUTO_INCREMENT,
  `r_id` int(3) NOT NULL,
  `sursa` varchar(255) DEFAULT NULL,
  `u_id` int(3) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`),
  KEY `r_id` (`r_id`),
  KEY `u_id` (`u_id`),
  KEY `r_sursa` (`sursa`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `preferate`
--

INSERT INTO `preferate` (`p_id`, `r_id`, `sursa`, `u_id`, `timestamp`) VALUES
(41, 49, NULL, 3, '2021-06-21 18:00:58'),
(88, 30, 'Povestiri\\Cel_mai_frumos_oras.pdf', 1, '2021-06-23 16:13:27'),
(93, 92, 'Cantece\\Eldad\\Învață de la Iov.mp3', 1, '2021-06-26 16:01:12'),
(94, 56, NULL, 1, '2021-06-26 16:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `resurse`
--

DROP TABLE IF EXISTS `resurse`;
CREATE TABLE IF NOT EXISTS `resurse` (
  `id_resursa` int(3) NOT NULL AUTO_INCREMENT,
  `titlu` varchar(255) NOT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `id_categorie` int(3) NOT NULL,
  `id_format` int(3) NOT NULL,
  `continut` text,
  `sursa` varchar(255) DEFAULT NULL,
  `id_categorie_quiz` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_resursa`),
  KEY `id_format` (`id_format`),
  KEY `id_categorie` (`id_categorie`),
  KEY `id_categorie_quiz` (`id_categorie_quiz`),
  KEY `sursa` (`sursa`)
) ENGINE=InnoDB AUTO_INCREMENT=182 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resurse`
--

INSERT INTO `resurse` (`id_resursa`, `titlu`, `autor`, `id_categorie`, `id_format`, `continut`, `sursa`, `id_categorie_quiz`) VALUES
(1, 'Creația', 'Vechiul Testament', 2, 1, '', 'audiovt\\Creația.mp3', NULL),
(2, 'Căderea în păcat', 'Vechiul Testament', 2, 1, '', 'audiovt\\Căderea în păcat.mp3', NULL),
(3, 'Cain și Abel', 'Vechiul Testament', 2, 1, '', 'audiovt\\Cain și Abel.mp3', NULL),
(4, 'Jertfirea lui Isaac', 'Vechiul Testament', 2, 1, '', 'audiovt\\Jertfirea lui Isaac.mp3', NULL),
(5, 'Turnul Babel', 'Vechiul Testament', 2, 1, '', 'audiovt\\Turnul Babel.mp3', NULL),
(6, 'Noe și potopul', 'Vechiul Testament', 2, 1, '', 'audiovt\\Noe și potopul.mp3', NULL),
(7, 'O soție pentru Isaac', 'Vechiul Testament', 2, 1, '', 'audiovt\\O soție pentru Isaac.mp3', NULL),
(8, 'Iosif vândut de frații săi', 'Vechiul Testament', 2, 1, '', 'audiovt\\Iosif vândut de frații săi.mp3', NULL),
(10, 'Tinerețea lui Moise', 'Vechiul Testament', 2, 1, '', 'audiovt\\Tinerețea lui Moise.mp3', NULL),
(11, 'Trimiterea lui Moise', 'Vechiul Testament', 2, 1, '', 'audiovt\\Trimiterea lui Moise.mp3', NULL),
(12, 'Vițelul de aur', 'Vechiul Testament', 2, 1, '', 'audiovt\\Vițelul de aur.mp3', NULL),
(13, 'Ieșirea din Egipt', 'Vechiul Testament', 2, 1, '', 'audiovt\\Ieșirea din Egipt.mp3', NULL),
(14, 'Cucerirea Ierihonului', 'Vechiul Testament', 2, 1, '', 'audiovt\\Cucerirea Ierihonului.mp3', NULL),
(15, 'Via Dolorosa', 'Noul Testament', 2, 1, '', 'audiont\\Via Dolorosa.mp3', NULL),
(16, 'Vegheați', 'Noul Testament', 2, 1, '', 'audiont\\Vegheați.mp3', NULL),
(17, 'Prinderea lui Isus', 'Noul Testament', 2, 1, '', 'audiont\\Prinderea lui Isus.mp3', NULL),
(18, 'Pescuirea Minunată', 'Noul Testament', 2, 1, '', 'audiont\\Pescuirea Minunată.mp3', NULL),
(19, 'Maria și Marta', 'Noul Testament', 2, 1, '', 'audiont\\Jerfirea lui Isaac.mp3', NULL),
(20, 'La Capernaum', 'Noul Testament', 2, 1, '', 'audiont\\La Capernaum.mp3', NULL),
(21, 'La Betleem', 'Noul Testament', 2, 1, '', 'audiont\\La Betleem.mp3', NULL),
(22, 'Învierea lui Lazăr', 'Noul Testament', 2, 1, '', 'audiont\\Învierea lui Lazăr.mp3', NULL),
(23, 'Înmulțirea pâinilor', 'Noul Testament', 2, 1, '', 'audiont\\Înmulțirea pâinilor.mp3', NULL),
(24, 'Ghetsimani', 'Noul Testament', 2, 1, '', 'audiont\\Ghetsimani.mp3', NULL),
(25, 'Fiul risipitor', 'Noul Testament', 2, 1, '', 'audiont\\Fiul risipitor.mp3', NULL),
(26, 'A murit Domnul Isus și pentru tine', '', 2, 2, '', 'Povestiri\\A_murit_Domnul_Isus_si_pentru_mine.pdf', NULL),
(27, 'Ascultarea de părinți', '', 2, 2, '', 'Povestiri\\Ascultarea_de_parinti.pdf', NULL),
(28, 'Bilet gratuit', '', 2, 2, '', 'Povestiri\\Bilet_gratuit.pdf', NULL),
(29, 'Canarul lui George', '', 2, 2, '', 'Povestiri\\Canarul_lui_George.pdf', NULL),
(30, 'Cel mai frumos oraș', '', 2, 2, '', 'Povestiri\\Cel_mai_frumos_oras.pdf', NULL),
(31, 'Corbul lui Dumnezeu', '', 2, 2, '', 'Povestiri\\Corbul_lui_Dumnezeu.pdf', NULL),
(32, 'Doi băieți într-un stejar', '', 2, 2, '', 'Povestiri\\Doi_baieti_intr_un_stejar.pdf', NULL),
(33, 'Este numele tău scris în cer?', '', 2, 2, '', 'Povestiri\\Este_numele_tau_scris_in_cer.pdf', NULL),
(34, 'Ești tu mântuit?', '', 2, 2, '', 'Povestiri\\Esti_tu_mantuit.pdf', NULL),
(35, 'Există păcate mici?', '', 2, 2, '', 'Povestiri\\Exista_pacate_mici.pdf', NULL),
(36, 'Logica micuțului Ionuț', '', 2, 2, '', 'Povestiri\\Logica_micutului_Ionut.pdf', NULL),
(37, 'Mărul roșu', '', 2, 2, '', 'Povestiri\\Marul_rosu.pdf', NULL),
(38, 'Minciuna', '', 2, 2, '', 'Povestiri\\Minciuna.pdf', NULL),
(39, 'Nu vreau să mint', '', 2, 2, '', 'Povestiri\\Nu_vreau_sa_mint.pdf', NULL),
(40, 'Oul sau găina', '', 2, 2, '', 'Povestiri\\Oul_sau_gaina.pdf', NULL),
(41, 'Pisicuța pierdută', '', 2, 2, '', 'Povestiri\\Pisicuta_pierduta.pdf', NULL),
(42, 'Roagă-te și muncește', '', 2, 2, '', 'Povestiri\\Roaga_te_si_munceste.pdf', NULL),
(43, 'Rugăciunea din pernă', '', 2, 2, '', 'Povestiri\\Rugaciunea_din_perina.pdf', NULL),
(44, 'Umbrela', '', 2, 2, '', 'Povestiri\\Umbrela.pdf', NULL),
(45, 'Un prieten credincios', '', 2, 2, '', 'Povestiri\\Un_prieten_credincios.pdf', NULL),
(46, 'Vasul cu untdelemn', '', 2, 2, '', 'Povestiri\\Vasul_cu_untdelemn.pdf', NULL),
(48, 'Copilașule iubit', 'Floarea Ferghete', 3, 2, 'Dobândește înțelepciune, copilașule iubit,\r\nDacă vrei să fi frumos, în viață fericit,\r\nNu te împrieteni cu lumea, caută să fi curat,\r\nFi prieten cu Isus, și să stai cu El la sfat\r\n\r\nEl te apără de rele, gardă pune în jurul tău,\r\nDacă umbli pe cărare, și rămâi copilul Său,\r\nPasul Ți-l călăuzește, ca să fi de neclintit,\r\nSă ai zile fericite, totdeauna pe pământ,\r\n\r\nFi umil, curat la suflet, nu rămâne întristat,\r\nSeara când apune zorii, nu te culca supărat,\r\nFi cu inima împăcată, ruga ta să urce în sus,\r\nFără ură, răutate, către Tronul Lui Isus\r\n\r\nDobândește chibzuință, și pricepere în umblare\r\nȘi Cuvântul Sfânt să-ți fie o lumină pe cărare,\r\nSă poți izbuti în toate, să le duci pân\'la sfârșit,\r\nSă trăiești o viață sfântă, copilașule iubit.', '', NULL),
(49, 'O Isus ai fost copil', 'Floarea Ferghete', 3, 2, 'O Isus Ai fost Copil, ca și mine pe pământ\r\nȘi la cei din jurul Tău, Ai vestit al Tău Cuvânt,\r\nVreau să fac și eu la fel, să le spun la copilași,\r\nDespre cum Ai fost Copil, și că Te-ai născut în grajd\r\n\r\nSă învăț și să citesc, cartea Ta de înțelepțiune,\r\nCa să fiu viața toată, Doamne, ca să fiu ca Tine,\r\nSă fiu bun, ascultător, pe părinți să îi cinstesc\r\nȘi pe Domnul Dumnezeu, toată viața să-L iubesc\r\n\r\nIar atunci când voi fi mai mare, să vestesc iubirea Ta,\r\nSă urmez a Ta cărare, să împlinesc porunca Ta,\r\nCăci viața e la Tine, fericirea pe pământ,\r\nSunt în Mâna Ta Părinte, Tu Ai ultimul Cuvânt.\r\n', '', NULL),
(50, 'Dimineața când deschizi', 'Floarea Ferghete', 3, 2, 'Dimineața când deschizi, ochișorii tăi micuți,\r\nSpune: Doamne, Îți mulțumim, că suntem bine crescuți,\r\nMulțumim pentru lumina, pentru Soarele pe cer,\r\nPentru pâinea pe pământ, pentru roadele pe el\r\n\r\nIar când vine miezul zilei, spune Tatăl nostru iar:\r\nAzi Îți mulțumim frumos, că ne-ai dat viață în dar,\r\nPot să merg, să văd, să aud, cântecul de ciocârlii,\r\nTată, iar Îți mulțumim, lăudat în veci să fii,\r\n\r\nIar atunci când vine seara, spune rugăciune iar:\r\nDoamne, Îți mulțumim de toate, de iubirea Ta în dar,\r\nMulțumim Ție că astăzi, ne-ai păzit de tot ce-i rău,\r\nFii cu noi și ne păzește, Bunul nostru Dumnezeu.', '', NULL),
(51, 'Tatăl meu', 'Floarea Ferghete', 3, 2, 'Cine-i mare şi puternic?\r\nEste tatăl meu.\r\nCine este Preaputernic?\r\nEste Domnul Dumnezeu.\r\n\r\nTata mă îndrumă-n viaţă\r\nSpre Părintele ceresc\r\nMă conduce pe-a Sa cale\r\nCa să nu mă rătăcesc.\r\n\r\nMulţumesc o, Doamne,\r\nPentru tatăl meu\r\nCe mă ocroteşte\r\nZi de zi mereu.\r\n\r\nEl mi-arată-n viaţă\r\nCum să umblu drept\r\nŞi îmi dă povaţă\r\nSfatu-i înţelept.\r\n\r\n\r\n', '', NULL),
(52, 'Domnul e păstorul', 'Liliana Spînu', 3, 2, 'Merg acum pe cale\r\nMerg încetișor,\r\nSunt mica oiță\r\nCondusă de păstor.\r\n\r\nDomnul e păstorul,\r\nEu merg după el\r\nNu mă tem de nimeni\r\nCăci sunt al său miel,\r\nEl mă ocrotește mă conduce acum\r\nȘi nu îmi e frică de nimic pe drum.\r\n\r\nAscult cu credință\r\nSfatul minunat,\r\nÎndrumarea care\r\nEl acum mi-a dat.\r\n\r\nÎmpreună frate\r\nMergem noi voioși.\r\nSuntem mielușei,\r\nDar suntem credincioși\r\nNu mă tem de nimeni\r\nDe nici un dușman,\r\nSunt lîngă stăpân\r\nȘi ocrotire am! \r\n\r\n\r\n\r\n', '', NULL),
(53, 'Azi se pune o întrebare', 'Floarea Ferghete', 3, 2, 'Azi se pune o întrebare, și copii să răspundă:\r\n-Unde vor putea fugii, toți copii să se-ascundă?\r\nCând pe mama n-o ascultă, sau ascund o faptă rea?\r\nOare știți că Dumnezeu toate le poate vedea?\r\n\r\nSau de spui chiar o minciună, sau n-asculți de-ai tăi părinți,\r\nEl Isus nu te iubește, numai pe copii cuminți,\r\nCând ești rău sau ești cuminte, când tu pleci sau când revii,\r\nToate le cunoaște Domnul, totul știe dragi copii!\r\n\r\nSe mai pune o întrebare, și copii dacă știu:\r\nCine a făcut Pământul și izvorul în pustiu?\r\nDomnul le-a făcut pe toate, pe pământ au fost create,\r\nMulte vietăți, și păsări animale, minunate?\r\n\r\nȘi vă întreabă încă odată, dacă știți răspundeți toți:\r\nCine va creat pe voi și să fiți așa frumoși?\r\nEste Domnul Creatorul, e zidarul Minunat,\r\nHaideți toți copiii lumii, să-I cântăm neîncetat.', '', NULL),
(54, 'Multe vrăbii', 'Floarea Ferghete', 3, 2, 'Multe vrăbii stau grămadă, prin copaci sub rămurele,\r\nStau și ciripesc într-una, cine le-a creat pe ele?\r\nCine le-a dat glas la toate, făurit cu dibăcie?\r\nEste Domnul Creatorul, toată slava a Lui să fie\r\n\r\nPrintre ierburi stă furnica și adună, pe cărare,\r\nPentru vremurile reci, să lucreze cu răbdare,\r\nCine le-a dat hărnicie, să alerge de cu zori,\r\nPrin ogoare și câmpie, ele se trudesc, cu spor\r\n\r\nZboară păsările în cete, spre căldură spre apus,\r\nCine le îndrumă calea, când căldura li s-a dus?\r\nEste Domnul ce veghează, peste tot Cuvântul Sfânt,\r\nCe conduce Universul, sus în cer și pe Pământ\r\n\r\nZboară fluturi, musculițe, care sunt la pești o hrană,\r\nStau broscuțele pe lac, cufundat în deasă iarbă,\r\nPrintre stânci se-ascund și ulii, căprioarele cu cerbi,\r\nToate El le poartă grija, El veghează peste vremi\r\n\r\nStă albina, pe petale, prin grădinile cu flori,\r\nCe adună cu grăbire dimineața de cu zori,\r\nPrin păduri se adună în tufe, lei ieduți și iepurași,\r\nPe câmpie multe flori, crini, zambile toporași,\r\n', '', NULL),
(55, 'Pace pentru cei micuți', 'Cristi Dobrei', 3, 2, 'Multã pace dai Tu, Doamne,\r\nPreaiubitilor copii\r\nŞi le spui şi \"Noapte bunã!\"\r\nSã se poatã odihni.\r\n\r\nCãci Tãticul meu îmi spune\r\nCând mã pune la culcare:\r\n\"Trage plapuma pe tine\r\nŞi... sã dormi, ca sã creşti mare!\"\r\n\r\nNu mã tem de întuneric\r\nCãci lumina mea e Domnul\r\nŞi trimite îngeraşii\r\nSã îmi privegheze somnul.\r\n\r\nChiar când nu-L vãd, dimineaţa,\r\nMã sãrutã. Mã trezesc,\r\nSar din pat, şi-n rugãciune\r\nÎi spun: \"Tatã, Te iubesc!\"\r\n', '', NULL),
(56, 'Copilăria mea', 'Irina M', 3, 2, 'Copilăria mea e numai soare,\r\nCu jocuri și cu cântece sublime.\r\nIsuse, eu în palma-Ți iubitoare\r\nStau fără frică, fără-ngrijorare\r\nCăci viața mea-i frumoasă lângă Tine.\r\n\r\nZâmbesc mereu când mă sărută zorii\r\nCu raze din lumina lor pe față,\r\nPrivesc pe cer cum vântul duce norii\r\nȘi-Ți simt prezența coborând din glorii,\r\nIsuse drag, în orice dimineață.\r\n\r\nTe văd și-n flori, și-n iarbă, și în stele —\r\nDin răsărit și până în apus.\r\nTe văd și-n ciripit de păsărele,\r\nȘi mă unesc în versul meu cu ele,\r\nSă-Ți cânt iubirea, scumpul meu Isus!\r\n', '', NULL),
(58, 'Rămână pacea ta', 'Emanuel Hasan', 3, 2, 'Mă vezi din cer în orice clipă,\r\nDe Tine nu pot să m-ascund,\r\nMă ocrotești cu-a Ta aripă\r\nOriunde-aș fi, Părinte sfânt!\r\n\r\nUn tată am ce mă iubește,\r\nPe care-l văd aici, mereu\r\nȘi unul sus, ce mă păzește\r\nAcela fiind Tu, Domnul meu!\r\n\r\nTu m-ai creat, mi-ai dat viață\r\nPrin mama pe care-o iubesc\r\nȘi-n fiecare dimineață\r\nPentru ea mult îți mulțumesc!\r\n\r\nRămână pacea Ta divină\r\nÎn casa noastră, ne-ncetat;\r\nNoaptea și ziua doar senină\r\nPână Te vom vedea odat\'!', '', NULL),
(59, 'David și Goliat', 'Dina Roată', 3, 2, 'O armată c-o armată\r\nErau gata să se bată\r\nFață-n față se-nșirau\r\nÎnsă lupta nu-ncepeau.\r\n\r\nUriașul Goliat\r\nUn războinic ne-nfricat\r\nZi de zi ieșea-nainte\r\nPe Israel să-nspăimânte.\r\n\r\nToți de Goliat fugeau\r\nȘi de frică se-ascundeau\r\nÎnsă David, curajos,\r\nA ieșit să-l deie jos.\r\n\r\nS-a-ncrezut în Dumnezeu\r\nFără frică de om rău\r\nȘi cu-o praștie și-o piatră\r\nA ieșit ca să se bată.\r\n\r\nPiatra-n frunte l-a pocnit\r\nȘi Goliat a murit.\r\nFilistenii au fugit.\r\nDumnezeu i-a biruit!', '', NULL),
(60, 'Eu nu sunt', 'Sav Simona', 3, 2, 'Eu nu sunt mare învăţat,\r\nDar ştiu o mare taină,\r\nCăci Domnul nost\' Isus Hristos \r\nNe-ascultă şi ne-ndeamnă.\r\n\r\nEu nu pot face lucruri mari, \r\nCăci n-am putere multă,\r\nDar am nădejdea că Isus, \r\nÎn viață mă ascultă.\r\n\r\nEu nu sunt mare luptător,\r\nNu am nici armătură,\r\nDar vreau să fiu mai silitor \r\nCa să primesc cunună.\r\n\r\nEu nu sunt tare şi voinic,\r\nDar ştiu o rugăciune:\r\n”Doamne, în braţul Tău mă ia, \r\nSă fac ce este bine!”\r\n\r\nEu nu sunt falnic, arătos,\r\nDa-n Domnul am valoare,\r\nŞi sus în Cer voi fi cu El,\r\nLa marea Sărbătoare.', '', NULL),
(61, 'Curat,gingaș și fără pată', 'Ica Drăgoi', 3, 2, 'Curat, gingaș și fără pată,\r\nUn copilaș sunt, Domnul meu,\r\nȘi prin trăirea mea curată,\r\nVreau să arăt că sunt al Tău.\r\n\r\nMi-au spus părinții despre Tine,\r\nÎn casa Ta m-au dus mereu,\r\nM-au învățat ce este bine,\r\nMi-au spus căci: Tu ești Dumnezeu.\r\n\r\nAșa cum sunt eu vin la Tine,\r\nTe rog să mă primești Isus,\r\nSunt mic, dar brațul Tău mă ține,\r\nEu știu căci mă iubești nespus.\r\n\r\nTe rog să-mi dai înțelepciune,\r\nȘi să mă crești, o, Domnul meu,\r\nAjută-mă să fac doar bine,\r\nȘi să fiu bun, pe placul Tău.\r\n', '', NULL),
(62, 'Buburuza', 'Cornel Jigău', 3, 2, 'Prin păduri şi prin poieni,\r\nPrintre flori şi buruieni,\r\nUite-o mică buburuză,\r\nFără nicio călăuză,\r\nCe alene se agaţă,\r\nSă-şi croiească drum în viaţă.\r\n\r\nPrin pădurea fermecată,\r\nO făptură se arată,\r\nCare mormăie uşor:\r\nMor, mor, mor şi iarăşi mor!\r\n\r\nNeatent fiind din fire,\r\nNărav fără lecuire,\r\nCât p\'aci să o strivească,\r\nPe surata gâzăcească!\r\n\r\nBuburuza la strâmtoare,\r\nStrigă deci în gura mare:\r\n--Ursule,blană stufoasă,\r\nPrea te crezi la tine-acasă,\r\nFii şi tu puţin atent,\r\nCă eşti tare neglijent,\r\nCăci pe-aicea prin pădure-s\r\nMulte mii şi mii de gâze,\r\nMilioane de furnici,\r\nGâze mari şi gâze mici,\r\nToate mişunând pe-aici,\r\nSă-şi găsească-un rost al lor,\r\nDat de bunul Creator!\r\n\r\nMorală:\r\nUrşi pot fi şi-n adunare,\r\nCe au faimă foarte mare,\r\nŞi-i strivesc pe cei mai mici,\r\nPentru că îi cred furnici!', '', NULL),
(63, 'Te laud Doamne', 'Iurescu Iulian', 3, 2, 'Te laud Doamne, Te iubesc,\r\nTu esti al meu Tata Ceresc,\r\nImi porti de grija zi de zi\r\nMa incred in Tine orice-ar fi. \r\n\r\nTu esti puternic, Creator,\r\nIn univers Conducator,\r\nSi-n inima mea Imparat\r\nCaci Tu esti singur Minunat.\r\n', '', NULL),
(64, 'Eu sunt micuț', 'Iurescu Iulian', 3, 2, 'Eu sunt micuț, si sunt frumos,\r\nAsa m-a creat Hristos, \r\nEl Domnul nostru minunat\r\nAici cu voi m-a asezat.\r\n\r\nSă spun o poezie mică\r\nCare s-alunge orice frică,\r\nCe dă curaj si la copii\r\nSă zică alte poezii.\r\n\r\nSi vouă celor mai bătrâni \r\nPutere sa vă dea in maini, \r\nCa să le ridicati spre cer\r\nSă-L lăudați pe El cu zel.', '', NULL),
(65, 'Deși prea mare eu nu sunt', 'Daniela P', 3, 2, 'Deși prea mare eu nu sunt\r\nPe Dumnezeul meu cel sfânt,\r\nEu vreau să Îl slujesc mereu,\r\nChiar dacă uneori mi-e greu.\r\n\r\nNu, nu eu nu vreau ca să mint,\r\nSă-njur, să fur si să-L resping,\r\nPe Cel ce viața mi-a dat,\r\nȘi mă păzește ne-ncetat.', '', NULL),
(66, 'Părinții', 'Cristi Dobrei', 3, 2, 'Cine flori îţi împleteşte\r\nŞi cununi din pipirig?\r\nCine, oare, te-nveleşte\r\nNoaptea, sã nu-ţi fie frig?\r\n\r\nCine ia în orice clipã\r\nMâna ta în mâna lui,\r\nŞi te-ascunde sub aripã\r\nSã n-ai frica nimãnui?\r\n\r\nCine grija ta o poartã\r\nCa sã nu te temi deloc?\r\nCine-ţi joacã \"Mâna-Moartã\"\r\nIarna, seara, lângã foc?', '', NULL),
(67, 'Modelul meu', 'Cristi Dobrei', 3, 2, 'Eu sunt mic, multe nu ştiu,\r\nNici vreo literã sã scriu;\r\nDar, cum face tatãl meu,\r\nVãd, şi... vreau sã fac şi eu!\r\n\r\nSã nu-mi spuneţi cã sunt mic\r\nŞi cã nu-nţeleg nimic!\r\nTare vã mai înşelaţi\r\nŞi voi, mame, şi voi, taţi!\r\n\r\nCredeţi voi cã nu-nţeleg\r\nCând la minte sunt întreg!\r\nDumneata sã ştii aşa:\r\nOrişice pot învãţa!\r\n\r\nVoi, pãrinţii mei, sã ştiţi,\r\nNu vã lãsaţi amãgiţi:\r\nNu-s zidar, nici arhitect,\r\nDar vã copiez perfect!\r\n\r\nŞi zidesc ce voi stricaţi\r\nCând în casã vã certaţi;\r\nPentru voi mã rog mereu,\r\nStricând planul Celui Rãu.\r\n\r\nAstfel, cât veţi fi de sfinţi,\r\nVoi, ce-mi sunteţi azi pãrinţi\r\nEu, om mare, într-o zi,\r\nCel mult tot aşa voi fi!\r\n\r\nVoi sunteţi modelul meu\r\nŞi aşa veţi fi mereu!\r\nEu, cu ochii amândoi,\r\nZi de zi mã uit la voi!\r\n\r\nSpicul gândului firesc\r\nVânturile-l unduiesc;\r\nUnduiascã-se mereu,\r\nEu voi crede-n Dumnezeu! ', '', NULL),
(68, 'Bunul nostru Tată', 'Traian Dorz', 3, 2, 'Bunul nostru Tată Sfînt\r\neu pun astăzi legămînt,\r\ntoată viața-mi pe pămînt\r\nsă-Ți păzesc al Tău Cuvînt.\r\n\r\nEu Te rog să mă primești\r\nprin Isus să mă sfințești\r\nși prin Duhul să mă crești\r\nfiu al Tău cum Tu dorești...\r\n\r\nBunul nostru Tată Bun,\r\nȚie inima-mi supun\r\nȚie vina mea o spun\r\nviața-n slujba Ta mi-o pun.\r\n\r\nBunul nostru Tată, vin\r\npentru slujba Ta deplin\r\nvreau Cuvîntul Tău să-L țin\r\nrob al Tău pe veci, Amin.', '', NULL),
(69, 'Despre Isus', 'Ica Drăgoi', 3, 2, 'Despre Isus vreau să spun,\r\nEl îmi este Prieten bun,\r\nLa școală cât și acasă,\r\nSingur Domnul nu mă lasă.\r\n\r\nEste cu mine mereu,\r\nEl veghează pasul meu,\r\nEl îmi dă înțelepciune,\r\nSă fac numai fapte bune.\r\n\r\nMama mea `mi spune mereu,\r\nCă există Dumnezeu,\r\nDespre Isus îmi vorbește,\r\nCu drag îmi mărturisește.\r\n\r\nSunt micuț, un copilaș,\r\nCurat la suflet, gingaș,\r\nDar din fragedă pruncie,\r\nDoamne, vreau să-Ți urmez Ție.\r\n\r\nTe rog să mă însoțești,\r\nDe rele să mă păzești,\r\nDă-mi înțelepciune sfântă,\r\nTe rog mă binecuvântă.', '', NULL),
(70, 'Am o carte ce-o iubesc', 'Ica Drăgoi', 3, 2, 'Am o carte ce-o iubesc\r\nE frumoasă, colorată\r\nÎn ea scrie de Isus\r\nȘi de dragostea ce-mi poartă.\r\n\r\nAm învățat alfabetul\r\nȘi sunt foarte bucuros\r\nPot citi din cartea sfântă\r\nDespre Domnul meu Hristos.\r\n\r\nBiblia pentru copii\r\nCu imagini colorate\r\nEa e cartea ce-o iubesc\r\nÎi citesc lecțiile toate.\r\n\r\nÎn ea am găsit pe David\r\nSamson, Iosif, Daniel\r\nPe Isus Mântuitorul\r\nPe Mesia, blândul Miel.\r\n\r\nEu iubesc această carte\r\nCăci este adevărată\r\nO citesc cu bucurie\r\nEste-o carte minunată.', '', NULL),
(71, 'Am o bucurie mare', 'Ica Drăgoi', 3, 2, 'Am o mare bucurie\r\nȘi vreau să mărturisesc,\r\nPe Isus, îl am Prieten\r\nVreau doar Lui să Îi slujesc.\r\n\r\nE cu mine la tot pasul\r\nMă păzește iubitor,\r\nMă ajută-n încercare\r\nEl e Domnul domnilor.\r\n\r\nMerge cu mine la școală\r\nEl îmi dă înțelepciune,\r\nMă învață în tot timpul\r\nSă fac numai fapte bune.\r\n\r\nLa biserică merg vesel\r\nSă învăț al lui Cuvânt,\r\nÎi dau slavă prin poezie\r\nȘi Îl laud, cu al meu cânt.', '', NULL),
(72, 'Acum din fragedă pruncie', 'Ica Drăgoi', 3, 2, 'Acum din fragedă pruncie,\r\nCu Domnul Isus vreau să fiu,\r\nLa Casa Lui ,merg cu părinţii,\r\nÎl laud pe El,căci este viu.\r\n\r\nLa şcoală-mi dă înţelepciune,\r\nŞi premiu-ntâi îl iau mereu,\r\nSunt cap,nu coadă,în tot locul,\r\nDe mic sunt ucenicul Său.\r\n\r\nÎn tot ce fac îmi dă izbândă,\r\nCorect m-ajută ca să fiu,\r\nDe orice rău,El mă păzeşte,\r\nEl mă iubeşte,eu o ştiu.\r\n\r\nE-al meu Prieten,şi m-ascultă,\r\nÎn rugăciune-i spun, şi-n gând,\r\nMă-ncred în El,şi când sunt mare,\r\nCu El vreau să-închei legământ.', '', NULL),
(73, 'Rugăciune de copil', 'Ica Drăgoi', 3, 2, 'Am în piept o rugăciune\r\nPentru al meu Isus\r\nCa din cer când o să vină,\r\nSă mă ducă sus.\r\n\r\nȘi să-l ducă și pe tata,\r\nȘi pe mama mea,\r\nȘi colegii mei de joacă\r\nToți din casa mea.\r\n\r\nEu mă rog și am în suflet\r\nDorul de nespus,\r\nCa lumea aceasta toată\r\nSă meargă-n cer sus.\r\n\r\nEl e marea bucurie\r\nEl e Sfântul Miel,\r\nCe S-a jertfit pentru mine,\r\nDoar să cred în El.', '', NULL),
(74, 'Samuel', 'Ica Drăgoi', 3, 2, 'Eli avea la altar \r\nCa să-i dea slujire,\r\nUn copil cu păr bălai, \r\nUn copil ca mine.\r\n\r\nŞi îl chema Samuel, \r\nDomnul îi vorbeşte, \r\nŞi cu grijă el ascultă,\r\nCe i se vesteşte.\r\n\r\nCând a fost de El chemat, \r\nA răspuns îndată \r\nŞi sluijt-a bucuros \r\nÎn viaţa toată!\r\n\r\nHaideţi astăzi, dragi copii, \r\nSă ascultăm de Domnul, \r\nDomnul va vorbi cu noi,\r\nŞi cu tot poporul. ', '', NULL),
(75, 'Se leagănă blând o floare', 'Ioan Hapca', 3, 2, 'Se leagănă blând o floare\r\nÎn adierile de vânt,\r\nEmanând dulcea chemare; \r\n- Viață fără-asemănare –\r\nÎn cerul sfânt, în cerul sfânt.\r\n\r\nNe lipim floare de floare,\r\nLegănați de Duhul Sfânt\r\nȘi buchetu-i tot mai mare,\r\nIa amploare, ia amploare\r\nÎmplinind Sfântul Cuvânt.\r\n\r\nZâmbet dulce zboară, zboară,\r\nSărutăm visu împlinit,\r\nHar divin ne înfășoară,\r\nSlăvim Taina ce coboară –\r\nMire scump, Mire iubit!\r\n', '', NULL),
(76, 'Dar Domnul', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Dar Domnul.mp3', NULL),
(77, 'David și Goliat', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\David si Goliat.mp3', NULL),
(78, 'David și Ionatan', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\David si Ionatan.mp3', NULL),
(79, 'Eu sunt mic', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Eu sunt mic.mp3', NULL),
(80, 'Fiecare copil', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Fiecare copil.mp3', NULL),
(81, 'Greierașul', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Greierașul.mp3', NULL),
(82, 'Iosif', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Iosif.mp3', NULL),
(83, 'Isus al meu', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Isus al meu.mp3', NULL),
(84, 'Lecția de Creație', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Lectia de Creatie.mp3', NULL),
(85, 'Nu e dragoste mai mare', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Nu e dragoste mai mare.mp3', NULL),
(86, 'Orbul', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Orbul.mp3', NULL),
(87, 'Prietenia', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Prietenia.mp3', NULL),
(88, 'Zacheu', 'Cristale', 1, 1, '', 'Cantece\\Cristale\\Zacheu.mp3', NULL),
(89, 'A frânt temeliile morții', 'Eldad', 1, 1, '', 'Cantece\\Eldad\\A frânt temeliile morții.mp3', NULL),
(90, 'Cu toată inima', 'Eldad', 1, 1, '', 'Cantece\\Eldad\\Cu toată inima.mp3', NULL),
(91, 'Domnul oștirii', 'Eldad', 1, 1, '', 'Cantece\\Eldad\\Domnul oștirii.mp3', NULL),
(92, 'Învață de la Iov', 'Eldad', 1, 1, '', 'Cantece\\Eldad\\Învață de la Iov.mp3', NULL),
(93, 'Isus știu mă iubește', 'Eldad', 1, 1, '', 'Cantece\\Eldad\\Isus stiu mă iubește.mp3', NULL),
(94, 'Îți mulțumesc', 'Eldad', 1, 1, '', 'Cantece\\Eldad\\Îți mulțumesc.mp3', NULL),
(95, 'Lupta de la Gabaon', 'Eldad', 1, 1, '', 'Cantece\\Eldad\\Lupta de la Gabaon.mp3', NULL),
(96, 'Mare și sfânt', 'Eldad', 1, 1, '', 'Cantece\\Eldad\\Mare și sfânt.mp3', NULL),
(97, 'Alfabetul animalelor', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Alfabetul animalelor.mp3', NULL),
(98, 'Amin,Aleluia', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Amin,Aleluia.mp3', NULL),
(99, 'Armata Domnului', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Armata Domnului.mp3', NULL),
(100, 'Ascultarea', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Ascultarea.mp3', NULL),
(101, 'Cocoșul, ceasul și cățelul', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Cocoșul, ceasul și cățelul.mp3', NULL),
(102, 'Daniel', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Daniel.mp3', NULL),
(103, 'David și Goliat ', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\David și Goliat.mp3', NULL),
(104, 'E o minune', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\E o minune.mp3', NULL),
(105, 'Fă-ți o corabie', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Fă-ți o corabie.mp3', NULL),
(106, 'Gospodarul din Ardeal', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Gospodarul din Ardeal.mp3', NULL),
(107, 'Gospodarul prin ocol', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Gospodarul prin ocol.mp3', NULL),
(108, 'Iona', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Iona.mp3', NULL),
(109, 'Isus nume minunat', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Isus nume minunat.mp3', NULL),
(110, 'Mai fă un pas', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Mai fă un pas.mp3', NULL),
(111, 'Sunt copil', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Sunt copil.mp3', NULL),
(112, 'Sunt special', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Sunt special.mp3', NULL),
(113, 'Suntem trecători', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Suntem trecători.mp3', NULL),
(114, 'Un soldățel', 'Speranta', 1, 1, '', 'Cantece\\Speranta\\Un soldățel.mp3', NULL),
(117, 'Butterfly Song', 'Unknown', 1, 1, '', 'Cantece\\Christian Songs\\Butterfly Song.mp3', NULL),
(118, 'Down in My Heart', 'Unknown', 1, 1, '', 'Cantece\\Christian Songs\\Down in My Heart.mp3', NULL),
(119, 'Father Abraham', 'Unknown', 1, 1, '', 'Cantece\\Christian Songs\\Father Abraham.mp3', NULL),
(120, 'Jesus Loves Me', 'Unknown', 1, 1, '', 'Cantece\\Christian Songs\\Jesus Loves Me.mp3', NULL),
(121, 'Jesus Loves the Little Ones Like Me', 'Unknown', 1, 1, '', 'Cantece\\Christian Songs\\Jesus Loves the Little Ones Like Me.mp3', NULL),
(122, 'My God Is So Big', 'Unknown', 1, 1, '', 'Cantece\\Christian Songs\\My God Is So Big.mp3', NULL),
(123, 'Sing Hosanna', 'Unknown', 1, 1, '', 'Cantece\\Christian Songs\\Sing Hosanna.mp3', NULL),
(125, '	\r\nThis Little Light of Mine', 'Unknown', 1, 1, '', 'Cantece\\Christian Songs\\	\r\nThis Little Light of Mine.mp3', NULL),
(126, 'When I Get to Heaven', 'Unknown', 1, 1, '', 'Cantece\\Christian Songs\\	\r\nWhen I Get to Heaven.mp3', NULL),
(127, '	\r\nWho is the King of the Jungle', 'Unknown', 1, 1, '', 'Cantece\\Christian Songs\\	\r\n	\r\nWho is the King of the Jungle.mp3', NULL),
(131, 'Quiz 1', 'Timiș Lidia', 4, 2, '', NULL, 1),
(132, 'Quiz 2', 'Timiș Lidia', 4, 2, '', NULL, 2),
(172, 'Poezie', 'Lidia', 3, 2, 'dddddddddd', NULL, NULL),
(175, 'Paul', NULL, 2, 2, NULL, 'Povestiri/Mana_mamei.pdf', NULL),
(176, 'Lalala', 'Lidia', 3, 2, 'salutaree', NULL, NULL),
(177, 'cantecel', 'Lidiuta', 1, 1, NULL, 'Cantece/Supererou.mp3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rezultate_quiz`
--

DROP TABLE IF EXISTS `rezultate_quiz`;
CREATE TABLE IF NOT EXISTS `rezultate_quiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `categorie_quiz` int(3) NOT NULL,
  `total_intrebari` varchar(100) NOT NULL,
  `raspunsuri_corecte` varchar(100) NOT NULL,
  `raspunsuri_gresite` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nume` varchar(255) NOT NULL,
  `prenume` varchar(255) NOT NULL,
  `numeutilizator` varchar(255) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `nr_telefon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gen` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nume`, `prenume`, `numeutilizator`, `parola`, `nr_telefon`, `email`, `gen`) VALUES
(1, 'Timiș ', 'Lidia', 'lidiatimis', 'isusteiubeste', '0763112786', 'lidiat@yahoo.com', 'F'),
(2, 'Popescu ', 'Raluca', 'ralucapopescu', 'ralu112', '0721672331', 'ralucapop09@yahoo.com', 'F'),
(3, 'Timis ', 'Daniel', 'danitimis', 'jesuslovesme', '07624553121', 'danielt@yahoo.com', 'M'),
(10, 'Administrator', '', 'admin', 'admin', '0745967409', 'admin@yahoo.com', 'F'),
(11, 'Popescu', 'Elena', 'elenapopescu', 'elena', '0763112997', 'elenapopescu@yahoo.com', 'F'),
(12, 'Pop', 'Dana', 'danap', 'dana', '75982798', 'danapopescu@yahoo.com', 'F');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorii_quiz`
--
ALTER TABLE `categorii_quiz`
  ADD CONSTRAINT `categorii_quiz_ibfk_1` FOREIGN KEY (`id`) REFERENCES `intrebari` (`id_categorie`);

--
-- Constraints for table `preferate`
--
ALTER TABLE `preferate`
  ADD CONSTRAINT `preferate_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `resurse` (`id_resursa`),
  ADD CONSTRAINT `preferate_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `preferate_ibfk_3` FOREIGN KEY (`sursa`) REFERENCES `resurse` (`sursa`);

--
-- Constraints for table `resurse`
--
ALTER TABLE `resurse`
  ADD CONSTRAINT `resurse_ibfk_1` FOREIGN KEY (`id_format`) REFERENCES `format` (`id_format`),
  ADD CONSTRAINT `resurse_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categorii` (`id_categorie`),
  ADD CONSTRAINT `resurse_ibfk_3` FOREIGN KEY (`id_categorie_quiz`) REFERENCES `categorii_quiz` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
