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
 	<label for="typ_aktuality"><?php echo $lang['AKT_VYBERTE']; ?></label><br />
  <input type="radio" name="aktuality" value="all" <?php if (isset($_GET['aktuality']) && $_GET['aktuality'] == 'all')  echo ' checked="checked"';?> checked/><?php echo $lang['AKT_VSETKY']; ?>
  <input type="radio" name="aktuality" value="propagacia" <?php if (isset($_GET['aktuality']) && $_GET['aktuality'] == 'propagacia')  echo ' checked="checked"';?> /><?php echo $lang['AKT_PROP']; ?>
  <input type="radio" name="aktuality" value="oznamy" <?php if (isset($_GET['aktuality']) && $_GET['aktuality'] == 'oznamy')  echo ' checked="checked"';?> /><?php echo $lang['AKT_OZNAMY']; ?>
  <input type="radio" name="aktuality" value="zivot" <?php if (isset($_GET['aktuality']) && $_GET['aktuality'] == 'zivot')  echo ' checked="checked"';?> /><?php echo $lang['AKT_ZOZIVOTA']; ?>

	<input type="checkbox" id="old" name="old" value="all" <?php if (isset($_GET['old']) && $_GET['old'] == 'all')  echo ' checked="checked"';?> /><?php echo $lang['AKT_NEPLATNE']; ?><br>
  	
  <button type="submit" form="formular" value="Submit"><?php echo $lang['AKT_SHOW']; ?></button>
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
  $language = $_GET['lang'];
  $_SESSION["lang"] = $language;
}
else if (isset($_SESSION['lang'])){
  $language = $_SESSION["lang"]; 
}
else {
   $language = 'sk';
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

echo "<div style='color: #008000;'>";
echo $lang['AKT_AKT'].": ";
if ($_SESSION["typ"] == 'all')
	echo $lang['AKT_VSETKY']."<br>";
else if ($_SESSION["typ"] == 'propagacia')
	echo $lang['AKT_PROP']."<br>";
else if ($_SESSION["typ"] == 'oznamy') 
	echo $lang['AKT_OZNAMY']."<br>";
else 
	echo $lang['AKT_ZOZIVOTA']."<br>";

echo "</div>";

if ($_SESSION["platnost"] == 'all') {
	echo "<div style='color: #008000;'>";
	echo $lang['AKT_OLD'].": ".$lang['AKT_YES']."</div><br><br>"; 
}

$today = date("Y-m-d");  // aktualny datum
// selectuje VSETKY aktulity, ktre vyhovuju danemu vyberu
$sql = "SELECT * FROM Aktuality WHERE jazyk = '".$language."'".($_SESSION["platnost"] !='all'?" AND platnost > '".$today."'":'').($_SESSION["typ"] !='all'?" AND typ_aktuality='".$_SESSION['typ']."'":'');
$result = mysqli_query($conn, $sql);

// zisti pocet VSETKYCH aktualit a vypocita pocet stranok, ktore budu potrebne
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results/$results_per_page);  // celkovy pocet stranok
$this_page_first_result = ($page-1)*$results_per_page;

// vyberie iba aktuality, ktore su an aktulnej strane Aktualit
$sql = "SELECT * FROM Aktuality WHERE jazyk = '".$language."'".($_SESSION["platnost"] !='all'?" AND platnost > '".$today."'":'').($_SESSION["typ"] !='all'?" AND typ_aktuality='".$_SESSION['typ']."'":'')." LIMIT ". $this_page_first_result . "," .  $results_per_page;
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
echo "</div></div><br><br>";  // koniec zoznam_stran

include 'includes/footer.php';
?>