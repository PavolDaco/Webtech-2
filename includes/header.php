<?php
include 'languages/common.php';
?>
<!DOCTYPE HTML >
<html><head>

<!--<title><?php echo ucfirst(substr(basename($_SERVER['PHP_SELF']),0,-4 )); ?></title>-->


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<style>
	.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}


html {
  position: relative;
  min-height: 100%;
}
body {
  margin-bottom: 70px;
}
.footer {
   position: fixed;
   bottom: 0; 
   width: 100%; 
   height: 40px; 
   background-color: black;
   padding-top: 8px;
   text-align: center;
  
}



</style>


</head><body>



<div class="navbar navbar-inverse" role="navigation" >
    <div class="container" >
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="includes/logo.png" height="30px"></a>
        </div>


        
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <?php 
				$pages = array("aktuality.php","kocka.php","projekty.php","staff.php","index.php","photogallery.php","videogallery.php", "contact.php");

			if (in_array(basename($_SERVER['PHP_SELF']), $pages)) {		
				$linkEN = basename($_SERVER['PHP_SELF'])."?lang=en";
		   		
			}else{
					 $linkEN ="index.php?lang=en";   	
			}

			$linkSK = basename($_SERVER['PHP_SELF'])."?lang=sk";
			
		 	 echo "<li><a href=".$linkSK."><img src='http://www.geonames.org/flags/x/sk.gif' width='40', height='25'></a></li>
		  			<li><a href=".$linkEN."><img src='http://www.geonames.org/flags/x/uk.gif' width='40', height='25'></a></li>
				  ";


 				?>	
            </ul> 


            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>

        
             <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_ABOUT_US']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">                      
                        <li><a href="<?php echo $lang['LINK_HISTORY'];?>"><?php echo $lang['MENU_HISTORY']; ?></a></li>
                        <li><a href="<?php echo $lang['LINK_VEDENIE'];?>"><?php echo $lang['MENU_VEDENIE']; ?></a></li>
                        
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_DEPARTMENTS']; ?></a>
                            <ul class="dropdown-menu">
                                    <li><a href="<?php echo $lang['LINK_ODDELENIA1'];?>">Oddelenie aplikovanej mechaniky a mechatroniky</a></li>
                                    <li><a href="<?php echo $lang['LINK_ODDELENIA2'];?>">Oddelenie informačných, komunikačných a riadiacich systémov</a></li>
                                    <li><a href="<?php echo $lang['LINK_ODDELENIA3'];?>">Oddelenie elektroniky, mikropočítačov a PLC systémov</a></li>
                                    <li><a href="<?php echo $lang['LINK_ODDELENIA4'];?>">Oddelenie E-mobility, automatizácie a pohonov</a></li>

                            </ul>
                        </li>



                    </ul>
            </li>


			<li><a href="staff.php"><?php echo $lang['MENU_STAFF']; ?></a></li>


                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_STUDY']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">                      
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_UCHADZACI']; ?></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?php echo $lang['LINK_BC'];?>"><?php echo $lang['MENU_BCSTUDY']; ?></a></li>
                              	<li><a href="<?php echo $lang['LINK_ING'];?>"><?php echo $lang['MENU_INGSTUDY']; ?></a></li>
                                
                            </ul>
                        </li>


                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_BCSTUDY']; ?></a>
                            <ul class="dropdown-menu">
                             <li><a href="<?php echo $lang['LINK_BCINFO'];?>"><?php echo $lang['MENU_INFO']; ?></a></li>
                          
                              <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_BCPRACE']; ?></a>
                                    <ul class="dropdown-menu">
                                                <li><a href="<?php echo $lang['LINK_BCTEMYINFO'] ;?>"><?php echo $lang['MENU_POKYNY']; ?></a></li>
                                                <li><a href="<?php echo $lang['LINK_BCTEMY'];?>"><?php echo $lang['MENU_VOLNETEMY']; ?></a></li>
                                               
                                     </ul>
                                </li> 
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_INGSTUDY']; ?></a>
                            <ul class="dropdown-menu">
                             <li><a href="<?php echo $lang['LINK_INGINFO'] ;?>"><?php echo $lang['MENU_INFO']; ?></a></li>
                          
                              <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_INGPRACE']; ?></a>
                                    <ul class="dropdown-menu">
                                                <li><a href="<?php echo $lang['LINK_INGTEMYINFO'];?>"><?php echo $lang['MENU_POKYNY']; ?></a></li>
                                                <li><a href="<?php echo $lang['LINK_INGTEMY'];?>"><?php echo $lang['MENU_VOLNETEMY']; ?></a></li>
                                               
                                     </ul>
                                </li> 
                            </ul>
                        </li>

                        <li><a href="<?php echo $lang['LINK_PHD'];?>"><?php echo $lang['MENU_PHD']; ?></a></li>

                    </ul>
                </li>

           	 <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_RESEARCH']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="projekty.php"><?php echo $lang['MENU_PROJECTS']; ?></a></li>
                        
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_RESEARCH_TOPICS']; ?></a>
                            <ul class="dropdown-menu">
                                	<li><a href="<?php  echo $lang['LINK_MOTO']; ?>"><?php echo $lang['MENU_MOTO']; ?></a></li>
									<li><a href="<?php  echo $lang['LINK_VOZIDLO']; ?>"><?php echo $lang['MENU_VEHICLE']; ?></a></li>
									<li><a href="kocka.php"><?php echo $lang['MENU_3D_LED_CUBE']; ?></a></li>
									<li><a href="<?php echo $lang['LINK_BIO'];?>"><?php echo $lang['MENU_BIO']; ?></a></li>


                            </ul>
                        </li>
                    </ul>
                </li>



               <li><a href="aktuality.php"><?php echo $lang['MENU_NEWS']; ?></a></li>
			


                 <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_ACTIVITIES']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="photogallery.php"><?php echo $lang['MENU_PHOTOS']; ?></a></li>
						<li><a href="videogallery.php"><?php echo $lang['MENU_VIDEO']; ?></a></li>
						<li><a href="<?php echo $lang['LINK_MEDIA'];?>"><?php echo $lang['MENU_MEDIA']; ?></a></li>

                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_WEB']; ?></a>
                            <ul class="dropdown-menu">
                               <li><a href="http://www.e-mobilita.fei.stuba.sk/">Elektromobilita (http://www.e-mobilita.fei.stuba.sk/)</a></li>
                               
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="contact.php"><?php echo $lang['MENU_CONTACT']; ?></a></li>

              
            </ul>
        </div>
    </div>
</div>




