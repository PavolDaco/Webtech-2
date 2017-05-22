<?php
 session_start();
  include 'includes/header.php';
 mysqli_set_charset($conn, "utf8");
?>

  <title>Pridanie aktuality</title>
 
    <link rel="stylesheet" href="aktuality/style.css"> 
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script type="text/javascript" src="aktuality/script_aktuality.js"></script>   

<div class="container">
<div>
    <form id='form' action='aktuality/insert_aktualita.php' method='POST'>
    <input type="checkbox" name="lang1" value="sk" id='sk'/> SVK
 	  <input type="checkbox" name="lang2" value="en" id='en'/> ENG	

 	 <div class="svk">
	     Titulok(SK): <br>
	     <input type="text" name="titulokSK"><br>

	     Text(SK): <br>
	     <textarea rows="4" cols="50" name="textSK" ></textarea><br>
     </div>

     <div class="eng">
	     Title(EN): <br>
	     <input type="text" name="titulokEN"><br>

	     Text(EN): <br>
	     <textarea rows="4" cols="50" name="textEN" ></textarea><br>
     </div>

     <br><br>
     <input type="radio" name="typ" value="oznamy" required> Oznamy (announcements)<br>
     <input type="radio" name="typ" value="propagacia"> Propagácia (promotion)<br>
     <input type="radio" name="typ" value="zivot"> Zo života ústavu (from school's life)<br>

     <br>Platnosť(validity): <input type="date" name="platnost" placeholder="rrrr-mm-dd" pattern='(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))' required>
     
      <br><br>
      <button type='submit'>Odoslať</button>
    </form>
 </div>

 <?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,'ins_error=empty') !== false) { 
      echo "<div class='alert warning'>
              <span class='closebtn'>&times;</span>  
              <strong>Pozor!</strong> Chyba pri vkladaní aktuality.
            </div>";
    }
    else if(strpos($url,'ins_good') !== false) {
      echo "<div class='alert success'>
                <span class='closebtn'>&times;</span>  
                <strong>Super!</strong> Aktualita úspešne vložená.
            </div>";
    }

include 'includes/footer.php';
?>    