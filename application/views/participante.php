<?php
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 >Participantes</h1>
        </div>
        <form action="index.php/prueba/grabaParticipante" method="POST">
          <div class="form-group col-md-6">
            <label for="nom">Nombre:</label>
            <input name="nom" type= "Text" class="form-control" placeholder="Nombre del Participante">
          </div>

          <div class="form-group col-md-4">
            <label for="rfc">RFC:</label>
            <input name="rfc" type= "Text" class="form-control" placeholder="RFC">
          </div>

          <div class="form-group col-md-10">
            <label for="dom">Domicilio</label>
            <input type="text" name="dom" class="form-control" placeholder="Domicilio">
          </div>

          <div class="form-group col-md-5">
            <label for="correo">Correo</label>
            <input type="text" name="correo" class="form-control" placeholder="correo@example.com">
          </div>

          <div class="form-group col-md-3">
            <label for="tel">Telefono</label>
            <input name="tel" type="text" class="form-control" placeholder="000-000-0000">
          </div>

          <div class="form-group col-md-4">
            <label for="lugar">Lugar</label>
            <input type="text" name="lugar" class="form-control" placeholder="Sede">
          </div>

          <div class="form-group col-md-6">
            <label for="conferencia">Conferencia</label>
            <select name="conferencia" id="" class="form-control" placeholder="Conferencia">
                <option value=" " selected="selected">Seleccione una conferencia</option>
                <?php
                    foreach ($ponentes as $key => $ponente) { ?>
                    <option value="<?php echo $ponente['idponente']?>">
                        <?php echo $ponente['nombre'] ?>
                    </option>
                  <?php }
                 ?>
            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="taller">Taller</label>
            <select name="taller" id="" class="form-control" placeholder="taller">
                <option value=" " selected="selected">Seleccione un taller</option>
                <?php
                    foreach ($ponentes as $key => $ponente) { ?>
                    <option value="<?php echo $ponente['idponente']?>">
                        <?php echo $ponente['nombre'] ?>
                    </option>
                  <?php }
                 ?>
            </select>
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
