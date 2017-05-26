<?php
/* 
------------------
Language: English
------------------
*/

$lang = array();

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
$lang['MENU_WEB'] = 'Our thematic websites';
$lang['MENU_CONTACT'] = 'Contact';
$lang['MENU_3D_LED_CUBE'] = '3D LED cube';

$lang['MENU_BIO'] = 'Biomechatronics';
$lang['MENU_MOTO'] = 'Electric kart';
$lang['MENU_VEHICLE'] = 'Autonomous vehicle 6×6';



$lang['MENU_HISTORY'] = 'History of the Institute';
$lang['MENU_VEDENIE'] = 'Head of the Institute';
$lang['MENU_DEPARTMENTS'] = 'Departments of the Institute';

$lang['MENU_UCHADZACI'] = 'For applicants for studies';
$lang['MENU_BCSTUDY'] = 'Bachelor study';
$lang['MENU_INGSTUDY'] = 'Engineering study';
$lang['MENU_INFO'] = 'General information';
$lang['MENU_BCPRACE'] = 'Bachelor Thesis';
$lang['MENU_INGPRACE'] = 'Diploma theses';
$lang['MENU_POKYNY'] = 'Instructions';
$lang['MENU_VOLNETEMY'] = 'Free thesis';
$lang['MENU_PHD'] = 'Doctoral study';




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
$lang['STAFF_F1'] = 'Filter of department';
$lang['STAFF_F2'] = 'Filter of Staff Role';



$lang['URL_o_nas']= 'index.php?lang=en';
$lang['URL_studium']='index.php?lang=en';

$lang['kocka']='Displayed cube was created within the diploma thesis. It was created for remote access via the Internet. It allows the user to insert custom code blocks and in this way to influence its behavior.';



$lang['AKT_VYBERTE'] = 'Choose type of news'; 
$lang['AKT_VSETKY'] = 'All'; 
$lang['AKT_PROP'] = 'Promotion'; 
$lang['AKT_OZNAMY'] = 'Announcements'; 
$lang['AKT_ZOZIVOTA'] = "From school's life"; 
$lang['AKT_NEPLATNE'] = 'Show old news'; 
$lang['AKT_SHOW'] = 'Show'; 
$lang['AKT_AKT'] = 'Current view'; 
$lang['AKT_OLD'] = 'View old news'; 
$lang['AKT_YES'] = 'Yes'; 



//photos
$lang['PHOTO_DATE'] = 'Date';
$lang['PHOTO_TITLESK'] = 'Title (SK)';
$lang['PHOTO_TITLEEN'] = 'Title (EN)';
$lang['PHOTO_CHOOSE'] = 'Choose images:';
$lang['PHOTO_UPLOAD'] = 'Upload images:';
$lang['PHOTO_GALERY'] = 'Choose gallery:';
$lang['PHOTO_PHOTO'] = "Galeries";
$lang['PHOTO_SQL1'] = "SELECT `Photos`.`ID`, `Photos`.`Title-EN`, `Photos`.`Datum`, `Photos`.`Folder` FROM `Photos` ";
$lang['PHOTO_SQL2'] =  "SELECT `Photos`.`Title-EN`, `Photos`.`Datum`, `Photos`.`Folder` FROM `Photos` WHERE `Photos`.`ID` = '";


//Video
$lang['VIDEO_ADDR'] = 'Video Code';
$lang['VIDEO_ADD'] = 'Add video';
$lang['VIDEO_UPLOAD'] = 'Upload video';
$lang['VIDEO_ERR_EXST'] = 'File already exists';
$lang['VIDEO_ERR_BIG'] = 'File is too large';
$lang['VIDEO_ERR_BAD'] = 'Bad extension';
$lang['VIDEO_UP_OK'] = 'Upload Complete';
$lang['VIDEO_ERR_NO'] = 'Error no. ';
$lang['VIDEO_SQL1'] = "SELECT `Videos`.`Title-EN`, `Videos`.`Adresa`, `Videos`.`YT` FROM `Videos` ";
$lang['VIDEO_VIDEO'] = 'Videos';


//contact
$lang['CONTACT_ADDR'] = 'Address';
$lang['CONTACT_COUNTRY'] = 'Slovak Republic<br>';
$lang['CONTACT_SEC'] = 'Secretariat<br>';


//HOMEPAGE

$lang['HOME_KTO'] = 'Who we are?';
$lang['HOME_CIM'] = 'What can I do?';
$lang['HOME_VEDEL'] = 'Did you know that our study...';
$lang['HOME_MZDA'] = 'Gross wage of graduates';

$lang['HOME_MENU1'] = '<ul class="quickmenu">
<li><a href="#" title="#">
	The Institute of Automobile Mechatronics was established on July 1, 2013 as a pedagogical and scientific research unit of the Faculty of Electrical Engineering and Informatics of STU in Bratislava.</a></li>
	<li><a href="#" title="#">The Institute of Automobile Mechatronics provides research, development and training in automotive mechatronics and mechatronic systems based on the integration and synergy of mechanical, electronic, information, communication and management technologies into complex mechatronic systems in automotive and other industries.</a></li>
</ul>';


 $lang['HOME_MENU2'] = ' <ul class="quickmenu">

                    <li><a href="#" title="#">1. NEW BACHELOR STUDY PROGRAM AUTOMOTIVE MECHATRONICS</a></li>
                   <li><a href="#" title="#">The bachelor study lasts 3 years and ends with a state examination. By passing this part of the study, the student gets the title "bachelor" (Bc.)</a></li>


                    <li><a href="#" title="#">2. ENGINEERING STUDY PROGRAM APPLIED MECHATRONICS</a></li>
                    <li><a href="#" title="#">Engineering studies last for two years and are completed by state examination and defense of the diploma thesis. Graduate gets the title "engineer" (Ing.).</a></li>

                    <li><a href="#" title="#">3. DOCTORAL PROGRAM MECHATRONIC SYSTEMS</a></li>
                    <li><a href="#" title="#">Graduate gets the title "doctor" (PhD.).</a></li>

                </ul>';  



$lang['HOME_MENU3'] = '<ul class="quickmenu">
                   <li><a href="#" title="#">...IS SUITABLE FOR YOUNG PEOPLE INTERESTED IN INFORMATICS?</a></li>
                    <li><a href="#" title="#">Mechatronics connects informatics, electronic systems, mechanics and automatic control into one integrated whole. In our country you will certainly not lose a young person with an interest in computer science. ;)</a></li>
                   
                    <li><a href="#" title="#">...CAN BE DIRECTION TO THE DIGITAL FACTORY?</a></li>
                    <li><a href="#" title="#">
Another Industrial Revolution - INDUSTRY 4.0 is under preparation. There is a huge space for informants with an interest in virtual reality and knowledge of mechatronics.</a></li>
                </ul>';


$lang['HOME_MENU4'] = ' <ul class="quickmenu">
                    <li><a href="#" title="#">Programmer 1200 €</a></li>
                    <li><a href="#" title="#">CATIA designer 1090 €</a></li>
                    <li><a href="#" title="#">Economist  750 €</a></li>
                    <li><a href="#" title="#">Agronomic 670 €</a></li>
                    <li><a href="#" title="#">Social worker 520 €</a></li>
                    <li><a href="#" title="#">School Psychologist 510 €</a></li>
                </ul>';



$lang['LINK_HISTORY'] = 'index.php';
$lang['LINK_VEDENIE'] = 'index.php';

$lang['LINK_ODDELENIA1'] = 'index.php';
$lang['LINK_ODDELENIA2'] = 'index.php';
$lang['LINK_ODDELENIA3'] = 'index.php';
$lang['LINK_ODDELENIA4'] = 'index.php';

$lang['LINK_BC'] = 'index.php';
$lang['LINK_ING'] = 'index.php';

$lang['LINK_BCINFO'] = 'index.php';
$lang['LINK_BCTEMYINFO'] = 'index.php';
$lang['LINK_BCTEMY'] = 'index.php';

$lang['LINK_INGINFO'] = 'index.php';
$lang['LINK_INGTEMYINFO'] = 'index.php';
$lang['LINK_INGTEMY'] = 'index.php';

$lang['LINK_PHD'] = 'index.php';

$lang['LINK_MOTO'] = 'index.php';
$lang['LINK_VOZIDLO'] = 'index.php';
$lang['LINK_BIO'] = 'index.php';
$lang['LINK_MEDIA'] = 'index.php';
?>

