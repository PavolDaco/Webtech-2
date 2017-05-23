//roles.php
$(document).on('click', '.clickable_roles', function() {  
  if($('.okno_roles').css('display') == 'none'){
   	   $(this).parent().children().css( "display", "block" );    
  }
});
/*
$(document).on('click', '.clickable_profil', function() {
  if($('#okno_profil').css('display') == 'none') {
   	   $(this).parent().children().css( "display", "block" );    
  }
});*/

/////////////////////// CLOSE BUTTONS ///////////////////////////
$(document).on('click', '.closebtn_news', function() {
   $(this).parent().css( "display", "none" );      
});

$(document).on('click', '.closebtn_roles', function() {
   $(this).parent().css( "display", "none" );      
});

$(document).on('click', '.closebtn_profil', function() {
   $(this).parent().css( "display", "none" );      
});

$(document).on('click', '.closebtn_profil_edit', function() {
   $(this).parent().css( "display", "none" );      
});

/////////////////////////////////////////////////////////
$(document).on('click', '#add_news', function() { 
console.log("form2");  
  if($('#form2').css('display') == 'none'){
   	   $('#form2').css( "display", "block" );    
  }
});

$(document).on('click', '#delete_news', function() {   
  if($('#form3').css('display') == 'none'){
   	   $('#form3').css( "display", "block" );    
  }
});
/////////////////////////////////////////////////////////
$(document).on('click', '#btn_edit_profil', function() {   
  if($('#okno_profil_edit').css('display') == 'none'){
       $('#okno_profil_edit').css( "display", "block" );    
  }
});

///////////////////////// users.php //////////////////////
$(document).on('click', '#add_user_btn', function() {   
  if($('#okno_add_user').css('display') == 'none'){
       $('#okno_add_user').css( "display", "block" );
  }
});

$(document).on('click', '#delete_user_btn', function() {   
  if($('#table_users_delete').css('display') == 'none'){
       $('#table_users_delete').css( "display", "block" );    
  }
});

$(document).on('click', '#delete_user_btn2', function() {   
  if($('#delete_user_confirm').css('display') == 'none'){
       $('#delete_user_confirm').css( "display", "block" );    
  }
});

$(document).on('click', '#change_user_btn', function() {   
  if($('#table_users_change').css('display') == 'none'){
       $('#table_users_change').css( "display", "block" );    
  }
});

$(document).on('click', '.clickable_users', function() {  
  if($('.okno_users').css('display') == 'none'){
       $(this).parent().children().css( "display", "block" );    
  }
});

$(document).on('click', '.closebtn_users', function() {  
   $(this).parent().css( "display", "none" );    
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
