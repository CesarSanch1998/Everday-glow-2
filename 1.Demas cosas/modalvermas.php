<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $datos_relacion_cliente_datos['id_relacion_clientes_datos']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-title">
                            <center>
                                <h3>Otros Datos</h3>
                                <!--Datos modal interno de la primera tabla -->
                            </center>
                        </div>

                        <table class="table-fill">
                            <thead>
                                <tr>
                                    <th class="text-left"></th>
                                    <th class="text-left"></th>
                                </tr>
                            </thead>
                            <tbody class="table-hover">
                                <tr>
                                    <td class="text-left">Peso(kg)</td>
                                    <td id="peso" class="text-left">
                                        <?php echo $datos_relacion_cliente_datos['peso_cliente']; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Altura</td>
                                    <td id="altura" class="text-left">
                                        <?php echo $datos_relacion_cliente_datos['altura_cliente']; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Edad</td>
                                    <td id="edad" class="text-left">
                                        <?php echo $datos_relacion_cliente_datos['edad_cliente']; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left">Patologia</td>
                                    <td id="patologia" class="text-left">
                                        <?php echo $datos_relacion_cliente_datos['patologia_cliente']; ?></td>
                                </tr>

                            </tbody>

                        </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>