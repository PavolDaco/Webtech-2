-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Hostiteľ: localhost
-- Čas generovania: Út 23.Máj 2017, 20:27
-- Verzia serveru: 5.7.17-0ubuntu0.16.04.1
-- Verzia PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `Final`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Aktuality`
--

CREATE TABLE `Aktuality` (
  `id` int(11) NOT NULL,
  `jazyk` varchar(5) COLLATE utf8_slovak_ci NOT NULL,
  `titulok` varchar(150) COLLATE utf8_slovak_ci NOT NULL,
  `text` varchar(500) COLLATE utf8_slovak_ci NOT NULL,
  `typ_aktuality` varchar(15) COLLATE utf8_slovak_ci NOT NULL,
  `platnost` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `Aktuality`
--

INSERT INTO `Aktuality` (`id`, `jazyk`, `titulok`, `text`, `typ_aktuality`, `platnost`) VALUES
(1, 'en', 'A', 'A', 'oznamy', '2017-04-10'),
(2, 'sk', 'B', 'b', 'oznamy', '2017-04-10'),
(3, 'en', 'C', 'C', 'oznamy', '2017-04-13'),
(4, 'en', 'D', 'D', 'oznamy', '2017-04-13'),
(5, 'sk', 'f', 'f', 'oznamy', '2017-04-13'),
(6, 'en', 'H', 'H', 'oznamy', '2017-04-13'),
(7, 'sk', 'm', 'm', 'oznamy', '2017-04-13'),
(8, 'en', 'M', 'M', 'oznamy', '2017-04-13'),
(9, 'sk', 't', 't', 'oznamy', '2017-04-13'),
(10, 'sk', 'ggg', 'ggg', 'propagacia', '2017-04-28'),
(11, 'sk', 'rrr', 'rrr', 'zivot', '2017-04-29'),
(12, 'sk', 'SVOC', 'SVOC', 'zivot', '2017-04-30'),
(13, 'en', 'Eng SVOC', 'Eng SVOC', 'zivot', '2017-04-30'),
(14, 'sk', 'Pozvanka', 'pridte sa pozriet', 'propagacia', '2017-04-10'),
(16, 'sk', 'asdads', 'asdasdasd', 'oznamy', '2018-10-10'),
(17, 'sk', 'fsdd', 'fsdgg', 'oznamy', '2018-10-10'),
(18, 'en', 'fdsdf', 'fdsfsdfsdf', 'propagacia', '2017-10-10'),
(19, 'en', 'ffaaa', 'faffasdf', 'zivot', '2017-09-09'),
(20, 'en', 'fgdfgdf', 'fsdfsdf', 'propagacia', '2018-10-10'),
(21, 'en', 'dasfsd', 'dsfsdfsdfhhgf', 'propagacia', '2017-05-25'),
(22, 'sk', 'dsfafsd', 'fdsgsgdf', 'propagacia', '2019-02-02'),
(23, 'en', 'sefdfe', 'dfsdf', 'propagacia', '2017-08-08'),
(24, 'sk', 'ttttt', 'tttt', 'propagacia', '2018-01-01'),
(25, 'en', 'jjj', 'jjjj', 'propagacia', '2017-12-31'),
(26, 'sk', 'hhhh', 'hhhhh', 'oznamy', '2017-04-30'),
(27, 'sk', 'ggggg', 'ggggg', 'propagacia', '2018-10-10'),
(28, 'en', 'zzzz', 'yyyyy', 'propagacia', '2017-05-25'),
(29, 'en', 'fffff', 'fffff', 'oznamy', '2017-08-08'),
(30, 'en', 'ggggg', 'jjjjj', 'propagacia', '2017-09-09'),
(31, 'en', 'eeee', 'rrrr', 'propagacia', '2017-10-10'),
(32, 'sk', 'uuuu', 'ttt', 'zivot', '2017-04-30'),
(33, 'en', 'kkkkk', 'ttttt', 'oznamy', '2017-10-10'),
(34, 'sk', 'uuuuu', 'tttt', 'oznamy', '2017-05-25'),
(35, 'sk', 'oooo', 'qqqq', 'oznamy', '2017-10-10'),
(36, 'sk', 'qqqq', 'eeee', 'propagacia', '2017-04-29'),
(37, 'sk', 'Sutaz', 'nova sutaz', 'oznamy', '2017-08-08'),
(38, 'sk', 'iuoiu', 'rrrrr', 'propagacia', '2017-08-08'),
(39, 'sk', 'nnn', 'eeeee', 'oznamy', '2018-10-10'),
(40, 'sk', 'SVOC', 'svocka', 'zivot', '2017-10-15'),
(41, 'en', '6666', '666666', 'propagacia', '2022-02-28'),
(42, 'sk', 'qwer', 'wqewqrwr', 'propagacia', '2017-09-09'),
(43, 'sk', 'tttt', 'ttttt', 'propagacia', '2017-09-09'),
(44, 'sk', 'eeee', 'eeeee', 'zivot', '2018-10-10'),
(45, 'en', 'uuuuu', 'retertert', 'propagacia', '2017-08-08'),
(46, 'sk', 'nova', 'aktualita', 'zivot', '2017-05-25'),
(50, 'sk', 'aaaa', 'bbbb', 'oznamy', '2018-10-10'),
(51, 'en', 'cccc', 'ddddd', 'oznamy', '2018-10-10'),
(52, 'sk', '111', '2222', 'oznamy', '2017-09-09'),
(53, 'en', '333', '444', 'oznamy', '2017-09-09'),
(54, 'sk', 'aaa', 'aaaa', 'oznamy', '2017-08-08'),
(55, 'sk', 'eeee', 'eeee', 'oznamy', '2018-10-10'),
(56, 'sk', 'pppp', 'ppppp', 'oznamy', '2018-10-10'),
(57, 'en', 'tttt', 'tttt', 'oznamy', '2017-05-25'),
(58, 'sk', 'aaaaa', 'aaaaa', 'propagacia', '2017-05-25'),
(59, 'sk', 'bbbbb', 'bbbb', 'zivot', '2017-08-08'),
(60, 'en', 'mmmmmm', 'mmmmmmmmmmmmmmm', 'zivot', '2017-10-10'),
(61, 'sk', 'Aktualita1SK', 'Text - Aktualita1SK', 'oznamy', '2017-09-09'),
(62, 'en', 'Aktualita1EN', 'Aktualita1EN', 'propagacia', '2017-09-09'),
(63, 'sk', 'qwe', 'rz', 'oznamy', '2018-10-10'),
(83, 'sk', 'aaaaa', 'aaaaaa', 'oznamy', '2017-08-08'),
(84, 'sk', 'titluok1', 'text1', 'propagacia', '2017-08-08'),
(86, 'sk', 'titluok1', 'text1', 'oznamy', '2017-09-09'),
(87, 'sk', 'tit1', 'txt1', 'propagacia', '2017-08-08');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `nepritomnost`
--

CREATE TABLE `nepritomnost` (
  `id` int(11) NOT NULL,
  `typ` varchar(20) COLLATE utf8_slovak_ci NOT NULL,
  `nazov` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `farba` varchar(20) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `nepritomnost`
--

INSERT INTO `nepritomnost` (`id`, `typ`, `nazov`, `farba`) VALUES
(3, 'OČR', 'Ošetrovanie člena rodiny', 'red'),
(5, 'SC', 'Služobná cesta', 'blue'),
(6, 'PD', 'Plan dovolenky', 'green'),
(7, 'PN', 'Práce neschopný', 'grey'),
(8, 'RČD', 'Reálne čerpaná dovolenka', 'orange');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Newsletter`
--

CREATE TABLE `Newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `jazyk` varchar(3) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `Newsletter`
--

INSERT INTO `Newsletter` (`id`, `email`, `jazyk`) VALUES
(25, 'aa@ccc.com', 'sk'),
(24, 'aaa@bbb.com', 'sk'),
(23, 'eee@fff.com', 'sk'),
(22, 'fff@gmail.com', 'sk'),
(27, 'ooo@mail.com', 'sk'),
(28, 'oooo@mail.com', 'sk'),
(21, 'palki15.daco@gmail.com', 'en'),
(7, 'palki15.daco@gmail.com', 'sk'),
(30, 'ppp@rrr.com', 'sk'),
(10, 'qqq', ''),
(26, 'qqq@www.com', 'sk');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Projekty`
--

CREATE TABLE `Projekty` (
  `id` int(11) NOT NULL,
  `projectType` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `number` varchar(20) COLLATE utf8_slovak_ci NOT NULL,
  `titleSK` varchar(150) COLLATE utf8_slovak_ci NOT NULL,
  `titleEN` varchar(150) COLLATE utf8_slovak_ci NOT NULL,
  `start` varchar(10) COLLATE utf8_slovak_ci NOT NULL,
  `end` varchar(10) COLLATE utf8_slovak_ci NOT NULL,
  `coordinator` varchar(60) COLLATE utf8_slovak_ci NOT NULL,
  `partners` varchar(200) COLLATE utf8_slovak_ci DEFAULT NULL,
  `web` varchar(150) COLLATE utf8_slovak_ci NOT NULL,
  `internalCode` varchar(10) COLLATE utf8_slovak_ci DEFAULT NULL,
  `annotationSK` varchar(2500) COLLATE utf8_slovak_ci DEFAULT NULL,
  `annotationEN` varchar(2500) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `Projekty`
--

INSERT INTO `Projekty` (`id`, `projectType`, `number`, `titleSK`, `titleEN`, `start`, `end`, `coordinator`, `partners`, `web`, `internalCode`, `annotationSK`, `annotationEN`) VALUES
(1, 'VEGA', '1/0937/14 ', 'Pokročilé metódy nelineárneho modelovania a riadenia mechatronických systémov', 'Advanced methods for nonlinear modeling and control of mechatronic systems', '2014', '2017', 'prof. Ing. Mikuláš Huba, PhD.', '', '', '1 425', 'Projekt sa zameriava na rozvoj metód nelineárneho riadenia a ich aplikácií. Zahrňuje metódy algebrického a diferenciálneho prístupu k návrhu nelineárnych systémov, riadenie časovo oneskorených (time delayed) systémov a systémov s obmedzeniami uvažovaných ako súčasť hybridných, autonómnych a inteligentných systémov, metódy simulácie, modelovania a automatizovaného návrhu s využitím podporných numerických a symbolických metód a programov. Venuje sa formulácii riešených problémov v rámci vnorených (embedded) systémov a PLC, spracovaniu signálov, zohľadneniu aspektov riadenia cez Internet, mobilné a rádiové siete, identifikácii a kompenzácii nelinearít, integrácii jednotlivých prístupov pri implementácii a fyzickej realizácii konkrétnych algoritmov a štruktúr riadenia. Pôjde najmä o riadenie mechatronických, robotických a ďalších systémov s dominantnými nelinearitami.', 'The project focuses on development of nonlinear control methods and their applications. It includes algebraic and differential approach to nonlinear control, control of time-delayed and constrained systems considered as a part of hybrid autonomous intelligent systems, simulations modeling and automatized design based on numeric and symbolic computer aided methods. It is dealing with formulation of solved problems within the embedded systems and PLCs, with signal processing, control via Internet, mobile and radio networks, with identification and compensation of nonlinearities, integration of particular approaches in implementing and physically accomplishing particular algorithms and structures. Thereby, one considers especially mechatronic and robotic systems and other systems with dominating nonlinear behavior.'),
(2, 'VEGA', '1/0228/14 ', 'Modelovanie termohydraulických a napätostných pomerov vo vybraných komponentoch tlakovodných jadrových reaktorov', 'Modelling of thermohydraulic and stress conditions in selected components of NPP with pressurized water reactor ', '2014', '2016', 'doc. Ing. Vladimír Kutiš, PhD.', '', '', '1 435', 'Cieľom predkladaného projektu je tvorba matematických modelov vybraných komponentov jadrových zariadení tlakovodného jadrového reaktora ako sú palivová kazeta, aktívna zóna ako aj celý jadrový reaktor. Tieto komponenty budú analyzované z pohľadu termohydrauliky ako aj z pohľadu mechanického (napätostného) namáhania. Takto získané numerické výsledky budú konfrontované s dostupnými experimentálnymi údajmi daných zariadení, pričom cieľom má byť zvyšovanie bezpečnosti prevádzky týchto zariadení. Pri tvorbe jednotlivých matematických modelov budú použité moderné numerické metódy, ako sú Computational Fluid Dynamics (CFD) a Metóda Konečných Prvkov (MKP), ktoré sú implementované v programoch ANSYS CFX a ANSYS Multiphysics. Súčasťou predkladaného projektu bude realizácia prepojenia matematických modelov termohydrauliky a mechanického namáhania, ktoré bude realizované tak, aby jednotlivé fyzikálne domény boli priamo previazané. Výstupom projektu okrem matematických modelov budú aj vedecké a odborné články a príspevky.', 'The aim of this project is to create mathematical models of selected components of nuclear power plants like fuel assembly, the active zone as well as a nuclear reactor itself considering pressurized water reactor. These components will be analyzed in terms of thermo-hydraulics and mechanical point of view (stress loading). Obtained numerical results will be confronted with available experimental data to increase operational safety of these devices. In the process of developing the mathematical models modern numerical methods such as Computational Fluid Dynamics (CFD) and Finite Element Method (FEM) will be used. These methods are implemented in programs ANSYS CFX and ANSYS Multiphysics. The proposed project will interconnect the thermo-hydraulic and mechanical mathematical models, which will be implemented so that the individual physical domains were directly connected. The outcome of the project will be the mathematical models and also scientific and technical papers and conference contributions.'),
(3, 'VEGA', '1/0453/15 ', 'Výskum stiesneného krútenia uzatvorených prierezov', 'Research of nonuniform torsion of cross-sections', '2015', '2017', 'prof. Ing. Justín Murín, DrSc.', '', '', '1 479', 'Podstatou projektu je skúmanie účinkov stiesneného krútenia v nosníkoch s uzatvoreným tenkostenným prierezom numerickými metódami ako aj experimentálnym meraním na fyzikálnych modeloch. Bude vytvorený nový 3D nosníkový konečný prvok so zahrnutím stiesneného krútenia uzatvorených prierezov, kde sa uplatní deformačný účinok sekundárneho krútiaceho momentu. Matica tuhosti a hmotnosti bude zostavená pre homogénny materiál ako aj pre kompozitné nosníky s pozdĺžnou premenlivosťou materiálových vlastností.\r\nOdvodené vzťahy a rovnice budú implementované do počítačového programu pre elastostatickú a modálnu analýzu s uvažovaním stiesneného krútenia. Bude navrhnuté a vyrobené meracie zariadenie, ktorým sa budú verifikovať výsledky teoretických výpočtov novým konečným prvkom. Predpokladá sa, že výsledky riešenia projektu prispejú ku zmene tvrdenia normy EC 3, podľa ktorej vplyv stiesneného krútenia možno pri nosníkoch uzatvoreného prierezu zanedbať. Výsledky nášho výskumu majú za cieľ zvýšiť bezpečnosť projektovania mechanických sústav.', 'The project aim is to examine the effects of non-uniform torsion in thin-walled beams with closed cross-section by numerical methods and experimental measurements on physical models. A 3D beam finite element will be created including the non-uniform torsion with the secondary torsion moment deformation effect. The stiffness and mass matrix will be prepared for a homogeneous material as well as for composite beams with longitudinal variation of material properties. Derived relations and equations will be implemented in the computer programs for elastic-static and modal analyses. Measurement equipment will be designed, by which the results of theoretical calculations by the new finite elements will be verified. It is expected that the results of the project will contribute to review the arguments of the Eurocode 3, according to which the effect of non-uniform torsion can be neglected in the closed cross-section beams. The results of the project are intended to enhance the safety of the beam structures design.'),
(4, 'KEGA', '035STU-4/2014 ', 'Návrh virtuálneho laboratória pre implementáciu pokročilých metodík výučby v novom študijnom programe Elektromobilita', 'Development of virtual laboratory for implementation of advanced methods of teaching in the new study program Electromobility', '2014', '2016', 'prof. Ing. Viktor Ferencey, PhD.', '', '', '1 709', 'Projekt je zameraný na vybudovanie moderného špecializovaného virtuálneho laboratória pre pripravovaný študijný program Elektromobilita. V projekte sú navrhnuté pokročilé metódy výučby, ktoré integrujú tvorivú implementáciu teoretických poznatkov priamo do virtuálneho modelovania a simulovania mechatronických systémov v inteligentných vozidlách s elektrickým pohonom, t.j. elektromobiloch.\r\nPre podporu špecializovaného vzdelávania a novú metodológiu v študijnom programe Elektromobilita bude v projekte spracovaná nová moderná študijná literatúra a vybudované Špecializované virtuálne laboratórium s inovatívnym vybavením pre teoretickú i praktickú výučbu predmetov v tomto študijnom programe. Všetky predmety programu Elektromobilita sú zamerané na virtuálne prototypovanie smart mechatronických systémov používaných v elektromobiloch s náväznosťou na nové systémy pohonu dopravných prostriedkov s využitím virtuálneho prototypovania.\r\nSúčasťou projektu bude spracovanie študijných materiálov, vedeckých monografií, tvorba inovatívnej web stránky, publikovanie v odborných časopisoch a účasť na vedeckých konferenciách. Špecializované virtuálne laboratórium bude vybavené mechatronickými učebnými modulmi pre výučbu a štúdium sofistikovaných technológií.', 'The project aim it to build a modern specialized virtual laboratory for prepared study program Electromobility. In this project, advanced teaching methods are proposed that integrate theoretical knowledge into practical application directly into mechatronic systems in vehicles with electric drive (electric vehicles). To promote specialized training and a new methodology in the study program Electromobility, the project will support processing of a new modern study literature and creating a dedicated virtual laboratory with innovative facilities for theoretical and practical training courses in this program of study. These courses aim at smart mechatronic systems used in electromobility systems with links to the new drive systems of vehicles using virtual prototyping. The project includes new study materials processing, writing scientific monographs, creating innovative websites, publications in peer-reviewed journals and participation in scientific conferences. Dedicated virtual laboratory will be equipped with educational mechatronic modules for teaching and learning sophisticated technology.'),
(5, 'KEGA', '032STU-4/2013 ', 'Online laboratórium pre výučbu predmetov automatického riadenia', 'Online laboratory for teaching automation control subjects ', '1.1.2013', '31.12.2015', 'doc. Ing. Katarína Žáková, PhD.', '', '', '1 719', 'Projekt sa zameriava na tvorbu interaktívnych znovupoužiteľných vzdelávacích objektov pre zvolené segmenty teórie automatického riadenia, na budovanie širšej škály experimentov ilustrujúcich aplikáciu študovaných teoretických prístupov na riešenie praktických problémov, ktoré umožňujú a podporujú nadobúdanie vedomostí, zručností, návykov a postojov v kvázi-autentickom prostredí.\r\nProjekt má za cieľ podporovať využitie nielen proprietárnych, ale aj open technológií, ktoré prinášajú viaceré výhody v oblasti šírenia výsledkov a nesporne aj po finančnej stránke. Snahou je uľahčiť prístup k laboratórnym experimentom v rámci rôznych foriem vzdelávania (denných, dištančných, resp. elektronických foriem).', 'The project is focussed on development of interactive reusable learning objects for chosen segments of automatic control, on building broader spectrum of experiments illustrating application of studied\r\ntheoretical approaches onto practical problems enabling and supporting acquisition of knowledge, skills, habits and attitudes in an quasi-authentic environment.\r\nThe project is going to support the use of not only proprietary but also open technologies that bring various advantages in the area of results dissemination and from the financial point of view as well. Our aim is to facilitate approach to laboratory experiments for students in daily or distance form of education.'),
(6, 'KEGA', '030STU-4/2015 ', 'Multimediálna podpora vzdelávania v mechatronike', 'Multimedial education in mechatronics', '2015', '2017', 'doc. Ing. Danica Rosinová, PhD.', '', 'http://uamt.fei.stuba.sk/KEGA_MM/', '1 723', 'Svetovým trendom v oblasti modernej a bezbariérovej výučby sú jej interaktívne formy na báze internetu, videa, audiovizuálnych pomôcok a vzdialených laboratórií (on-line vzdelávanie), ktoré sa uplatňujú nielen v dištančnom vzdelávaní, ale aj v prezenčnej forme vzdelávanie s podporou nových technológií (technology augmented classroom teaching). Popri slide-show prezentáciách a edukačných miniaplikáciách (dynamické web stránky, flash animácie, Java Applets a pod.) preferujú svetové výskumné univerzity vývoj a tvorbu edukačných videí, ktorých cieľovou skupinou sú poslucháči konkrétneho predmetu (kurzu). Edukačné videá sú voľne dostupné a umožňujú študentom sledovať výklad danej problematiky kdekoľvek a kedykoľvek. Návrh a realizácia zrozumiteľného a zaujímavo podaného edukačného videa z technickej oblasti je komplexná úloha, ktorá si vyžaduje synergiu odborných, pedagogických a umeleckých kvalít jeho tvorcov. Projekt je zameraný na multimediálnu podporu vzdelávania v oblasti mechatroniky, s dôrazom na poznatky z aplikovanej informatiky, automatizácie a príbuzných vedných disciplín. Cieľom projektu je vybudovanie multimediálneho laboratória na tvorbu kvalitných edukačných videomateriálov pre prezenčnú aj dištančnú formu univerzitného vzdelávania v oblasti mechatroniky a vytvorenie a otestovanie viacerých modulov takýchto materiálov. Výstupy projektu budú ďalej využiteľné pre účely vzdelávania odborníkov z praxe vrámci celoživotného vzdelávania, a tiež popularizácie mechatroniky a automatizácie u širokej verejnosti a žiakov stredných škôl - potenciálnych študentov vysokých škôl technického zamerania.', 'Presently, interactive education forms based on exploitation of Internet, video, audiovisual aids and remote laboratories (on-line education) are world trends in modern and barrier-free education;\r\nit is applied not only in distance education but in the attendance teaching as technology augmented classroom teaching. Along with slide-shows and educational miniapplications (dynamic websites,\r\nflash animations, Java Applets etc.) research universities usually prefer to develop their own education videos targeted to the audience in a single course. Education videos are freely available and enable the students to follow the explanatory discourse on the subject topic anytime and anywhere. Design and realization of a comprehensible and interesting educational video on a technological field is a quite complex task requiring synergy of technical, educational and artistic qualities of its creators. The project deals with the multimedia support of education in mechatronics engineering, with the focus on applied informatics, automation and related fields. The objective of the project is to build a multimedia laboratory for creating high-quality educational videomaterial for both distance and attendance education in mechatronics engineering. Project outcomes will be further employed in life-long education of practitioners, and for popularization of mechatronics and automation among the public and potential university students of technology.'),
(7, 'KEGA', '011STU-4/2015 ', 'Elektronické pedagogicko-experimentálne laboratóriá mechatroniky', 'Electronic educational-experimental laboratories of Mechatronics', '2015', '2017', 'doc. Ing. Peter Drahoš, PhD.', '', 'http://uamt.fei.stuba.sk/kega/', '1 724', 'Projekt sa zaoberá vytvorením modernej vedomostnej a experimentálnej základne pre výučbu mechatroniky s dôrazom na jej elektronické súčasti. Vzhľadom na to, že mechatronika integruje viaceré oblasti poznania a ich spojením vytvára synergický efekt, budú v rámci projektu budú vypracované nové metódy a formy vo výučbe, ktoré študentom umožnia získať nové poznatky s praktickou skúsenosťou s využívaním moderných elektronických prvkov a systémov, ktoré tvoria neoddeliteľnú súčasť komplexných mechatronických systémov v oblasti výrobkov spotrebnej elektroniky, energetiky, automobilovej techniky a v zdravotníctve.\r\nPodnetnou výzvou pre podanie projektu bol vznik nových študijných programoch""Automobilová mechatronika"" (Bc. program) a ""Aplikovaná mechatronika a elektromobilita"" (Ing. program). Pre tieto študijné programy budú vytvorené elektronické učebné texty pre 7 predmetov.\r\nZa účelom ďalšieho zvyšovania kvality výučby a výskumu sa plánuje v rámci v rámci riešenia projektu vytvoriť 5 nových experimentálnych pracovísk podľa najnovších trendov v elektronike, snímacej technike a riadiacich systémoch, ktoré budú mať viacúčelové využitie v priamej pedagogike, v individuálnych a tímových študentských projektoch ako aj pri výskumnej a vývojovej činnosti ústavu.\r\nCieľom projektu je zvýšiť odborné kompetencie študentov, učiteľov a výskumných pracovníkov a všetkých zúčastnených v týchto oblastiach: moderné senzory a MEMS, aktuátory na báze smart materiálov, elektrické trakčné pohony, mikroradiče a DSP pre vstavané riadiace systémy a spracovanie signálov, návrh riadiacich algoritmov a ich programovanie, elektronika a integrované obvody (ASICs) pre mechatroniku. Ďalším dôležitým sub-cieľom riešenej problematiky je získať široké kompetencie v komunikačných systémoch pre rôzne aplikačné oblasti mechatronických systémov najmä v automobilovom priemysle.\r\nNavrhovaný projekt bude podporovaný prostredníctvom moderných audiovizuálnych systémov, prostredníctvom web stránky a videí s multimediálnym spracovaním.', 'The project deals with the creation of modern knowledge and experimental basis for education in Mechatronics Engineering with the emphasis on electronic components. Due to the fact that mechatronics integrates several fields of knowledge and their junction yields a synergy effect, new methods and forms of eduation will be elaborated within the project allowing students to acquire new knowledge combined with practical experience in using modern electronic components and systems; such systems are integral parts of complex pervasive mechatronic systems (in consumer electronics, energy and automotive industries, healthcare). Inspiration for elaboration of the proposed project was launching of new study programs ""Automotive Mechatronics"" (Bachelor degree), and ""Applied Mechatronics and Electromobility"" (Master degree). For these study programs electronic textbooks for 7 subjects will be created. To further increase quality of education and research, 5 new experimental workplaces are planned to be created within the project to according to the latest development trends electronics, sensing technology and control systems having multi-purpose exploitation in direct teaching, individual and team projects as well as in research and development activities of the Institute. The objective of the project is to increase professional competences of students, teachers and researchers, and all involved in the areas: advanced sensors and MEMS, smart materials based actuators, electric traction motors, microcontrollers and digital signal processors (DSP´s) for embedded control systems and signal processing, design of control algorithms and their programming, electronics and integrated circuits (ASICs) for mechatronics. Another important sub-objective is to acquire wide competences in communication systems for various application areas of mechatronic systems, in particular in automotive industry. Modern audiovisual systems, web pages and multimedia processed videos will be widely used to support project results.'),
(8, 'APVV', 'APVV-0246-12 ', 'Pokročilé metódy modelovania a simulácie SMART mechatronických systémov', 'Advanced Methods and Simulations of SMART Mechatronic Systems', '1.10.2013', '30.9.2016', 'prof. Ing. Justín Murín, DrSc. ', '', '', 'AK14', 'V prvej fáze riešenia projektu bude kladený dôraz na materiálové, technické a prístrojové zabezpečenie experimentálnych častí, ktoré budú v projekte riešené. V tejto fáze takisto budú odvodené MKP rovnice pre 3D-FGM nosníky ako aj multifyzikálne modely pre SMA. Súčasťou prvej fázy riešenia projektu bude taktiež začatá príprava fyzikálnych experimentov za účelom verifikácie matematických modelov FGM a SMA systémov. V nasledovnom období riešenia projektu bude vykonaná verifikácia matematických modelov na vybraných experimentálnych vzorkách, ktoré boli dôsledne experimentálne analyzované z hľadiska materiálového zloženia. Výsledky experimentálnych meraní na SMA aktuátore budú využité v nasledovnom období riešenia projektu pri návrhu a realizácii alternatívneho spôsobu uchytenia SMA aktuátora. Bude nasledovať vytvorenie nelineárneho modelu aktuátora SMA a návrhu nových metód syntézy zameraných na riadenie polohy a potlačenie dominantných porúch. V tomto období budú súčasne prebiehať výskumné práce na teoretickom odvodení MKP rovníc pre FGM škrupinu a jej spojenia s 3D-FGM nosníkovým prvkom do kombinovaného nosníkovo-škrupinového MEMSu. V záverečnej fáze projektu bude kladený dôraz jednak na verifikáciu odvodených MKP rovníc pre nosníkovo-škrupinový MEMS pomocou fyzikálneho experimentu ako aj na riadenie SMA aktuátora konvenčnými a inteligentnými metódami riadenia.', 'In the first phase, attention will be given to the material, technical and equipment set-up required for the first set experiments. At the same time, the FGM-beam FEM equations will be derived and SMA models designed. In addition, the first sets of experiments will be used for the verification of numerical models of 3D-FGM and SMA systems. A complex verification of numerical models will take place on selected samples whose chemistry has been consistently analyzed. Results of SMA actuator measurements will be used in the consecutive stages of the project in the design and application of alternative anchoring for SMA actuators. Next the nonlinear model of SMA actuator and new methods of synthesis focused on position control and error elimination will be proposed. This research will take place in parallel with the theoretical analysis and FEM equations derivation of FGM shells. In the final stage, emphasis will be given to both the verification of the derived FGM beam-shell equations by real sample measurements and the control of the SMA actuator by conventional and intelligent methods.'),
(9, 'APVV', 'APVV-0343-12 ', 'Počítačová podpora návrhu robustných nelineárnych regulátorov', 'Computer aided robust nonlinear control design', '1.10.2013', '31.3.2017', 'prof. Ing. Mikuláš Huba, PhD. ', '', '', 'AK29 ', 'Projekt sa zaoberá vypracovaním podporného počítačového systému na návrh robustných nelineárnych regulátorov s obmedzeniami vo verzii pre Matlab/Simulink a web a vytvorením integrovaného elektronického prostredia v LMS Moodle, ktoré ho spája s webovou stránkou projektu, s elearningovými modulmi a s prístupom k vzdialeným experimentom umožňujúcim jeho overenie online. Systém je založený na novej metóde návrhu regulátorov vychádzajúcej s obmedzovania odchýlok od požadovaných tvarov vstupných a výstupných, resp. stavových veličín. Táto integruje výsledky viacerých doteraz izolovaných prístupov k návrhu regulátorov - tradičnú teóriu PID regulátorov, moderný stavový prístup s teóriou pozorovateľov, časovo optimálne riadenie, nelineárne systémy a riadenie systémov s veľkým dopravným oneskorením a robustný návrh regulátorov. Vyvíjaný systém bude vhodný pre širokú triedu neurčitých a nelineárnych objektov, ktoré predstavujú väčšinu bežných aplikácií v praxi. Systém bude pozostávať z centrálnej pracovnej stanice umožňujúcej dostatočne rýchle generovanie tzv. portrétu správania riadeného objektu s uvažovaným typom regulátora, z úložiska vytvorených portrétov správania a z grafických staníc, ktoré umožnia na základe špecifikácie neurčitých parametrov riadeného objektu a zadaných kvalitatívnych požiadaviek na riadené procesy určiť optimálne nastavenie regulátora zaručujúce pre zadané požiadavky dosiahnutie najvyššej možnej dynamiky prechodových dejov aj pri zohľadnení neurčitostí.', 'The project deals with development and introduction into practice of the computer aided system for design of robust constrained nonlinear control (in versions for Matlab/Simulink and web) and of the integrated electronic environment in LMS Moodle interconnecting the system with the project web page, with the elearning modules and with access to remote experiments enabling its online verification. The system will be based on a new robust control method based on constraining deviations from required shapes of the input, output, or state variables. This is holistically integrating several up to now isolated control design approaches - the traditional PID control, modern state & disturbance observer approach, minimum time control, nonlinear control, control of systems with long dead time and robust control. The developed system is intended for a broad class of uncertain and nonlinear plants that represent a majority of all applications in practice. The system will consist of a central work station enabling a sufficiently fast generation of the so called performance portrait of given plant with a considered type of control, from a repository of generated performance portraits and from graphical terminals enabling by means of specifying parameters of given plant and the required shape-related performance measures to determine the optimal controller tuning guaranteeing the fastest possible transients responses in the control loop under consideration of the given uncertainties.'),
(10, 'APVV', 'APVV-0772-12 ', 'Moderné metódy riadenia s využitím FPGA štruktúr', 'Advanced control methods based on FPGA structures ', '1.10.2013', '30.9.2017', 'doc. Ing. Alena Kozáková, PhD. ', '', '', 'AK39 ', 'Projekt rieši aktuálne otázky výskumu a vývoja moderných metód riadenia s využitím hardvérových realizácií konvenčných (PID) ako aj moderných (optimálne, robustné, prediktívne) algoritmov riadenia pre procesy s rýchlou dynamikou. V súčasnosti dominujú vo výskume a implementácii moderných riadiacich systémov tieto smery: riešenia na báze mikroprocesorov (softvérový prístup), jednoúčelové riešenia ASIC a riešenia na báze programovateľných hradlových polí (Field Programmable Gate Arrays, FPGA), ktoré predstavujú konfigurovateľné obvody vysokého stupňa integrácie (VLSI) schopné integrovať rôzne logické a riadiace funkcie. Hardvérové implementácie algoritmov riadenia sú v porovnaní so softvérovými realizáciami vo všeobecnosti o niekoľko rádov rýchlejšie, pretože spracovanie v nich prebieha paralelne, navyše sú kompaktnejšie a vo všeobecnosti lacnejšie. Hlavným cieľom projektu je výskum a vývoj algoritmov na báze FPGA štruktúr, ktorý bude skúmaný na vývojových FPGA systémoch a verifikovaný na fyzikálnych laboratórnych modeloch s rýchlou dynamikou.', 'The project deals with research and development of advanced control methods based on HW implementation of conventional (PID) as well as modern optimal, robust and predictive algorithms applicable in control of plants with fast dynamics. Predominating approaches in the research of modern control systems implementation are microprocessor-based solutions (software approach), ASIC (dedicated approach) and the FPGA based approach. Field Programmable Gate Arrays (FPGA) are configurable circuits of very-large-scale-integration (VLSI) able to integrate various logical and control functions. In general, HW implementations of control algorithms are faster by several orders compared with SW implementations due to parallel processing of information; moreover they are more compact and also less expensive. The main objective of the project is research and development of FPGA-based control algorithms. Their research and development will be studied on available FPGA development kits and verified on laboratory plants with fast dynamics.'),
(11, 'APVV', 'APVV-14-0613 ', 'Širokopásmový MEMS detektor terahertzového žiarenia', 'Broadband MEMS detector of terahertz radiaton ', '2015', '2018', 'doc. Ing. Vladimír Kutiš, PhD. ', '', '', NULL, 'Projekt je zameraný na výskum a vývoj nových typov širokopásmových detektorov pre terahertzovú (THz) oblasť frekvencií. Nový typ detektora je navrhnutý v koncepte mikro-elektro-mechanického systému a využíva bolometrický princíp snímania. Konštrukčný návrh detektora pozostáva z mikrobolometrického snímacieho prvku viazaného na širokopásmovú anténu. Tepelná konverzia dopadajúceho THz žiarenia je prebieha na tenkej polyimidovej membráne, ktorá umožní dosiahnuť nielen vysokú tepelnú konverznú účinnosť (zvýšenie citlivosti) ale zároveň umožní tiež realizovať návrhy detektorov do vysokých frekvencií s vyrovnanou amplitúdovou charakteristikou. Navrhnutý nový koncept MEMS detektorov bude optimalizovaný sofistikovaným procesom modelovania a simulácie v priamej vzájomnej iterácii s experimentálnou funkčnou a detekčnou analýzou. Finálnym zavŕšením riešenia projektu bude tiež vypracovaná metodológia merania, charakterizácie, širokopásmovej THz detekcie a simulácie MEMS detekčného prvku aplikovateľná nielen vo vede ale aj vedeckej výchove.', 'The project is aimed on research and development of new types of broadband detectors for terahertz frequency range. This new type of detector is designed in a concept of micro-electro-mechanical system and uses the bolometric sensing principle. The design construction of the detector consists of a microbolometric sensing device coupled to a broadband antenna. Thermal conversion of the incident THz radiation takes place on a thin polyimide membrane which enables (a) to achieve high thermal conversion efficiency and (b) to design detectors with balanced amplitude characteristics even at high frequency range. The proposed MEMS detector concept will be optimized by a sophisticated process of modeling and simulation in direct mutual iteration with experimental analysis of functionality and detection capability. The completion of the project will be given by the developed state-of-the-art methodology of characterization, broadband THz detection and simulation of the MEMS detector device applicable in the research and education.'),
(12, 'Medzinárodné projekty/Cooperation', 'SK06-II-01-004 ', 'Podpora medzinárodnej mobility medzi STU Bratislava, NTNU Trondheim a Universität Liechtenstein', 'Support of international mobilites between STU Bratislava, NTNU Trondheim, and Universität Liechtenstein', '2.6.2015', '30.9.2016', 'zodpovedný za ÚAMT - prof. Ing. Mikuláš Huba, PhD. ', 'Norwegian University of Science and Technology Trondheim (prof. Skogestad, prof. Johansen, prof. Hovd)|Universität Liechtenstein, Liechtenstein (prof. Droege)', '', NULL, 'Projekt rieši aktuálne otázky výskumu a vývoja moderných metód riadenia s využitím hardvérových realizácií konvenčných (PID) ako aj moderných (optimálne, robustné, prediktívne) algoritmov riadenia pre procesy s rýchlou dynamikou. V súčasnosti dominujú vo výskume a implementácii moderných riadiacich systémov tieto smery: riešenia na báze mikroprocesorov (softvérový prístup), jednoúčelové riešenia ASIC a riešenia na báze programovateľných hradlových polí (Field Programmable Gate Arrays, FPGA), ktoré predstavujú konfigurovateľné obvody vysokého stupňa integrácie (VLSI) schopné integrovať rôzne logické a riadiace funkcie. Hardvérové implementácie algoritmov riadenia sú v porovnaní so softvérovými realizáciami vo všeobecnosti o niekoľko rádov rýchlejšie, pretože spracovanie v nich prebieha paralelne, navyše sú kompaktnejšie a vo všeobecnosti lacnejšie. Hlavným cieľom projektu je výskum a vývoj algoritmov na báze FPGA štruktúr, ktorý bude skúmaný na vývojových FPGA systémoch a verifikovaný na fyzikálnych laboratórnych modeloch s rýchlou dynamikou.', 'The aim of the project is to support international mobility of students, PhD students, and staff members of four participating faculties of STU in Bratislava with partners from NTNU Trondheim and Universität Liechtenstein. It will initiate academic cooperation between the University of Liechtenstein and STU Bratislava in construction, architecture, and space planning, focusing on the use of alternative energy sources in operation of buildings, including computer-aided simulations of energy needs and internal environment, and spatial planning of rural settlements as well. The project also contributes to further strengthening of already existing cooperation between NTNU Trondheim and faculties of STU in Bratislava in the field of advanced methods of automatic control and to progress of inter-faculty cooperation at STU in Bratislava.'),
(13, 'Iné domáce projekty/Other domestic projects', 'TB', 'Softvérové riadenie smerovej dynamiky vozidla UGV 6x6', 'Softvérové riadenie smerovej dynamiky vozidla UGV 6x6', '2015', '2015', 'Ing. Martin Bugár, PhD. ', '', '', '7506', NULL, ''),
(14, 'Iné domáce projekty/Other domestic projects', 'VW', 'Predlžovanie životnosti akumulátorového systému', 'Predlžovanie životnosti akumulátorového systému', '2015', '2015', 'Ing. Martin Bugár, PhD. ', '', '', '7509', NULL, ''),
(15, 'Iné domáce projekty/Other domestic projects', 'MV', 'REST platforma pre online riadenie experimentov', 'REST Platform for Online Control of Experiments', '2015', '2015', 'Ing. Miroslav Gula', '', '', '1361', 'Tento projekt je súčasťou rozsiahlejšieho cieľa o vytvorenie univerzálneho protokolu pre vzdialené riadenie reálnych sústav a tiež balíka softvérových nástrojov na jeho implementáciu. Hlavným cieľom celého úsilia je zjednodušiť a urýchliť budovanie modulárnych online laboratórií.\r\nÚlohami projektu sú návrh a vytvorenie nástroaj pre vzdialený prístup k softvéru Scilab, zavŕšenie implementácie podobného nástroja určeného pre softvérový balík Matlab/Simulink, a návrh a čiastočná implementácia mechatronického systému, ktorý bude v budúcnosti slúžiť na demonštráciu spomenutých nástrojov a následne ako učebná pomôcka.', 'The project is a part of an extensive endeavor to create universal protocol for remote control of real plants, and a suite of software tools to implement this protocol. The main objective of this whole endeavor is to simplify and accelerate implementation of modular online laboratories. Tasks of this project include design and implementation of a software tool for remote access to Scilab, completion of implementation of a similar tool for Matlab/Simulink, and design and partial implementation of a mechatronic system which will serve for demonstration of mentioned tools and later on as teaching aid.');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Role`
--

CREATE TABLE `Role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `Role`
--

INSERT INTO `Role` (`id`, `name`) VALUES
(1, 'user'),
(2, 'hr'),
(3, 'reporter'),
(4, 'editor'),
(5, 'admin');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `RoleZamestnanci`
--

CREATE TABLE `RoleZamestnanci` (
  `id` int(11) NOT NULL,
  `id_staff` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `RoleZamestnanci`
--

INSERT INTO `RoleZamestnanci` (`id`, `id_staff`, `id_role`) VALUES
(13, 1, 1),
(14, 1, 3),
(15, 1, 4),
(7, 6, 2),
(9, 6, 4),
(10, 16, 3),
(124, 56, 1),
(89, 57, 1),
(91, 57, 2),
(92, 57, 3),
(93, 57, 4),
(90, 57, 5),
(108, 58, 1),
(109, 58, 2),
(110, 58, 3),
(111, 58, 4),
(112, 58, 5);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `zamestnanci`
--

CREATE TABLE `zamestnanci` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `title1` varchar(10) COLLATE utf8_slovak_ci NOT NULL,
  `title2` varchar(10) COLLATE utf8_slovak_ci NOT NULL,
  `ldapLogin` varchar(30) COLLATE utf8_slovak_ci NOT NULL,
  `photo` varchar(30) COLLATE utf8_slovak_ci NOT NULL,
  `room` varchar(15) COLLATE utf8_slovak_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_slovak_ci DEFAULT NULL,
  `department` varchar(80) COLLATE utf8_slovak_ci NOT NULL,
  `staffRole` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `function` varchar(100) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `zamestnanci`
--

INSERT INTO `zamestnanci` (`id`, `name`, `surname`, `title1`, `title2`, `ldapLogin`, `photo`, `room`, `phone`, `department`, `staffRole`, `function`) VALUES
(1, 'Vladislav', 'Bača', 'Ing.', '', '', 'baca.jpg', 'T005', '264', 'OEMP', 'doktorand', ''),
(2, 'Peter', 'Balko', 'Ing.', '', '', '', 'D 102', '395', 'OIKR', 'doktorand', ''),
(3, 'Richard', 'Balogh', 'Ing.', ' PhD.', '', 'balogh.jpg', 'D 110', '411', 'OEMP', 'teacher', 'zástupca vedúceho oddelenia'),
(4, 'Igor', 'Bélai', 'Ing.', ' PhD.', '', '', 'D 126', '478', 'OEMP', 'teacher', ''),
(5, 'Katarína', 'Beringerová', '', '', '', '', 'A 705', '672', 'AHU', 'teacher', ''),
(6, 'Pavol', 'Bisták', 'Ing.', ' PhD.', 'bistak', 'bistak.jpg', 'D 120', '695', 'OEAP', 'teacher', ''),
(7, 'Dmitrii', 'Borkin', 'Ing.', '', '', '', 'D 102', '395', 'OIKR', 'doktorand', ''),
(8, 'Martin', 'Bugár', 'Ing.', ' PhD.', '', '', 'A 708', '579', 'OEAP', 'teacher', ''),
(9, 'Ján', 'Cigánek', 'Ing.', ' PhD.', '', '', 'D 104', '686', 'OIKR', 'teacher', ''),
(10, 'Peter', 'Drahoš', 'doc. Ing.', ' PhD.', '', '', 'D 118', '669', 'OEMP', 'teacher', ''),
(11, 'František', 'Erdödy', '', '', '', 'erdody.jpg', 'A S39', '818', 'AHU', 'teacher', ''),
(12, 'Viktor', 'Ferencey', 'prof. Ing.', ' PhD.', '', 'ferencey.jpg', 'A 802', '438', 'OEAP', 'teacher', 'zástupca vedúceho oddelenia'),
(13, 'Peter', 'Fuchs', 'doc. Ing.', ' PhD.', '', '', 'B S05', '826', 'OEMP', 'researcher', ''),
(14, 'Gabriel', 'Gálik', 'Ing.', '', '', '', 'A 706', '559', 'OAMM', 'researcher', ''),
(15, 'Vladimír', 'Goga', 'doc. Ing.', ' PhD.', '', '', 'A 702', '687', 'OAMM', 'teacher', ''),
(16, 'Miroslav', 'Gula', 'Ing.', '', 'xgulam', 'gula.jpg', 'D 103', '628', 'OIKR', 'doktorand', ''),
(17, 'Oto', 'Haffner', 'Ing.', ' PhD.', '', 'haffner.jpg', 'D 125', '315', 'OIKR ', 'teacher', ''),
(18, 'Juraj', 'Hrabovský', 'Ing.', ' PhD.', '', '', 'A 706', '559', 'OAMM', 'teacher', ''),
(19, 'Mikuláš', 'Huba', 'prof. Ing.', ' PhD.', '', 'huba.jpg', 'D 112', '771', 'OEAP', 'teacher', 'riaditeľ ústavu; vedúci oddelenia'),
(20, 'Mária', 'Hypiusová', 'Ing.', ' PhD.', '', '', 'D 122', '193', 'OIKR', 'teacher', ''),
(21, 'Štefan', 'Chamraz', 'Ing.', ' PhD.', '', '', 'D 107', '848', 'OEMP', 'teacher', ''),
(22, 'Jakub', 'Jakubec', 'Ing.', ' PhD.', '', '', 'A 707', '452', 'OAMM ', 'researcher', ''),
(23, 'Igor', 'Jakubička', 'Ing.', '', '', 'jakubicka.jpg', 'T005', '264', 'OEMP', 'doktorand', ''),
(24, 'Katarína', 'Kermietová', '', '', '', '', 'D 116', '598', 'AHU', 'teacher', 'zástupca vedúceho oddelenia'),
(25, 'Ivan', 'Klimo', 'Ing.', '', '', '', 'D 101', '509', 'OEMP', 'doktorand', ''),
(26, 'Michal', 'Kocúr', 'Ing.', ' PhD.', 'xkocurm2', 'kocur.jpg', 'D 104', '686', 'OIKR ', 'teacher', ''),
(27, 'Štefan', 'Kozák', 'prof. Ing.', ' PhD.', '', 'kozak.jpg', 'D 115', '281', 'OEMP', 'teacher', 'zástupca riaditeľa ústavu pre rozvoj ústavu; vedúci oddelenia'),
(28, 'Alena', 'Kozáková', 'doc. Ing.', ' PhD.', '', '', 'D 111', '563', 'OIKR', 'teacher', ''),
(29, 'Erik', 'Kučera', 'Ing.', ' PhD.', '', '', 'D 125', '315', 'OIKR ', 'teacher', ''),
(30, 'Vladimír', 'Kutiš', 'doc. Ing.', ' PhD.', '', 'kutis.jpg', 'A 701', '562', 'OAMM ', 'teacher', 'zástupca vedúceho oddelenia'),
(31, 'Alek', 'Lichtman', 'Ing.', '', '', '', 'D 101', '509', 'OEMP', 'doktorand', ''),
(32, 'Justín', 'Murín', 'prof. Ing.', ' DrSc.', '', 'murin.jpg', 'A 704', '611', 'OAMM', 'teacher', 'zástupca riaditeľa ústavu pre vedeckú činnosť; vedúci oddelenia'),
(33, 'Jakub', 'Osuský', 'Ing.', ' PhD.', '', 'osusky.jpg', 'D 123', '356', 'OIKR ', 'teacher', ''),
(34, 'Tomáš', 'Paciga', 'Ing.', '', '', '', 'A 707', '452', 'OAMM', 'doktorand', ''),
(35, 'Juraj', 'Paulech', 'Ing.', ' PhD.', '', 'paulech.jpg', 'A 701', '562', 'OAMM', 'teacher', ''),
(36, 'Matej', 'Rábek', 'Ing.', '', 'xrabek', 'rabek.jpg', 'D 103', '628', 'OIKR', 'doktorand', ''),
(37, 'Danica', 'Rosinová', 'doc. Ing.', ' PhD.', '', 'rosinova.jpg', 'D 111', '563', 'OIKR', 'teacher', 'vedúci oddelenia'),
(38, 'Tibor', 'Sedlár', 'Ing. ', '', '', '', 'A 803', '399', 'OAMM', 'teacher', ''),
(39, 'Erich', 'Stark', 'Ing.', '', '', 'stark.jpg', 'C 014', '', 'OIKR', 'doktorand', ''),
(40, 'Peter', 'Ťapák', 'Ing.', ' PhD.', '', '', 'D 121', '569', 'OEAP', 'teacher', ''),
(41, 'Katarína', 'Žáková', 'doc. Ing.', ' PhD.', 'zakova', 'zakova.jpg', 'D 119', '742', 'OIKR', 'teacher', 'zástupca riaditeľa ústavu pre pedagogickú činnosť; zástupca vedúceho oddelenia'),
(56, 'Pavol', 'Dašto', 'mozno Bc', '', 'xdaco', '', '', '', '', '', ''),
(57, 'Michal', 'Koplinger', '', '', 'xkoplingerm', '', '', NULL, '', '', ''),
(58, 'Tomáš', 'Džadoň', '', '', 'xdzadont', '', '', NULL, '', '', '');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `zaznam`
--

CREATE TABLE `zaznam` (
  `id` int(11) NOT NULL,
  `zamestnanec_id` int(11) NOT NULL,
  `nepritomnost_id` int(11) NOT NULL,
  `datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Sťahujem dáta pre tabuľku `zaznam`
--

INSERT INTO `zaznam` (`id`, `zamestnanec_id`, `nepritomnost_id`, `datum`) VALUES
(906, 4, 6, '2017-03-25'),
(908, 1, 3, '2017-03-10'),
(914, 1, 5, '2017-03-09'),
(915, 1, 5, '2017-03-08'),
(916, 4, 5, '2017-03-08'),
(917, 37, 3, '2017-03-01'),
(919, 37, 3, '2017-03-03'),
(920, 37, 3, '2017-03-04'),
(921, 37, 3, '2017-03-06'),
(922, 38, 6, '2017-03-06'),
(923, 39, 6, '2017-03-13'),
(924, 39, 6, '2017-03-11'),
(925, 41, 6, '2017-03-12'),
(927, 56, 6, '2017-03-02'),
(928, 56, 6, '2017-03-03'),
(930, 56, 6, '2017-03-06'),
(931, 56, 6, '2017-03-04'),
(933, 38, 6, '2017-03-09'),
(934, 56, 6, '2017-03-05'),
(935, 56, 6, '2017-03-07'),
(936, 56, 6, '2017-03-08'),
(937, 38, 6, '2017-03-15'),
(938, 37, 6, '2017-03-15'),
(940, 39, 6, '2017-03-16'),
(941, 1, 6, '2017-03-13'),
(942, 1, 6, '2017-03-15'),
(943, 1, 6, '2017-03-16'),
(944, 1, 6, '2017-03-17'),
(951, 1, 6, '2017-03-07'),
(954, 56, 6, '2017-03-09'),
(966, 56, 6, '2017-03-20'),
(970, 56, 6, '2017-03-23'),
(974, 56, 6, '2017-03-13');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `Aktuality`
--
ALTER TABLE `Aktuality`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `nepritomnost`
--
ALTER TABLE `nepritomnost`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `Newsletter`
--
ALTER TABLE `Newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`jazyk`);

--
-- Indexy pre tabuľku `Projekty`
--
ALTER TABLE `Projekty`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexy pre tabuľku `RoleZamestnanci`
--
ALTER TABLE `RoleZamestnanci`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`id_staff`,`id_role`),
  ADD UNIQUE KEY `id_2` (`id`,`id_staff`,`id_role`),
  ADD UNIQUE KEY `id_staff_2` (`id_staff`,`id_role`),
  ADD KEY `id_staff` (`id_staff`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexy pre tabuľku `zamestnanci`
--
ALTER TABLE `zamestnanci`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `zaznam`
--
ALTER TABLE `zaznam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `Aktuality`
--
ALTER TABLE `Aktuality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT pre tabuľku `nepritomnost`
--
ALTER TABLE `nepritomnost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pre tabuľku `Newsletter`
--
ALTER TABLE `Newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pre tabuľku `Projekty`
--
ALTER TABLE `Projekty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pre tabuľku `Role`
--
ALTER TABLE `Role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pre tabuľku `RoleZamestnanci`
--
ALTER TABLE `RoleZamestnanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT pre tabuľku `zamestnanci`
--
ALTER TABLE `zamestnanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT pre tabuľku `zaznam`
--
ALTER TABLE `zaznam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=975;
--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `RoleZamestnanci`
--
ALTER TABLE `RoleZamestnanci`
  ADD CONSTRAINT `RoleZamestnanci_ibfk_3` FOREIGN KEY (`id_staff`) REFERENCES `zamestnanci` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RoleZamestnanci_ibfk_4` FOREIGN KEY (`id_role`) REFERENCES `Role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
