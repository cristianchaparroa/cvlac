/**
  *cvlacController.js
  */


  $(function()
  {
  	$('.panel-group').hide();
  	$( "#accordion-nombres").show();

  	$('.url-local').bind( 'click',function()
    {
  		var href = $(this).attr('href');
  		var arreglo = href.split('#'); 
  		var div = arreglo[1];

  		$('.panel-group').hide();
  		$( "#accordion-nombres").show();
  		$( "#accordion-"+div ).show().fadeIn( "slow" );
  	});
  });

  /**
  super freek
  I wanna you back
  */