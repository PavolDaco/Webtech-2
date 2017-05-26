<?php
session_start();
include 'includes/dbh.php';
if (isset($_SESSION['login'])) {
    include 'includes/intro_bocne_menu.php';
    include 'includes/intro_horne_menu.php';
}
mysqli_set_charset($conn, "utf8");
?>
    <title>Užívatelia</title>
    <link rel="stylesheet" href="includes/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="includes/script_roles.js"></script>

    <div class="container">

<?php
//ak HR alebo Admin, tak vidí obrazovku
if (isset($_SESSION['isHr']) OR isset($_SESSION['isAdmin'])) {
    echo "<div style='position: absolute; margin-top:40px; height: 700px;'>";
    echo "<br><br><button style='border-color:black;' class='btn btn-default' type='button' id='add_user_btn'>Pridať užívateľa</button>";
    echo "<button style='border-color:black;' class='btn btn-default' type='button' id='delete_user_btn'>Deaktivovať užívateľa</button>";
    echo "<button style='border-color:black;' class='btn btn-default' type='button' id='change_user_btn'>Upraviť užívateľa</button>";
    echo "</div>";
/// form na vlozenie noveho usera
   
    echo "<div id='okno_add_user' class='okno_users' style='display:none; top:60px;'>
        <span class='closebtn_profil_edit' style='float: right;'>&times;</span>
        <p style='text-align: center;'><strong>Pridanie užívateľa:</strong></p>
        <form id='form_add_user' style='text-align: center;' action='users/add_user.php' method='POST'>   
         <br>Meno: <br><input style='border-color:black;' class='btn btn-default' type='text' name='name' required>
         <br>Priezvisko: <br><input style='border-color:black;' class='btn btn-default' type='text' name='surname' required>
         <br>Titul1: <br><input style='border-color:black;' class='btn btn-default' type='text' name='title1' >
         <br>Titul2: <br><input style='border-color:black;' class='btn btn-default' type='text' name='title2' >   

         <br>LDAP login: <br><input style='border-color:black;' class='btn btn-default' type='text' name='ldapLogin' >
       	 <br>Zaradenie: <br><input style='border-color:black;' class='btn btn-default' type='text' name='staffRole' >
       	 <br>Oddelenie: <br><input style='border-color:black;' class='btn btn-default' type='text' name='department'>
       	 <br>Telefón: <br><input style='border-color:black;' class='btn btn-default' type='text' name='phone' >
       	 <br>Kancelária: <br><input style='border-color:black;' class='btn btn-default' type='text' name='room'>
       	 <br>Funkcia: <br><input style='border-color:black;' class='btn btn-default' type='text' name='function'>
       	 <br><br><button style='border-color:black;' class='btn btn-default' type='submit'>Pridať užívateľa</button>
       	</form>
       </div>";
//////////////////////  DELETE USER ///////////////////////////////////////////
    $sql = "SELECT * FROM zamestnanci";
    $result = $conn->query($sql);

    echo "<div id='table_users_delete' class='table_users' style='display:none; top:60px; height: 500px; overflow: scroll; overflow-x: hidden;'>
      <span class='closebtn_users' style='float: right;'>&times;</span>
      <div><p style='text-align: center;'><strong>Deaktivovať užívateľov</strong></div>
      <table class='table table-hover' style='text-align: center;'>
              <tr><th style='text-align: center;'>Užívateľ</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        $delete_text = "<div id='form_change_user'>
        <div>Ste si istý, že chcete deaktivovať užívateľa <h4>" . $row["name"] . " " . $row["surname"] . " ?" . "</h4><div>
        
        <form id='form_delete_user' style='margin-left: auto; margin-right: auto;' action='users/delete_user.php' method='POST'>
         <input style='border-color:black;' class='btn btn-default' type='hidden' name='name' value=" . $row["name"] . ">
         <input style='border-color:black;' class='btn btn-default' type='hidden' name='surname' value=" . $row["surname"] . ">
         <button  type='submit'>Deaktivovať užívateľa</button>
         </form>
       </div>";

        echo "<tr>
            <td><div class='clickable_users'>" . $row["name"] . " " . $row["surname"] . "</div>
                  <div id='okno_users_delete' class='okno_users' style='display:none;'>
                  <span class='closebtn_users' style='float: right;'>&times;</span>"
            . $delete_text . "</div></td>";
        echo "</tr>";
    }
    echo "</table></div>";

////////////////////////////////////////////////////////////////////////////
    /// vypis vsetkych aktualnych userov, klinutim sa daju upravovať
    $sql = "SELECT * FROM zamestnanci";
    $result = $conn->query($sql);

    echo "<div id='table_users_change' class='table_users' style='display:none; top:60px; height: 500px; overflow: scroll; overflow-x: hidden;'>
      <span class='closebtn_users' style='float: right;'>&times;</span>
		  <div><p style='text-align: center;'><strong>Upraviť užívateľov</strong></div>
			<table  class='table table-hover' style='text-align: center;'>
              <tr><th style='text-align: center;'>Užívateľ</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $change_form = "<div id='form_change_user'>
        <form style='float: left;' action='users/change_user.php' method='POST'>
         <input style='border-color:black;' class='btn btn-default' type='hidden' name='id' value=" . $row["id"] . ">
         <br>Meno: <br><input style='border-color:black;' class='btn btn-default' type='text' name='name' value=" . $row["name"] . ">
         <br>Priezvisko: <br><input style='border-color:black;' class='btn btn-default' type='text' name='surname' value=" . $row["surname"] . ">
         <br>Titul1: <br><input style='border-color:black;' class='btn btn-default' type='text' name='title1' value=" . $row["title1"] . ">
         <br>Titul2: <br><input style='border-color:black;' class='btn btn-default' type='text' name='title2' value=" . $row["title2"] . ">   

         <br>LDAP login: <br><input style='border-color:black;' class='btn btn-default' type='text' name='ldapLogin' value=" . $row["ldapLogin"] . ">
       	 <br>Zaradenie: <br><input style='border-color:black;' class='btn btn-default' type='text' name='staffRole' value=" . $row["staffRole"] . ">
       	 <br>Oddelenie: <br><input style='border-color:black;' class='btn btn-default' type='text' name='department' value=" . $row["department"] . ">
       	 <br>Telefón: <br><input style='border-color:black;' class='btn btn-default' type='text' name='phone' value=" . $row["phone"] . ">
       	 <br>Kancelária: <br><input style='border-color:black;' class='btn btn-default' type='text' name='room' value=" . $row["room"] . ">
       	 <br><br><button class='btn btn-default' type='submit'>Upraviť užívateľa</button>
       	</form>
       </div>";


        echo "<tr>
	          <td><div class='clickable_users'>" . $row["name"] . " " . $row["surname"] . "</div>
	          	  	<div id='okno_users_change' class='okno_users' style='display:none;'>
	          	  	<span class='closebtn_users' style='float: right;'>&times;</span>"
            . $change_form . "</div></td>";
        echo "</tr>";
    }
    echo "</table></div>";
} // ak NIE HR alebo Admin
else {
    echo "<div class='container'>
    <div id='okno_nova_akt' class='okno_profil'>
      Nemáte práva na úpravu uživateľov!
    </div>";
}
