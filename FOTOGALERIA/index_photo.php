

<?php
include "includes/header.php";
?>
<!--   vyrvorenie novej galerie/udalosti a pridanie fotiek     -->
<form action="upload_photo.php" method="post" enctype="multipart/form-data">
	<?php echo $lang['PHOTO_DATE'];  ?>
	<input type="date" name="datum" placeholder="YYYY-MM-DD"><br>	
	<input type="text" name="TitleSK" placeholder="<?php echo $lang['PHOTO_TITLESK'];  ?>"><br>
	<input type="text" name="TitleEN" placeholder="<?php echo $lang['PHOTO_TITLEEN'];  ?>"><br>

    <?php echo $lang['PHOTO_CHOOSE'];  ?>
    <input type="file" name="fileToUpload[]" id="fileToUpload" multiple="multiple">
    <input type="submit" value="<?php echo $lang['PHOTO_UPLOAD'];  ?>" name="submit">
</form>





<!--   pridanie fotiek k uz existujucej galerii/udalosti     -->
<form action="upload_photo.php" method="post" enctype="multipart/form-data">
	<input type="checkbox" checked="true" name="add" style="display:none;" />
	<select name="destination">

		<?php
		require "config.php";

		$conn = new mysqli($servername, $username, $password, $dbname);
  
		  if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		  }
		  
		  $sql = "SELECT `Title-SK`, `Title-EN`, `Folder` FROM `Photos`";
		  $result = $conn->query($sql);

		if ($_COOKIE['lang'] == en){
		    while(list($titlesk, $titleen, $folder) = mysqli_fetch_row($result)){
 			 	echo "<option value=\"$folder\">$titleen</option>";
 			}
 		} else {
 			while(list($titlesk, $titleen, $folder) = mysqli_fetch_row($result)){
 			 	echo "<option value=\"$folder\">$titlesk</option>";
 			}
 		}




		?>

	</select><br>
	<?php echo $lang['PHOTO_CHOOSE'];  ?><br>
	<input type="file" name="fileToUpload[]" id="fileToUpload" multiple="multiple">
	<input type="submit" value="<?php echo $lang['PHOTO_UPLOAD'];  ?>" name="submit">
</form>





<?php
include "includes/footer.php"
?>

