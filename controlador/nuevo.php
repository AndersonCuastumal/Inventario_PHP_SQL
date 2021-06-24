<?php
#Se verifica que los parametros del producto contengan un valor
if(!isset($_POST["producto"]) || !isset($_POST["referencia"]) || !isset($_POST["precio"]) || !isset($_POST["peso"]) || !isset($_POST["stock"])|| !isset($_POST["categoria"])|| !isset($_POST["fechacreacion"])|| !isset($_POST["fechaventa"])) exit();



include_once "../model/db.php";
$producto = $_POST["producto"];
$referencia = $_POST["referencia"];
$precio = $_POST["precio"];
$peso = $_POST["peso"];
$categoria = $_POST["categoria"];
$stock = $_POST["stock"];
$fechacreacion = $_POST["fechacreacion"];
$fechaventa = $_POST["fechaventa"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(producto, referencia, precio, peso, categoria,stock,fechacreacion,fechaventa) VALUES (?, ?, ?, ?, ?,?,?,?);");
$resultado = $sentencia->execute([$producto, $referencia, $precio, $peso, $categoria,$stock,$fechacreacion,$fechaventa]);

if($resultado === TRUE){
	header("Location: ../vista/listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "../vista/pie.php" ?>