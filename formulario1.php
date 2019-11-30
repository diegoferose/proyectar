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
    <div class="col-md-6">

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Llene los datos para crear un nuevo Cliente</h3>
          </div>
          <div class="box-body">

            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Recuerde no compartir sus credenciales</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Textarea</label>
                <textarea class="form-control" name="" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="inputState">Ciudad</label>
                <select id="inputState" class="form-control">
                  <option selected>Opcion1</option>
                  <option>Opcion2</option>
                  <option>Opcion3</option>
                </select>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    Default checkbox
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                  <label class="form-check-label" for="defaultCheck2">
                    Disabled checkbox
                  </label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="grupo" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="grupo" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Default radio
                  </label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
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