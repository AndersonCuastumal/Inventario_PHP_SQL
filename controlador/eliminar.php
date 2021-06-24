<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "../model/db.php";
$sentencia = $base_de_datos->prepare("DELETE FROM productos WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE){
	header("Location: ../vista/listar.php");
	exit;
}
else echo "Algo salió mal";
?>