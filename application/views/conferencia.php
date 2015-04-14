<?php
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
    	<div class="row">
	    	<div class="col-md-12">
	    		<h1 >Alta evento</h1>
	    	</div>
	    	<form action="index.php/prueba/grabaConferencia" method="POST">
	    		<div class="form-group col-md-6">
	    			<label for="nom">Nombre:</label>
	    			<input name="nom" type= "Text" class="form-control" placeholder="Nombre del Evento">

	    		</div>

	    		<div class="form-group col-md-6">
	    			<label for="fecha">Fecha:</label>
	    			<input name="fecha" type="date" class="form-control" placeholder="Fecha">
	    		</div>

	    		<div class="form-group col-md-6">
	    			<label for="lugar">Lugar</label>
	    			<input type="text" name="lugar" class="form-control" placeholder="Sede">
	    		</div>
	    		<div class="form-group col-md-6">
	    			<label for="ponente">Ponente:</label>
	    			<select name="ponente" id="" class="form-control" placeholder="Ponente">
	    					<option value=" " selected="selected">Seleccione un ponente</option>
	    					<?php
	    							foreach ($ponentes as $key => $ponente) { ?>
	    							<option value="<?php echo $ponente['idponente']?>">
												<?php echo $ponente['nombre'] ?>
	    							</option>
	    						<?php	}
	    					 ?>
	    			</select>
	    		</div>

	    		<div class="form-group col-md-12">
	    			<label for="evento">Evento</label>
	    			<input type="text" name="evento" class="form-control" value="<?php echo $evento['nombre'] ?>" readonly>
	    		</div>
	    		<input type="hidden" name="idevento" value="<?php echo $evento['idevento'] ?>">

	    		<div class="form-group col-md-6">
	    			<label for="hora">Hora</label>
	    			<input type="time" name="hora" class="form-control" placeholder="hh:mm">
	    		</div>

	    		<div class="form-group col-md-6">
	    			<label for="costo">Costo</label>
	    			<input type="text" name="costo" class="form-control" placeholder="9999.99">
	    		</div>
	    		<div class="col-md-11"></div>
	    		<div class="col-md-1">
	    			<button type="button" class="btn btn-default pull-right" onclick="valida_conferencia()">Enviar</button>
	    		</div>

	    	</form>
				<?php
					if(isSet($mensaje)){
						echo "mensaje";
					}
				 ?>

    	</div>

    </div>

<?php
include "/Secciones/pie.php";
?>
