<!DOCTYPE HMTL>
<html>
	<!-- head -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/jquery-ui-1.9.1.custom.min.js"></script>
		<script src="js/cvlac.js"></script>
		
		
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">

	
		<link rel="stylesheet" href="css/page.css">
		<link rel="stylesheet" href="css/datosbasicos.css">

		<title> <?php echo $this->titulo; ?></title>

	</head>

	<body>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	
		<div class="page-header">
		  <h1> <?php echo $this->titulo; ?></h1>
		</div>	
 		<?php echo $this->navbar->render(); ?>
		<?php $this->datosbasicos->render(); ?>
		<?php $this->instituciones->render(); ?>
		<?php $this->lineasInvestigacion->render(); ?>

		
		<form  id="formulario-integrantes" action="controllers/cvlac/CVLACController.php" >
			<input type="hidden" name="code" id="code" value=""/>
			<?php $this->integrantes->render(); ?>	
		</form>
		 
		<?php $this->produccion->render(); ?>
		<?php $this->memorias->render(); ?> 
		
		<?php $this->librosPublicados->render(); ?> 
		<?php $this->capitulosLibrosPublicados->render(); ?> 
		<?php $this->otrosArticulosPublicados->render(); ?> 
		
		<?php $this->redes->render(); ?>
		<?php $this->softwares->render(); ?>
		<script src="js/page-controller.js"></script>
	</body>
</html>
