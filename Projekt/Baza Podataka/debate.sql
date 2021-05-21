-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 03:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debate`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanci`
--

CREATE TABLE `clanci` (
  `id` int(11) NOT NULL,
  `datum` varchar(20) DEFAULT NULL,
  `naslov` varchar(64) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `sazetak` text CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `tekst` text CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `slika` varchar(64) DEFAULT NULL,
  `idKategorija` int(11) DEFAULT NULL,
  `arhiva` tinyint(1) DEFAULT NULL,
  `idKorisnik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clanci`
--

INSERT INTO `clanci` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `idKategorija`, `arhiva`, `idKorisnik`) VALUES
(1, '07.05.2021', 'Luka Modrić nije skrivao razočarenje', 'Nogometaši Real Madrida izgubili su u uzvratnom susretu polufinala Lige prvaka u Londonu od Chelseaja 2:0.', 'Real Madrid do kraja sezone mora odigrati još samo četiri utakmice. \'Kraljevi\' su nakon ispadanja iz Lige prvaka očekivano razočarani, ali nema opuštanja jer još su u konkurenciji za osvajanje naslova prvaka Španjolske.\r\n\r\nTrenutno dijele drugo mjesto na prvenstvenoj ljestvici, imaju 74 boda kao i Barcelona, dok vodeći Atletico Madrid ima dva boda više. Do kraja su ostale četiri utakmice, sad je biti ili ne biti, ide se na sve ili ništa.No, teško je zaboraviti i iz glave izbaciti poraz od Chelseaja. Igrači Reala nisu bili raspoloženi za izjave nakon utakmice, teško je onako vruć reći nešto pametno. Razočaranje je bilo ogromno, ali treba još igrati i spasiti sezonu. Jedan od najboljih u blijedoj momčadi Reala već je standardno bio kapetan hrvatske reprezentacije Luka Modrić.\r\n\r\nOdigrao je svoju rolu, držao sredinu terena, pokušavao prema naprijed, prijetio udarcima iz daljine, fantastično \'hranio\' loptama Karima Benzemu koji nije uspio zabiti... No, to je slika i prilika Reala ove sezone.Zato su se svi navijači Reala iznenadili kad se Luka Modrić oglasio na društvenim mrežama. Poruka je bila kratka i jasna, namijenjena svima koji vole Real.\r\n\r\n\'Sje.... smo, ali moramo se dignuti. Dat ćemo sve od sebe u posljednje četiri utakmice u La Ligi. Hala Madrid!\', poručio je kapetan hrvatske reprezentacije.Ne treba naglašavati kako je njegova iskrena poruka u samo nekoliko sati sakupila više od 300.000 \'lajkova\'. Jasno je i navijačima da Real ove sezone jednostavno ograničen, ozljede i suludi ritam utakmica jednostavno su uzeli danak, a posebice sada na samom kraju sezone. No, još nije gotovo...', 'modric.jpeg', 1, 0, 11),
(2, '07.05.2021', 'Ivica Zubac dominirao protiv Lakersa', 'Ivica Zubac dominirao protiv Lakersa, a imao je i poseban motiv; Westbrook stigao nadomak rekorda koji se godinama činio nedostižnim', 'Nema sumnje kako je 24-godišnji Ivica Zubac imao i dodatni motiv jer je igrao protiv svoje bivše momčadi koja ga se olako odrekla... Clipperse je do pobjede predvodio Paul George sa 24 ubačaja, dok je Kawhi Leonard dodao 15 koševa, osam skokova i šest asistencija. Clippers su sada preskočili Denver Nuggets na trećem mjestu u Zapadnoj konferenciji i imaju prednost od pola utakmice.\r\n\r\nKyle Kuzma je sa 25 poena bio najbolji pojedinac Lakersa koji su opet ostali bez Anthonyja Davisa koji je zbog bolova u leđima i problema s gležnjem izašao u prvoj četvrtini.\r\n\r\nLakers i Trail Blazers su sada izjednačeni na šestom mjestu na Zapadu.\r\n\r\nGolden State Warriors su na svom parketu sa 118-97 bili bolji od Oklahoma City Thundera, a Stephen Curry je zabio 34 koša u samo 31 minutu na terenu. Zahvaljujući ovoj pobjedi Golden State se popeo na osmo mjesto u Zapadnoj konferenciji koje ga vodi u doigravanje.\r\n\r\nMychal Mulder je dodao 25 koševa, a Andrew Wiggins 18 za Warriorse, dok je kod Oklahome najbolji bio Ty Jerome sa 23 poena.\r\n\r\nWashington Wizards su u Tampi nakon produžetaka sa 131-129 pobijedili Toronto Raptorse, a Russell Westbrook je stigao do svog 180. triple-doublea u karijeri sa 13 koševa, 17 asistencija i 17 skokova. Tako je Westbrook stigao nadomak rekorda koji se godinama činio nedostižnim...', 'zupac.jpeg', 1, 0, 11),
(3, '07.05.2021', 'Senzacionalna vijest koja je šokirala Dalića i Šukera', 'Senzacionalna vijest koja je šokirala Dalića i Šukera. Bivši igrač Dinama, koji briljira u Stuttgartu, dobio državljanstvo Njemačke i izbornik Löw želi ga već na Euru!', 'Ako su informacije iz Njemačke točne nije nemoguće da 23-godišnji lijevi bek Borna Sosa, koji je od 2018. član Stuttgarta, zaigra na predstojećem Euru za Njemačku.\r\n\r\nVijest zaista zvuči senzacionalno, ali čini se kako sve ide u tom smjeru. Naime, Sosa je nedavno dobio njemačko državljanstvo, a doznaje se kako ga je već i kontaktirao direktor njemačke reprezentacije Oliver Bierhoff.\r\n\r\nOd prije je poznato kako je Borna Sosa bio na širem popisu Hrvatske uoči Svjetskog prvenstva u Rusiji 2018., a također je znakoviti da dosad nije odigrao niti jednu utakmicu za A selekciju. Stoga, prema Fifinim pravilima može slobodno igrati za bilo koju drugu A selekciju.Njemački mediji tako doznaju da izbornik Joachim Löw i njegovi suradnici duže vrijeme prate Sosu – koji je ove sezone u Bundesligi za Stuttgarta upisao čak deset asistencija - i znaju da mu je majka rođena u Berlinu čime se ubrzao postupak vađenja njemačkog državljanstva.\r\n\r\nObzirom na problem s igračima na lijevoj strani pojavila se informacija kako Löw ozbiljno razmišlja pozvati Sosu na pripreme uči Eura.\r\n\r\nIako zvuči pomalo nevjerojatno, ispada kako je Sosa zanimljiviji njemačkoj reprezentaciji nego hrvatskoj.\r\n\r\nDa se nešto veliko kuha potvrdio je i njemački Bild koji je objavio da se Sosa nalazi na širem popisu njemačke reprezentacije od 32 igrača.\r\n\r\n\'Pratimo ga duže vrijeme. Vjerujemo da bi uskoro mogao postati njemački reprezentativac\', izjavio je za Bild direktor njemačke reprezentacije Oliver Bierhoff.\r\n\r\nNo, ostaje za vidjeti što će nakon ove vijesti napraviti hrvatski izbornik Zlatko Dalić i predsjednik Davor Šuker. Nema sumnje kako su nakon ove vijesati u šoku i moraju hitno nešto povući ili će nadareni lijevi bek zauvijek biti izgubljen za hrvatsku reprezentaciju…', 'dalic.jpeg', 1, 0, 11),
(4, '07.05.2021', 'Slovenija u kampanji za brže i masovnije cijepljenje', 'U Sloveniji većina indikatora govori da se treći val epidemije stišava, a ministar zdravstva u petak se javno cijepio cjepivom AstraZenece kako bi pokazao da je ono učinkovito i sigurno, u kampanji koju je za masovnije i brže cijepljenje pokrenula vlada.', '\"Na ovo sam se odlučio jer vjerujem u znanost i nakon cijepljenja AstraZenecom osjećam se odlično\", kazao je ministar Janez Poklukar nakon cijepljenja u prostorijama Instituta za javno zdravlje (NIJZ), želeći tako otkloniti određeno nepovjerenje prema tom cjepivu koje, nakon brojnih medijskih napisa, postoji u dijelu javnosti.\r\n\r\nTim su se istim cjepivom mjesec dana već cijepili i premijer Janez Janša i predsjednik Borut Pahor.\r\n\r\nPoklukar je u četvrtak predstavio novu digitaliziranu platformu na koju se na cijepljenje mogu prijaviti svi koji žele. Na nju se za cijepljenje već prvog dana upisalo 22 tisuće ljudi, pa vlada očekuje da će i to pomoći u cilju cijepljenja većine stanovništva do sredine lipnja, kako je najavio premijer Janez Janša.\"Cjepivo je najbolje oružje protiv epidemije, zato vas sve molim da se cijepite, kako bismo zaključili s ovom epidemijom\", kazao je ministar dodavši da u velikoj mjeri upravo o procijepljenosti ovisno kakvo će stanje biti ovoga ljeta.\r\n\r\nU Sloveniji je u zadnja 24 sata bilo 606 novozaraženih uz 15-postotni udio pozitivnih testova i tri smrtna slučaja među oboljelima. Skoro svi epidemiološki podaci se popravljaju premda je u bolnicama još dosta oboljelih. Aktivnih slučajeva je nešto više od devet tisuća, prosjek dnevnih zaraza smanjen je u jednom danu za skoro 7 posto, a u bolnicama je 538 oboljelih, od čega 142 na intenzivnim odjelima.\r\n\r\nPo zadnjim podacima je najmanje jednom dozom cijepljeno 22,1 posto stanovništva, a vlada ima cilj povećati broj dnevno cijepljenih koji je u travnju iznosio 8500, za najmanje dva puta jer za to sada ima dovoljno cjepiva, a pošiljke će se, prema najavama, u lipnju dodatno povećati.Premijer Janša u četvrtak je sve pozvao da se prijave na cijepljenje te je najavio početak cijepljenja svih kategorija stanovništva bez obzira na dob, premda će starije dobne skupine i dalje imati prednost.\r\n\r\nGlavni epidemiolog u NIJZ-u Mario Fafangel rekao je u petak da je rizik pojave novih većih žarišta i dalje prisutan, premda će se s cijepljenjem i dalje smanjivati.\r\n\r\n\"Još uvijek ćemo imati nove slučajeve, ali će taj rizik biti pod kontrolom i moći ćemo ga podnijeti. Osim toga, cijepljenjem ćemo zaštititi sve skupine koje imaju najveći rizik za teži tijek bolesti\", dodao je Fafangel.', 'cjepivo.jpeg', 2, 0, 11),
(5, '07.05.2021', 'Vlada sprema zabranu rada nedjeljom, trgovci šokirani', 'Premijer Andrej Plenković u četvrtak se sastao s koalicijskim partnerima, nakon čega je otkrio javnosti da se sprema mijenjati Zakon o trgovini kako bi regulirao rad nedjeljom.', 'Pitanje rada, tj. nerada nedjeljom u Hrvatskoj se poteže od samostalnosti zemlje. Koplja se lome između prava na rad, zaštite radnika, vremena za obitelj i sličnih nesuglasica. Ovaj put, kažu nam trgovci i ljudi iz struke, odgovor na pitanje treba li braniti rad nedjeljom vrlo je jednostavan jer smo u nezabilježenoj krizi, borimo se za svaki postotak gospodarskog rasta i živimo u izvanrednim vremenima zbog pandemije koronavirusa.\r\n\r\n\'Često ćete čuti argument da je u Austriji nedjeljom sve zatvoreno. Kad mi budemo imali kapitalnu snagu poput Austrije, kad naše obitelji budu imale plaće kao austrijske obitelji, ja ću biti prvi za zatvaranje trgovina nedjeljom\', kaže tportalu Slobodan Školnik, predsjednik Uprave Emmezete.Denis Čupić, direktor najvećeg domaćeg trgovačkog centra Westgate, na istom je tragu i pita se zašto mi, kao \'katolička zemlja\', branimo rad nedjeljom dok \'najkatoličkija zemlja na svijetu\', Italija, s tim nema problema. \'U nedjelju između ostalog rade gift shopovi u Vatikanu, a i trgovine koje su u sklopu katedrala, recimo u Firenzi\', kaže nam Čupić.\r\n\r\nZabrana rada nedjeljom, objašnjava Čupić, ne treba nam, niti je pametna i na kraju krajeva past će na Ustavnom sudu, kao što je pala 2004., a ako bude trebalo, naći će se i pred Europskim sudom. On i grupa 20 velikih trgovaca već su angažirali dva odvjetnička ureda koja se bave ovim problemom:\r\n\r\n\'Zabranom stvaramo nejednakost za dio poduzetništva. Pozivamo se na Europsku direktivu o radnom vremenu, koju je davno prva počela citirati Marijana Petir, a ta je direktiva pala na Europskom sudu još 1998. Svaki pošteni poslodavac zaštitit će radnika i to se radi Zakonom o radu. Svi koji rade nedjeljom trebali bi biti pošteno plaćeni, treba postojati jasan konsenzus o tome hoće li nedjelja vrijediti 50 ili 100 posto.\'', 'rad.jpeg', 2, 0, 11),
(6, '08.05.2021', 'U travnju 12.000 više radnih mjesta nego 2019.', 'Mirovinsko osiguranje u travnju je uplatilo oko 10.000 osoba više nego u ožujku, trećina ih je iz ugostiteljstva', 'Broj osoba koje su u travnju uplatile mirovinsko osiguranje iznosio je 1,557.687 i bilo ih je oko 37.000 više nego u istome mjesecu lani.\r\n\r\nTo i nije iznenađujuće ima li se u vidu da je u ožujku i travnju prošle godine, nakon izbijanja pandemije, uslijedilo veliko otpuštanje zaposlenih. No, podaci HZMO-a pokazuju da je u ovogodišnjem travnju bilo više osiguranika nego u istome mjesecu 2019., za njih 12.162. To je ipak teže objasniti s obzirom na pretpandemijsku ekonomsku aktivnost i pozitivne trendove na tržištu rada. Taj prilično optimističan pokazatelj kretanja broja zaposlenih, točnije osiguranih, prema mišljenju Danijela Nestića s Ekonomskog instituta rezultat je triju ključnih faktora.\r\n\r\n\"Prvo, mjerama za održavanje zaposlenosti izbjegnut je veći pad zaposlenosti u najpogođenijim djelatnostima. Drugo, država je povećavala zaposlenost u \"vlastitoj režiji\", odnosno u javnom sektoru, prije svega u obrazovanju i zdravstvu. I treće, zaposlenost je povećana u nekoliko propulzivnih sektora koji iznimno dobro posluju u posljednje vrijeme, usprkos pandemiji i potresima, ili čak upravo zbog njih\", objašnjava Nestić.\r\n\r\nSektori u ekspanziji su građevinarstvo, IT, poslovne usluge koje, između ostalog, sačinjavaju consulting, pravne i računovodstvene usluge, promidžbu, kao i arhitektonske djelatnosti, inženjerstvo, ispitivanja i analize.Priprema sezone\r\nS oporavkom ekonomije poduzetnici su počeli i pripreme za sezonu. U usporedbi s ožujkom, kaže Zrinka Živković Matijević, glavna ekonomistica RBA, broj osiguranika je povećan za 10.750, a gotovo 30 posto njih (3187) dolazi iz ugostiteljstva, odnosno djelatnosti pružanja smještaja te pripreme i usluživanja hrane.\r\n\r\n\"To održava pozitivna očekivanja u pogledu normalizacije putovanja i početka sezone. Uz ugostiteljstvo, visok doprinos rastu dolazi i od prerađivačke industrije, osobito u sektorima proizvodnje hrane i duhana, te u građevinarstvu.\r\n\r\nIako su podaci HZMO-a ohrabrujući, oni koji uplaćuju mirovinsko osiguranje ne moraju biti i zaposleni. Tako osobe koje su ostale bez posla mogu same sebi nastaviti uplaćivati osiguranje, a u kategoriji osiguranika su i oni na stručnom osposobljavanju i nemaju zasnovan radni odnos. Ipak, Nestić smatra da su podaci HZMO-a dobar i pouzdan pokazatelj tekućih kretanja na tržištu rada. Jer, službeni podaci DZS-a o zaposlenosti najmanje se jednom godišnje revidiraju, i to u pravilu na više.\r\n\r\nKako bilo, oba izvora upućuju na vrlo sličan trend: u protekloj je godini najviše smanjen broj radnih mjesta u djelatnosti ugostiteljstva, a povećan je u građevinarstvu, informacijama, komunikacijama i javnoj upravi. Ako se uspoređuje ovogodišnji travanj s onim otprije dvije godine, broj osiguranika u ugostiteljstvu je smanjen za 17.176, a u prerađivačkoj industriji za 3121.\r\n\r\nIstodobno, u građevinarstvu je broj osiguranika povećan za 14.109, slijede informacije i komunikacije s rastom od 5647 te stručne, znanstvene i tehničke djelatnosti u kojima je 4323 osiguranika više. Kao što su već pokazali podaci DZS-a, osjetno je povećan i broj zaposlenih u javnim službama, u obrazovanju i zdravstvu ukupno oko 8600.', 'posao.png', 2, 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE `kategorije` (
  `id` int(11) NOT NULL,
  `naziv` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`id`, `naziv`) VALUES
(1, 'Sport'),
(2, 'Svijet'),
(3, 'Kultura');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `prezime` varchar(32) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `korisnickoIme` varchar(32) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `lozinka` varchar(255) CHARACTER SET cp1250 COLLATE cp1250_croatian_ci DEFAULT NULL,
  `razina` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `korisnickoIme`, `lozinka`, `razina`) VALUES
(11, 'Tomislav', 'Istuk', 'tompa', '$2y$10$p1pJb3boHlkIHBE8aJrJkuRAQ1qcMqRw6IIy5btQwPYdvRJkM410G', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanci`
--
ALTER TABLE `clanci`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_clanci_kategorije_idx` (`idKategorija`),
  ADD KEY `fk_clanci_korisnici1_idx` (`idKorisnik`);

--
-- Indexes for table `kategorije`
--
ALTER TABLE `kategorije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnickoIme_UNIQUE` (`korisnickoIme`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanci`
--
ALTER TABLE `clanci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategorije`
--
ALTER TABLE `kategorije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clanci`
--
ALTER TABLE `clanci`
  ADD CONSTRAINT `fk_clanci_kategorije` FOREIGN KEY (`idKategorija`) REFERENCES `kategorije` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clanci_korisnici1` FOREIGN KEY (`idKorisnik`) REFERENCES `korisnici` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
