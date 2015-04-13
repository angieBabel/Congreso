<?php
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
      <table class="table">
        <tr>
          <th>Titulo</th>
          <th>Lugar</th>
          <th>Hora</th>
          <th>Ponente</th>
          <th>Fecha</th>

          <th></th>
        </tr>
        <?php
          if(count($datos) == 0 ){echo "No hay ponenetes registrados";}
          else {
            foreach ($datos as $value) {

            echo "<tr>";
            echo "<td>".$value['nombre']."</td>";
            echo "<td>".$value['lugar']."</td>";
            echo "<td>".$value['hora']."</td>";
            echo "<td>".$value['ponente_idponente']."</td>";
            echo "<td>".$value['fecha']."</td>";
            echo "<td><a class='btn btn-default btn-lg' role='button' href=index.php/prueba/editarConferencia/".$value['idconferencia']."><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>

        <a class='btn btn-default btn-lg' role='button' href=index.php/prueba/borraConferencia/".$value['idconferencia']."><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";

          echo "</tr>";
          }
        }
         ?>
      </table>
      <a href="index.php/prueba/conferencia" class='btn btn-default btn-lg' role="button"> Agregar Ponente</a>
    </div>

<?php
include "/Secciones/pie.php";
?>
