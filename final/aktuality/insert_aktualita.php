<?php
session_start();
include 'dbh.php';
mysqli_set_charset($conn, "utf8");
//////////////////////////////////
$langSK = $_POST['lang1'];
$langEN = $_POST['lang2'];
$typ = $_POST['typ'];
$platnost = $_POST['platnost'];

$textSK = $_POST['textSK'];
$titulokSK = $_POST['titulokSK'];
$textEN = $_POST['textEN'];
$titulokEN = $_POST['titulokEN'];
//////////////////////////  POSLAT NEWSLETTER //////////////////////////////
require_once "Mail.php";
require_once "config_gmail.php";

if ($langSK) {
  $from = "<wt2.tim16@gmail.com>";
  $subject = "Newsletter - ".$titulokSK;
  $body = $textSK;

  $host = "ssl://smtp.gmail.com";
  $port = "465";

  $smtp = Mail::factory('smtp',
     array ('host' => $host,
       'port' => $port,
       'auth' => true,
       'username' => $username,
       'password' => $password));

  $sql = "SELECT email FROM Newsletter WHERE jazyk = '$langSK'";
  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result)) {	
   $to = $row["email"];

   $headers = array ('From' => $from,
     'To' => $to,
     'Subject' => $subject);

   $mail = $smtp->send($to, $headers, $body);
   /*
   if (PEAR::isError($mail)) {
     echo("<p>" . $mail->getMessage() . "</p>");
    } else {
     echo("<p>Message successfully sent!</p>");
    }
    */
  }
}

if ($langEN) {
  $from = "<wt2.tim16@gmail.com>";
  $subject = "Newsletter - ".$titulokEN;
  $body = $textEN;

  $host = "ssl://smtp.gmail.com";
  $port = "465";

  $smtp = Mail::factory('smtp',
     array ('host' => $host,
       'port' => $port,
       'auth' => true,
       'username' => $username,
       'password' => $password));

  $sql = "SELECT email FROM Newsletter WHERE jazyk = '$langEN'";
  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result)) { 
   $to = $row["email"];

   $headers = array ('From' => $from,
     'To' => $to,
     'Subject' => $subject);

   $mail = $smtp->send($to, $headers, $body);
   /*
   if (PEAR::isError($mail)) {
     echo("<p>" . $mail->getMessage() . "</p>");
    } else {
     echo("<p>Message successfully sent!</p>");
    }
    */
  }
}
/////////////////////////  VLOZ AKTUALITU DO DB ///////////////////////
if ($langSK) {
  $sql = "INSERT INTO Aktuality (jazyk, typ_aktuality, platnost, titulok, text) VALUES ('$langSK','$typ','$platnost', '$titulokSK', '$textSK')";
  if ($conn->query($sql) === TRUE) {
     header("Location:  ../new_aktualita.php?ins_good");
  } else {
      header("Location:  ../new_aktualita.php?ins_error=empty");
  }
}
if ($langEN) {
  $sql = "INSERT INTO Aktuality (jazyk, typ_aktuality, platnost, titulok, text) VALUES ('$langEN','$typ','$platnost', '$titulokEN', '$textEN')";
  if ($conn->query($sql) === TRUE) {
      header("Location:  ../new_aktualita.php?ins_good");
  } else {
      header("Location:  ../new_aktualita.php?ins_error=empty");
  }
}



