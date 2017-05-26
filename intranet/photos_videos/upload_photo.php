<?php
require "config.php";
mysqli_set_charset($conn, "utf8");
?>
    <title>Pridanie fotiek</title>
<?php
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

if (!mkdir($vytvor, 0777, true)) echo "nepodarilo sa vytvorit";

$datum = $_POST["datum"];
$titlesk = $_POST["TitleSK"];
$titleen = $_POST["TitleEN"];


$conn = new mysqli($servername, $username, $password, $dbname);
  mysqli_set_charset($conn, "utf8");
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
            echo "<br>" . $_FILES["fileToUpload"]["name"][$f] . " - Súbor má nesprávny formát";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<br>" . $_FILES["fileToUpload"]["name"][$f] . " - Súbor s týmto názvom už existuje";
            $uploadOk = 0;
        } 

         // Check file size
        if ($_FILES["fileToUpload"]["size"][$f] > 5000000) {
            echo "<br>" . $_FILES["fileToUpload"]["name"][$f] . " - Súbor je príliš veľký";
            $uploadOk = 0;
        } 

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "<br>" . $_FILES["fileToUpload"]["name"][$f] . " - Súbor má nesprávny formát";
            $uploadOk = 0;
        }

          // Check if $uploadOk is set to 0 by an error
        

        if ($uploadOk != 0) {
            $moved = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$f], $target_file);
            if (!$moved) echo "<br>" . $_FILES["fileToUpload"]["name"][$f] . " - Súbor sa nepodarilo nahrať";
        }

    }
    echo "<br>Upload bol ukončený";
    
}
    echo "<br><a href='../photos.php'> Späť";
?>

<style type="text/css">
    a:link, a:visited {
    background-color: #f44336;
    color: white;
    min-width: 130px;
    margin-top: 3px;
    margin-bottom: 3px;
    padding: 5px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
</style>