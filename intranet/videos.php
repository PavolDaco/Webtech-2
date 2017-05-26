<?php
 session_start();
 include 'includes/dbh.php';
if (isset($_SESSION['login'])){
     include 'includes/intro_bocne_menu.php';
     include 'includes/intro_horne_menu.php';
}
 mysqli_set_charset($conn, "utf8");
?>
	<title>Pridanie videí</title>

  	<link rel="stylesheet" href="includes/style.css"> 
<div class="container">

<?php
 //Ak Reporter alebo Admin, tak ukay obrazovku
if (isset($_SESSION['isReporter']) OR isset($_SESSION['isAdmin'])) { 
  //<!--   pridanie videa z youtube     -->
 echo"<div id='okno_videa' class='okno_profil'>
 	<p><strong>Pridanie Youtube videa</strong></p>
	<form action='photos_videos/upload_video.php' method='post' enctype='multipart/form-data'>
		<label for='TitleSK'>Názov (SK):</label><br>
		<input type='text' name='TitleSK' placeholder='Názov (SK)'><br>
		<label for='TitleEN'>Názov (EN):</label><br>
		<input type='text' name='TitleEN' placeholder='Názov (EN)'><br>
		<label for='Adresa'>Link na YouTube:</label><br>
		<input type='text' name='Adresa' placeholder='Link na video'><br>
	    <input type='text' name='YT' value='yes' style='display:none;'><br>
	    <input type='submit' value='Pridaj video' name='submit'>
	</form>
	<hr>";


	//<!--   pridanie videa na server     -->
 echo"<form action='photos_videos/upload_video.php' method='post' enctype='multipart/form-data'>
 		<p><strong>Pridanie nového videa na server</strong></p>
		<label for='TitleSK'>Názov (SK):</label><br>
		<input type='text' name='TitleSK' placeholder='Názov (SK)'><br>
		<label for='TitleEN'>Názov (EN):</label><br>
		<input type='text' name='TitleEN' placeholder='Názov (EN)'><br>

		<input type='text' name='YT' value='no' style='display:none;'>
		<label for='fileToUpload'>Vyber video:</label><br>
	    <input type='file' name='file' id='fileToUpload' accept='mp4'><br>
	    <input type='submit' value='Nahraj video' name='submit'>
	</form>
  </div>";

}

// ak NIE Reporter alebo Admin
else {
    echo"<div class='okno_profil'>
      Nemáte práva na pridávanie nových videí!
    </div>";
}
?>

