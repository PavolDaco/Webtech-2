<?php
 session_start();
 include 'includes/intro_bocne_menu.php';
 include 'includes/intro_horne_menu.php';
 mysqli_set_charset($conn, "utf8");
?>
  <title>Rozdelenie úloh</title>
  <link rel="stylesheet" href="includes/style.css"> 
  <link rel="stylesheet" href="ulohy/style.css"> 

<div class="container">

<div>
    <table>
          <tr>
            <th class="text-center">kto<br>/úloha</th>
            <th class="text-center">Pavol</th>
            <th class="text-center">Tomáš</th>
            <th class="text-center">Michal</th>
            <th class="text-center">Štefan</th> 
            <th class="text-center">Matúš</th>     
          </tr>
          
          <tr>
            <td>Responzivita stránok</td>
            <td colspan="3"></td>
            <td class="ano">áno</td>
            <td></td>
          </tr>
          
          <tr>
            <td>Dvojjazyčnosť</td>
            <td></td>
            <td class="ano">áno</td>
            <td colspan="3"></td>
          </tr>
          
          <tr>
            <td>Menu</td>
            <td></td>
            <td class="ano">áno</td>
            <td colspan="3"></td>
          </tr>
          
          <tr>
            <td>Titulná stránka</td>
            <td colspan="3"></td>
            <td class="ano">áno</td>
            <td></td>
          </tr>
          
          <tr>
            <td>Pätka</td>
            <td></td>
            <td class="ano">áno</td>
            <td colspan="3"></td>
          </tr>

          <tr>
            <td>Pracovníci</td>
            <td></td>
            <td class="ano">áno</td>
            <td colspan="3"></td>
          </tr>

          <tr>
            <td>Projekty</td>
            <td class="ano">áno</td>
            <td colspan="4"></td>
          </tr>
          
          <tr>
            <td>Aktuality</td>
            <td class="ano">áno</td>
            <td colspan="4"></td>
          </tr>

          <tr>
            <td>Kontakt</td>
            <td colspan="4"></td>
            <td class="ano">áno</td>
          </tr>

          <tr>
            <td>Fotogaléria</td>
            <td colspan="4"></td>
            <td class="ano">áno</td>
          </tr>

          <tr>
            <td>Videá</td>
            <td colspan="4"></td>
            <td class="ano">áno</td>
          </tr>

          <tr>
            <td>Média</td>
            <td colspan="3"></td>
            <td class="ano">áno</td>
            <td></td>
          </tr>

          <tr>
            <td>LDAP + role</td>
            <td class="ano">áno</td>
            <td colspan="4"></td>
          </tr>

          <tr>
            <td>Intranet</td>
            <td colspan="2"></td>
            <td class="ano">áno</td>
            <td colspan="2"></td>
          </tr>

          <tr>
            <td>Celkový dizajn</td>
            <td colspan="2"></td>
            <td class="ano">áno</td>
            <td colspan="2"></td>
          </tr>
    </table>
    	<br>
    	<p class="text-center">Tabuľky v databáze si každý navrhol sám, Github sme používali samozrejme všetci</p>
     
   </div> 
</div>   