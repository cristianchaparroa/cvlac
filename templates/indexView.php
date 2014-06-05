<!DOCTYPE HMTL>
<html>
	<?php $this->head->render(); ?>
	<body>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- NAVBAR-->
		<?php
			echo $this->navbar->render();
		?>
		<!-- JUMBOTRON -->	
		<div class="jumbotron"> 
			
		</div>
		<!--CONTENIDO -->
		<div class="container">
			<div class="row">
			<?php
	        	$this->giira->render();
	        	$this->quinoa->render();
	        	$this->gitud->render();
	        ?>
		    </div>
	    </div>
    	
	</body>
</html>