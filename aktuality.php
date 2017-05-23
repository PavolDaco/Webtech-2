<?php
 session_start();
 include 'includes/header.php';
 include 'aktuality/dbh.php';
 mysqli_set_charset($conn, "utf8");
?>

  <title>Aktuality</title>
 
	<link rel="stylesheet" href="aktuality/style.css">  
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script type="text/javascript" src="aktuality/script_aktuality.js"></script> 

<div class="container">

 <form action="aktuality.php" method="GET" id="formular">
 	<label for="typ_aktuality">Vyberte typ aktualít</label><br />
  <input type="radio" name="aktuality" value="all" <?php if (isset($_GET['aktuality']) && $_GET['aktuality'] == 'all')  echo ' checked="checked"';?> checked/> Všetky
  <input type="radio" name="aktuality" value="propagacia" <?php if (isset($_GET['aktuality']) && $_GET['aktuality'] == 'propagacia')  echo ' checked="checked"';?> /> Propagácia
  <input type="radio" name="aktuality" value="oznamy" <?php if (isset($_GET['aktuality']) && $_GET['aktuality'] == 'oznamy')  echo ' checked="checked"';?> /> Oznamy
  <input type="radio" name="aktuality" value="zivot" <?php if (isset($_GET['aktuality']) && $_GET['aktuality'] == 'zivot')  echo ' checked="checked"';?> /> Zo života školy

	<input type="checkbox" id="old" name="old" value="all" <?php if (isset($_GET['old']) && $_GET['old'] == 'all')  echo ' checked="checked"';?> /> Zobraziť aj neplatné aktuality<br>
  	
  <button type="submit" form="formular" value="Submit">Zobraziť</button>
 </form>
 	
<br>

<?php
$results_per_page = 6;  // pocet aktualit na 1 stranke
/////////////////////////////////////////////////
if (isset($_GET['page'])){
  $page = $_GET['page'];
}
else {
	$page = 1;
}

if (isset($_GET['lang']) ) {
  $lang = $_GET['lang'];
  $_SESSION["lang"] = $lang;
}
else if (isset($_SESSION['lang'])){
  $lang = $_SESSION["lang"]; 
}
else {
   $lang = 'sk';
}
//////////////////////////////////////////////

if(isset($_GET['aktuality'])) {
	$_SESSION["typ"] = $_GET['aktuality'];
}
else {
	$_SESSION["typ"] = 'all';
}

if(isset($_GET['old'])) {
    $_SESSION["platnost"] = $_GET['old'];
}
else {
	$_SESSION["platnost"] = '';
}

echo "aktuálne zobrazenie ";
if ($_SESSION["typ"] == 'all')
	echo "Všetky<br>";
else if ($_SESSION["typ"] == 'propagacia')
	echo "Propagácia<br>";
else if ($_SESSION["typ"] == 'oznamy') 
	echo "Oznamy<br>";
else 
	echo "Zo života školy<br>";

if ($_SESSION["platnost"] == 'all') 
	echo "Zobrazenie starých aktualit: ÁNO<br><br>"; 

$today = date("Y-m-d");  // aktualny datum
// selectuje VSETKY aktulity, ktre vyhovuju danemu vyberu
$sql = "SELECT * FROM Aktuality WHERE jazyk = '".$lang."'".($_SESSION["platnost"] !='all'?" AND platnost > '".$today."'":'').($_SESSION["typ"] !='all'?" AND typ_aktuality='".$_SESSION['typ']."'":'');
$result = mysqli_query($conn, $sql);

// zisti pocet VSETKYCH aktualit a vypocita pocet stranok, ktore budu potrebne
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results/$results_per_page);  // celkovy pocet stranok
$this_page_first_result = ($page-1)*$results_per_page;

// vyberie iba aktuality, ktore su an aktulnej strane Aktualit
$sql = "SELECT * FROM Aktuality WHERE jazyk = '".$lang."'".($_SESSION["platnost"] !='all'?" AND platnost > '".$today."'":'').($_SESSION["typ"] !='all'?" AND typ_aktuality='".$_SESSION['typ']."'":'')." LIMIT ". $this_page_first_result . "," .  $results_per_page;
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_array($result)) {
  echo "<hr><table class='table_aktuality'>
          <tr><th>".$row['titulok']."</th></tr>";
    echo "<tr><td></td></tr>
          <tr><td>".$row['text']."</td></tr>
       </table>";   
}

echo "<div id='zoznam_stran'>";
// odkazy an dalsie strany aktualit
for ($page=1;$page<=$number_of_pages;$page++) {
	echo '<a href="aktuality.php?page=' . $page . '&aktuality='.$_SESSION['typ']. ($_SESSION["platnost"] =='all'? "&old=all":'') . '">' . $page . '</a> ';
}
echo "</div><br><br>";  // koniec zoznam_stran

include 'includes/footer.php';
?>