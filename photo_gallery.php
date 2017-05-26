
<?php
require "config.php";
include "includes/header.php";

$addr = $_GET['id'];
if (!isset($_GET['id'])) $addr = '1';
//echo $addr;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Photos`.`ID`, `Photos`.`Title-SK`, `Photos`.`Title-EN`, `Photos`.`Datum`, `Photos`.`Folder` FROM `Photos` ";

$result = $conn->query($sql);
echo "<table><tr><td id=\"column1_video\"><h3>Fotogalerie:</h3>";

while (list($id, $titlesk, $titleen, $datum, $folder) = mysqli_fetch_row($result)) {
if ($_COOKIE['lang'] == en)
	echo "<br><a href=\"" . $_SERVER['PHP_SELF'] . "?id=" . $id . "\">$titleen</a>";
else echo "<br><a href=\"" . $_SERVER['PHP_SELF'] . "?id=" . $id . "\">$titlesk</a>";
}
echo "</td><td id=\"column2_video\">";

$sql2 = "SELECT `Photos`.`Title-SK`, `Photos`.`Title-EN`, `Photos`.`Datum`, `Photos`.`Folder` FROM `Photos` WHERE `Photos`.`ID` = '$addr'";

$result = $conn->query($sql2);

echo "<table id=\"table_photo_2\"><tr><td colspan=\"3\"  align=\"center\" id=\"nazov_galerie\"><h2>";
while (list($titlesk, $titleen, $datum, $folder) = mysqli_fetch_row($result)) {
	if ($_COOKIE['lang'] == en) echo $titleen . "</h2>" . $datum;
	else echo $titlesk . "</h2>" . $datum;
	$direct = $folder;
}
mysqli_free_result($result);

echo "</td></tr><tr>";

$path_parts = pathinfo(__FILE__);
$priecinok = $path_parts['dirname']."/photos/".$direct;
$files1 = scandir($priecinok);
$cislo = count($files1);


//vytvorit novy priecinok s nasledujucim cislom
//echo $cislo . "tolko suborov tam v subore :" . $priecinok;
//echo "ahoj";

for ($i=2; $i < $cislo ; $i++) { 
	
	echo "<td><div class=\"column\" id=\"img" . ($i - 1) . "\"><img src=\"photos/" . $direct . "/" . $files1[$i] . "\" onclick=\"openModal();currentSlide(" . ($i - 1) . ")\" class=\"hover-shadow\" style=\"width:100%\"></div></td>";
	if ((($i - 1) % 3) == 0)
		echo "</tr><tr>";
}
echo "</tr></table>";
echo "</td></tr></table>";

echo "<div id=\"myModal_photo\" class=\"modal_photo\"><span class=\"close cursor\" onclick=\"closeModal()\">&times;</span><div class=\"modal-content_photo\">";

for ($i=2; $i < $cislo ; $i++) { 
	echo "<div class=\"mySlides\" id=\"bimg" . ($i - 1) . "\"><div class=\"numbertext\">".($i - 1)." / ".($cislo - 2)."</div><img class=\"pokus\"src=\"photos/" . $direct . "/" . $files1[$i] . "\" style=\"width:100%\"></div>";
}

echo   "<a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
<a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
<div class=\"caption-container_photo\">
	<p id=\"caption_photo\"></p>
</div></div></div>";



?>


<style type="text/css">
	table {
		width: 100%;
		height: 100%;
	}
	#nazov_galerie {
		font-weight: bold;
	}

	h2 {
		font-weight: bold;
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
	td {
		padding: 10px;
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
		
		text-decoration: underline;
	}
	h3 {
		color: white;
	}


	.row > .column {
		padding: 0 8px;
	}

	header {
		padding: 10 10px;
		font-family: Impact, Charcoal, sans-serif;
		text-align: center;
		font-size: 43px;
		border-radius: 7px;
		color: white;
	}

	body {
		background-image: url('includes/1.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;

	}

	.background {
		position: fixed;
		width: auto;
		height: auto;

	}

	table {
		width: 100%;
	}


	td {
		align-content: center;
	}

	.row:after {
		content: "";
		display: table;
		clear: both;
	}


	.row {
		background-color: white;
		opacity: 0.5;
		border-radius: 10px;
		width: auto;
		margin: 50px;
		padding: 25px 0px 25px 0px;
		transition: opacity 3s;
	}

	.row:hover {
		opacity: 1.0;

	}



	/* The Modal (background) */
	.modal_photo {
		display: none;
		position: fixed;
		z-index: 1;
		padding-top: 100px;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: hidden;
		background-color: black;
	}

	/* Modal Content */
	.modal-content_photo {
		position: relative;
		background-color: black;
		margin: auto;
		padding: 0;
		width: 65%;
		max-width: 1200px;
		overflow: hidden;
	}

	/* The Close Button */
	.close {
		color: white;
		position: absolute;
		top: 10px;
		right: 25px;
		font-size: 35px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: #999;
		text-decoration: none;
		cursor: pointer;
	}

	.mySlides {
		display: none;
	}

	/* Next & previous buttons */
	.prev,
	.next{
		cursor: pointer;
		position: absolute;
		top: 50%;
		width: auto;
		padding: 16px;
		margin-top: -50px;
		color: white;
		font-weight: bold;
		font-size: 20px;
		transition: 0.6s ease;
		border-radius: 0 3px 3px 0;
		user-select: none;
		-webkit-user-select: none;
	}



	h1 {
		font-size: 20px;
		margin-top: 0;
		margin-bottom: 0;
		margin-left: 0;
		margin-right: 0;
		font-weight: bold;
	}

	/* Position the "next button" to the right */
	.next {
		right: 0;
		border-radius: 3px 0 0 3px;
	}



	/* On hover, add a black background color with a little bit see-through */
	.prev:hover,
	.next:hover{
		background-color: rgba(0, 0, 0, 0.8);
	}

	.info:hover {
		background-color: rgba(0, 0, 0, 0.8);
		left: 0%;
		top: 80%;
		text-align: left;
		width: 100%;
		height: 100px;
		overflow: scroll;
		overflow-x: hidden;
	}

	/* Number text (1/3 etc) */
	.numbertext {
		color: #f2f2f2;
		font-size: 12px;
		padding: 8px 12px;
		position: absolute;
		top: 0;
	}

	.caption-container_photo {
		text-align: center;
		background-color: black;
		padding: 2px 16px;
		color: white;
	}

	img.demo {
		opacity: 0.6;
	}

	.active,
	.demo:hover {
		opacity: 1;
	}

	img.hover-shadow {
		transition: 0.3s
		width: auto;
		max-height: 150px;
	}

	img.hover-shadow:hover {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
	}
	img.pokus{
		width: auto;
		height: auto;
		max-height: 720px;
		max-width: 1280px;
	}
</style>

<script type="text/javascript">



	function openModal() {
		document.getElementById('myModal_photo').style.display = "block";

	}

	function closeModal() {
		document.getElementById('myModal_photo').style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}



	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");

		var captionText = document.getElementById("caption_photo");
		if (n > slides.length) {slideIndex = 1}
			if (n < 1) {slideIndex = slides.length}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				slides[slideIndex-1].style.display = "block";

			}

		</script>


		<?php

		include "includes/footer.php";
		?>

