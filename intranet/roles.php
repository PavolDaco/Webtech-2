<?php
 session_start();
 include 'includes/dbh.php';
if (isset($_SESSION['login'])){
     include 'includes/intro_bocne_menu.php';
     include 'includes/intro_horne_menu.php';
}
 mysqli_set_charset($conn, "utf8");
?>
  <title>Role</title>
  <link rel="stylesheet" href="includes/style.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="includes/script_roles.js"></script>

<div class="container">

<?php 
//ak Admin, tak vidí obrazovku
if (isset($_SESSION['isAdmin'])) {

 $sql = "SELECT id, name, surname FROM zamestnanci WHERE ldapLogin != ''";
 $result = $conn->query($sql);
 echo "<div id='okno_profil' class='okno_profil'>
        <p><strong>Pre zmenu role pre daného užívateľa kliknite na meno</strong></p>";
    echo "<table id='table_roleStaff'>
            <tr><th>Meno a priezvisko</th></tr>"; 
    while($row = mysqli_fetch_assoc($result)) {  
      $akt_id = $row["id"];
      $checkboxy = "<form id='formRole' action='roles/update_roles.php' method='POST'><input type='hidden' name='id' value=".$row["id"].">";

      $sql2 = "SELECT * FROM RoleZamestnanci WHERE id_staff = $akt_id and id_role = 1";		
 		  $result2 = $conn->query($sql2);
 		  if (mysqli_num_rows($result2) > 0) $checkboxy = $checkboxy."<input type='checkbox' name='user' value='user_yes' checked> User<br>";
 		  else  $checkboxy = $checkboxy."<input type='checkbox' name='user' value='user_no'> User<br>"; 

 		  $sql2 = "SELECT * FROM RoleZamestnanci WHERE id_staff = $akt_id and id_role = 2";		
 		  $result2 = $conn->query($sql2);
 		  if (mysqli_num_rows($result2) > 0) $checkboxy = $checkboxy."<input type='checkbox' name='hr' value='hr_yes' checked> HR<br>";
 		  else  $checkboxy = $checkboxy."<input type='checkbox' name='hr' value='hr_no'> HR<br>"; 

 		  $sql2 = "SELECT * FROM RoleZamestnanci WHERE id_staff = $akt_id and id_role = 3";		
 		  $result2 = $conn->query($sql2);
 		  if (mysqli_num_rows($result2) > 0) $checkboxy = $checkboxy."<input type='checkbox' name='reporter' value='reporter_yes' checked> Reporter<br>";
 		  else  $checkboxy = $checkboxy."<input type='checkbox' name='reporter' value='reporter_no'> Reporter<br>"; 

 		  $sql2 = "SELECT * FROM RoleZamestnanci WHERE id_staff = $akt_id and id_role = 4";		
 		  $result2 = $conn->query($sql2);
 		  if (mysqli_num_rows($result2) > 0) $checkboxy = $checkboxy."<input type='checkbox' name='editor' value='editor_yes' checked> Editor<br>";
 		  else  $checkboxy = $checkboxy."<input type='checkbox' name='editor' value='editor_no'> Editor<br>"; 

 		  $sql2 = "SELECT * FROM RoleZamestnanci WHERE id_staff = $akt_id and id_role = 5";		
 		  $result2 = $conn->query($sql2);
 		  if (mysqli_num_rows($result2) > 0) $checkboxy = $checkboxy."<input type='checkbox' name='admin' value='admin_yes' checked> Admin<br>";
 		  else  $checkboxy = $checkboxy."<input type='checkbox' name='admin' value='admin_no'> Admin<br>"; 

 		  $checkboxy = $checkboxy."<button type='submit'>Odoslať</button></form>";

 		  echo "<tr>
	          	  <td><div class='clickable_roles'>".$row["name"]." ".$row["surname"]."</div>
	          	  	<div class='okno_roles' style='display:none;'>
	          	  	<span class='closebtn_roles' style='float: right;'>&times;</span>
	          	  <br><h4>".$row["name"]." ".$row["surname"]."</h4>".$checkboxy."</div></td>";
	      echo "</tr>";     
    }
    echo "</table>";
  echo "</div>";  
}

// ak NIE Admin
else {
    echo"<div class='container'>
    <div id='okno_nova_akt' class='okno_profil'>
      Nemáte práva na menenie rolí!
    </div>";
}

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,'upd_good') !== false) {
      echo "<div class='alert success'>
                <span class='closebtn'>&times;</span>  
                <strong>Super!</strong> Role zmenené, zmenu uvidíte až po opätovnom prihlásení.
            </div>";
    }