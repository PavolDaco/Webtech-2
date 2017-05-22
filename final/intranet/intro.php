<?php
 session_start();
 include 'includes/dbh.php';
 include 'includes/intro_bocne_menu.php';
 include '../includes/header.php';
 include '../includes/footer.php';
 mysqli_set_charset($conn, "utf8");
?>
	<title>Intranet</title>

<div class="container">

<?php
 $login = $_SESSION['login'];

 $sql = "SELECT * FROM zamestnanci WHERE ldapLogin = '$login'";
 $result = $conn->query($sql);
 $row = mysqli_fetch_assoc($result);


  echo "<div id='okno_profil' class='okno_profil'>
        <h3>Vitajte v Intranete, ste prihlásený ako: <h1 style='color: black;'>".$row['name']." ".$row['surname']."</h1></h3>
        <p>Vľavo máte menu s operáciami, na ktoré máte práva na základe rolí, ktoré Vám boli pridelené</p>
        </div>";
  