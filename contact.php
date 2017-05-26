

<?php
include "includes/header.php";
?>



<div id="cont">
<div id="ADDR" >
<h3>
		<?php echo $lang['CONTACT_ADDR']; ?>	
	</h3>
	<br>Ústav automobilovej mechatroniky, <br> 
	FEI STU, Ilkovičova 3,<br>
	812 19 Bratislava, <br>
	<?php echo $lang['CONTACT_COUNTRY']; ?>
	<h3>
	<?php echo $lang['CONTACT_SEC']; ?>
	</h3>
	<br>Ústav automobilovej mechatroniky, <br> 
	FEI STU, Ilkovičova 3,<br>
	812 19 Bratislava, <br><br>
	&#9742; +421 260 291 598<br>
	&#9742; +421 265 429 734<br>
	&#x2709; <a href="mailto:katarina.kermietova@stuba.sk">katarina.kermietova [at] stuba.sk</a><br>
	&#127760; 48°9'11"N; 17°4'24"E
</div>
<div id="googleMap"></div>

</div>




<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(48.1529794,17.0737407),
    zoom:16,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOhzETcKKDJVM-ujwxQ9HB_OpLX-YXaGo&libraries=places&callback=myMap"></script>




<style type="text/css">
#ADDR {
  position: absolute;
  display: inline-block;
  height: 80%;
  width: 40%;
  margin: 1em;
  vertical-align: top;
  margin: 5%;
 width: 40%;
 border-right: 1px solid black;

}
#googleMap {
  left: 45%;
  position: absolute;
  display: inline-block;
  height: 80%;
  width: 45%;

  margin: 5%;
}
 

#cont {
	position: absolute;
	background: rgba(73, 73, 73, 0.5);
	
	width: 90%;
	height: 80%;
	top: 10%;
	left: 5%;
}
body {
	background-image: "includes/c1.jpg";
}

</style>
<?php
include "includes/footer.php";

?>

