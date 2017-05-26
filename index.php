<?php
include 'includes/header.php';
?> 
<title>Home Page</title>
<style>
@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
body{
	background-color:  #e6e6e6;
}
.row{
	padding-top: 5px;
}
h3 {
    font-size: 24px;
    font-size: 24px;
    font-size: 2.4rem;
}
.nopaddingleft {
    padding-left: 0;
}
.nopaddingright {
    padding-right: 0;
}
.overflownone {
    overflow: hidden!important;
}
.information {
    background: #2a3d46;
    position: relative;
    height: 550px;
}
.information h3 {
    font-size: 34px;
    font-size: 3.4rem;
    font-family: "roboto", sans-serif;
    font-weight: 500;
    color: #FFF;
    padding: 0 15px;
}
.information .information_menu {
    padding: 0;
}
.information .information_menu li {
    list-style: none;
    position: relative;
}
.information .information_menu li.active {
    background: #0383c5;
}
.information .information_menu li.active:after {
    content: "";
    width: 0;
    height: 0;
    border-top: 27px solid transparent;
    border-bottom: 27px solid transparent;
    border-left: 22px solid #0383c5;
    position: absolute;
    right: -22px;
    z-index: 1000;
    top: 0;
}
.information .information_menu li a {
    color: #FFF;
    display: block;
    padding: 16px 20px;
    font-size: 15px;
    font-size: 1.5rem;
    text-decoration: none;
}
.information .btn-emergency {
    background: #f89406;
    border: none;
    margin: 20px;
    display: block;
    width: 88%;
    color: #fff;
    text-shadow: none;
    padding: 0;
    font-size: 20px;
    font-size: 2rem;
}
.information .btn-emergency span {
    padding: 15px;
    display: block;
    background-size: 30px 30px;
    background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0.25, rgba(255, 255, 255, .15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, .15)), color-stop(0.75, rgba(255, 255, 255, .15)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(135deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image: linear, 135deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent;
    -webkit-animation: animate-stripes 3s linear infinite;
    -moz-animation: animate-stripes 3s linear infinite;
}
.mobile-menu-bg {
    background: #2a3d46;
}
.information_menu_mobile {
    margin: 0px;
    padding: 0;
}
.information_menu_mobile li {
    padding: 0;
    float: left;
    width: 25%;
    list-style: none;
    text-align: center;
}
.information_menu_mobile li a {
    display: block;
    padding: 10px;
    color: #FFF;
    text-decaration: none;
}
.information_menu_mobile li:hover a {
    background: #0383c5;
    text-decaration: none;
}
.slideshow {
    overflow: hidden;
}
.slideshow .overlay-item  {
    position: absolute;
    top: 0;
    z-index: 999;
    width: 360px;
    background: rgba(248, 148, 6, 0.67);
    height: 550px;
    padding: 10px 30px;
    display: none;
    -webkit-animation: opendoor 0.75s ease 0s alternate;
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}
.slideshow .overlay-item.active {
    display: block;
    -webkit-animation: opendoor 0.75s ease 0s alternate;
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}
.slideshow .overlay-item.inactive {
  display: block;
  -webkit-animation: closedoor 0.75s ease 0s alternate;
  transform-style: preserve-3d;
  opacity:0;
}
.slideshow .overlay-item .quickmenu  {
    padding: 0;
}
.slideshow .overlay-item .quickmenu li {
    list-style: none;
}
.slideshow .overlay-item .quickmenu li a {
    color: #FFF;
    display: block;
    padding: 8px 20px;
    font-size: 15px;
    font-size: 1.5rem;
    text-decoration: none;
}
#slider {
    padding: 0px;
    margin: 0px
}
#slider li {
    padding: 0px;
    list-style: none;
    position: absolute;
}
#carousel-example-generic {
    height: 550px
}
.carousel-fade .carousel-inner .item {
    -webkit-transition-property: opacity;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .item,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    opacity: 0;
    filter: alpha(opacity=0);
}
.carousel-fade .carousel-inner .active,
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
    opacity: 1;
    filter: alpha(opacity=100);
}
.carousel-fade .carousel-inner .next,
.carousel-fade .carousel-inner .prev,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}
.carousel-fade .carousel-control {
    z-index: 2;
}
html,
body,
.carousel,
.carousel-inner,
.carousel-inner .item {
    height: 100%;
}
.item:nth-child(1) {
    background-image: url('includes/1.jpg');
}
.item:nth-child(2) {
    background-image: url('includes/2.jpg');
}
.item:nth-child(3) {
   background-image: url('includes/3.jpg');
}
@-webkit-keyframes animate-stripes {
    0% {
        background-position: 0 0;
    }
    100% {
        background-position: 60px 0;
    }
}
@-webkit-keyframes in {
    from {
        -webkit-transform: scale(1.3);
    }
    to {
        -webkit-transform: scale(1);
    }
}
@-webkit-keyframes out {
    0% {
        -webkit-transform: scale(1);
    }
    100% {
        -webkit-transform: scale(1.3);
    }
}
@-webkit-keyframes opendoor {
    from {
        -webkit-transform: perspective(1000px) rotateY(90deg);
        -webkit-transform-origin: 0% 50%;
    }
    to {
        -webkit-transform: perspective(1000px) rotateY(0deg);
        -webkit-transform-origin: 0% 50%;
    }
}
@-webkit-keyframes closedoor {
    from {
        opacity:1;
         -webkit-transform-origin: 0% 50%;
    }
    to {
        opacity:0;
        -webkit-transform-origin: 0% 50%;
    }
}
  .quote{
    font-family: "Brush Script MT", cursive;
    size: 20px;
    color:  white;
    font-size: 3em;
  }
   .text{
   font-size: 3em;
   color: white;
   font-family: Impact, Haettenschweiler, "Franklin Gothic Bold", Charcoal, "Helvetica Inserat", "Bitstream Vera Sans Bold", "Arial Black", sans serif;
 }
</style>

<script>
(function($){ 
   $(document).ready(function() {
    $('.information_menu').find('li').hover(function(e) {
         $('.information_menu').find('li').removeClass('active');
        $(this).addClass('active');
        $(".overlay-item").removeClass("active");
        $(".overlay-item").removeClass("inactive");
		$(".overlay-id"+$(this).data("id")).addClass("active").removeClass("inactive");
        
         $(".overlay-id"+$(this).data("id")).prev().addClass("inactive")
    });     
	
    $('.slideshow').children().on('mouseleave',function(e) {
		$(this).removeClass("active");
	});    
    
    $('.carousel').carousel();
   });
})(jQuery);
</script>


<div class="container">
   <div class="row overflownone">
      <div class="col-md-4 information nopaddingleft nopaddingright hidden-sm hidden-xs">
         <h3>ÚAMT</h3>
         <ul class="information_menu">
            <li class="active" data-id="1"><a href="#"><?php echo $lang['HOME_KTO'];?></a></li>
            <li data-id="2"><a href="#"><?php echo $lang['HOME_CIM'];?></a></li>
            <li data-id="3"><a href="#"><?php echo $lang['HOME_VEDEL'];?></a></li>
            <li data-id="4"><a href="#"><?php echo $lang['HOME_MZDA'] ;?></a></li>
 

         </ul>
      </div>
      <div class="col-md-8 nopaddingleft nopaddingright">
         <div class="slideshow">
            <div class="overlay-id1 overlay-item">
               <h3><?php echo $lang['HOME_KTO'];?></h3>
                   <?php echo $lang['HOME_MENU1'] ;?>

            </div>
            <div class="overlay-id2 overlay-item">
              <h3><?php echo $lang['HOME_CIM'];?></h3>
                 <?php echo $lang['HOME_MENU2'] ;?>
            </div>
            <div class="overlay-id3 overlay-item">
               <h3><?php echo $lang['HOME_VEDEL'];?></h3>
                 <?php echo $lang['HOME_MENU3'] ;?>

            </div>
            <div class="overlay-id4 overlay-item">
               <h3><?php echo $lang['HOME_MZDA'] ;?></h3>
                 
                 <?php echo $lang['HOME_MENU4'] ;?>

            </div>
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
               </ol>
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <div class="item active">
                     <div class="carousel-caption">
                             <h1 class="text">
      Ústav automobilovej mechatroniky FEI STU
</h1> 
                     </div>
                  </div>
                  <div class="item">
                     <div class="carousel-caption">
                         <p class="quote">„Neučíme sa pre školu, ale pre život.“ Seneca</p>
                     </div>
                  </div>
                  <div class="item">
                     <div class="carousel-caption">
<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/lFaF0hKrFaM" frameborder="0" allowfullscreen></iframe> -->

<h1 class="text">Jeden z našich výtvorov </h1>
                     </div>
                  </div>
               </div>
               <!-- Controls -->
               <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
   </div>

</div>

<?php
include 'includes/footer.php';
?>