<?php   
include 'includes/header.php';
include 'pracovnici/dbh.php';
include_once 'pracovnici/simple_html_dom.php';

mysqli_set_charset($conn, "utf8");


echo "<title>Pracovníci</title><div class='container'><div style='margin-left:100px;'><br><input type='text' id='myInput' onkeyup='filter1()' placeholder='".$lang['STAFF_F1']."'>
<input type='text' id='myInput2' onkeyup='filter2()' placeholder='".$lang['STAFF_F2']."'></div>";




$sql = "SELECT `id`, `name`, `surname`, `title1`, `title2`, `ldapLogin`, `photo`, `room`, `phone`, `department`, `staffRole`, `function` FROM `zamestnanci` WHERE 1";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table id='myTable' >
    		<tr class='outTable'>
    			<th>sort</th>
    			<th onclick='sortTable(0)'>".$lang['STAFF_NAME']."</th>
    			<th>".$lang['STAFF_ROOM']."</th>
    			<th>".$lang['STAFF_PHONE']."</th>
    			<th onclick='sortTable(4)'>".$lang['STAFF_DEPARTMENT']."</th>
    			<th onclick='sortTable(5)'>".$lang['STAFF_ROLE']."</th>
    			<th>".$lang['STAFF_FUNCTION']."</th> 
    		</tr>";


    while($row = $result->fetch_assoc()) {


    	$publikacie = $lang['STAFF_PUBL'] ;


    		    if ($row["ldapLogin"]){
    		    	$publikacie = getPublikacie($row["ldapLogin"]);
    		    }



    		$okno = "<div class='okno' style='display:none;'>
    		 <span class='closebtn' style='float: right;'>&times;</span>
    				<h2>".$row["title1"]." ".$row["name"]." ".$row["surname"]." ".$row["title2"]."</h2><div style='float:left; width:50%;'>".
    				($row["photo"]?"<img src='pracovnici/photos/".$row["photo"]."' width='95%' >":'')."</div><div style='float:right; width:48%;'>".
    				$lang['STAFF_ROLE'].": ".$row["staffRole"]."<br>".
    				$lang['STAFF_DEPARTMENT'].": ".$row["department"]."<br>".
    				$lang['STAFF_PHONE'].": +421 2 60291 ".$row["phone"]."<br>".
    				$lang['STAFF_ROOM'].": ".$row["room"]."</div><div style='clear: both;'><br>".
    				$publikacie.

    		"</div></div>";

        echo "<tr class='outTable'>
        		<td>".$row["surname"]."</td>
        		<td><div class='clickable'>".$row["title1"]." ".$row["name"]." ".$row["surname"]." ".$row["title2"]."</div>".
        		$okno."</td>
        		<td>".$row["room"]."</td>
        		<td>".$row["phone"]."</td>
        		<td>".$row["department"]."</td>
        		<td>".$row["staffRole"]."</td>
        		<td>".$row["function"]."</td>
        	</tr>";
    

    }
    echo "</table></div>";
} 




function getPublikacie($login) {
   
  $returndata ="";
  $basedn  = 'ou=People, DC=stuba, DC=sk';
  $ds = @ldap_connect('ldap://ldap.stuba.sk', 636);
  @ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);

   $ldapFilter = array("uid", "uisid", "cn", "givenname","surname","mail");

   $ldapSearchResult = @ldap_search($ds, $basedn, 'uid='.$login, $ldapFilter);

   if ($ldapSearchResult) {
    $result = @ldap_get_entries($ds, $ldapSearchResult);
    $uid = $result[0]['uisid'][0];
    $meno = $result[0]['cn'][0];
    @ldap_close($ds);   
   

    $url = "http://is.stuba.sk/lide/clovek.pl";
    $data = array (
      'lang' => 'sk',
      'zalozka' => '5',
      'id'=> $uid,
      'rok'=> '1',
      'order_by' => 'typ_rok_naz'
      );

    $params = '';

    foreach($data as $key=>$value)
      $params .= $key.'='.$value.'&';

    $params = trim($params, '&');
    $ch = curl_init ();

    curl_setopt($ch, CURLOPT_URL, $url.'?'.$params );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    $returndata = curl_exec ($ch);



    $html = new simple_html_dom();
    $html->load($returndata);


    $i=0;

    $returndata = "<table id='tabPublikacie' ><tr><th>Por.</th>  <th>Publikácie</th>  <th>Druh výsledku</th>  <th>Rok</th></tr>";

    $pole = array('príspevky v&nbsp;zborníkoch, kapitoly v&nbsp;monografiách/učebniciach, abstrakty',
                  'články v&nbsp;časopisoch',
                  'monografie, učebnice, skriptá, príručky, normy, patenty, výskumné správy, iné neperiodické publikácie');

    foreach($html->find('tr') as $element){ 

        $cislo =  $element->children(0)->plaintext;
        $publikacia = $element->children(1)->plaintext;
        $druh = $element->children(2)->plaintext;
        $rok = $element->children(3)->plaintext;

       if($pole[0] == $druh || $pole[1] == $druh || $pole[2] == $druh ){

      if($i>10  && $rok > '2012' && $cislo !='Por.'){
       

       $returndata= $returndata. "<tr><td>".$cislo."</td><td>".$publikacia."</td><td>".$druh."</td><td>".$rok."</td></tr>";
      }
    } 
      $i++; 
    }
      $returndata= $returndata. "</table></div>";


    }

   return $returndata;

}


?>



<link rel="stylesheet" type="text/css" href="pracovnici/stylePracovnici.css">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script type="text/javascript" src='pracovnici/jsPracovnici.js'></script>


<?php
include 'includes/footer.php';

?>