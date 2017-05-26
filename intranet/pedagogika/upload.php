<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
$target_dir = "uploads/";
$attr2 = basename($_FILES["fileToUpload"]["name"]);
$attr3 = "pedagogika/uploads/".$attr2;
$target_file = $target_dir . $attr2;
$attr = "";
if (isset($_POST['dokumentID'])){
    $attr = $_POST['dokumentID'];
}
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    echo "<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    echo "<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx"
    && $imageFileType != "xls" && $imageFileType != "xlsx" && $imageFileType != "txt"
    && $imageFileType != "ppt" && $imageFileType != "pptx" && $imageFileType != "zip") {
    echo "Sorry, only PDF, DOC, DOCX, XLS, XLSX, TXT, PPT, PPTX & ZIP files are allowed.";
    echo "<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    echo "<br>";
    echo "<a href='../pedagogika.php'> spať";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo "<br>";
        echo "<a href='../pedagogika.php'> spať";
        $sql = "INSERT INTO pedagogika (meno, priloha, href) VALUES ('".$attr."', '".$attr2."', '".$attr3."')";
        $dbh->exec($sql);
    } else {
        echo "Sorry, there was an error uploading your file.";
        echo "<br>";
        echo "<a href='../pedagogika.php'> spať";
    }
}
?>
