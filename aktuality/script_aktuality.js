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


/// aspon 1 checkbox musi byt zaskrtnuty
$(function(){
    var requiredCheckboxes = $('.options :checkbox[required]');
    requiredCheckboxes.change(function(){
        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
});

// ak SK jazyk, tak SK polia required, ak EN jazyk EN polia required
$(document).on('change', '#form', function() {  
  if($('#sk').is(':checked')) {
     $("#titulokSK").attr("required", true);
     $("#textSK").attr("required", true);
    }
  else {
      $("#titulokSK").attr("required", false);
      $("#textSK").attr("required", false);
  }

  if($('#en').is(':checked')) {
     $("#titulokEN").attr("required", true);
     $("#textEN").attr("required", true);
    }
  else {
      $("#titulokEN").attr("required", false);
      $("#textEN").attr("required", false);
  }
});