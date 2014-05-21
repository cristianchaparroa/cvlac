$(function(){
	$('.panel-group').hide();
  	$( "#accordion-db").show();

  	$('.url-local').bind('click',function(){
  		var href = $(this).attr('href');
  		var arreglo = href.split('#'); 
  		var div = arreglo[1];

  		$('.panel-group').hide();
  		$( "#accordion-db").show();
  		$( "#accordion-"+div ).show().fadeIn( "slow" );
  	});
});