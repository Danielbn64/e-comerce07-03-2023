<h1 class=title>Crear nueva categoria</h1>
<div class="container spacing">
	<form action="<?=base_url?>categoria/save" method="POST">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" required/>
	
		<input class="buttom" type="submit" value="Guardar" />
	</form>
</div>