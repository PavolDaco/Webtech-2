<?php
 session_start();
 include 'dbh.php';
 mysqli_set_charset($conn, "utf8");
?>

 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
  $login = $_SESSION['login'];
   
  if (isset($_SESSION['login'])) {
       echo '<a class="logout bocne_menu" style="margin-left: 5px;" href="includes/logout.php">Odhlásiť</a><br>';
  }
    
   $sql = "SELECT id_role FROM RoleZamestnanci WHERE id_staff = (SELECT id FROM zamestnanci WHERE ldapLogin = '$login')";
   $result = $conn->query($sql);

    while($row = mysqli_fetch_assoc($result)) {
      if ($row["id_role"] == 1)  $_SESSION['isUser'] = 'yes';
      if ($row["id_role"] == 2)  $_SESSION['isHr'] = 'yes';
      if ($row["id_role"] == 3)  $_SESSION['isReporter'] = 'yes';
      if ($row["id_role"] == 4)  $_SESSION['isEditor'] = 'yes';
      if ($row["id_role"] == 5)  $_SESSION['isAdmin'] = 'yes';
    }

    $sql = "SELECT * FROM zamestnanci WHERE ldapLogin = '$login'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

///////////////////////// BOCNE MENU /////////////////////////////////////////////////
    echo "<div id=bocne_menu>";
    echo "<strong>Prihlásený: ".$row["name"]." ".$row["surname"]."</strong><br>";
    echo "<strong>Vaše role: </strong><br>";
    if (isset($_SESSION['isUser'])) echo "User<br>";
    if (isset($_SESSION['isHr'])) echo "Hr<br>";
    if (isset($_SESSION['isReporter'])) echo "Reporter<br>";
    if (isset($_SESSION['isEditor'])) echo "Editor<br>";
    if (isset($_SESSION['isAdmin'])) echo "Admin<br>";

    /// vsetci Useri vidia kartu Moj profil
    if (isset($_SESSION['isUser']) OR isset($_SESSION['isAdmin'])) {
      echo '<br>
           <a class="bocne_menu" href="profil.php">Moj profil</a><br>';
    } 
      
    if (isset($_SESSION['isUser']) OR isset($_SESSION['isAdmin']) OR isset($_SESSION['isHr'])) {
      echo '<a class="bocne_menu" href="dochadzka.php">Úprava dochádzky</a><br>'; 
    }
    if (isset($_SESSION['isHr']) OR isset($_SESSION['isAdmin'])) {
    echo '<br><br>
         <a class="bocne_menu" href="users.php">Editovať užívateľov</a><br>';
    }

   if (isset($_SESSION['isReporter']) OR isset($_SESSION['isAdmin'])) {
    echo '<br><br>
         <a class="bocne_menu" href="new_aktualita.php">Pridať aktualitu</a><br>
         <a class="bocne_menu" href="videos.php">Pridať video</a><br>    
         <a class="bocne_menu" href="photos.php">Pridať fotky</a><br>';  
   }

   if (isset($_SESSION['isEditor']) OR isset($_SESSION['isAdmin'])) {
    echo '<br><br>
         <a class="bocne_menu" href="pedagogika.php">Správa dokumentov</a><br>';  /// spravny linky pridat
   }

   if (isset($_SESSION['isAdmin'])) {
    echo '<br><br>
         <a class="bocne_menu" href="roles.php">Správa rolí</a><br>';  
   }
  echo "</div>";   // koniec div bocne_menu
?> 