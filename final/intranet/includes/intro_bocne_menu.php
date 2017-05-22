<!DOCTYPE HTML>
<html lang="sk">
  <head>
    <meta content="text/html; charset=UTF-8">  
    <link rel="stylesheet" href="includes/style.css"> 
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script type="text/javascript" src="includes/script_roles.js"></script>
  </head>
  <body>

<?php
 session_start();
 include 'dbh.php';
 mysqli_set_charset($conn, "utf8");

  $login = $_SESSION['login'];

  if (isset($_SESSION['login'])) {
       echo '<a style="background-color: #4d4dff;" class="logout" href="includes/logout.php">Odhlásiť</a><br>';
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
   /*
   if (isset($_SESSION['isUser'])) echo "user: ".$_SESSION['isUser']."<br>";
   if (isset($_SESSION['isHr'])) echo "hr: ".$_SESSION['isHr']."<br>";
   if (isset($_SESSION['isReporter'])) echo "reporter: ".$_SESSION['isReporter']."<br>";
   if (isset($_SESSION['isEditor'])) echo "editor: ".$_SESSION['isEditor']."<br>";
   if (isset($_SESSION['isAdmin'])) echo "admin: ".$_SESSION['isAdmin']."<br>";
*/
///////////////////////// BOCNE MENU /////////////////////////////////////////////////
    echo "<div id= bocne_menu>";

    /// vsetci Useri vidia kartu Moj profil
    if (isset($_SESSION['isUser']) OR isset($_SESSION['isAdmin'])) {
      echo '<br>
           <a href="profil.php">Moj profil</a><br>';
      /// vsetci vidia kartu Dochadzka
      echo '<a href="../final/aktuality/new_aktualita.php">Dochádzka</a><br>';  /// spravny linky pridat
    }
    if (isset($_SESSION['isHr']) OR isset($_SESSION['isAdmin'])) {
    echo '<br><br>
         <a href="users.php">Editovať užívateľov</a><br>';
    }

   if (isset($_SESSION['isReporter']) OR isset($_SESSION['isAdmin'])) {
    echo '<br><br>
         <a href="../final/aktuality/new_aktualita.php">Pridať aktualitu</a><br>
         <a href="../final/aktuality/new_aktualita.php">Pridať video</a><br>    
         <a href="../final/aktuality/new_aktualita.php">Pridať fotky</a><br>';  /// spravny linky pridat
   }

   if (isset($_SESSION['isEditor']) OR isset($_SESSION['isAdmin'])) {
    echo '<br><br>
         <a href="../final/aktuality/new_aktualita.php">Správa dokumentov</a><br>';  /// spravny linky pridat
   }

   if (isset($_SESSION['isAdmin'])) {
    echo '<br><br>
         <a href="roles.php">Správa rolí</a><br>';  /// spravny linky pridat
   }
  echo "</div>";   // koniec div bocne_menu
?> 