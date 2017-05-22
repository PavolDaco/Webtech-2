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


<script>

	$(document).ready(function(){
		$('.dropdown-submenu a.test').on("click", function(e){
			$(this).next('ul').toggle();
			e.stopPropagation();
			e.preventDefault();
		});
	});


</script>


<style>
	.dropdown-submenu {
		position: relative;
	}

	.dropdown-submenu .dropdown-menu {
		top: 0;
		left: 100%;
		margin-top: -1px;
	}
	.circle {
		background: black;
		color: white;
		border-radius: 50px;   
		height: 50px;
		font-weight: bold;
		font-size: 13px;
		width: 50px;
		display: table;  
		text-align: center;
	}
	.circle a {
		vertical-align: middle;
		display: table-cell;
		color: white;
	}


</style>


</head><body>



<?php 

	$pages = array("o_nas.php","studium.php");

	if (in_array(basename($_SERVER['PHP_SELF']), $pages)) {		
   		 $linkEN ="index.php?lang=en";   		
	}else{
		$linkEN = basename($_SERVER['PHP_SELF'])."?lang=en";
	}

	$linkSK = basename($_SERVER['PHP_SELF'])."?lang=sk";
	
 	 echo "<div id='languages'>
  			<a href=".$linkSK.">SK</a>
  			<a href=".$linkEN.">EN</a>
		  </div>";


 ?>


<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><img src="includes/logo.png" height="30px"></a>
		</div>


		<ul class="nav navbar-nav">
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="<?php echo $lang['URL_o_nas']; ?>"><?php echo $lang['MENU_ABOUT_US']; ?></a></li>	
			<li><a href="staff.php"><?php echo $lang['MENU_STAFF']; ?></a></li>
			

			<li><a href="<?php echo $lang['URL_studium']; ?>"><?php echo $lang['MENU_STUDY']; ?></a></li>

			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['MENU_STUDY']; ?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					

					<li class="dropdown-submenu"><a class="test" href="#">Pre uchádžačov o štúdium<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="uchadzaciBC.php">Bakalárske štúdium</a></li>
							<li><a href="uchadzaciING.php">Inžinierske štúdium</a></li>
						</ul>
					</li>

					<li class="dropdown-submenu"><a class="test" href="#">Bakalárske štúdium<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="bc_info.php">Všeobecné informácie</a></li>
							<li><a href="bc_prace.php">Bakalárske práce</a></li>
						</ul>
					</li>


					<li class="dropdown-submenu"><a class="test" href="#">Inžinierske štúdium<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="ing_info.php">Všeobecné informácie</a></li>
							<li><a href="ing_prace.php">Diplomové práce</a></li>
						</ul>
					</li>

					<li><a href="phd_info.php">Doktorandské štúdium</a></li>


				</ul>
			</li>


			<li><a href="#"><?php echo $lang['MENU_RESEARCH']; ?></a></li>
			<li><a href="projekty.php"><?php echo $lang['MENU_PROJECTS']; ?></a></li>

			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['MENU_RESEARCH_TOPICS']; ?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Elektrická motokára </a></li>
					<li><a href="#">Autonómne vozidlo 6×6</a></li>
					<li><a href="#"><?php echo $lang['MENU_3D_LED_CUBE']; ?></a></li>
					<li><a href="#">Biomechatronika</a></li>
				</ul>
			</li>

			<li><a href="aktuality.php"><?php echo $lang['MENU_NEWS']; ?></a></li>

			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['MENU_ACTIVITIES']; ?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#"><?php echo $lang['MENU_PHOTOS']; ?></a></li>
					<li><a href="#"><?php echo $lang['MENU_VIDEO']; ?></a></li>
					<li><a href="#"><?php echo $lang['MENU_MEDIA']; ?></a></li>

					<li class="dropdown-submenu"><a class="test" href="#">Naše tématické web stránky<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Elektromobilita (http://www.e-mobilita.fei.stuba.sk/)</a></li>
						</ul>
					</li>
				</ul>
			</li>


			<li><a href="#"><?php echo $lang['MENU_CONTACT']; ?></a></li>


		</ul>
	</div>
</nav>
