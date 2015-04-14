<?php
include "/Secciones/cabeza.php";
 ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Instructor</h1>
        </div>
        <form action="index.php/prueba/altaInstructor" method="POST">
          <div class="form-group col-md-6">
            <label for="nom">Nombre</label>
            <input name="nom" type= "Text" class="form-control" placeholder="Nombre Completo">

          </div>

          <div class="form-group col-md-6">
            <label for="correo">Correo </label>
            <input name="correo" type="text" class="form-control" placeholder="correo@example.com">
          </div>

          <div class="form-group col-md-12">
            <label for="tel">Telefono</label>
            <input type="tel" name="lugar" class="form-control" placeholder="000-000-0000">
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
