<?php 
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
    	<div class="row">
			<form action="index.php/prueba/actualizaPonente" method="POST">
			<input name="id" type="hidden" value="<?php echo $ponente['idponente']?>">
	    		<div class="form-group col-md-4">
	    			<label for="nom">Nombre:</label>
	    			<input name="nom" type= "Text" class="form-control" placeholder="Nombre" value="<?php echo $ponente['nombre']?>">
	    			
	    		</div>

	    		<div class="form-group col-md-4">
	    			<label for="correo">Correo:</label>
	    			<input name="correo" type="text" class="form-control" placeholder="Correo"  value="<?php echo $ponente['correo']?>">

	    		</div>

	    		<div class="form-group col-md-4">
	    			<label for="tel">Telefono</label>
	    			<input type="text" name="tel" class="form-control" placeholder="Telefono"  value="<?php echo $ponente['telefono']?>">
	    		</div>

	    		<div class="form-group">
	    			<label for="dom">Domicilio</label>
	    			<textarea type="text" name="dom" class="form-control" placeholder="Datos de Domicilio"><?php echo $ponente['domicilio']?></textarea> 
	    		</div>
	    		<button type="submint" class="btn btn-default">Enviar</button>
	    		<a href="index.php/prueba/showPonentes" class="btn btn-default btn-lg active" role="button">Cancelar</a>
	    	</form>
	    	<?php 
	    		if(isSet($mensaje)) {
	    			echo $mesaje;
	    		}
	    	?>    		
    	</div>
    </div>

<?php
include "/Secciones/pie.php";
?>