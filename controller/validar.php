<?php
include('db.php');
$correo=$_POST['CORREO'];
$contrasenia=$_POST['CONTRASENIA'];



$consulta="SELECT*FROM USUARIO where CORREO='$correo' and CONTRASENIA='$contrasenia'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:../index.html");

}else{
    ?>
    <?php
    include("login.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
