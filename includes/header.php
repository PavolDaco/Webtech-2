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

  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  line-height: 60px; /* Vertically center the text there */

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
				$pages = array("aktuality.php","kocka.php","projekty.php","staff.php");

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
                        <li><a href="o_nas_historia.php"><?php echo $lang['MENU_HISTORY']; ?></a></li>
                        <li><a href="o_nas_vedenie.php"><?php echo $lang['MENU_VEDENIE']; ?></a></li>
                        
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_DEPARTMENTS']; ?></a>
                            <ul class="dropdown-menu">
                                    <li><a href="OAMM.php">Oddelenie aplikovanej mechaniky a mechatroniky</a></li>
                                    <li><a href="OIKR.php">Oddelenie informačných, komunikačných a riadiacich systémov</a></li>
                                    <li><a href="OEMP.php">Oddelenie elektroniky, mikropočítačov a PLC systémov</a></li>
                                    <li><a href="OEAP.php">Oddelenie E-mobility, automatizácie a pohonov</a></li>

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
                              <li><a href="uchadzaciBC.php"><?php echo $lang['MENU_BCSTUDY']; ?></a></li>
                              	<li><a href="uchadzaciING.php"><?php echo $lang['MENU_INGSTUDY']; ?></a></li>
                                
                            </ul>
                        </li>


                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_BCSTUDY']; ?></a>
                            <ul class="dropdown-menu">
                             <li><a href="bc_info.php"><?php echo $lang['MENU_INFO']; ?></a></li>
                          
                              <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_BCPRACE']; ?></a>
                                    <ul class="dropdown-menu">
                                                <li><a href="bp_pokyny.php"><?php echo $lang['MENU_POKYNY']; ?></a></li>
                                                <li><a href="bp_volne.php"><?php echo $lang['MENU_VOLNETEMY']; ?></a></li>
                                               
                                     </ul>
                                </li> 
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_INGSTUDY']; ?></a>
                            <ul class="dropdown-menu">
                             <li><a href="ing_info.php"><?php echo $lang['MENU_INFO']; ?></a></li>
                          
                              <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_INGPRACE']; ?></a>
                                    <ul class="dropdown-menu">
                                                <li><a href="dp_pokyny.php"><?php echo $lang['MENU_POKYNY']; ?></a></li>
                                                <li><a href="dp_volne.php"><?php echo $lang['MENU_VOLNETEMY']; ?></a></li>
                                               
                                     </ul>
                                </li> 
                            </ul>
                        </li>

                        <li><a href="phd_info.php"><?php echo $lang['MENU_PHD']; ?></a></li>

                    </ul>
                </li>

           	 <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_RESEARCH']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="projekty.php"><?php echo $lang['MENU_PROJECTS']; ?></a></li>
                        
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_RESEARCH_TOPICS']; ?></a>
                            <ul class="dropdown-menu">
                                	<li><a href="motokara.php">Elektrická motokára </a></li>
									<li><a href="vozidlo.php">Autonómne vozidlo 6×6</a></li>
									<li><a href="kocka.php"><?php echo $lang['MENU_3D_LED_CUBE']; ?></a></li>
									<li><a href="biomechatronika.php">Biomechatronika</a></li>


                            </ul>
                        </li>
                    </ul>
                </li>


               <li><a href="aktuality.php"><?php echo $lang['MENU_NEWS']; ?></a></li>
			


                 <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $lang['MENU_ACTIVITIES']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?php echo $lang['MENU_PHOTOS']; ?></a></li>
						<li><a href="#"><?php echo $lang['MENU_VIDEO']; ?></a></li>
						<li><a href="#"><?php echo $lang['MENU_MEDIA']; ?></a></li>

                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Naše tématické web stránky</a>
                            <ul class="dropdown-menu">
                               <li><a href="#">Elektromobilita (http://www.e-mobilita.fei.stuba.sk/)</a></li>
                               
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="#"><?php echo $lang['MENU_CONTACT']; ?></a></li>

              
            </ul>
        </div>
    </div>
</div>




