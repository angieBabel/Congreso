<?php
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 >Alta Taller</h1>
        </div>
        <form action="index.php/prueba/grabaTaller" method="POST">
          <div class="form-group col-md-6">
            <label for="nom">Nombre:</label>
            <input name="nom" type= "Text" class="form-control" placeholder="Nombre del Taller">
          </div>

          <div class="form-group col-md-6">
            <label for="instructor">Instructor:</label>
            <select name="instructor" id="" class="form-control" placeholder="Instructor">
                <option value=" " selected="selected">Seleccione un instructor</option>
                <?php
                    foreach ($ponentes as $key => $ponente) { ?>
                    <option value="<?php echo $ponente['idponente']?>">
                        <?php echo $ponente['nombre'] ?>
                    </option>
                  <?php }
                 ?>
            </select>
          </div>

          <div class="form-group col-md-8">
            <label for="evento">Evento:</label>
            <select name="evento" id="" class="form-control" placeholder="evento">
                <option value=" " selected="selected">Seleccione un Evento</option>
                <?php
                    foreach ($ponentes as $key => $ponente) { ?>
                    <option value="<?php echo $ponente['idponente']?>">
                        <?php echo $ponente['nombre'] ?>
                    </option>
                  <?php }
                 ?>
            </select>
          </div>

          <div class="form-group col-md-2">
            <label for="cupo">Cupo</label>
            <input type="text" name="cupo" class="form-control" placeholder="100">
          </div>

          <div class="form-group col-md-2">
            <label for="hora">Hora</label>
            <input type="time" name="hora" class="form-control" placeholder="hh:mm">
          </div>

          <div class="form-group col-md-5">
            <label for="fecha">Fecha:</label>
            <input name="fecha" type="date" class="form-control" placeholder="Fecha">
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
