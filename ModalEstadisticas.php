<!-- Modal -->
<div class="modal fade" id="modalestadisticas<?php echo $datos_relacion_cliente_datos['id_relacion_clientes_datos']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Progreso de Estudiante de: <br> <?php echo $datos_relacion_cliente_usuario['nombre_cliente']; ?> Segun
                        Categorias</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <canvas id="mychart" width="400" heigth="400"></canvas>

                    <script>
                    var ctx = document.getElementById("mychart").getContext("2d");
                    var mychart = new Chart(ctx, {
                        type: "line",
                        data: {
                            labels: ['Noviembre', 'Diciembre', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                                'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre',
                            ],
                            datasets: [{
                                    label: 'Medida Brazos(cm)',
                                    data: [20, 21, 22.3]
                                },
                                {
                                    label: 'Medida Piernas(cm)',
                                    data: [42, 43, 44]
                                },
                                {
                                    label: 'Medida Cintura(cm)',
                                    data: [75, 74, 72]
                                },
                                {
                                    label: 'Peso kg',
                                    data: [76, 74, 72]
                                }
                            ]
                        }

                    });
                    </script>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>