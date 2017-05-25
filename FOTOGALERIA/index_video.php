

<?php
include "includes/header.php";
?>
<!--   pridanie videa z youtube     -->
<form action="upload_video.php" method="post" enctype="multipart/form-data">
	<input type="text" name="TitleSK" placeholder="<?php echo $lang['PHOTO_TITLESK'];  ?>"><br>
	<input type="text" name="TitleEN" placeholder="<?php echo $lang['PHOTO_TITLEEN'];  ?>"><br>
	<input type="text" name="Adresa" placeholder="<?php echo $lang['VIDEO_ADDR'];  ?>"><br>
    <input type="text" name="YT" value="yes" style="display:none;">
    <input type="submit" value="<?php echo $lang['VIDEO_ADD'];  ?>" name="submit">
</form>





<!--   pridanie videa na server     -->
<form action="upload_video.php" method="post" enctype="multipart/form-data">
	<input type="text" name="TitleSK" placeholder="<?php echo $lang['PHOTO_TITLESK'];  ?>"><br>
	<input type="text" name="TitleEN" placeholder="<?php echo $lang['PHOTO_TITLEEN'];  ?>"><br>
	<input type="text" name="YT" value="no" style="display:none;">
    <input type="file" name="file" id="fileToUpload" accept="mp4">
    <input type="submit" value="<?php echo $lang['VIDEO_UPLOAD'];  ?>" name="submit">
</form>



<?php
include "includes/footer.php"
?>

