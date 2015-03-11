<?php 
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
    	<div class="row">
			<form action="index.php/prueba/altaPonentes" method="POST">
	    		<div class="form-group col-md-4">
	    			<label for="nom">Nombre:</label>
	    			<input name="nom" type= "Text" class="form-control" placeholder="Nombre" value="<?php echo set_value('nom')?>">
	    			<div class="error">
	    				<?php echo form_error('nom');?>
	    			</div>
	    			
	    		</div>

	    		<div class="form-group col-md-4">
	    			<label for="correo">Correo:</label>
	    			<input name="correo" type="text" class="form-control" placeholder="Correo"  value="<?php echo set_value('correo')?>">
		    		<div class="error">
		    				<?php echo form_error('correo');?>
		    		</div>
	    		</div>

	    		<div class="form-group col-md-4">
	    			<label for="tel">Telefono</label>
	    			<input type="text" name="tel" class="form-control" placeholder="Telefono"  value="<?php if (isSet($_POST['tel']) ){ echo $_POST['tel']; } ?>">
	    		</div>

	    		<div class="form-group">
	    			<label for="dom">Domicilio</label>
	    			<textarea type="text" name="dom" class="form-control" placeholder="Datos de Domicilio"></textarea> 
	    		</div>
	    		<button type="submint" class="btn btn-default">Enviar</button>
	    	</form>    		
    	</div>
    </div>

<?php
include "/Secciones/pie.php";
?>