 $(function(){
 	$('.integrantes').bind( 'click',function(){
 		var code = $(this).attr( 'code');
 		window.location.href = "controllers/cvlac/CVLACController.php?code=" + code;
 		//$("#code").val(code);
    	//$("#formulario-integrantes").submit(); 	 
 	});
 });