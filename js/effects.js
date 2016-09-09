$(document).ready(function() {
	$("#underhide").hide();
  setTimeout(function() {
    $('#hide').fadeOut("fast");
  }, 20000);
  
   $("#underhide").delay(21000).fadeIn("fast");
});

