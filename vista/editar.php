<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "../model/db.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="../controlador/guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="producto">Producto:</label>
			<input value="<?php echo $producto->producto ?>" class="form-control" name="producto" required type="text" id="producto" placeholder="Nombre del producto">

			<label for="referencia">Referencia:</label>
			<textarea required id="referencia" name="referencia" cols="30" rows="5" class="form-control"><?php echo $producto->referencia ?></textarea>

			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Precio">

			<label for="peso">Peso:</label>
			<input value="<?php echo $producto->peso ?>" class="form-control" name="peso" required type="number" id="peso" placeholder="Peso">

			<label for="categoria">Categoria:</label>
			<input value="<?php echo $producto->categoria ?>" class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria del producto">

			<label for="stock">Stock:</label>
			<input value="<?php echo $producto->stock ?>" class="form-control" name="stock" required type="number" id="stock" placeholder="Cantidad o existencia">
			

			<label for="fechacreacion">Fecha de creacion:</label>
			<input value="<?php echo $producto->fechacreacion ?>" class="form-control" name="fechacreacion" required type="date" id="fechacreacion" >

			<label for="fechaventa">Fecha de ultima venta:</label>
			<input value="<?php echo $producto->fechaventa ?>" class="form-control" name="fechaventa" required type="datetime-local" id="fechaventa" >

			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>

		</form>
	</div>
<?php include_once "pie.php" ?>
