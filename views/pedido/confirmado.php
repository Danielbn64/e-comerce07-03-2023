<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>
	<h1 class="title title-movil">Tu pedido se ha confirmado</h1>
		<h3 class="title-movil-three">Tu pedido ha sido realizado exitosamente</h3>
	<br />
	<div class="invoice invoice-movil">
		<?php if (isset($pedido)) : ?>
			<h3>Datos de facturación:</h3>
			Nombre: <?= $identity->nombre ?><br>
			Apellidos: <?= $identity->apellidos ?>
			<h4>Direccion del envio:</h4>
			Provincia: <?= $invoice_info->provincia ?><br>
			localidad: <?= $invoice_info->localidad ?><br>
			Dirección: <?= $invoice_info->direccion ?><br>
			<h4>Datos del pedido:</h4>
			Fecha del pedido: <?= $invoice_info->fecha . " ha las " . $invoice_info->hora ?><br>
			Número de pedido: <?= $invoice_info->id ?> <br />

			Productos:
			<table>
				<tr>
					<th>Nombre</th>
					<th>Unidades</th>
					<th>Precio</th>
				</tr>
				<?php while ($producto = $productos->fetch_object()) : ?>
					<tr>
						<td>
							<a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
						</td>
						<td>
							<?= $producto->unidades ?>
						</td>
						<td>
							<?= $producto->precio ?>
						</td>
					</tr>
				<?php endwhile; ?>
			</table>
			<div>
				Total a pagar: <?= $pedido->coste ?> $ <br />
			</div>
		<?php endif; ?>
		<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete') : ?>
			<h1>Tu pedido NO ha podido procesarse</h1>
		<?php endif; ?>
	</div>