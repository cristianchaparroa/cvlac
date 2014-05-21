<!DOCTYPE HMTL>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	

		<link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../../bootstrap/css/bootstrap-theme.min.css">

		<link rel="stylesheet" href="../../css/jquery.tocify.css">
		<link rel="stylesheet" href="../../css/page.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="../../js/jquery-ui-1.9.1.custom.min.js"></script>
		<script src="../../js/jquery.tocify.js"></script>
		<script src="../../js/cvlacController.js"></script>

		<title> <?php echo $this->titulo; ?></title>
	</head>
	<body>
		<script src=" ../../../bootstrap/js/bootstrap.min.js"></script>
		<div class="page-header">
		  <h1> <?php echo $this->titulo; ?> </h1>
		</div>	
		<?php echo $this->navbar->render(); ?>
		<?php echo $this->nombres->render(); ?>
		
		<?php echo $this->formacionAcademica->render(); ?>
		<?php echo $this->formacionComplementaria->render(); ?>
		<?php echo $this->experienciaProfesional->render(); ?>
		<?php echo $this->areasActuacion->render(); ?>
		<?php echo $this->lineasInvestigacion->render(); ?>
		<?php echo $this->reconocimientos->render(); ?>
		<?php echo $this->trabajosDirigidos->render(); ?>
		
		<?php echo $this->edicionesRevisiones->render(); ?>
		<?php echo $this->redesConocimientoEspecializado->render(); ?>
		
		<?php echo $this->articulos->render(); ?>
		<?php echo $this->libros->render(); ?>
		<?php echo $this->capituloslibros->render(); ?>
		<?php echo $this->trabajosEventos->render(); ?>
		<?php echo $this->softwares->render(); ?>
		
		<?php echo $this->proyectos->render(); ?>
		

	</body>
</html>