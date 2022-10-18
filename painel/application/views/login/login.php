<?php $this->load->view('elements/header');?>
<section class="container login h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-md-4 border-login">
      <h3 class="text-center">Conecta - Painel</h3>
      <?php if ($error = getError()): // Ao mesmo tempo que defino a variável $error, verifico se retorna algo em "getError" ;) ?>
      <div class="alert alert-<?php echo $error['error_type'] ?> alert-dismissible fade show" role="alert">
        <?php echo $error['error_string'] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php endif; ?>

      <!--<p align="center"><img src="assets/img/logomarca.png" width="400px" height="300px"></p>-->
      <form method="post" action="<?php echo base_url(); ?>login">
        <div class="row">
          <div class="col-md-12 my-2">
            <label for="email">E-mail:</label>
            <input class="form-control" type="text" name="email" id="email">
            <span id="preencha_email" style="display: none; color: red;">O campo email é obrigatório</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 my-2">
            <label for="password">Senha:</label>
            <input class="form-control" type="password" name="password" id="password">
            <span id="preencha_senha" style="display: none; color: red;">O campo senha é obrigatório</span>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex flex-column align-items-end">
            <a href="#" class="float-md-right float-sm-right float-xs-right" data-toggle="modal"
              data-target="#esqueci_senha">Esqueci minha senha</a>
            <input class="btn btn-primary form-control border-0" type="submit" id="entrar" name="entrar"
              value="Entrar">
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="esqueci_senha" tabindex="-1" role="dialog" aria-labelledby="modal_title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title d-inline" id="modal_title">Recuperação senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>login" method="post">
        <div class="modal-body">
          <label for="recovery_email">Digite seu email</label>
          <input class="form-control" type="email" name="email" id="recovery_email">
        </div>
        <div class="modal-footer">
          <button type="submit" name="forgot_password" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $this->load->view('elements/footer');?>