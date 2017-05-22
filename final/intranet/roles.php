<?php
 session_start();
 include 'includes/dbh.php';
 include 'includes/intro_bocne_menu.php';
 include '../includes/header.php';
 include '../includes/footer.php'; 
 mysqli_set_charset($conn, "utf8");
?>
  <title>Role</title>

<div class="container">

<?php
 $sql = "SELECT id, name, surname FROM zamestnanci WHERE ldapLogin != ''";
 $result = $conn->query($sql);

    echo "<table id='table_roleStaff'>
            <tr><th>login</th></tr>"; 
    while($row = mysqli_fetch_assoc($result)) {  
      $akt_id = $row["id"];
      $checkboxy = "<form id='formRole' action='roles/update_roles.php' method='POST'><input type='hidden' name='id' value=".$row["id"].">";

      $sql2 = "SELECT * FROM RoleZamestnanci WHERE id_staff = $akt_id and id_role = 1";		
 		  $result2 = $conn->query($sql2);
 		  if (mysqli_num_rows($result2) > 0) $checkboxy = $checkboxy."<input type='checkbox' name='user' value='user_yes' checked>User<br>";
 		  else  $checkboxy = $checkboxy."<input type='checkbox' name='user' value='user_no'>User<br>"; 

 		  $sql2 = "SELECT * FROM RoleZamestnanci WHERE id_staff = $akt_id and id_role = 2";		
 		  $result2 = $conn->query($sql2);
 		  if (mysqli_num_rows($result2) > 0) $checkboxy = $checkboxy."<input type='checkbox' name='hr' value='hr_yes' checked>HR<br>";
 		  else  $checkboxy = $checkboxy."<input type='checkbox' name='hr' value='hr_no'>HR<br>"; 

 		  $sql2 = "SELECT * FROM RoleZamestnanci WHERE id_staff = $akt_id and id_role = 3";		
 		  $result2 = $conn->query($sql2);
 		  if (mysqli_num_rows($result2) > 0) $checkboxy = $checkboxy."<input type='checkbox' name='reporter' value='reporter_yes' checked>Reporter<br>";
 		  else  $checkboxy = $checkboxy."<input type='checkbox' name='reporter' value='reporter_no'>Reporter<br>"; 

 		  $sql2 = "SELECT * FROM RoleZamestnanci WHERE id_staff = $akt_id and id_role = 4";		
 		  $result2 = $conn->query($sql2);
 		  if (mysqli_num_rows($result2) > 0) $checkboxy = $checkboxy."<input type='checkbox' name='editor' value='editor_yes' checked>Editor<br>";
 		  else  $checkboxy = $checkboxy."<input type='checkbox' name='editor' value='editor_no'>Editor<br>"; 

 		  $sql2 = "SELECT * FROM RoleZamestnanci WHERE id_staff = $akt_id and id_role = 5";		
 		  $result2 = $conn->query($sql2);
 		  if (mysqli_num_rows($result2) > 0) $checkboxy = $checkboxy."<input type='checkbox' name='admin' value='admin_yes' checked>Admin<br>";
 		  else  $checkboxy = $checkboxy."<input type='checkbox' name='admin' value='admin_no'>Admin<br>"; 

 		  $checkboxy = $checkboxy."<button type='submit'>Odoslať</button></form>";

 		  echo "<tr>
	          	  <td><div class='clickable_roles'>".$row["name"]." ".$row["surname"]."</div>
	          	  	<div class='okno_roles' style='display:none;'>
	          	  	<span class='closebtn_roles' style='float: right;'>&times;</span>
	          	  <br><h4>".$row["name"]." ".$row["surname"]."</h4>".$checkboxy."</div></td>";
	      echo "</tr>";  

	      
    }
    echo "</table>";
