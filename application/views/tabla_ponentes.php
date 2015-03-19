<?php 
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
    	<table class="table">
    		<tr>
    			<th>Nombre</th>
    			<th>Correo</th>
    			<th>Telefono</th>
    			<th>Domicilio</th>
    			<th></th>
    		</tr>
    		<?php 
    			if(count($datos) == 0 ){echo "No hay ponenetes registrados";}
    			else {
    				foreach ($datos as $value) {

    				echo "<tr>";
    				echo "<td>".$value['nombre']."</td>";
					echo "<td>".$value['correo']."</td>";
					echo "<td>".$value['telefono']."</td>";
					echo "<td>".$value['domicilio']."</td>";
					echo "<td><a class='btn btn-default btn-lg' role='button' href=index.php/prueba/editarPonente/".$value['idponente']."><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>

				<a class='btn btn-default btn-lg' role='button' href=index.php/prueba/borraPonente/".$value['idponente']."><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";
					
					echo "</tr>";	
    			}
    		}
    		 ?>
    	</table>
    	<a href="index.php/prueba/ponentes" class='btn btn-default btn-lg' role="button"> Agregar Ponente</a>
    </div>

<?php
include "/Secciones/pie.php";
?>