<?php if (isset($product)) : ?>
	<h1 class=title><?= $product->nombre ?></h1>
	<div class="container">
		<div class="see-container">
			<div class="image-container-see">
				<?php if ($product->imagen != null) : ?>
					<img class="img-see" src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
				<?php else : ?>
					<img src="<?= base_url ?>assets/img/placeholder.png" />
				<?php endif; ?>
				<div class=buy>
					<a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="button">Comprar</a>
					<p class="price"><?= $product->precio ?>$</p>
				</div>
			</div>
			<div class="data">
				<p class="description"><?= $product->descripcion ?></p>
			</div>
		</div>
	</div>
<?php else : ?>
	<h1></h1>
<?php endif; ?>