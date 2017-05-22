<?php
/* 
-----------------
Language: Slovak
-----------------
*/
header ('Content-type: text/html; charset=utf-8');
$lang = array();

$lang['PAGE_TITLE'] = 'MôJ TITLE';
$lang['HEADER_TITLE'] = 'My website header title';
$lang['SITE_NAME'] = 'My Website';
$lang['SLOGAN'] = 'My slogan here';
$lang['HEADING'] = 'Heading';

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
$lang['MENU_CONTACT'] = 'Kontakt';
$lang['MENU_3D_LED_CUBE'] = '3D LED kocka';



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

$lang['kocka']='Zobrazená kocka bola vytvorená v rámci diplomovej práce. Bol k nej vytvorený vzdialený prístup cez Internet, čo umožňuje užívateľovi vkladať do kocky vlastný kód, ktorý ovplyvňuje jej správanie sa.';

?>