<?php 
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
    	<div class="row">
	    	<h1>Alta evento</h1>
	    	<form action="index.php/prueba/altaEventos" method="POST">
	    		<div class="form-group">
	    			<label for="nom">Nombre:</label>
	    			<input type="nom" type= "Text" class="form-control" placeholder="Nombre del Evento">
	    			
	    		</div>

	    		<div class="form-group">
	    			<label for="fecha">Fecha:</label>
	    			<input name="fecha" type="text" class="form-control" placeholder="Fecha">
	    		</div>

	    		<div class="form-group">
	    			<label for="lugar">Lugar</label>
	    			<input type="text" name="lugar" class="form-control" placeholder="Sede">
	    		</div>

	    		<div class="form-group">
	    			<label for="hora">Hora</label>
	    			<input type="text" name="hora" class="form-control" placeholder="hh:mm">
	    		</div>

	    		<div class="form-group">
	    			<label for="costo">Costo</label>
	    			<input type="text" name="costo" class="form-control" placeholder="9999.99">
	    		</div>
	    		<button type="submint" class="btn btn-default">Enviar</button>
	    	</form>
    	</div>

    </div>

<?php
include "/Secciones/pie.php";
?>