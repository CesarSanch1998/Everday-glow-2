<?php

session_start();  // se inicia seccion
$nombre = $_SESSION['nombre'];    // almacena el nombre mandado de la seccion en la variable $nombre para ser usado como referencia en la bienvenida

if (isset($_SESSION['nombre'])) {        // verifica si la variable nombre dentro de $_SESSION posee algun valor dentro

    if ($_SESSION['nivel'] == "cliente") {    // verifica si $_SESSION nivel lo compara y depende el usuario restringe 
        // el no poder usar otra pagina que no sea la propia 
        header("Location: cliente.php");
    } else if ($_SESSION['nivel'] == "entrenador") {      // si el nivel que entra en esta pagina es entrenador lo redirige a su pagina

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EveryDay Glow</title>
    <!-- font icons -->
    <link rel="stylesheet" href="./assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap styles-->
    <link rel="stylesheet" href="./assets/css/info-style.css">
    <link rel="stylesheet" href="./assets/css/user-style.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="icon" href="./assets/imgs/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.umd.js"
        integrity="sha512-gQhCDsnnnUfaRzD8k1L5llCCV6O9HN09zClIzzeJ8OJ9MpGmIlCxm+pdCkqTwqJ4JcjbojFr79rl2F1mzcoLMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="shortcut icon" href="images/logo-login.png" type="image/x-icon">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- primera pagina de navegacion del cliente -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo-dark.png" alt="">
            </a>
            <div class="socials">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-instagram"></i></a>
                <a href="#"><i class="ti-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!-- End primera pagina de navegacion del cliente -->

    <!-- segunda pagina de navegacion del cliente -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light bg-primary sticky-top">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#clase">Mi Clase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#estadistica">Estadisticas</a>
                    </li>
                </ul>
                <div class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="mi_cuenta.php"
                            class="Cerrar-seccion ml-4 btn btn-primary rounded btn-danger mt-1 btn-sm ">Mi cuenta</a>
                        <a href="salir.php"
                            class="Cerrar-seccion ml-4 btn btn-primary rounded btn-warning mt-1 btn-sm ">Cerrar
                            Sesion</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- End segunda pagina de navegacion del cliente -->

    <!-- end of page header -->
    <div class="blog-media">
        <img src="./assets/imgs/Fitcombat-trainer-ui.jpg" alt="" class="w-100-images">

    </div>

    <div class="container">
        <div id="miclass" class="page-container">
            <div class="page-content">
                <div class="card">
                    <!-- <div class="card-header text-center">
                                <h5 class="card-title">FitCombat</h5>
                                <small class="small text-muted">Si tú sabes lo que vales, ve y consigue lo que mereces
                                </small>
                            </div>
                            <div class="card-body">
                                <div class="blog-media">
                                    <img src="./assets/imgs/fitcombat-trainer.jpg" alt="" class="w-100">
                                    <a href="#" class="badge badge-primary">#Miclase</a>
                                </div>
                                <p class="my-3">El fitness es un modo de vivir que te transforma por dentro y por fuera. Es un estilo de vida, un matrimonio entre la buena alimentación (dieta balanceada) y la actividad física (rutina de entrenamiento).
                                    Las personas amantes del mundo fitness, van a disfrutar de una mayor calidad de vida,
                                    mejor salud y van a llegar a una edad avanzada con mucha más fuerza y vitalidad que aquellas personas que siguen una vida sendentaria. Por ello, te recomendamos que te introduzcas en el mundo fitness en cuanto puedas.
                                </p>
                            </div> -->


                </div>
                <hr>



                <!-- Sidebar -->
                <div id="clientes">
                    <center>
                        <h6 class="sidebar-title section-title mb-4 mt-3">Bienvenid@, <?php echo $nombre ?></h6>
                        <img src="assets/imgs/avatar-4.png" alt="" class="circle-100 mb-3 ">
                        <div class="socials mb-3 mt-2">
                            <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                        </div>
                    </center>

                    <p></p>

                    <center>
                        <h5 class="card-title">Datos de Cliente</h5>
                    </center>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">apellido</th>
                                <th scope="col">correo</th>
                            </tr>
                        </thead>
                        <?php
                        include 'conexion.php';
                        $id_entrenador= $_COOKIE['id_entrenador'];
                        $consulta_relacion_cliente_entrenador = mysqli_query($conexion,"SELECT * FROM relacion_cliente_entrenador WHERE id_entrenador='$id_entrenador'");
                        if(mysqli_num_rows($consulta_relacion_cliente_entrenador) > 0){      
                            while($datos_relacion_cliente_entrenador = mysqli_fetch_array($consulta_relacion_cliente_entrenador)){
                        $id_cliente = $datos_relacion_cliente_entrenador['id_cliente'];

                        $consulta_relacion_cliente_usuario = mysqli_query($conexion,"SELECT * FROM clientes WHERE id_cliente='$id_cliente'");
                        $datos_relacion_cliente_usuario = mysqli_fetch_array($consulta_relacion_cliente_usuario);
                        

                        $id_usuario = $datos_relacion_cliente_usuario['relacion_usuario_cliente'];
                        $consulta_datos_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");
                        $datos_usuario = mysqli_fetch_array($consulta_datos_usuario);

                        $consulta_relacion_cliente_datos = mysqli_query($conexion,"SELECT * FROM datos_opcionales_cliente WHERE id_relacion_clientes_datos='$id_cliente'");
                        $datos_relacion_cliente_datos = mysqli_fetch_array($consulta_relacion_cliente_datos);
                        
                               // echo 'Id entrenador:'.$datos_relacion_cliente_entrenador['id_entrenador'].' id cliente: '.$datos_relacion_cliente_entrenador['id_cliente'].' Nombre cliente: '.$datos_relacion_cliente_usuario['nombre_cliente'].' '.$datos_relacion_cliente_usuario['apellido_cliente'].' correo: '.$datos_usuario['correo'];
                        
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row"><img src="./images/avatar-tablas.png" alt=""></th>
                                <td><?php echo $datos_relacion_cliente_usuario['nombre_cliente'];?></td>
                                <td><?php echo $datos_relacion_cliente_usuario['apellido_cliente'];?></td>
                                <td><?php echo $datos_usuario['correo'];?></td>
                                <td> <a href="#modal" id="vermasmodal"
                                        class="tablas ml-4 btn btn-primary rounded btn-warning mt-1 btn-sm "
                                        data-toggle="modal" data-target="#exampleModal">Ver mas</a></td>
                            </tr>
                        </tbody>
                        <?php 
                                    }
                                }
                                ?>
                    </table>

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

        <br><br><br>


        <div id="clase">
            <center>
                <h5 class="card-title">Mi clase</h5>
            </center>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">apellido</th>
                        <th scope="col">correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'conexion.php';
                        $id_entrenador= $_COOKIE['id_entrenador'];
                        $consulta_relacion_cliente_entrenador = mysqli_query($conexion,"SELECT * FROM relacion_cliente_entrenador WHERE id_entrenador='$id_entrenador'");
                        if(mysqli_num_rows($consulta_relacion_cliente_entrenador) > 0){      
                            while($datos_relacion_cliente_entrenador = mysqli_fetch_array($consulta_relacion_cliente_entrenador)){
                        $id_cliente = $datos_relacion_cliente_entrenador['id_cliente'];

                        $consulta_relacion_cliente_usuario = mysqli_query($conexion,"SELECT * FROM clientes WHERE id_cliente='$id_cliente'");
                        $datos_relacion_cliente_usuario = mysqli_fetch_array($consulta_relacion_cliente_usuario);
                        

                        $id_usuario = $datos_relacion_cliente_usuario['relacion_usuario_cliente'];
                        $consulta_datos_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");
                        $datos_usuario = mysqli_fetch_array($consulta_datos_usuario);

                        $consulta_relacion_cliente_datos = mysqli_query($conexion,"SELECT * FROM datos_opcionales_cliente WHERE id_relacion_clientes_datos='$id_cliente'");
                        $datos_relacion_cliente_datos = mysqli_fetch_array($consulta_relacion_cliente_datos);
                        
                               // echo 'Id entrenador:'.$datos_relacion_cliente_entrenador['id_entrenador'].' id cliente: '.$datos_relacion_cliente_entrenador['id_cliente'].' Nombre cliente: '.$datos_relacion_cliente_usuario['nombre_cliente'].' '.$datos_relacion_cliente_usuario['apellido_cliente'].' correo: '.$datos_usuario['correo'];
                        
                        ?>
                    <tr>
                        <th scope="row"><img src="./images/avatar-tablas.png" alt=""></th>
                        <td><?php echo $datos_relacion_cliente_usuario['nombre_cliente'];?></td>
                        <td><?php echo $datos_relacion_cliente_usuario['apellido_cliente'];?></td>
                        <td><?php echo $datos_usuario['correo'];?></td>
                        <td> <a href="#modal" class="tablas ml-4 btn btn-primary rounded btn-warning mt-1 btn-sm "
                                data-toggle="modal" data-target="#exampleModal3">Asignar Actividad</a></td>
                    </tr>
                </tbody>
                <?php 
                            }
                        }
                ?>
            </table>

        </div>
    </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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


                    <div class="container-list">
                        <div class="perfil">
                            <div id="fecha"></div>
                            <h1>Hola $name</h1>
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

    </div>

    <br><br><br><br>

    <div id="estadistica">
        <center>
            <h5 class="card-title">Estadisticas</h5>
        </center>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">correo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                        include 'conexion.php';
                        $id_entrenador= $_COOKIE['id_entrenador'];
                        $consulta_relacion_cliente_entrenador = mysqli_query($conexion,"SELECT * FROM relacion_cliente_entrenador WHERE id_entrenador='$id_entrenador'");
                        if(mysqli_num_rows($consulta_relacion_cliente_entrenador) > 0){      
                            while($datos_relacion_cliente_entrenador = mysqli_fetch_array($consulta_relacion_cliente_entrenador)){
                        $id_cliente = $datos_relacion_cliente_entrenador['id_cliente'];

                        $consulta_relacion_cliente_usuario = mysqli_query($conexion,"SELECT * FROM clientes WHERE id_cliente='$id_cliente'");
                        $datos_relacion_cliente_usuario = mysqli_fetch_array($consulta_relacion_cliente_usuario);
                        

                        $id_usuario = $datos_relacion_cliente_usuario['relacion_usuario_cliente'];
                        $consulta_datos_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");
                        $datos_usuario = mysqli_fetch_array($consulta_datos_usuario);

                        $consulta_relacion_cliente_datos = mysqli_query($conexion,"SELECT * FROM datos_opcionales_cliente WHERE id_relacion_clientes_datos='$id_cliente'");
                        $datos_relacion_cliente_datos = mysqli_fetch_array($consulta_relacion_cliente_datos);
                        
                               // echo 'Id entrenador:'.$datos_relacion_cliente_entrenador['id_entrenador'].' id cliente: '.$datos_relacion_cliente_entrenador['id_cliente'].' Nombre cliente: '.$datos_relacion_cliente_usuario['nombre_cliente'].' '.$datos_relacion_cliente_usuario['apellido_cliente'].' correo: '.$datos_usuario['correo'];
                        
                        ?>
                <tr>
                    <th scope="row"><img src="./images/avatar-tablas.png" alt=""></th>
                    <td><?php echo $datos_relacion_cliente_usuario['nombre_cliente'];?></td>
                    <td><?php echo $datos_relacion_cliente_usuario['apellido_cliente'];?></td>
                    <td><?php echo $datos_usuario['correo'];?></td>
                    <td> <a href="#modal" class="tablas ml-4 btn btn-primary rounded btn-warning mt-1 btn-sm "
                            data-toggle="modal" data-target="#exampleModal2">Ver mas</a></td>
                </tr>
            </tbody>
            <?php 
                            }
                        }
            ?>
        </table>

    </div>
    </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Progreso de Estudiante <br> En mi Clase Segun
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

    </div>








    <!-- End Skill Bar -->
    <div id="info" class="instagram-wrapper mt-5">
        <div class="ig-id">
            <a href="#">Siguenos @EveryDayGlow en Instagram</a>
        </div>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-1.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-2.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 59
                </span>
                <span>
                    <i class="ti-comment"></i> 10
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-3.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 10
                </span>
                <span>
                    <i class="ti-comment"></i> 8
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-4.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 12
                </span>
                <span>
                    <i class="ti-comment"></i> 10
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-5.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 45
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-6.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 30
                </span>
                <span>
                    <i class="ti-comment"></i> 10
                </span>
            </div>
        </a>
    </div>

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-3 text-center text-md-left mb-3 mb-md-0">
                    <img src="assets/imgs/logo-dark.png" alt="" class="logo-footer">
                </div>

            </div>
            <p class="border-top mb-0 mt-4 pt-3 small">&copy; <script>
                document.write(new Date().getFullYear())
                </script>,EveryDayGlow<a href="#" class="text-muted font-weight-bold" target="_blank"></a> All rights
                reserved </p>
        </div>
    </footer>
    <!-- End of Page Footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- JoeBLog js -->
    <script src="assets/js/joeblog.js"></script>

</body>

</html>
<?php
    }
}
?>