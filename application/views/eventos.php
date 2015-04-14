<?php
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
    	<div class="row">
	    	<div class="col-md-12">
	    		<h1>Alta evento</h1>
	    	</div>
	    	<form action="index.php/prueba/altaEventos" method="POST">
	    		<div class="form-group col-md-6">
	    			<label for="nom">Nombre:</label>
	    			<input name="nom" type= "Text" class="form-control" placeholder="Nombre del Evento">

	    		</div>

	    		<div class="form-group col-md-6">
	    			<label for="fecha">Fecha:</label>
	    			<input name="fecha" type="text" class="form-control" placeholder="Fecha">
	    		</div>

	    		<div class="form-group col-md-12">
	    			<label for="lugar">Lugar</label>
	    			<input type="text" name="lugar" class="form-control" placeholder="Sede">
	    		</div>

	    		<div class="form-group col-md-6">
	    			<label for="hora">Hora</label>
	    			<input type="text" name="hora" class="form-control" placeholder="hh:mm">
	    		</div>

	    		<div class="form-group col-md-6">
	    			<label for="costo">Costo</label>
	    			<input type="text" name="costo" class="form-control" placeholder="9999.99">
	    		</div>
	    		<div class="col-md-1">
	    			<button type="submint" class="btn btn-default ">Enviar</button>
	    		</div>
	    	</form>
    	</div>

    </div>

<?php
include "/Secciones/pie.php";
?>
