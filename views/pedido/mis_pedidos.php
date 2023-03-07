<?php if (isset($gestion)): ?>
	<h1 class="title" >Gestionar pedidos</h1>
	<div class="container">
		<?php else: ?>
			<h1 class="title title-movil" >Mis pedidos</h1>
		<?php endif; ?>
		<table>
			<tr>
				<th>Nº Pedido</th>
				<th>Coste</th>
				<th>Fecha</th>
				<th>Estado</th>
			</tr>
			<?php
			while ($ped = $pedidos->fetch_object()):
				?>
		
				<tr>
					<td>
						<a href="<?= base_url ?>pedido/detalle&id=<?= $ped->id ?>"><?= $ped->id ?></a>
					</td>
					<td>
						<?= $ped->coste ?> $
					</td>
					<td>
						<?= $ped->fecha ?>
					</td>
					<td>
						<?=Utils::showStatus($ped->estado)?>
					</td>
				</tr>
		
			<?php endwhile; ?>
		</table>
	<div class="empty"></div>
	</div>