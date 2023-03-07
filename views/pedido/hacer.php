<?php if (isset($_SESSION['identity'])): ?>
	<h1 class="title title-movil" >Hacer pedido</h1>
	<a class="title-a" href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
	<br/>
	<h3 class="title-movil-three">Dirección para el envio:</h3>
	<form action="<?=base_url.'pedido/add'?>" method="POST">
		<label for="provincia">Provincia</label>
		<input type="text" name="provincia" value="<?php echo 'default' ?>" />
		<spam class="disabled"></spam>
		<label for="ciudad">Ciudad</label>
		<input type="text" name="localidad" value="<?php echo 'default' ?>" />
		<spam class="disabled"></spam>
		<label for="direccion">Dirección</label>
		<input type="text" name="direccion" value="<?php echo 'default' ?>" />
		<spam class="disabled"></spam>
		<input class="buttom" type="submit" value="Confirmar pedido" />
	</form>
		
<?php else: ?>
	<h1 class="title">Necesitas estar identificado</h1>
	<p class="empty">Necesitas estar logueado en la web para poder realizar tu pedido.</p>
<?php endif; ?>


