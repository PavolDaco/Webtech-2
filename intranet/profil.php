<?php
 session_start();
 include 'includes/dbh.php';
 include 'includes/intro_bocne_menu.php';
 include 'includes/intro_horne_menu.php';
 mysqli_set_charset($conn, "utf8");
?>


  <title>Profil</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="includes/style.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
  <script type="text/javascript" src="includes/script_aktuality.js"></script> 
  <script type="text/javascript" src="includes/script_roles.js"></script>


<div class="container">

<?php
// Ak User alebo Admin, tak ukay obrazovku
if (isset($_SESSION['isUser']) OR isset($_SESSION['isAdmin'])) {
  
  $sql = "SELECT * FROM zamestnanci WHERE ldapLogin = '$login'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_assoc($result);

  /// profil
  echo "<div id='okno_profil' class='okno_profil'>
             <div style='display:none;' id='id' >".$row["id"]."</div>
         <h2><div class='divko' id='title1'>".$row["title1"]."</div> 
         <div class='divko' id='name'>".$row["name"]."</div> 
         <div class='divko' id='surname'>".$row["surname"]."</div>  
         <div class='divko' id='title2'>".$row["title2"]."</div></h2><br><br>
       
         <span class='divko'>LDAP login: </span><div class='divko' id='ldapLogin'>".$row["ldapLogin"]."</div><br>
         <span class='divko'>Zaradenie: </span><div class='divko' id='staffRole'>".$row["staffRole"]."</div><br>
         <span class='divko'>Oddelenie: </span><div class='divko' id='department'>".$row["department"]."</div><br>
         <span class='divko'>Telefón: </span><div class='divko' id='phone'>".$row["phone"]."</div><br>
         <span class='divko'>Kancelária: </span><div class='divko' id='room'>".$row["room"]."</div><br>
         
         <br><button id='btn_edit_profil'>Upraviť profil</button>";

      // Button na pridanie Newsletera a skryty formular
      echo "<button style='float:right;' id='add_news' class='clickable_news'>Chcem odoberať newsletter</button>
          <div id='form2' class='okno_news' style='display:none;'>
            <span class='closebtn_news' style='float: right;'>&times;</span>
            <form action='includes/insert_newsletter.php' method='post' id='formular2'>Odoberať newsletter<br>
            <label for='mail'>Mail:</label><br/>
              <input type='email' name='email' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' required><br>
            
            <label for='jazyk'>Jazyk:</label><br/>
             <select name='jazyk'>
                <option value='sk'>SVK</option>
                <option value='en'>ENG</option>
            </select><br/>  

              <input type='submit' name='submit' value='Odoslať' id='btn2'/>     
           </form>
          </div>";

    	// Button na odstranenie Newsletera a skryty formular
       echo "<button style='float:right;' id='delete_news' class='clickable_news'>Zrušiť odber newsletteru</button>
          <div id='form3' class='okno_news' style='display:none;'>
            <span class='closebtn_news' style='float: right;'>&times;</span>
            <form action='includes/delete_newsletter.php' method='post' id='formular3'>Zrušiť newsletter<br>
            <label for='mail'>Mail:</label><br/>
              <input type='email' name='email' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' required><br>

             <label for='jazyk'>Jazyk:</label><br/>
             <select name='jazyk'>
                <option value='sk'>SVK</option>
                <option value='en'>ENG</option>
            </select><br/> 

            <input type='submit' name='submit' value='Odoslať' id='btn3' />      
           </form>
          </div>
        </div>";

        ///okno na upravu profilu
       echo "
       <div id='okno_profil_edit' class='okno_profil_edit' style='display:none;'>
        <span class='closebtn_profil_edit' style='float: right;'>&times;</span>
        <form id='formProfil' style='float: left;' action='profil/update_profil.php' method='POST'>
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
       	 <br><button type='submit'>Potvrdiť</button>
       	</form>
       </div>";
}

// ak NIE User alebo Admin, tak informacia
else {
    echo"<div class='container'>
    <div id='okno_nova_akt' class='okno_profil'>
      Na prezerenie profilu musíte byť prihlásený ako User!
    </div>";
}

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,'del_error=empty') !== false) { 
      echo "<div class='alert warning'>
              <span class='closebtn'>&times;</span>  
              <strong>Pozor!</strong> Pre tento email nemáme žiadny záznam odberu Newletteru.
            </div>";   
    }
    else if(strpos($url,'del_good') !== false) { 
      echo "<div class='alert success'>
                <span class='closebtn'>&times;</span>  
                <strong>Super!</strong> Úspešne ste sa odhlásili z odberu Newletteru.
            </div>";
    }
    else if(strpos($url,'ins_error=exist') !== false) { 
      echo "<div class='alert warning'>
              <span class='closebtn'>&times;</span>  
              <strong>Chyba!</strong> Tento mail už odoberá Newsletter v tomto jazyku.
            </div>"; 
    }
    else if(strpos($url,'ins_error=empty') !== false) { 
      echo "<div class='alert warning'>
              <span class='closebtn'>&times;</span>  
              <strong>Pozor!</strong> Chyba pri zadávaní emailu, skúste znova.
            </div>"; 
    }
    else if(strpos($url,'ins_good') !== false) { 
      echo "<div class='alert success'>
                <span class='closebtn'>&times;</span>  
                <strong>Super!</strong> Úspešne ste sa prihlásili na odber Newletteru.
            </div>";
    }
?> 