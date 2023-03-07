<header class="header">
	<nav class="navigation">
		<?php $categorias = Utils::showCategorias(); ?>
		<div class="menu">
			<div class="menu-left">
				<div class="logo">
					<a href="<?= base_url ?>">
						Tienda de Online
					</a>
				</div>
				<input type="checkbox" id="deploy-menu" class="categories-menu-check">
				<div class="categories">
					<a class="categories-buttom" href="<?= base_url ?>">Inicio</a>
					<?php while ($cat = $categorias->fetch_object()) : ?>
						<a class="categories-buttom" href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="menu-right">
				<?php if (!isset($_SESSION['identity'])) : ?>
					<div class="user">
						<li><a href="<?= base_url ?>usuario/registro">Registrate aqui</a></li>
						<a href="<?= base_url ?>usuario/ingresar">Entrar a la web</a>
					</div>
				<?php else : ?>
					<div class="user-in">
						<div class="user-panel">
							<h3 class="user-name"><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
							<ul>
								<li><a href="<?= base_url ?>usuario/logout">Cerrar sesión</a></li>
							</ul>
						</div>
						<label class="cart-icon" for="cart">
							<h4>Mi carrito</h4>
							<svg viewBox="0 0 24 24">
								<path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z" />
							</svg>
						</label>
						<input type="checkbox" id="cart" class="cart-menu-check">
						<?php $stats = Utils::statsCarrito(); ?>
						<ul class="cart-menu">
							<li><a href="<?= base_url ?>carrito/index">Productos (<?= $stats['count'] ?>)</a></li>
							<li><a href="<?= base_url ?>carrito/index">Total: <?= $stats['total'] ?> $</a></li>
							<li><a href="<?= base_url ?>carrito/index">Ver el carrito</a></li>
							<li><a href="<?= base_url ?>pedido/mis_pedidos">Mis pedidos</a></li>
						</ul>
					<?php endif; ?>
					</div>
					<div class="menu-admin">
						<?php if (isset($_SESSION['admin'])) : ?>
							<label class="setting-icon" for="panel">
								<h4>Panel de<br>administrador</h4>
							</label>
							<input type="checkbox" id="panel" class="admin-menu-check">
							<div class="admin-menu">
								<ul>
									<li><a href="<?= base_url ?>categoria/index">Gestionar categorias</a></li>
									<li><a href="<?= base_url ?>producto/gestion">Gestionar productos</a></li>
									<li><a href="<?= base_url ?>pedido/gestion">Gestionar pedidos</a></li>
								</ul>
							</div>
						<?php endif; ?>
					</div>
			</div>
		</div>
	</nav>
</header>
<label for="deploy-menu">
	<div class="menu-icon">
		<span></span>
		<span></span>
		<span></span>
	</div>
</label>
<!-- CONTENIDO CENTRAL -->
<div class="central">