<?php 
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
    	<div class="row">
			<form action="index.php/prueba/altaEventos" method="POST">
	    		<div class="form-group col-md-4">
	    			<label for="nom">Nombre:</label>
	    			<input name="nom" type= "Text" class="form-control" placeholder="Nombre">
	    			
	    		</div>

	    		<div class="form-group col-md-4">
	    			<label for="correo">Correo:</label>
	    			<input name="fecha" type="text" class="form-control" placeholder="Correo">
	    		</div>

	    		<div class="form-group col-md-4">
	    			<label for="tel">Telefono</label>
	    			<input type="text" name="lugar" class="form-control" placeholder="Telefono">
	    		</div>

	    		<div class="form-group col-md-4">
	    			<label for="dom">Domicilio</label>
	    			<textarea type="text" name="dom" class="form-control">Datos de Domicilio</textarea> 
	    		</div>
	    		<button type="submint" class="btn btn-default">Enviar</button>
	    	</form>    		
    	</div>
    </div>

<?php
include "/Secciones/pie.php";
?>