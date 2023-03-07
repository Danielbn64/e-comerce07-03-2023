<h1 class="title">Carrito de la compra</h1>
<div class="container">
	<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) : ?>
		<table class="table">
			<tr>
				<th>Imagen</th>
				<th>Nombre</th>
				<th>Precio</th>
				<th>Unidades</th>
				<th>Eliminar</th>
			</tr>
			<?php
			foreach ($carrito as $indice => $elemento) :
				$producto = $elemento['producto'];
			?>

				<tr>
					<td>
						<?php if ($producto->imagen != null) : ?>
							<img width="200px" height="auto" src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
						<?php else : ?>
							<img width="200px" height="auto" src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" />
						<?php endif; ?>
					</td>
					<td>
						<a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
					</td>
					<td>
						<?= $producto->precio ?>
					</td>
					<td>
						<?= $elemento['unidades'] ?>
						<div class="updown-unidades">
							<a href="<?= base_url ?>carrito/up&index=<?= $indice ?>" class="button">+</a>
							<a href="<?= base_url ?>carrito/down&index=<?= $indice ?>" class="button">-</a>
						</div>
					</td>
					<td>
						<a href="<?= base_url ?>carrito/delete&index=<?= $indice ?>" class="button button-carrito button-red">Quitar producto</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		<br />
		<div class="options-container">
			<div class="options-wrapper">
				<a href="<?= base_url ?>carrito/delete_all" class="link-buttom danger">Vaciar carrito</a>
				<a class="link-buttom" href="<?= base_url ?>pedido/hacer">Hacer pedido</a>
				<div class="total-carrito">
					<?php $stats = Utils::statsCarrito(); ?>
					<h3>Precio total: <?= $stats['total'] ?> $</h3>
				</div>
			</div>
		</div>
	<?php else : ?>
		<p class="empty">El carrito está vacio, añade algun producto</p>
	<?php endif; ?>
</div>