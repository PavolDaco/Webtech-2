<?php
 session_start();
 include 'includes/dbh.php';
if (isset($_SESSION['login'])){
     include 'includes/intro_bocne_menu.php';
     include 'includes/intro_horne_menu.php';
}
 include "photos_videos/config.php";
 mysqli_set_charset($conn, "utf8");
?>
	<title>Pridanie fotiek</title>

  	<link rel="stylesheet" href="includes/style.css"> 
<div class="container">

<?php
 //Ak Reporter alebo Admin, tak ukay obrazovku
if (isset($_SESSION['isReporter']) OR isset($_SESSION['isAdmin'])) { 
	//<!--   vyrvorenie novej galerie/udalosti a pridanie fotiek     -->
	echo "<div id='okno_fotky' class='okno_profil'>
		<p><strong>Vytvorenie novej galérie a pridanie fotiek do tejto galérie</strong></p>
		<form action='photos_videos/upload_photo.php' method='post' enctype='multipart/form-data'>
			<label for='datum'>Dátum:</label><br>
			<input type='date' name='datum' placeholder='YYYY-MM-DD'><br>
			<label for='TitleSK'>Názov (SK):</label><br>	
			<input type='text' name='TitleSK' placeholder='Názov (SK)'><br>
			<label for='TitleEN'>Názov (EN):</label><br>
			<input type='text' name='TitleEN' placeholder='Názov (EN)'><br><br>
			
			<label for='fileToUpload[]'>Vyber obrázky: (max 50, max 2MB):</label><br>
		    <input type='file' name='fileToUpload[]' id='fileToUpload' multiple='multiple'><br>
		    <input type='submit' value='Nahraj obrázky' name='submit'>
		</form>
		<hr>";

		//<!--   pridanie fotiek k uz existujucej galerii/udalosti     -->
	echo "<p><strong>Pridanie fotiek do existujúcej galérie</strong></p>
		<form action='photos_videos/upload_photo.php' method='post' enctype='multipart/form-data'>
			<input type='checkbox' checked='true' name='add' style='display:none;' />
			<label for='destination'>Názov galérie:</label><br>
			<select name='destination'>";

				$conn = new mysqli($servername, $username, $password, $dbname);
		  		mysqli_set_charset($conn, "utf8");

				  if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				  }
				  
				  $sql = "SELECT `Title-SK`, `Title-EN`, `Folder` FROM `Photos`";
				  $result = $conn->query($sql);

				
		 			while(list($titlesk, $titleen, $folder) = mysqli_fetch_row($result)){
		 			 	echo "<option value=\"$folder\">$titlesk</option>";
		 			}
	 echo "</select><br><br>

			<label for='fileToUpload[]'>Vyber obrázky: (max 50, max 2MB):</label><br>
			<input type='file' name='fileToUpload[]' id='fileToUpload' multiple='multiple'><br>
			<input type='submit' value='Nahraj obrázky' name='submit'>
		</form>
	</div>";
}

else {
    echo"<div class='okno_profil'>
      Nemáte práva na pridávanie nových fotiek!
    </div>";
}

