<div class="panel-group" id="accordion-integrantes">
    <div class="panel panel-default">
      <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#integrantes>">
                <?php echo $this->titulo; ?>
              </a>
            </h4>
      </div>
      
      <div id="integrantes" class="panel-collapse collapse in">
          <div class="panel-body">  
            <div class="table-responsive" >
              <table class="table table-hover" id="table-integrantes">
                <?php foreach($this->integrantes as $key => $value ): ?>
                <tr>
                  <td>  <a  name="codigo" class="integrantes" code="<?php echo $key; ?> "> <?php echo $value ?> </a></td>  
                </tr>
                <?php endforeach; ?>
              </table>
            </div>
          </div>
      </div>
    </div>
</div>