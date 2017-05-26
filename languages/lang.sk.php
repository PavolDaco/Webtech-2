<?php
/* 
-----------------
Language: Slovak
-----------------
*/

$lang = array();

// Menu
$lang['MENU_ABOUT_US'] = 'O nás';
$lang['MENU_STAFF'] = 'Pracovníci';
$lang['MENU_STUDY'] = 'Štúdium';
$lang['MENU_RESEARCH'] = 'Výskum';
$lang['MENU_PROJECTS'] = 'Projekty';
$lang['MENU_RESEARCH_TOPICS'] = 'Výskumné oblasti';
$lang['MENU_NEWS'] = 'Aktuality';
$lang['MENU_ACTIVITIES'] = 'Aktivity';
$lang['MENU_PHOTOS'] = 'Fotogaléria';
$lang['MENU_VIDEO'] = 'Videá';
$lang['MENU_MEDIA'] = 'Médiá';
$lang['MENU_WEB'] = 'Naše tématické webstránky';
$lang['MENU_CONTACT'] = 'Kontakt';
$lang['MENU_3D_LED_CUBE'] = '3D LED kocka';

$lang['MENU_BIO'] = 'Biomechatronika';
$lang['MENU_MOTO'] = 'Elektrická motokára';
$lang['MENU_VEHICLE'] = 'Autonómne vozidlo 6×6';

$lang['MENU_HISTORY'] = 'História ústavu';
$lang['MENU_VEDENIE'] = 'Vedenie ústavu';
$lang['MENU_DEPARTMENTS'] = 'Oddelenia ústavu';

$lang['MENU_UCHADZACI'] = 'Pre uchádzačov o štúdium';
$lang['MENU_BCSTUDY'] = 'Bakalárske štúdium';
$lang['MENU_INGSTUDY'] = 'Inžinierske štúdium';
$lang['MENU_INFO'] = 'Všeobecné informácie';
$lang['MENU_BCPRACE'] = 'Bakalárke práce';
$lang['MENU_INGPRACE'] = 'Diplomové práce';
$lang['MENU_POKYNY'] = 'Pokyny';
$lang['MENU_VOLNETEMY'] = 'Voľné témy';
$lang['MENU_PHD'] = 'Doktorandské štúdium';


////////////////////////////////////////

$lang['PROJ_CISLO'] = 'Číslo projektu';  
$lang['PROJ_NAZOV'] = 'Názov projektu';  
$lang['PROJ_DOBA'] = 'Doba riešenia';  
$lang['PROJ_RIESITEL'] = 'Zodpovedný riešiteľ';  
$lang['PROJ_ZAKAZKA'] = 'Zákazka / číslo';  
$lang['PROJ_ANNOTATION'] = 'Anotácia projektu';  
$lang['PROJ_PARTNERS'] = 'Partneri'; 
$lang['PROJ_ROW_TITLE'] = 'titleSK';  
$lang['PROJ_ROW_TITLE2'] = 'annotationSK'; 


$lang['PROJ_VEGA'] = 'VEGA projekty';  
$lang['PROJ_KEGA'] = 'KEGA projekty';
$lang['PROJ_APVV'] = 'APVV projekty';
$lang['PROJ_INTERNATIONAL'] = 'Medzinárodné projekty';
$lang['PROJ_HOME'] = 'Iné domáce projekty';




$lang['PROJ_SELECT_VEGA'] = "SELECT number, titleSK AS nazov, RIGHT(start,4) AS zaciatok, RIGHT(end,4) AS koniec, coordinator, partners, web, internalCode, annotationSK FROM Projekty WHERE projectType = 'VEGA' ORDER BY RIGHT(koniec, 4) DESC, zaciatok DESC";

$lang['PROJ_SELECT_KEGA'] = "SELECT number, titleSK AS nazov, RIGHT(start,4) AS zaciatok, RIGHT(end,4) AS koniec, coordinator, partners, web, internalCode, annotationSK FROM Projekty WHERE projectType = 'KEGA' ORDER BY RIGHT(koniec, 4) DESC, zaciatok DESC";

$lang['PROJ_SELECT_APVV'] = "SELECT number, titleSK AS nazov, RIGHT(start,4) AS zaciatok, RIGHT(end,4) AS koniec, coordinator, partners, web, internalCode, annotationSK FROM Projekty WHERE projectType = 'APVV' ORDER BY RIGHT(koniec, 4) DESC, zaciatok DESC";

$lang['PROJ_SELECT_INTERNATIONAL'] = "SELECT number, titleSK AS nazov, RIGHT(start,4) AS zaciatok, RIGHT(end,4) AS koniec, coordinator, partners, web, internalCode, annotationSK FROM Projekty WHERE projectType = 'Medzinárodné projekty/Cooperation' ORDER BY RIGHT(koniec, 4) DESC, zaciatok DESC";

$lang['PROJ_SELECT_HOME'] = "SELECT number, titleSK AS nazov, RIGHT(start,4) AS zaciatok, RIGHT(end,4) AS koniec, coordinator, partners, web, internalCode, annotationSK FROM Projekty WHERE projectType = 'Iné domáce projekty/Other domestic projects' ORDER BY RIGHT(koniec, 4) DESC, zaciatok DESC";


/////////////////////////////////////////////////



$lang['STAFF_NAME'] = 'Meno'; 
$lang['STAFF_ROOM'] = 'Miestnosť'; 
$lang['STAFF_PHONE'] = 'Klapka'; 
$lang['STAFF_DEPARTMENT'] = 'Oddelenie'; 
$lang['STAFF_ROLE'] = 'Zaradenie'; 
$lang['STAFF_FUNCTION'] = 'Funkcia'; 
$lang['STAFF_PUBL'] = 'Žiadne publikácie';
$lang['STAFF_F1'] = 'Filter oddelenia';
$lang['STAFF_F2'] = 'Filter zaradenia';

$lang['kocka']='Zobrazená kocka bola vytvorená v rámci diplomovej práce. Bol k nej vytvorený vzdialený prístup cez Internet, čo umožňuje užívateľovi vkladať do kocky vlastný kód, ktorý ovplyvňuje jej správanie sa.';


$lang['AKT_VYBERTE'] = 'Vyberte typ aktualít'; 
$lang['AKT_VSETKY'] = 'Všetky'; 
$lang['AKT_PROP'] = 'Propagácia'; 
$lang['AKT_OZNAMY'] = 'Oznamy'; 
$lang['AKT_ZOZIVOTA'] = 'Zo života školy'; 
$lang['AKT_NEPLATNE'] = 'Zobraziť aj neplatné aktuality'; 
$lang['AKT_SHOW'] = 'Zobraziť'; 
$lang['AKT_AKT'] = 'Aktuálne zobrazenie'; 
$lang['AKT_OLD'] = 'Zobrazenie starých aktualít'; 
$lang['AKT_YES'] = 'Áno'; 

//photos
$lang['PHOTO_DATE'] = 'Dátum';
$lang['PHOTO_TITLESK'] = 'Názov (SK)';
$lang['PHOTO_TITLEEN'] = 'Názov (EN)';
$lang['PHOTO_CHOOSE'] = 'Vyber obrázky:';
$lang['PHOTO_UPLOAD'] = 'Nahraj obrázky';
$lang['PHOTO_GALERY'] = 'Zvoľ galériu:';
$lang['PHOTO_SQL1'] = "SELECT `Photos`.`ID`, `Photos`.`Title-SK`, `Photos`.`Datum`, `Photos`.`Folder` FROM `Photos` ";
$lang['PHOTO_SQL2'] =  "SELECT `Photos`.`Title-SK`, `Photos`.`Datum`, `Photos`.`Folder` FROM `Photos` WHERE `Photos`.`ID` = '";
$lang['PHOTO_PHOTO'] = "Galérie";


//Video
$lang['VIDEO_ADDR'] = 'Kód videa';
$lang['VIDEO_ADD'] = 'Pridaj video';
$lang['VIDEO_UPLOAD'] = 'Nahraj video';
$lang['VIDEO_ERR_EXST'] = 'Súbor s týmto názvom už existuje';
$lang['VIDEO_ERR_BIG'] = 'Súbor je príliš veľký';
$lang['VIDEO_ERR_BAD'] = 'Súbor má nesprávny formát';
$lang['VIDEO_UP_OK'] = 'Upload bol ukončený';
$lang['VIDEO_ERR_NO'] = 'Chyba číslo ';
$lang['VIDEO_VIDEO'] = 'Videá';
$lang['VIDEO_SQL1'] = "SELECT `Videos`.`Title-SK`, `Videos`.`Adresa`, `Videos`.`YT` FROM `Videos` ";

//contact
$lang['CONTACT_ADDR'] = 'Adresa';
$lang['CONTACT_COUNTRY'] = 'Slovenská republika<br>';
$lang['CONTACT_SEC'] = 'Sekretariát<br>';


//HOMEPAGE

$lang['HOME_KTO'] = 'Kto sme?';
$lang['HOME_CIM'] = 'Čím sa môžem stať?';
$lang['HOME_VEDEL'] = 'Vedel(a) si, že naše štúdium...';
$lang['HOME_MZDA'] = 'Hrubá mzda absolventov';

$lang['HOME_MENU1'] = '<ul class="quickmenu">
                    <li><a href="#" title="#">Ústav automobilovej mechatroniky bol zriadený k 1. júlu 2013 ako pedagogické a vedecko-výskumné pracovisko Fakulty elektrotechniky a informatiky STU v Bratislave.</a></li>
       					<li><a href="#" title="#">Ústav automobilovej mechatroniky zabezpečuje výskum, vývoj a vzdelávanie v oblasti automobilovej mechatroniky a mechatronických systémov na základe integrácie a synergie mechanických, elektronických, informačných, komunikačných a riadiacich technológií do komplexných mechatronických systémov v automobiloch a ďalších odvetviach priemyslu.</a></li>
                </ul>';



 $lang['HOME_MENU2'] = ' <ul class="quickmenu">

                    <li><a href="#" title="#">1. NOVÝ BAKALÁRSKY ŠTUDIJNÝ PROGRAM AUTOMOBILOVÁ MECHATRONIKA</a></li>
                   <li><a href="#" title="#">Bakalárske štúdium trvá 3 roky a je ukončené štátnou skúškou. Absolvovaním tejto časti štúdia získa študent titul "bakalár" (Bc.)</a></li>


                    <li><a href="#" title="#">2.INŽINIERSKY ŠTUDIJNÝ PROGRAM APLIKOVANÁ MECHATRONIKA</a></li>
                    <li><a href="#" title="#">Inžinierske štúdium trvá ďalšie dva roky a je ukončené štátnou skúškou a obhajobou diplomovej práce. Absolvent získa titul "inžinier" (Ing.).</a></li>

                    <li><a href="#" title="#">3. DOKTORANDSKÝ PROGRAM MECHATRONICKÉ SYSTÉMY</a></li>
                    <li><a href="#" title="#">V doktorandskom štúdiu sa po jeho ukončení udeľuje titul "philosophiae doctor" (PhD.).</a></li>

                </ul>';            


$lang['HOME_MENU3'] = '<ul class="quickmenu">
                   <li><a href="#" title="#">...JE VHODNÉ AJ PRE ZÁUJEMCOV O INFORMATIKU?</a></li>
                    <li><a href="#" title="#">Mechatronika spája informatiku, elektronické systémy, mechaniku a automatické riadenie do jedného integrovaného celku. U nás sa ako mladý človek so záujmom o informatiku aplikovanú v praxi určite nestratíš. ;)</a></li>
                   
                    <li><a href="#" title="#">...MÔŽE BYŤ CESTOU DO DIGITÁLNEJ TOVÁRNE?</a></li>
                    <li><a href="#" title="#">Pripravuje sa ďalšia priemyselná revolúcia - INDUSTRY 4.0. Je tu obrovský priestor pre informatikov so záujmom o virtuálnu realitu a znalosťami z mechatroniky.</a></li>
                </ul>';

$lang['HOME_MENU4'] = ' <ul class="quickmenu">
                    <li><a href="#" title="#">Programátor 1200 €</a></li>
                    <li><a href="#" title="#">CATIA konštruktér 1090 €</a></li>
                    <li><a href="#" title="#">Ekonóm 750 €</a></li>
                    <li><a href="#" title="#">Agronóm 670 €</a></li>
                    <li><a href="#" title="#">Sociálny pracovník 520 €</a></li>
                    <li><a href="#" title="#">Školský psychológ 510 €</a></li>
                  </ul>';



$lang['LINK_HISTORY'] = 'o_nas_historia.php';
$lang['LINK_VEDENIE'] = 'o_nas_vedenie.php';

$lang['LINK_ODDELENIA1'] = 'OAMM.php';
$lang['LINK_ODDELENIA2'] = 'OIKR.php';
$lang['LINK_ODDELENIA3'] = 'OEMP.php';
$lang['LINK_ODDELENIA4'] = 'OEAP.php';

$lang['LINK_BC'] = 'uchadzaciBC.php';
$lang['LINK_ING'] = 'uchadzaciING.php';

$lang['LINK_BCINFO'] = 'bc_info.php';
$lang['LINK_BCTEMYINFO'] = 'bp_pokyny.php';
$lang['LINK_BCTEMY'] = 'bp_volne.php';


$lang['LINK_INGINFO'] = 'ing_info.php';
$lang['LINK_INGTEMYINFO'] = 'dp_pokyny.php';
$lang['LINK_INGTEMY'] = 'dp_volne.php';
$lang['LINK_PHD'] = 'phd_info.php';


$lang['LINK_MOTO'] = 'motokara.php';
$lang['LINK_VOZIDLO'] = 'vozidlo.php';
$lang['LINK_BIO'] = 'biomechatronika.php';
$lang['LINK_MEDIA'] = 'media.php';






?>
