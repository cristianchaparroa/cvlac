<div class="table-responsive" id="instituciones" data-unique="instituciones" >
  <table class="table table-hover" id="table-instituciones">
  	<tr>
  		<th class="table-title"> <?php echo $this->titulo; ?> </th>
  		<th>  </th>
  	</tr>
	<?php foreach($this->instituciones as $institucion ): ?>
	<tr>
    	<td> <?php echo $institucion ; ?> </td>  
   	</tr>
	<?php endforeach; ?>
	</table>
</div>