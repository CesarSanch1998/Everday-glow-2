<?php 
include 'conexion.php';

session_start();
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$edad = $_POST['edad'];
$patologia = $_POST['patologia'];
$id_usuario = $_SESSION['id_usuario'];

$insertarformulario = "INSERT INTO datos_opcionales_cliente(peso_cliente,altura_cliente,edad_cliente,patologia_cliente,id_relacion_clientes_datos)
 VALUE('$peso','$altura','$edad','$patologia','$id_usuario')";

$ejecutar = mysqli_query($conexion, $insertarformulario);

echo '
<script>
alert("Datos enviados con exito ");
window.location ="./cliente.php";
</script>
';

?>