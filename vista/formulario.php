<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="../controlador/nuevo.php">
		<label for="producto">Producto:</label>
		<input class="form-control" name="producto" required type="text" id="producto" placeholder="Nombre del producto">

		<label for="referencia">Referencia:</label>
		<textarea required id="referencia" name="referencia" cols="30" rows="5" class="form-control"></textarea>

		<label for="precio">Precio:</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="Precio de venta">


		<label for="peso">Peso:</label>
		<input class="form-control" name="peso" required type="number" id="peso" placeholder="Peso Kg">

		<label for="categoria">Categoria:</label>
		<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria del producto">

		<label for="stock">Stock:</label>
		<input class="form-control" name="stock" required type="number" id="stock" placeholder="Cantidad o existencia">

		<label for="fechacreacion">Fecha de creacion:</label>
		<input class="form-control" name="fechacreacion" required type="date" id="fecha de creacion" >

		<label for="fechaventa">Fecha de ultima venta:</label>
		<input class="form-control" name="fechaventa" required type="datetime-local" id="fecha de ultima venta" >


		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>