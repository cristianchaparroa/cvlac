


<div class="panel-group" id="accordion-db">
    <div class="panel panel-default">
      <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#datosbasicos>">
                Datos básicos
              </a>
            </h4>
      </div>
      
      <div id="datosbasicos" class="panel-collapse collapse in">
          <div class="panel-body">
               <div class="table-responsive">
                  <table class="table table-hover" id="table-datos-basicos">
                        <tr>
                            <td> Año y mes de formación</td>
                            <td> <?php echo $this->fechaFormacion; ?> </td>  
                        </tr>
                        <tr>
                            <td> Departament - ciudad </td>
                            <td> <?php echo $this->ubicacion; ?> </td>  
                        </tr>
                        <tr>
                            <td> Lider  </td>
                            <td> <?php echo $this->lider; ?> </td>  
                        </tr>
                        <tr>
                            <td> ¿La información del grupo esta certificada?  </td>
                            <td> <?php echo $this->informacionCertificada; ?> </td>  
                        </tr>
                        <tr>
                            <td> Página web  </td>
                            <td> <?php echo $this->web; ?> </td>  
                        </tr>
                        <tr>
                            <td> E-mail  </td>
                            <td> <?php echo $this->email; ?> </td>  
                        </tr>
                        <tr>
                            <td> Clasificación  </td>
                            <td> <?php echo $this->clasificacion; ?> </td>  
                        </tr>
                        <tr>
                            <td> Área del conocimiento  </td>
                            <td> <?php echo $this->areaconocimiento; ?> </td>  
                        </tr>
                        <tr>
                            <td> Programa nacional de ciencia y tencología  </td>
                            <td> <?php echo $this->pn; ?> </td>  
                        </tr>
                        <tr>
                            <td> Programa nacional de ciencia y tencología(secundario)  </td>
                            <td> <?php echo $this->pn2; ?> </td>  
                        </tr>
                  </table>
                </div>    
          </div>
      </div>
    </div>
</div>