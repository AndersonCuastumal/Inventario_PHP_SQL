<?php include_once "encabezado.php" ?>
<?php
include_once "../model/db.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Producto</th>
					<th>Referencia</th>
					<th>Precio</th>
					<th>Peso</th>
					<th>Categoria</th>
					<th>Stock</th>
					<th>Fecha creacion</th>
					<th>Fecha ultima venta</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->id ?></td>
					<td><?php echo $producto->producto ?></td>
					<td><?php echo $producto->referencia ?></td>
					<td><?php echo $producto->precio ?></td>
					<td><?php echo $producto->peso?></td>
					<td><?php echo $producto->categoria ?></td>
					<td><?php echo $producto->stock ?></td>
					<td><?php echo $producto->fechacreacion ?></td>
					<td><?php echo $producto->fechaventa ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "../controlador/eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>