<?php
include 'includes/header.php';
include_once 'includes/simple_html_dom.php';
?>
<title>Voľné DP</title>


<style type="text/css">
.okno{

  z-index: 1;
  position: absolute; 
  width:40%; 
  background-color: rgba(0, 0, 0, 0.95);
  padding: 30px;
  color: white;   
  border: 3px solid blue;   
  min-width: 325px; 

}
</style>

<script type="text/javascript">

	function sortTable(n) {
		var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		table = document.getElementById("myTable");
		switching = true;
//Set the sorting direction to ascending:
dir = "asc"; 
/*Make a loop that will continue until
no switching has been done:*/
while (switching) {
//start by saying: no switching is done:
switching = false;
rows = table.getElementsByTagName("TR");
/*Loop through all table rows (except the
first, which contains table headers):*/
for (i = 1; i < (rows.length - 1); i++) {
  //start by saying there should be no switching:
  shouldSwitch = false;
  /*Get the two elements you want to compare,
  one from current row and one from the next:*/
  x = rows[i].getElementsByTagName("TD")[n];
  y = rows[i + 1].getElementsByTagName("TD")[n];
  /*check if the two rows should switch place,
  based on the direction, asc or desc:*/
  if (dir == "asc") {
  	if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
      //if so, mark as a switch and break the loop:
      shouldSwitch= true;
      break;
  }
} else if (dir == "desc") {
	if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
      //if so, mark as a switch and break the loop:
      shouldSwitch= true;
      break;
  }
}
}
if (shouldSwitch) {
  /*If a switch has been marked, make the switch
  and mark that a switch has been done:*/
  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
  switching = true;
  //Each time a switch is done, increase this count by 1:
  switchcount ++;      
} else {
  /*If no switching has been done AND the direction is "asc",
  set the direction to "desc" and run the while loop again.*/
  if (switchcount == 0 && dir == "asc") {
  	dir = "desc";
  	switching = true;
  }
}
}
}

$(document).on('click', '.clickable', function() {   

	if($(this).children().css('display') == 'none'){
		$(this).children().css( "display", "block" );    
	}
	else{
		$(this).children().css('display','none');
	}


});


</script>


<div class="container">
	
	<h1>Voľné DP</h1>

	<?php   



	$url = "http://is.stuba.sk/pracoviste/prehled_temat.pl";
	$data = array (
		'lang' => 'sk',
		'pracoviste' => '642'	
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


	echo "<div>";

	echo "<table id='myTable' class='table table-hover'><tr>
	<th onclick='sortTable(0)' >Názov</th> 
	<th onclick='sortTable(1)'  >Školiteľ</th> 
	<th onclick='sortTable(2)'  >program</th> </tr>";

	foreach($html->find('tr') as $element){	

		if($element->children(1)->plaintext == 'DP' && $element->children(9)->plaintext == '--' ){

			$nazov = $element->children(2)->plaintext;
			$skolitel = $element->children(3)->plaintext;
			$program = $element->children(5)->plaintext;
			$annotationURL= 'http://is.stuba.sk'. $element->children(7)->children(0)->children(0)->getAttribute('href');		



			$ch2 = curl_init($annotationURL);	 
			curl_setopt($ch2, CURLOPT_RETURNTRANSFER, TRUE); 
			$result = curl_exec($ch2);
			curl_close($ch2);

			$doc = new DOMDocument();
			libxml_use_internal_errors(true);
			$doc->loadHTML($result);
			$xPath = new DOMXPath($doc);
			$annotation = $xPath->query('//html/body/div/div/div/table[1]/tbody/tr[last()]/td[last()]')[0]->textContent;


			echo "<tr><td class='clickable'>".$nazov."<div class='okno' style='display:none;'>".$annotation ."</div></td><td>".$skolitel."</td><td>".$program."</td></tr>";

		}
	}


	echo "</table>";
?>

</div>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php
include 'includes/footer.php';

?>