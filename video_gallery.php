
<?php
require "config.php";
include "includes/header.php";

$addr = $_GET['addr'];
$yt = $_GET['yt'];
//if ($yt == "yes")
//echo  "<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/" . $key . "?rel=0\"></iframe>"; 
//}

$conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "SELECT `Videos`.`Title-SK`, `Videos`.`Title-EN`, `Videos`.`Adresa`, `Videos`.`YT` FROM `Videos` ";
  
  $result = $conn->query($sql);
echo "<table><tr><td id=\"column1_video\"><h3>Videa:</h3>";
  while (list($titlesk, $titleen, $adresa, $youtube) = mysqli_fetch_row($result)) {
  	if ($_COOKIE['lang'] == en)
  		echo "<br><a href=\"" . $_SERVER['PHP_SELF'] . "?addr=" . $adresa . "&yt=" . $youtube . "\">$titleen</a>";
  	else echo "<br><a href=\"" . $_SERVER['PHP_SELF'] . "?addr=" . $adresa . "&yt=" . $youtube . "\">$titlesk</a>";
  }
  echo "</td><td id=\"column2_video\">";

  mysqli_free_result($result);















if ($yt == 'yes'){
	echo  "<iframe src=\"https://www.youtube.com/embed/" . $addr . "?rel=0\"></iframe>";
}

if ($yt == 'no'){
	echo  "<video  controls><source src=\"video/" . $addr . "\" type=\"video/mp4\">Your browser does not support HTML5 video.</video>";
}
echo "</td></tr></table>";

//echo  "<iframe width=\"420\" height=\"315\" src=\"https://www.youtube.com/embed/" . $key . "?rel=\">";
?>

<style type="text/css">
	table {
		width: 100%;
		height: 100%;
	}

	#column1_video {
		width: auto;
		height: 100%;
		background-color: black;
		padding: 30px;
		vertical-align: top;	
	}
	#column2_video {
		position: relative;
		width: 80%;
		padding: 30px;
		align-items: right;

	}
	iframe {
		position: absolute;
		width: 60%;
		height: 60%;
		left: 20%;
		top: 20%;
	}
	video {
		position: absolute;
		width: 60%;
		height: 60%;
		left: 20%;
		top: 20%;
	}
	a {
		color: #0066ff;
		font-size: 14px;
	}

	a:hover{
		font-style: italic;
		font-size: 18px;
		text-decoration: underline;
	}
	h3 {
		color: white;
	}
	body {
    background-image: url('includes/1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;

}

</style>



<?php

include "includes/footer.php";
?>





