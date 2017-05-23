<?php
 session_start();
 include 'includes/dbh.php';
 include 'includes/intro_bocne_menu.php';
 include '../includes/header.php';
 include '../includes/footer.php';
 mysqli_set_charset($conn, "utf8");
?>
  <title>Užívatelia</title>

<div class="container">

<?php
 echo "<br><br><button type='button' id='add_user_btn'>Pridať užívateľa</button>";
 echo "<button type='button' id='delete_user_btn'>Deaktivovať užívateľa</button>";
 echo "<button type='button' id='change_user_btn'>Upraviť užívateľa</button>";

/// form na vlozenie noveho usera
 echo "<div id='okno_add_user' class='okno_users' style='display:none;'>
        <span class='closebtn_profil_edit' style='float: right;'>&times;</span>
        <p>Pridanie užívateľa:</p>
        <form id='form_add_user' style='float: left;' action='users/add_user.php' method='POST'>   
         <br>Meno: <br><input type='text' name='name' required>
         <br>Priezvisko: <br><input type='text' name='surname' required>
         <br>Titul1: <br><input type='text' name='title1' >
         <br>Titul2: <br><input type='text' name='title2' >   

         <br>LDAP login: <br><input type='text' name='ldapLogin' >
       	 <br>Zaradenie: <br><input type='text' name='staffRole' >
       	 <br>Oddelenie: <br><input type='text' name='department'>
       	 <br>Telefón: <br><input type='text' name='phone' >
       	 <br>Kancelária: <br><input type='text' name='room'>
       	 <br>Funkcia: <br><input type='text' name='function'>
       	 <br><button type='submit'>Pridať užívateľa</button>
       	</form>
       </div>";
//////////////////////  DELETE USER ///////////////////////////////////////////
  $sql = "SELECT * FROM zamestnanci";
  $result = $conn->query($sql);

  echo "<div id='table_users_delete' class='table_users' style='display:none;'>
      <div>Deaktivovať užívateľov</div>
      <span class='closebtn_users' style='float: right;'>&times;</span>
      <table>
              <tr><th>Užívateľ</th></tr>"; 
    while($row = mysqli_fetch_assoc($result)) { 
    $delete_text = "<div id='form_change_user'>
        <div>Ste si istý, že chcete deaktivovať užívateľa <h4>".$row["name"]." ".$row["surname"]." ?"."</h4><div>
        
        <form id='form_delete_user' style='float: left;' action='users/delete_user.php' method='POST'>
         <input type='hidden' name='name' value=".$row["name"].">
         <input type='hidden' name='surname' value=".$row["surname"].">
         <button type='submit'>Deaktivovať užívateľa</button>
         </form>
       </div>"; 


    echo "<tr>
            <td><div class='clickable_users'>".$row["name"]." ".$row["surname"]."</div>
                  <div class='okno_users' style='display:none;'>
                  <span class='closebtn_users' style='float: right;'>&times;</span>"
                .$delete_text."</div></td>";
        echo "</tr>";  
    }
    echo "</table></div>";

////////////////////////////////////////////////////////////////////////////
       /// vypis vsetkych aktualnych userov, klinutim sa daju upravovať
	$sql = "SELECT * FROM zamestnanci";
	$result = $conn->query($sql);

	echo "<div id='table_users_change' class='table_users' style='display:none;'>
		  <div>Upraviť užívateľov</div>
      <span class='closebtn_users' style='float: right;'>&times;</span>
			<table>
              <tr><th>Užívateľ</th></tr>"; 

    while($row = mysqli_fetch_assoc($result)) { 
    $change_form = "<div id='form_change_user'>
        <form style='float: left;' action='users/change_user.php' method='POST'>
         <input type='hidden' name='id' value=".$row["id"].">
         <br>Meno: <br><input type='text' name='name' value=".$row["name"].">
         <br>Priezvisko: <br><input type='text' name='surname' value=".$row["surname"].">
         <br>Titul1: <br><input type='text' name='title1' value=".$row["title1"].">
         <br>Titul2: <br><input type='text' name='title2' value=".$row["title2"].">   

         <br>LDAP login: <br><input type='text' name='ldapLogin' value=".$row["ldapLogin"].">
       	 <br>Zaradenie: <br><input type='text' name='staffRole' value=".$row["staffRole"].">
       	 <br>Oddelenie: <br><input type='text' name='department' value=".$row["department"].">
       	 <br>Telefón: <br><input type='text' name='phone' value=".$row["phone"].">
       	 <br>Kancelária: <br><input type='text' name='room' value=".$row["room"].">
       	 <br><button type='submit'>Upraviť užívateľa</button>
       	</form>
       </div>";	


    echo "<tr>
	          <td><div class='clickable_users'>".$row["name"]." ".$row["surname"]."</div>
	          	  	<div class='okno_users' style='display:none;'>
	          	  	<span class='closebtn_users' style='float: right;'>&times;</span>"
	          	  .$change_form."</div></td>";
	      echo "</tr>";  
    }
    echo "</table></div>";
