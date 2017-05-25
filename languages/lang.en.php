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
$lang['PHOTO_CHOOSE'] = 'Choose images: (max 50, max 2MB)';
$lang['PHOTO_UPLOAD'] = 'Upload images:';
$lang['PHOTO_GALERY'] = 'Choose gallery:';
$lang['PHOTO_ERROR'] = 'Upload failed';

//Video
$lang['VIDEO_ADDR'] = 'Link to video';
$lang['VIDEO_ADD'] = 'Add video';
$lang['VIDEO_UPLOAD'] = 'Upload video';
$lang['VIDEO_ERR_EXST'] = 'File already exists';
$lang['VIDEO_ERR_BIG'] = 'File is too large';
$lang['VIDEO_ERR_BAD'] = 'Bad extension';
$lang['VIDEO_UP_OK'] = 'Upload Complete';
$lang['VIDEO_ERR_NO'] = 'Error no. ';




?>


