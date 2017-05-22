$(document).on('click', '.clickable', function() {  
  if($('.okno').css('display') == 'none'){
   	   $(this).parent().children().css( "display", "block" );    
  }
});

$(document).on('click', '.closebtn', function() {  
   $(this).parent().css( "display", "none" );    
});