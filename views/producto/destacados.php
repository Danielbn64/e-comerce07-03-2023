<h1 class="title">Algunos de nuestros productos</h1>
<div class="container">
	<?php while ($product = $productos->fetch_object()) : ?>
		<div class="product">
			<a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
				<?php if ($product->imagen != null) : ?>
					<div class="image-container">
						<img class="img" src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
					<?php else : ?>
						<img src="<?= base_url ?>assets/img/placeholder.png" />
					<?php endif; ?>
					</div>
			</a>
			<div class="product-preview">
				<h2><?= $product->nombre ?></h2>
				<p class="price"><?= $product->precio."$" ?></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Pellentesque egestas iaculis orci varius gravida. Donec ullamcorper
					accumsan ipsum, in pellentesque lorem accumsan sed. Sed pellentesque
					sed nisl quis aliquam. Fusce
				</p>
				<a class="buy-link" href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="button">Comprar</a>
			</div>
		</div>
	<?php endwhile; ?>
</div>