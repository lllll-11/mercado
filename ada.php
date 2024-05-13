<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventario</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <?php
$suma=0;
$titulo= '';
$usuario = "root";
$contrasena = "";
$servidor = "localhost";
$basededatos = "inventario";
$consulta = "SELECT * FROM mercado.inventario i";
?>
<?php
$conexion = mysqli_connect( $servidor, $usuario, "" );
$conexion = mysqli_connect( $servidor, $usuario, "" );
$db = mysqli_select_db( $conexion, $basededatos );
$db = mysqli_select_db( $conexion, $basededatos );
$resultado = mysqli_query( $conexion, $consulta );
$resultado = mysqli_query( $conexion, $consulta );
echo "<table class='tablax'>";
echo "<tr>";
echo "<th>Código</th>";
echo "<th>Nombre</th>";
echo "<th>Existencias</th>";
echo "<th>Costo</th>";
echo "<th>Precio</th>";

echo "</tr>";
while ($columna = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>" . $columna['codigo'] . "</td>";
    echo "<td>" . $columna['nombre'] . "</td>";
    echo "<td>" . $columna['existencias'] . "</td>";
    echo "<td>" . $columna['costo'] . "</td>";
    echo "<td>" . $columna['precio'] . "</td>";
    echo "</tr>";
    $suma=$suma+ ($columna['precio']);
}
echo "</table>";
echo "<table class='tablax1'>";
echo "<tr>";
echo "<th> total de precio de todo inventario: $suma </th>";
echo "</tr>";
echo "</table>";
mysqli_close($conexion);
?>
</body>
</html>