$(document).on('click', '#add_news', function() {   
  if($('#form2').css('display') == 'none'){
   	   $('#form2').css( "display", "block" );    
  }
  else{
 	   $('#form2').css('display','none');
 }
});

$(document).on('click', '#delete_news', function() {   
  if($('#form3').css('display') == 'none'){
   	   $('#form3').css( "display", "block" );    
  }
  else{
 	   $('#form3').css('display','none');
 }
});

$(document).on('click', '.infookno', function() {   
  if($(this).css('display') == 'none'){
   	   $(this).css( "display", "block" );    
  }
  else{
 	   $(this).css('display','none');
 }
});

$(document).ready(function(){
  var close = document.getElementsByClassName("closebtn");
  var i;

  for (i = 0; i < close.length; i++) {
      close[i].onclick = function(){
          var div = this.parentElement;
          div.style.opacity = "0";
          setTimeout(function(){ div.style.display = "none"; }, 600);
      }
  }
});


$(document).ready(function(){
  $(".svk").hide();
  $("#sk").click(function() {
      if($(this).is(":checked")) {
          $(".svk").show();
      } else {
          $(".svk").hide();
      }
  });  

  $(".eng").hide();
  $("#en").click(function() {
      if($(this).is(":checked")) {
          $(".eng").show();
      } else {
          $(".eng").hide();
      }
  }); 

  $("#form").validate({ignore:":not(:visible)"});
});