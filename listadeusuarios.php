<?php
$conexion = new mysqli("localhost", "root", "", "manolo");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}elseif ((!empty($_POST["nombre"])&&(!empty($_POST["apellidos"]))&&(!empty($_POST["telefono"]))&&(!empty($_POST["mail"])))) {$id_equipo=$_POST["id_equipo"];
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$curos=$_POST["curso"];
$puntuacion=$_POST["puntuacion"];
$consulta="INSERT INTO equipo (id_equipo, ciudad, nombre, web) VALUES ('$id_equipo', '$nombre', '$ciudad', '$web')";
$resultado = $conexion->query($consulta);
if($resultado==false){
echo "maaaaaaaaaaaaaaal";
} else {
 echo "bieeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeen";
}
$resultado=$conexion->query("SELECT * FROM manolo");
}
else {
$resultado = $conexion->query("SELECT * FROM usuarios");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">

    <title></title>
        <link rel="stylesheet" href="estilos.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>
    <?php
        echo "<div class='w3-bar w3-black'>";
        echo "<a href='index.php' class='w3-bar-item w3-button'>Inicio</a>";
        echo "<a class='w3-bar-item'>Jugadores</a>";
        echo "</div>";
    ?>

    <div>
  <table>

    <tr>
      <td style="background-color:#498150; text-align:center;"><b>ID</b></td>
      <td style="background-color:#498150;text-align:center;"><b>Nombre</b></td>
      <td style="background-color:#498150; text-align:center;"><b>Apellidos</b></td>
      <td style="background-color:#498150;text-align:center;"><b>Edad</b></td>
      <td style="background-color:#498150; text-align:center;"><b>Curso</b></td>
      <?php foreach ($resultado as $usuario) {
          echo "<tr>";
          echo "<td style='text-align:center'>".$usuario["id"]."</td>";
          echo "<td style='text-align:center'>".$usuario["nombre"]."</td>";
          echo "<td style='text-align:center'>".$usuario["apellidos"]."</td>";
          echo "<td style='text-align:center'>".$usuario["edad"]."</td>";
          echo "<td style='text-align:center'>".$usuario["curso"]."</td>";
          echo "<td style='text-align:center'>".$usuario["puntuacion"]."</td>";
        }
        ?>


    </tr>
  </body>
</html>
