
<?php
require "config.php";

if(!isSet($_POST['add'])){
$path_parts = pathinfo(__FILE__);
$priecinok = $path_parts['dirname']."/photos";

//zistit podpriecinky
$files1 = scandir($priecinok);
//spocitat podpriecinky
$cislo = count($files1) - 1;
//vytvorit novy priecinok s nasledujucim cislom
$podpriecinok = "event" . $cislo;
$vytvor = $priecinok . "/" . $podpriecinok;
echo $vytvor;
if (!mkdir($vytvor, 0777, true)) echo "nepodarilo sa vytvorit";

$datum = $_POST["datum"];
$titlesk = $_POST["TitleSK"];
$titleen = $_POST["TitleEN"];


$conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO `Photos` (`ID`, `Datum`, `Title-SK`, `Title-EN`, `Folder`) VALUES (NULL, '$datum', '$titlesk', '$titleen', '$podpriecinok')";
  //$sql = "SELECT Meno FROM Zamestnanec";
  $result = $conn->query($sql);
  
  $target_dir = "photos/" . $podpriecinok ."/";
} else $target_dir = "photos/" . $_POST['destination'] ."/";





// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {

    foreach ($_FILES['fileToUpload']['name'] as $f => $name) {   
        //echo "ahoj";  
        
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$f]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$f]);
        if($check !== false) {
            
            $uploadOk = 1;
        } else {
            echo "<br>" . $_FILES["fileToUpload"]["name"][$f] . " - " . $lang['VIDEO_ERR_BAD'];
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<br>" . $_FILES["fileToUpload"]["name"][$f] . " - " . $lang['VIDEO_ERR_EXST'];
            $uploadOk = 0;
        } 

         // Check file size
        if ($_FILES["fileToUpload"]["size"][$f] > 2000000) {
            echo "<br>" . $_FILES["fileToUpload"]["name"][$f] . " - " . $lang['VIDEO_ERR_BIG'];
            $uploadOk = 0;
        } 

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "<br>" . $_FILES["fileToUpload"]["name"][$f] . " - " . $lang['VIDEO_ERR_BAD'];
            $uploadOk = 0;
        }

          // Check if $uploadOk is set to 0 by an error
        

        if ($uploadOk != 0) {
            $moved = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$f], $target_file);
            if (!$moved) echo "<br>" . $_FILES["fileToUpload"]["name"][$f] . " - " . $lang['PHOTO_ERROR'];
        }

    }

    echo "<br>" . $lang['VIDEO_UP_OK'];


}







?>
