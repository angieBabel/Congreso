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
					echo "</tr>";		
    			}
    		}
    		 ?>
    	</table>
    	<a href="index.php/prueba/ponentes" class="btn btn-default btn-lg active" role="button"> Agregar Ponente</a>
    </div>

<?php
include "/Secciones/pie.php";
?>