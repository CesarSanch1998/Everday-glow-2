<!--ventana para Update--->
<div class="modal fade bd-example-modal-sm" id="editChildresn<?php echo $datos_relacion_cliente_datos['id_relacion_clientes_datos']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #e83e8c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          <center>
            <h3>Otros Datos</h3>
            <!--Datos modal interno de la primera tabla -->
          </center>
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form>
        <input type="hidden" name="id" value="<?php echo $dataCliente['id']; ?>">

        <div class="modal-body" id="cont_modal">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label text-left">Peso:</label>
            <label for="recipient-name" class="col-form-label"><?php echo $datos_relacion_cliente_datos['peso_cliente']; ?></label>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Altura:</label>
            <label for="recipient-name" class="col-form-label"><?php echo $datos_relacion_cliente_datos['altura_cliente']; ?></label>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Edad:</label>
            <label for="recipient-name" class="col-form-label"><?php echo $datos_relacion_cliente_datos['edad_cliente']; ?></label>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Patologia:</label>
            <label for="recipient-name" class="col-form-label"><?php echo $datos_relacion_cliente_datos['patologia_cliente']; ?></label>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->