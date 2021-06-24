<?php

#Salir si alguno de los datos del producto no existe
if(
	!isset($_POST["producto"]) || 
	!isset($_POST["referencia"]) || 
	!isset($_POST["precio"]) || 
	!isset($_POST["peso"]) || 
	!isset($_POST["categoria"]) || 
	!isset($_POST["stock"])|| 
	!isset($_POST["fechacreacion"])|| 
	!isset($_POST["fechaventa"])|| 
	!isset($_POST["id"])
) exit();



include_once "../model/db.php";
$id = $_POST["id"];
$producto = $_POST["producto"];
$referencia = $_POST["referencia"];
$precio = $_POST["precio"];
$peso = $_POST["peso"];
$categoria = $_POST["categoria"];
$stock = $_POST["stock"];
$fechacreacion = $_POST["fechacreacion"];
$fechaventa = $_POST["fechaventa"];

$sentencia = $base_de_datos->prepare("UPDATE productos SET producto = ?, referencia = ?, precio = ?, peso = ?, categoria = ?,stock= ?,fechacreacion = ?,fechaventa = ? WHERE id = ?;");
$resultado = $sentencia->execute([$producto, $referencia, $precio, $peso, $categoria,$stock,$fechacreacion,$fechaventa, $id]);

if($resultado === TRUE){
	header("Location: ../vista/listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>