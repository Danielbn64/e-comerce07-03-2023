<h1 class="title">Gestionar categorias</h1>
<div class="container">
	<a href="<?=base_url?>categoria/crear" class="link-buttom">
		Nueva
	</a>
	<table>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
		</tr>
		<?php while($cat = $categorias->fetch_object()): ?>
			<tr>
				<td><?=$cat->id;?></td>
				<td><?=$cat->nombre;?></td>
			</tr>
		<?php endwhile; ?>
	</table>
</div>
