<?php
ob_start();
session_start(); //session start
  //include('/home/xdaco/public_html/final/includes/header.php');
  //include('/home/xdaco/public_html/final/includes/footer.php'); 
  include 'includes/header.php';
  include 'includes/footer.php';
  require_once ('intranet/includes/dbh.php'); 
  mysqli_set_charset($conn, "utf8");
//http://labss2.fiit.stuba.sk/TeamProject/2011/team16is-si/documents/Dokumentacia_riadenie-1bod.pdf
?>
  <title>Intranet - Login</title>
  <link rel="stylesheet" href="intranet/includes/style.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="intranet/includes/script_roles.js"></script>

<div class="container">

<?php

$ldapuid = $_POST['username'];
$ldappass = $_POST['password'];

$basedn  = 'ou=People, DC=stuba, DC=sk';
$ds = @ldap_connect('ldap://ldap.stuba.sk', 636);
@ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

//tzv bind cize overenie mena hesla
$ldapBindResult = @ldap_bind($ds, 'uid='.$ldapuid.',ou=People,dc=stuba,dc=sk',$ldappass);

if ($ldapBindResult){
  //filtrujeme co chceme dostat
 $ldapFilter = array("uid", "uisid", "sn", "givenname","surname","mail");
  //hladame
 $ldapSearchResult = @ldap_search($ds, $basedn, 'uid='.$ldapuid, $ldapFilter);

  if ($ldapSearchResult) {
    $result = @ldap_get_entries($ds, $ldapSearchResult);
    $login = $result[0]["uid"][0];
    $meno = $result[0]["givenname"][0];
    $priezvisko = $result[0]["sn"][0];
    $mail = $result[0]["mail"][0];
    @ldap_close($ds);

    $sql = "SELECT id,ldapLogin FROM zamestnanci WHERE ldapLogin = '$login'"; 
    $result = $conn->query($sql);
    $logincheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if($logincheck > 0) {   
      $_SESSION['login'] = $login;
      $_SESSION['id'] = $row['id'];
      header("Location: intranet.php"); 
    } 
    else { 
      echo "Pre tento login neexistuje konto!"; 
    }
  }
}

?>
<div align="center">
   <h3 style='color: black;'>Prihlásenie cez LDAP STU BA</h3>
    <form id='ldapform' action='login.php' method='POST'>
      <input type='text' name='username' placeholder='Login(AIS)'><br>
      <input type='password' name='password' placeholder='Heslo'><br>
      <button class='button button3' type='submit'>Prihlásiť</button>
    </form>
 </div>

<?php
