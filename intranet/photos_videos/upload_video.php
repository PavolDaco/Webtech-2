<?php
require "config.php";
mysqli_set_charset($conn, "utf8");
?>
    <title>Pridanie videa</title>
<?php
//urcenie adresy podla toho ci ide o YT video alebo o video kt. bude nahrate na server
if (isset($_POST['Adresa']))
    $adresa = $_POST['Adresa'];
else {
    $adresa = $_FILES["file"]["name"];

}

$titlesk = $_POST["TitleSK"];
$titleen = $_POST["TitleEN"];
$youtube = $_POST["YT"];

//nahratie udajov do DB
$conn = new mysqli($servername, $username, $password, $dbname);
 mysqli_set_charset($conn, "utf8"); 
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO `Videos`(`ID`, `Title-SK`, `Title-EN`, `Adresa`, `YT`) VALUES (NULL,'$titlesk','$titleen','$adresa','$youtube')";
  
  $result = $conn->query($sql);
  
  
$target_dir = "video/";




// ak neide o YT video tak ho nahraj na server
if ($youtube == 'no'){     
$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);



if (($_FILES["file"]["type"] == "video/mp4") && in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Chyba číslo " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    if ($_FILES["file"]["size"] > 50000000)
        echo "Súbor je príliš veľký";
    else 
        if (file_exists("video/" . $_FILES["file"]["name"]))
          {
          echo $_FILES["file"]["name"] . " - Súbor s týmto názvom už existuje";
          }
        else
          {
          move_uploaded_file($_FILES["file"]["tmp_name"],
          "video/" . $_FILES["file"]["name"]);
          
          }
    }
  }
  else
  {
    echo "Súbor má nesprávny formát<br>";
  }
    echo "<br>Upload bol ukončený";
}

    echo "<br><a href='../videos.php'> Späť";
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