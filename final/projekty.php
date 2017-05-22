<?php
 session_start();
 include 'includes/header.php';
 include 'projekty/dbh.php';

 mysqli_set_charset($conn, "utf8");

////////////////////////////////////////////////////
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
////////////////////////////////////////////////////
?>
   <title>Projekty</title>
    <link rel="stylesheet" href="projekty/style.css"> 
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script type="text/javascript" src="projekty/script_vyskum.js"></script>
  
  <div class="container">
<?php
   


  $sql = $lang['PROJ_SELECT_VEGA'];
  $result = mysqli_query($conn, $sql);


echo "<div id='tab1'>
      <table>
        <tr><th>".$lang['PROJ_CISLO']."</th>
            <th>".$lang['PROJ_NAZOV']."</th>
            <th>".$lang['PROJ_DOBA']."</th>
            <th>".$lang['PROJ_RIESITEL']."</th>
            <th>".$lang['PROJ_ZAKAZKA']."</th>
        </tr>
        <tr><th colspan=5>".$lang['PROJ_VEGA']."</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
    	$project = $row["nazov"];
    	$sql2 = "SELECT * FROM Projekty WHERE titleSK = '$project' OR titleEN = '$project'";

   		$result2 = mysqli_query($conn, $sql2);
   		$row2 = mysqli_fetch_assoc($result2);


        $okienko = "<b>".$lang['PROJ_CISLO'].": </b>".$row2["number"]."<br>
            <b>".$lang['PROJ_NAZOV'].": </b>".$row2[$lang['PROJ_ROW_TITLE']]."<br>
            <b>".$lang['PROJ_DOBA'].": </b>".$row2["start"]."-".$row2["end"]."<br>
            <b>".$lang['PROJ_RIESITEL'].": </b>".$row2["coordinator"]."<br>";

            if ($row2["partners"] != '') {
              $okienko =  $okienko."<b>".$lang['PROJ_PARTNERS'].": </b>".$row2["partners"]."<br>";
            }
            if ($row2["web"] != '') {
              $okienko =  $okienko."<b>Web: </b>".$row2["web"]."<br>";
            } 

          $okienko =  $okienko."<br><b>".$lang['PROJ_ANNOTATION'].": </b><br>".$row2[$lang['PROJ_ROW_TITLE2']];
      
          echo "<tr>
                  <td>".$row["number"]."</td>
                  <td><div class='clickable'>".$row["nazov"]."</div>
                  <div class='okno' style='display:none;'>
                  <span class='closebtn' style='float: right;'>&times;</span>
                  ".$okienko."</div></td>
                  <td>".$row["zaciatok"]."-".$row["koniec"]."</td>
                  <td>".$row["coordinator"]."</td>
                  <td>".$row["internalCode"]."</td>
              </tr>";
    }

    


/////////////////////////////////////////////////////////

  $sql = $lang['PROJ_SELECT_KEGA'];
  $result = mysqli_query($conn, $sql);
  echo "<tr><th colspan=5>".$lang['PROJ_KEGA']."</th></tr>";
	

    while($row = mysqli_fetch_assoc($result)) {
      $project = $row["nazov"];
      $sql2 = "SELECT * FROM Projekty WHERE titleSK = '$project' OR titleEN = '$project'";

      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2);

		  $okienko = "<b>".$lang['PROJ_CISLO'].": </b>".$row2["number"]."<br>
            <b>".$lang['PROJ_NAZOV'].": </b>".$row2[$lang['PROJ_ROW_TITLE']]."<br>
            <b>".$lang['PROJ_DOBA'].": </b>".$row2["start"]."-".$row2["end"]."<br>
            <b>".$lang['PROJ_RIESITEL'].": </b>".$row2["coordinator"]."<br>";

            if ($row2["partners"] != '') {
              $okienko =  $okienko."<b>".$lang['PROJ_PARTNERS'].": </b>".$row2["partners"]."<br>";
            }
            if ($row2["web"] != '') {
              $okienko =  $okienko."<b>Web: </b>".$row2["web"]."<br>";
            } 

          $okienko =  $okienko."<br><b>".$lang['PROJ_ANNOTATION'].": </b><br>".$row2[$lang['PROJ_ROW_TITLE2']];
      
          echo "<tr>
                  <td>".$row["number"]."</td>
                  <td><div class='clickable'>".$row["nazov"]."</div>
                  <div class='okno' style='display:none;'>
                  <span class='closebtn' style='float: right;'>&times;</span>
                  ".$okienko."</div></td>
                  <td>".$row["zaciatok"]."-".$row["koniec"]."</td>
                  <td>".$row["coordinator"]."</td>
                  <td>".$row["internalCode"]."</td>
              </tr>";
    }





//////////////////////////////////////////////////////////////////////////
 

   $sql = $lang['PROJ_SELECT_APVV'];
   $result = mysqli_query($conn, $sql);
	 echo "<tr><th colspan=5>".$lang['PROJ_APVV']."</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
      $project = $row["nazov"];
      $sql2 = "SELECT * FROM Projekty WHERE titleSK = '$project' OR titleEN = '$project'";

      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2);

      $okienko = "<b>".$lang['PROJ_CISLO'].": </b>".$row2["number"]."<br>
            <b>".$lang['PROJ_NAZOV'].": </b>".$row2[$lang['PROJ_ROW_TITLE']]."<br>
            <b>".$lang['PROJ_DOBA'].": </b>".$row2["start"]."-".$row2["end"]."<br>
            <b>".$lang['PROJ_RIESITEL'].": </b>".$row2["coordinator"]."<br>";

            if ($row2["partners"] != '') {
              $okienko =  $okienko."<b>".$lang['PROJ_PARTNERS'].": </b>".$row2["partners"]."<br>";
            }
            if ($row2["web"] != '') {
              $okienko =  $okienko."<b>Web: </b>".$row2["web"]."<br>";
            } 

          $okienko =  $okienko."<br><b>".$lang['PROJ_ANNOTATION'].": </b><br>".$row2[$lang['PROJ_ROW_TITLE2']];
      
          echo "<tr>
                  <td>".$row["number"]."</td>
                  <td><div class='clickable'>".$row["nazov"]."</div>
                  <div class='okno' style='display:none;'>
                  <span class='closebtn' style='float: right;'>&times;</span>
                  ".$okienko."</div></td>
                  <td>".$row["zaciatok"]."-".$row["koniec"]."</td>
                  <td>".$row["coordinator"]."</td>
                  <td>".$row["internalCode"]."</td>
              </tr>";
    }
////////////////////////////////////////////////////////////////////
 
   $sql = $lang['PROJ_SELECT_INTERNATIONAL'];
   $result = mysqli_query($conn, $sql);
   echo "<tr><th colspan=5>".$lang['PROJ_INTERNATIONAL']."</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
      $project = $row["nazov"];
      $sql2 = "SELECT * FROM Projekty WHERE titleSK = '$project' OR titleEN = '$project'";

      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2);

      $okienko = "<b>".$lang['PROJ_CISLO'].": </b>".$row2["number"]."<br>
            <b>".$lang['PROJ_NAZOV'].": </b>".$row2[$lang['PROJ_ROW_TITLE']]."<br>
            <b>".$lang['PROJ_DOBA'].": </b>".$row2["start"]."-".$row2["end"]."<br>
            <b>".$lang['PROJ_RIESITEL'].": </b>".$row2["coordinator"]."<br>";

            if ($row2["partners"] != '') {
              $okienko =  $okienko."<b>".$lang['PROJ_PARTNERS'].": </b>".$row2["partners"]."<br>";
            }
            if ($row2["web"] != '') {
              $okienko =  $okienko."<b>Web: </b>".$row2["web"]."<br>";
            } 

          $okienko =  $okienko."<br><b>".$lang['PROJ_ANNOTATION'].": </b><br>".$row2[$lang['PROJ_ROW_TITLE2']];
      
          echo "<tr>
                  <td>".$row["number"]."</td>
                  <td><div class='clickable'>".$row["nazov"]."</div>
                  <div class='okno' style='display:none;'>
                  <span class='closebtn' style='float: right;'>&times;</span>
                  ".$okienko."</div></td>
                  <td>".$row["zaciatok"]."-".$row["koniec"]."</td>
                  <td>".$row["coordinator"]."</td>
                  <td>".$row["internalCode"]."</td>
              </tr>";
    }
////////////////////////////////////////////////////////////////////////

   $sql = $lang['PROJ_SELECT_HOME'] ;
   $result = mysqli_query($conn, $sql);
   echo "<tr><th colspan=5>".$lang['PROJ_HOME']."</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
      $project = $row["nazov"];
      $sql2 = "SELECT * FROM Projekty WHERE titleSK = '$project' OR titleEN = '$project'";

      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2);

      $okienko = "<b>".$lang['PROJ_CISLO'].": </b>".$row2["number"]."<br>
            <b>".$lang['PROJ_NAZOV'].": </b>".$row2[$lang['PROJ_ROW_TITLE']]."<br>
            <b>".$lang['PROJ_DOBA'].": </b>".$row2["start"]."-".$row2["end"]."<br>
            <b>".$lang['PROJ_RIESITEL'].": </b>".$row2["coordinator"]."<br>";

            if ($row2["partners"] != '') {
              $okienko =  $okienko."<b>".$lang['PROJ_PARTNERS'].": </b>".$row2["partners"]."<br>";
            }
            if ($row2["web"] != '') {
              $okienko =  $okienko."<b>Web: </b>".$row2["web"]."<br>";
            } 

          $okienko =  $okienko."<br><b>".$lang['PROJ_ANNOTATION'].": </b><br>".$row2[$lang['PROJ_ROW_TITLE2']];
      
          echo "<tr>
                  <td>".$row["number"]."</td>
                  <td><div class='clickable'>".$row["nazov"]."</div>
                  <div class='okno' style='display:none;'>
                  <span class='closebtn' style='float: right;'>&times;</span>
                  ".$okienko."</div></td>
                  <td>".$row["zaciatok"]."-".$row["koniec"]."</td>
                  <td>".$row["coordinator"]."</td>
                  <td>".$row["internalCode"]."</td>
              </tr>";
    }

    echo "</table></div></div>";


 include 'includes/footer.php';    
?>

