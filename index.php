<?php
$conexion = new mysqli("localhost", "root", "", "");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
else {
$resultado = $conexion->query("SELECT * FROM usuarios where id = 1 ");
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
<?php
    echo "<div class='w3-bar w3-black'>";
    echo "<a class='w3-bar-item'>Inicio</a>";
    echo "<a class='w3-bar-item w3-button' href='listasdeusuarios.php'>Jugadores</a>";
    echo "<a class='w3-bar-item w3-button' href='registro.php'>registro</a>";
    echo "</div>";
?>
<br>
			Siguiente fila
      <input type="text" id="fila" value="">
      Siguiente columna
      <input type="text" id="columna" value="">
      <button type="button" name="button" onclick="comprobarMovimiento()">Comprobar movimiento</button>
      <br><br>
      Movimientos realizados
      <input type="text" id="movimientosRealizados1" value="" disabled=”disabled” >
      Num movimientos
      <input type="text" id="numMovimientos" value="" disabled=”disabled”>
      <br><br>
      Mensajes
      <input type="text" id="mensajes" value="" disabled=”disabled”>
     <script type="text/javascript" src="tablero.js">
     </script>
	 </body>
 </html>
