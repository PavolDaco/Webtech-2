<?php
/* 
------------------
Language: English
------------------
*/

$lang = array();

$lang['PAGE_TITLE'] = 'My website page title';
$lang['HEADER_TITLE'] = 'My website header title';
$lang['SITE_NAME'] = 'My Website';
$lang['SLOGAN'] = 'My slogan here';
$lang['HEADING'] = 'Heading';

// Menu

$lang['MENU_ABOUT_US'] = 'About Us';
$lang['MENU_STAFF'] = 'Staff';
$lang['MENU_STUDY'] = 'Study';
$lang['MENU_RESEARCH'] = 'Research';
$lang['MENU_PROJECTS'] = 'Projects';
$lang['MENU_RESEARCH_TOPICS'] = 'Research topics';
$lang['MENU_NEWS'] = 'News';
$lang['MENU_ACTIVITIES'] = 'Activities';
$lang['MENU_PHOTOS'] = 'Photos';
$lang['MENU_VIDEO'] = 'Video';
$lang['MENU_MEDIA'] = 'Media';
$lang['MENU_CONTACT'] = 'Contact';
$lang['MENU_3D_LED_CUBE'] = '3D LED cube';


//////////////////////////////////////////////////////////
$lang['PROJ_CISLO'] = 'Project ID';  
$lang['PROJ_NAZOV'] = 'Name';  
$lang['PROJ_DOBA'] = 'Project duration';  
$lang['PROJ_RIESITEL'] = 'Principal investigator';  
$lang['PROJ_ZAKAZKA'] = 'Order number';   
$lang['PROJ_ANNOTATION'] = 'Annotation';  
$lang['PROJ_PARTNERS'] = 'Partners';  
$lang['PROJ_ROW_TITLE'] = 'titleEN';  
$lang['PROJ_ROW_TITLE2'] = 'annotationEN'; 

$lang['PROJ_VEGA'] = 'VEGA projects'; 
$lang['PROJ_KEGA'] = 'KEGA projects';
$lang['PROJ_APVV'] = 'APVV projects';
$lang['PROJ_INTERNATIONAL'] = 'Cooperation';
$lang['PROJ_HOME'] = 'Other domestic projects';



$lang['PROJ_SELECT_VEGA'] = "SELECT number, titleEN AS nazov, RIGHT(start,4) AS zaciatok, RIGHT(end,4) AS koniec, coordinator, partners, web, internalCode, annotationEN FROM Projekty WHERE projectType = 'VEGA' ORDER BY RIGHT(koniec, 4) DESC, zaciatok DESC";

$lang['PROJ_SELECT_KEGA'] = "SELECT number, titleEN AS nazov, RIGHT(start,4) AS zaciatok, RIGHT(end,4) AS koniec, coordinator, partners, web, internalCode, annotationEN FROM Projekty WHERE projectType = 'KEGA' ORDER BY RIGHT(koniec, 4) DESC, zaciatok DESC";

$lang['PROJ_SELECT_APVV'] = "SELECT number, titleEN AS nazov, RIGHT(start,4) AS zaciatok, RIGHT(end,4) AS koniec, coordinator, partners, web, internalCode, annotationEN FROM Projekty WHERE projectType = 'APVV' ORDER BY RIGHT(koniec, 4) DESC, zaciatok DESC";

$lang['PROJ_SELECT_INTERNATIONAL'] = "SELECT number, titleEN AS nazov, RIGHT(start,4) AS zaciatok, RIGHT(end,4) AS koniec, coordinator, partners, web, internalCode, annotationEN FROM Projekty WHERE projectType = 'Medzinárodné projekty/Cooperation' ORDER BY RIGHT(koniec, 4) DESC, zaciatok DESC";

$lang['PROJ_SELECT_HOME'] = "SELECT number, titleEN AS nazov, RIGHT(start,4) AS zaciatok, RIGHT(end,4) AS koniec, coordinator, partners, web, internalCode, annotationEN FROM Projekty WHERE projectType = 'Iné domáce projekty/Other domestic projects' ORDER BY RIGHT(koniec, 4) DESC, zaciatok DESC";


///////////////////////

$lang['STAFF_NAME'] = 'Name'; 
$lang['STAFF_ROOM'] = 'Room'; 
$lang['STAFF_PHONE'] = 'Phone'; 
$lang['STAFF_DEPARTMENT'] = 'Department'; 
$lang['STAFF_ROLE'] = 'Staff Role'; 
$lang['STAFF_FUNCTION'] = 'Function'; 
$lang['STAFF_PUBL'] = 'No publications'; 

$lang['URL_o_nas']= 'index.php?lang=en';
$lang['URL_studium']='index.php?lang=en';

$lang['kocka']='Displayed cube was created within the diploma thesis. It was created for remote access via the Internet. It allows the user to insert custom code blocks and in this way to influence its behavior.';

?>


