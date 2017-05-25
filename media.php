<?php
include 'includes/header.php';

?>

    <title>Médiá</title>
<script src="/parser/jquery-queryParser.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="/parser/jquery-queryParser.min.js" type="text/javascript" charset="utf-8" async defer></script>

<script>
	(function($){var pl=/\+/g,searchStrict=/([^&=]+)=+([^&]*)/g,searchTolerant=/([^&=]+)=?([^&]*)/g,decode=function(s){return decodeURIComponent(s.replace(pl," "));};$.parseQuery=function(query,options){var match,o={},opts=options||{},search=opts.tolerant?searchTolerant:searchStrict;if('?'===query.substring(0,1)){query=query.substring(1);}while(match=search.exec(query)){o[decode(match[1])]=decode(match[2]);}return o;};$.getQuery=function(options){return $.parseQuery(window.location.search,options);};$.fn.parseQuery=function(options){return $.parseQuery($(this).serialize(),options);};}(jQuery));

// YOUTUBE VIDEO CODE
$(document).ready(function(){
	
// BOOTSTRAP 3.0 - Open YouTube Video Dynamicaly in Modal Window
// Modal Window for dynamically opening videos
$('a[href^="https://www.youtube.com"]').on('click', function(e){
  // Store the query string variables and values
	// Uses "jQuery Query Parser" plugin, to allow for various URL formats (could have extra parameters)
	var queryString = $(this).attr('href').slice( $(this).attr('href').indexOf('?') + 1);
	var queryVars = $.parseQuery( queryString );
 
	// if GET variable "v" exists. This is the Youtube Video ID
	if ( 'v' in queryVars )
	{
		// Prevent opening of external page
		e.preventDefault();
 
		// Variables for iFrame code. Width and height from data attributes, else use default.
		var vidWidth = 560; // default
		var vidHeight = 315; // default
		if ( $(this).attr('data-width') ) { vidWidth = parseInt($(this).attr('data-width')); }
		if ( $(this).attr('data-height') ) { vidHeight =  parseInt($(this).attr('data-height')); }
		var iFrameCode = '<iframe width="' + vidWidth + '" height="'+ vidHeight +'" scrolling="no" allowtransparency="true" allowfullscreen="true" src="https://www.youtube.com/embed/'+  queryVars['v'] +'?rel=0&wmode=transparent&showinfo=0" frameborder="0"></iframe>';
 
		// Replace Modal HTML with iFrame Embed
		$('#mediaModal .modal-body').html(iFrameCode);
		// Set new width of modal window, based on dynamic video content
		$('#mediaModal').on('show.bs.modal', function () {
			// Add video width to left and right padding, to get new width of modal window
			var modalBody = $(this).find('.modal-body');
			var modalDialog = $(this).find('.modal-dialog');
			var newModalWidth = vidWidth + parseInt(modalBody.css("padding-left")) + parseInt(modalBody.css("padding-right"));
			newModalWidth += parseInt(modalDialog.css("padding-left")) + parseInt(modalDialog.css("padding-right"));
			newModalWidth += 'px';
			// Set width of modal (Bootstrap 3.0)
		    $(this).find('.modal-dialog').css('width', newModalWidth);
		});
 
		// Open Modal
		$('#mediaModal').modal();
	}
});
 
// Clear modal contents on close. 
// There was mention of videos that kept playing in the background.
$('#mediaModal').on('hidden.bs.modal', function () {
	$('#mediaModal .modal-body').html('');
});
 
}); 
</script>



<div class="container ">
	<div class="sixteen columns">
		<section class="page-content"> <a id="main-content"></a>

			<div class="tabs"></div>
			<div class="region region-content">
				<div id="block-system-main" class="block block-system">
					<div class="content">
						<div class="view view-foto view-id-foto view-display-id-page view-dom-id-2d4af285ba2286e3d41c2b6f5dca7e6b">
							<div class="view-header">
								<p>Články o ÚAMT:</p>
							</div>
							<div class="view-content">
								<div class="views-row views-row-1 views-row-odd views-row-first"> <span class="views-field views-field-title">        <span class="field-content"><a href="includes/c2.pdf">Vďaka biomechatronikom z STU sa už akupunktúrne body neskryjú-Science.sk (11. 03. 2016)</a></span> </span>
								</div>

								<div class="views-row views-row-2 views-row-even"> <span class="views-field views-field-title">        <span class="field-content"><a href="includes/c1.pdf">Poodkryl tajomstvo - Šarm (10.11.2015)</a></span> </span>
								</div>             

								<div class="views-row views-row-3 views-row-odd"> <span class="views-field views-field-title">        <span class="field-content"><a href="http://okocasopis.sk/tema/akupunktura-stare-a-nove-tajomstva">Akupunktúra – staré a nové tajomstvá - OKOČasopis (07.03.2016)</a></span> </span>
								</div>

								<div class="views-row views-row-4 views-row-even"> <span class="views-field views-field-title">        <span class="field-content"><a href="http://sous-ruzinov.sk/pozriet-uamt-fei-stu/">Boli sme pozrieť ÚAMT FEI STU (08.02.2016)</a></span> </span>
								</div>
								<div class="views-row views-row-5 views-row-odd"> <span class="views-field views-field-title">        <span class="field-content"><a href="http://vedanadosah.cvtisr.sk/prvy-lahky-terenny-elektromobil-s-druhou-generaciou-elektrickeho-pohonneho-systemu">Prvý ľahký terénny elektromobil s druhou generáciou elektrického pohonného systému - vedanadosah.sk (02.12.2015)</a></span> </span>
								</div>  
								<br>       

							
								
								<!-- ///////////////////////////////////////////////////VIDEO//////////////////////////////////////////////// -->
					
							<div class="view-header">
								<p>Videá:</p>
								</div>

								<div class="views-row views-row-1 views-row-odd views-row-first"> <span class="views-field views-field-title"><span class="field-content"> <a href="https://www.youtube.com/watch?v=lFaF0hKrFaM?rel=0&autoplay=1">Kam na vysokú školu? (13. 3. 2014)</a></span>
								</div>

								<div class="views-row views-row-2 views-row-even video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=XTjNQoEZmbk">Našou prioritou sú úspešní študenti - Automobilová mechatronika FEI STU  ( 26. 11. 2014)</a></span> </span>
								</div>             

								<div class="views-row views-row-4 views-row-even video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=IiNXYgbOKxw">Profesor Kozák o študijných FEI STU(5. 10. 2014)</a></span> </span>
								</div>
								<div class="views-row views-row-5 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=tnsIHSlNcOI">Elosys 2014 a Markíza (19. 10. 2014)</a></span> </span>
								</div>

							</div>
							<div class="views-row views-row-6 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=0qnpBOZY3Ys">ELO SYS 2014 - elektrická motokára, elektromobilita (26. 11. 2014)</a></span> </span>
							</div>

						</div>

					</div>
					<div class="views-row views-row-8 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=vCYq4JspSCI">Študuj mechatroniku a budeš úspešný! - 2.kolo prijímačiek - Automobilová mechatronika FEI STU  (14. 6. 2015)</a></span> </span>
					</div>

				</div>
				<div class="views-row views-row-9 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=3E4PJI08_2Q">Aplikovaná Mechatronika- Meranie akupunktúrnych bodov  (13. 3. 2014)</a></span> </span>
				</div>

				<div class="views-row views-row-8 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=AzIDhh3VoXQ">Je automobilova mechatronika vhodná aj pre dievčatá? (27. 1. 2014)</a></span> </span>
				</div>

			</div>
			<div class="views-row views-row-9 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=skzk6ENSJEA">Nájdu si študenti automobilovej mechatroniky uplatnenie? (27. 1. 2014)</a></span> </span>
			</div>


			<div class="views-row views-row-10 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=fJIkQu8EHmY">Ake laboratória ponúka študentom Ústav Automobilovej Mechatroniky (27. 1. 2014)</a></span> </span>
			</div>

		</div>
		<div class="views-row views-row-11 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=SE-0aiPRLew"> IFAC Symposium on Advances in Control Education 2016 (IFAC ACE 2016) - aftermovie (13. 10. 2016)</a></span> </span>
		</div>


		<div class="views-row views-row-12 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=O13PQDe8PJU">ACE2016 - Magnus Egerstedt - Controls Classes on a Massive Scale: The Good, the Bad, the Ugly (13. 10. 2016)</a></span> </span>
		</div>


	<div class="views-row views-row-13 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=JLm-UMDETFs"> Digitálna továreň a produktové vizualizácie - aplikačná oblasť mechatroniky (15. 4. 2016)</a></span> </span>
	</div>

	<div class="views-row views-row-14 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=1CGfCKToUL0">Čo ponúka automobilova mechatronika iné oproti ostatným študijným programom na FEI? (27. 1. 2014)</a></span> </span>
	</div>

<div class="views-row views-row-15 views-row-odd video"> <span class="views-field views-field-title">        <span class="field-content"><a href="https://www.youtube.com/watch?v=rzQD9gVEF6g">IFAC ROCOND '15 Slovakia - Control Theory and Its Impact on Society - Vladimír Kučera (16. 9. 2015)</a></span> </span>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>



<div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">

    </div>
  </div>
</div>
</div>

<?php
include 'includes/footer.php';
?>