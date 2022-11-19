<!-- Modal -->
<div class="modal fade" id="modalasignaractividad<?php echo $datos_relacion_cliente_datos['id_relacion_clientes_datos']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="container-list">
                                <div class="perfil">
                                    <div id="fecha"></div>
                                    <h1>Hola, <?php echo $datos_relacion_cliente_usuario['nombre_cliente']; ?></h1>
                                    <center> <span>Vamos a cumplir tus metas</span></center>
                                </div>

                                <div class="agregar-tarea">
                                    <input type="text" id="input" placeholder="agregar una tarea">
                                    <i id="boton-enter" class="fas fa-plus-circle"></i>
                                </div>


                                <div class="seccion-tarea">
                                    <h3>Estas son tus Actividades a Realizar </h3>
                                    <ul id="lista">

                                    </ul>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>