<?php

include_once('includes/head.php');
include_once('includes/header.php');
include_once('includes/aside.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Crear Cliente
      <small>Cree un nuevo cliente</small>
    </h1>
  </section>

  <div class="row">
    <div class="col-md-12">

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Llene los datos para crear un nuevo Cliente</h3>
          </div>
          <div class="box-body">

            <form>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationDefault01">Nombre</label>
                  <input type="text" class="form-control" id="validationDefault01" placeholder="Nombre" value="" required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Apellido</label>
                  <input type="text" class="form-control" id="validationDefault02" placeholder="Apellido" value="" required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefaultUsername">Usuario</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Usuario" aria-describedby="inputGroupPrepend2" required>
                  </div>
                </div>
              </div>
              <div class="form-row align-items-center">
                <div class="form-group col-md-4">
                  <label for="inputState">Ciudad</label>
                  <select id="inputState" class="form-control">
                    <option selected>Opcion1</option>
                    <option>Opcion2</option>
                    <option>Opcion3</option>
                  </select>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="validationDefault05">Zip</label>
                  <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                </div>
                <div class="form-group col-md-5">
                  <label for="">Archivo</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Seleccionar archivo</label>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleFormControlTextarea1">Textarea</label>
                  <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                  <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">1</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">2</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                  <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-primary mb-1" type="submit">Enviar</button>
              </div>
            </form>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->

    </div>
  </div>
</div>
<!-- /.content-wrapper -->

<?php

include_once('includes/footer.php');

?>